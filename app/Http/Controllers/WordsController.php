<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Word;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;

class WordsController extends Controller {
  
  protected $rules = [
    'word' => ['required', 'max:100'],
  ];

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @param \App\Poll $poll
   * @return \Illuminate\Http\Response
   */
  public function create(Poll $poll) {
    return view('words.create', compact('poll'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Poll $poll
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Poll $poll, Request $request) {
    $this->validate($request, $this->rules);
    
    $input = Input::all();
    $input['poll_id'] = $poll->id;
    Word::create($input);

    return Redirect::route('polls.show', $poll->id)->with('message', 'Word created');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id) {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Poll $poll
   * @param  \App\Word $word
   * @return \Illuminate\Http\Response
   */
  public function edit(Poll $poll, Word $word) {
    return view('words.edit', compact('poll', 'word'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Poll $poll
   * @param  \App\Word $word
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function update(Poll $poll, Word $word, Request $request) {
    $this->validate($request, $this->rules);
    
    $input = array_except(Input::all(), '_method');
    $word->update($input);
    
    return Redirect::route('polls.show', $poll)->with('message', 'Word updated.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Poll $poll
   * @param  \App\Word $word
   * @return \Illuminate\Http\Response
   */
  public function destroy(Poll $poll, Word $word) {
    $word->delete();
 
    return Redirect::route('polls.show', $poll)->with('message', 'word deleted.');
  }

}
