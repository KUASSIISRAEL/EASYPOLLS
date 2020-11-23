@extends('layouts.app')

@section('content')
    <h1>All Polls</h1>

    <ul>
    @foreach($polls as $poll)
        <li>
            <a href="{{ route('polls.show', $poll) }}">
                {{ $poll->question_text }}
            </a>
        </li>
    @endforeach
    </ul>
@endsection
