@extends('app')
 
@section('content')
    <h2>Edit Poll</h2>
 
    {!! Form::model($poll, ['method' => 'PATCH', 'route' => ['polls.update', $poll->id]]) !!}
        @include('polls/partials/_form', ['submit_text' => 'Edit Poll'])
    {!! Form::close() !!}
@endsection