<?php

namespace App\Http\Controllers;

use App\Models\Poll;

class PollsController extends Controller
{
    public function index()
    {
        $polls = Poll::all();

        return view('polls.index', compact('polls'));
    }

    public function create()
    {
        return view('polls.create');
    }

    public function show(Poll $poll)
    {
        return view('polls.show', compact('poll'));
    }

    public function store()
    {
        $validate = request()->validate(array(
            'question_text' => array('required', 'string'),
            'question_choice_1' => array('required', 'string'),
            'question_choice_2' => array('required', 'string'),
            'question_choice_3' => array('required', 'string'),
        ));

        $poll = Poll::create(['question_text' => $validate['question_text']]);

        $this->addChoice($poll, $validate['question_choice_1']);
        $this->addChoice($poll, $validate['question_choice_2']);
        $this->addChoice($poll, $validate['question_choice_3']);

        session()->flash('notification.success', 'Sondage créé avec succès!');

        return redirect(route('polls.show', $poll));
    }

    protected function addChoice(Poll $poll, $choice)
    {
        $poll->choices()->create(['choice' => $choice]);
    }
}
