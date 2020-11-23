@extends('layouts.app')

@section('content')
    <h1>Poll #{{ $poll->id }}</h1>

    <h2>{{ $poll->question_text }}</h2>

    <form method="POST" action="{{ route('polls.vote', $poll) }}">
        @csrf


        @foreach($poll->choices as $item)
            <label for="choice_1">
                <input type="radio" id="choice" name="choice" value="{{ $item->id }}"> {{ $item->choice }}
            </label><br>
        @endforeach

        <br>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
