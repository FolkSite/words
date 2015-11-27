@extends('app')
 
@section('content')
    <h2>Create Poll</h2>
 
    {!! Form::model(new App\Poll, ['route' => ['polls.store']]) !!}
        @include('polls/partials/_form', ['submit_text' => 'Create Poll'])
    {!! Form::close() !!}
@endsection