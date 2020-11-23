@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('polls.store') }}">
        @csrf

        <div>
            <label for="question_text">Question Text</label><br>
            <textarea id="question_text" name="question_text" autofocus required></textarea>
        </div>

        <div>
            <h3>Choices</h3>
            <input type="text" name="question_choice_1" placeholder="Enter choice" required><br>
            <input type="text" name="question_choice_2" placeholder="Enter choice" required><br>
            <input type="text" name="question_choice_3" placeholder="Enter choice" required>
        </div>

        <br>

        <div>
            <button type="submit" formnovalidate>Create Poll</button>
        </div>
    </form>
@endsection
