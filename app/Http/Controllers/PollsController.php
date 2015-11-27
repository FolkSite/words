<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;

class PollsController extends Controller {
  
  protected $rules = [
    'name' => ['required', 'max:255'],
  ];

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $polls = Poll::all();
    return view('polls.index', compact('polls'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create() {
    return view('polls.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request) {
    $this->validate($request, $this->rules);
    
    $input = Input::all();
    Poll::create($input);

    return Redirect::route('polls.index')->with('message', 'Poll created');
  }
  
  /**
   * Display the specified resource.
   *
   * @param  \App\Poll $poll
   * @return \Illuminate\Http\Response
   */
  public function show(Poll $poll) {
    return view('polls.show', compact('poll'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Poll $poll
   * @return \Illuminate\Http\Response
   */
  public function edit(Poll $poll) {
    return view('polls.edit', compact('poll'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Poll $poll
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function update(Poll $poll, Request $request) {
    $this->validate($request, $this->rules);
    
    $input = array_except(Input::all(), '_method');
    $poll->update($input);
    
    return Redirect::route('polls.show', $poll)->with('message', 'Poll updated.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Poll $poll
   * @return \Illuminate\Http\Response
   */
  public function destroy(Poll $poll) {
    $poll->delete();
 
    return Redirect::route('polls.index')->with('message', 'Poll deleted.');
  }

}
