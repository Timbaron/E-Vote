<?php

namespace App\Http\Controllers;

use App\Http\Requests\CastRequest;
use App\Models\Poll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function create(Request $request)
    {
        // return $request;
        $poll = Poll::find($request->poll_code);
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
        return redirect('/poll/cast/new');
    }
}
