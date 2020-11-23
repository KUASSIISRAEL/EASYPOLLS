@extends('layouts.app')

@section('content')
    <h1><a href="{{ route('polls.show', $poll) }}">Poll #{{ $poll->id }}</a></h1>

    <h2>{{ $poll->question_text }}</h2>

    <ul>
        <li>{{ $poll->choice_1 }}: <b>{{ $poll->choice_1_votes }} votes</b></li>
        <li>{{ $poll->choice_2 }}: <b>{{ $poll->choice_2_votes }} votes</b></li>
        <li>{{ $poll->choice_3 }}: <b>{{ $poll->choice_3_votes }} votes</b></li>
    </ul>
@endsection
