<?php

namespace App\Http\Controllers;

use App\Http\Requests\PollRequest;
use App\Models\Poll;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $today_date = Carbon::now()->toDateString();
        // $today_time = Carbon::now()->toTimeString();
        $today = Carbon::now();
        $polls = auth()->user()->polls->sortByDesc('created_at');
        // if($today->toDateTimeString() <= $polls->start_date .' ' .$polls->start_time){
        //     return "Today is less than yesterday";
        // }
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
        $poll_id = 'BV'.rand(11,99) . rand(000,999);
        $request['poll_id'] = $poll_id;
        auth()->user()->polls()->create($request->all());
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
        // $poll = Poll::find($id);
        // return view('polls.edit_polls',compact('poll'));
        // dd($id);
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
        $poll = Poll::find($id);
        if($poll == true)
        {
            Poll::destroy($id);
            return redirect()->back();
        }
    }
}
