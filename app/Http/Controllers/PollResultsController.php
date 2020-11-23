<?php

namespace App\Http\Controllers;

use App\Models\Poll;

class PollResultsController extends Controller
{
    public function __invoke(Poll $poll)
    {
        return view('polls.results', compact('poll'));
    }
}
