@extends('app')
 
@section('content')
    <h2>Create Word for Poll "{{ $poll->name }}"</h2>
 
    {!! Form::model(new App\Word, ['route' => ['polls.words.store', $poll->id]]) !!}
        @include('words/partials/_form', ['submit_text' => 'Create Word'])
    {!! Form::close() !!}
@endsection