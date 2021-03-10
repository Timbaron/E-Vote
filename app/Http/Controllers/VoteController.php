<?php

namespace App\Http\Controllers;

use App\Http\Requests\CastRequest;
use App\Models\Poll;
use App\Models\Result;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;
class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('polls.cast_view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  create(Request $request)
    {
        $poll = Poll::findOrFail($request->poll_code);
        $today = Carbon::now()->addHour();
        $poll['status'] = '';
        $results = DB::select('select * from results where poll_id = ? and user_id = ?', [$poll->poll_id,Auth::user()->id]);
        if($poll == [])
        {
            notify()->error('Poll not found');
            return redirect()->back();
        }
        $poll->candidates = json_decode($poll->candidates);
        if(!empty($poll->allowed_voters)){
            $poll->allowed_voters = json_decode($poll->allowed_voters);
            if(!in_array(Auth::user()->email,$poll->allowed_voters,true))
            {
                notify()->error('You are not allowed to take place in the poll');
                return redirect()->back();
            }
        }
        if ($today->toDateTimeString() < $poll['start_date'] .' ' .$poll['start_time'] )
        {
            notify()->info('This Poll has not started');
            return redirect()->back();
        }
        elseif($today->toDateTimeString() >= $poll['end_date'] .' ' .$poll['end_time'])
        {
            notify()->info('This Poll has been Concluded');
            return redirect()->back();
        }
        if($results)
        {
            notify()->error('You have already completed this poll');
            return redirect()->back();
        }
        return view('polls.cast',compact('poll'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cast(Request $request)
    {
        auth()->user()->cast()->create($request->all());
        smilify('success','Thank you!!! You Candidate has been submitted!!');
        return redirect(route('poll.cast.new'));
    }
    public function result($id)
    {
        $poll_detail = Poll::where('id',$id)->get();
        if($poll_detail == false){
            notify()->error('Unknown error was encountered!!! Try again later');
            return redirect('/polls');
        }
        $poll_detail = $poll_detail[0];
        // dd($poll_detail['user_id']);
        if($poll_detail['user_id'] != auth()->user()->id)
        {
            return redirect()->back();
        }

        $voted_candidates = [];
        $results = Result::where('poll_id',$poll_detail['poll_id'])->get();
        foreach($results as $result)
        {
            $voted_candidates[] = $result->candidate;
        }
        $all_candidates = json_decode($poll_detail['candidates']);
        return view('polls.result',compact('voted_candidates','all_candidates','poll_detail','results'));
    }
}
