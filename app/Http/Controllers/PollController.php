<?php

namespace App\Http\Controllers;

use App\Events\PrivatePollCreatedEvent;
use App\Http\Requests\PollRequest;
use App\Jobs\InviteMailJob;
use App\Mail\InviteMail;
use App\Mail\PrivateMailInvite;
use App\Models\Poll;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::now()->addHour();
        $polls = auth()->user()->polls->sortByDesc('created_at');
        return view('polls.all_polls',compact('polls','today'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('polls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PollRequest $request)
    {
        $poll_id = 'BV'.rand(11,99) . rand(111,999);
        // Convert Candidates to array then to Json
        $candidates = strtolower($request['candidates']);
        $candidates = explode(',',$candidates);
        $candidates = json_encode($candidates);
        $request['candidates'] = $candidates;

        $request['poll_id'] = $poll_id;
        if($request['visibility'] == '0' && !empty($request['allowed_voters'])){
            $request['allowed_voters'] = '';
            $request['send_invite'] = null;
        }
        // Convert Emails to array then to Json
        if(!empty($request['allowed_voters'])){
            $allowed_voters = explode(',',$request['allowed_voters']);
            $allowed_voters_encoded = json_encode($allowed_voters);
            $request['allowed_voters'] = $allowed_voters_encoded;
        }
        // return $request;
        $poll = auth()->user()->polls()->create($request->all());
        if($request['visibility'] == '1')
        {
            dispatch(new InviteMailJob($poll_id,$allowed_voters));
        }
        notify()->success('Poll Created');
        return redirect('polls');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poll = Poll::findOrFail($id);
        $today = Carbon::now()->addHour();
        $reason = "You can't Edit this Poll because this";
        if ($today->toDateTimeString() >= $poll->start_date .' ' .$poll->start_time && $today->toDateTimeString() <= $poll->end_date .' ' .$poll->end_time)
        {
            notify()->error("You can't Edit this Poll this while it's Running");
            return redirect()->back();
        }
        elseif($today->toDateTimeString() >= $poll['end_date'] .' ' .$poll['end_time'])
        {
            notify()->error("You can't Edit this Poll because it has Ended");
            return redirect()->back();
        }
        $poll->candidates = json_decode($poll->candidates);
        $all_candidates = '';
        $all_voters = '';
        // return gettype($poll->candidates);
        foreach($poll->candidates as $poll->candidate)
        {
            $all_candidates .= $poll->candidate . ',';
        }
        // return $all_candidates;
        if($poll->allowed_voters)
        {
            $poll->allowed_voters = json_decode($poll->allowed_voters);
            foreach($poll->allowed_voters as $poll->allowed_voter)
            {
                $all_voters .= $poll->allowed_voter;
            }
        }
        return view('polls.edit_polls',compact('poll','all_candidates','all_voters'));
        // dd($poll);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PollRequest $request, $id)
    {
        $request->candidates = strtolower($request->candidates);
        $request->candidates = explode(',',$request->candidates);
        if(empty($request->candidates[count($request->candidates)-1])){
            unset($request->candidates[count($request->candidates)-1]);
        }
        $request['candidates'] = json_encode($request->candidates);
        if($request->allowed_voters)
        {
            $request->allowed_voters = strtolower($request->allowed_voters);
            $request->allowed_voters = explode(',',$request->allowed_voters);
            if(empty($request->allowed_voters[count($request->allowed_voters)-1])){
                unset($request->allowed_voters[count($request->allowed_voters)-1]);
            }
            $request['allowed_voters'] = json_encode($request->allowed_voters);
        }
        $poll = Poll::find($id);
        if($poll->update($request->all()))
        {
            notify()->info('Poll of ID'.' '. $id .' '.'Succesfully Updated');
            return redirect('polls');
        }
        else
        {
            return redirect('polls');
            notify()->error('Failed to update Poll, try again later');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poll = Poll::find($id);
        if($poll == true)
        {
            Poll::destroy($id);
            Result::where('poll_id',$id)->delete();
            notify()->info('Poll successfully deleted');
            return redirect()->back();
        }
    }
    
}
