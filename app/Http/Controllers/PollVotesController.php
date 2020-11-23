<?php

namespace App\Http\Controllers;

use App\Models\Poll;
use App\Models\Choice;

class PollVotesController extends Controller
{
    public function __invoke(Poll $poll)
    {
        $vote_id = (int) request('choice');
        $choice = Choice::findOrFail($vote_id);

        $choice->choice_votes += 1;
        $choice->update(['choice_votes' => $choice->choice_votes]);

        session()->flash('notification.success', 'Merci d\'avoir répondu à ce sondage!');

        return redirect(route('polls.results', $poll));
    }
}
