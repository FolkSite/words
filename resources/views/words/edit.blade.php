@extends('app')
 
@section('content')
    <h2>Edit Word "{{ $word->word }}" for Poll "{{ $poll->name }}"</h2>
 
    {!! Form::model($word, ['method' => 'PATCH', 'route' => ['polls.words.update', $poll->id, $word->id]]) !!}
        @include('words/partials/_form', ['submit_text' => 'Edit Word'])
    {!! Form::close() !!}
@endsection