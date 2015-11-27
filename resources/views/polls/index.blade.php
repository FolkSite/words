@extends('app')

@section('content')
    <h2>Polls</h2>

    @if ( !$polls->count() )
        You have no polls
    @else
        <ul>
            @foreach( $polls as $poll )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('polls.destroy', $poll->id))) !!}
                        <a href="{{ route('polls.show', $poll->id) }}">{{ $poll->name }}</a>
                        (
                            {!! link_to_route('polls.edit', 'Edit', array($poll->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    {!! link_to_route('polls.create', 'Create Poll') !!}
@endsection