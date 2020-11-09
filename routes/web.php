<?php

use App\Models\Poll;
use Illuminate\Support\Facades\Cache;

Route::get('/', function() {
    return view('home');
});

Route::post('/polls', function() {
    $poll = new Poll;

    $poll->question_text = request('question_text');
    $poll->choice_1 = request('question_choice_1');
    $poll->choice_2 = request('question_choice_2');
    $poll->choice_3 = request('question_choice_3');

    $poll->save();

    dd('Sondage créé avec succès!');
});

Route::get('/polls/{id}', function($id) {
    $poll = Poll::findOrFail($id);

    return view('polls.show', compact('poll'));
});

Route::post('/polls/{id}/vote', function($id) {
    $poll = Poll::findOrFail($id);

    switch (request('choice'))
    {
        case 'choice_1':
            if (Cache::has('choice_1'))
            {
                Cache::increment('choice_1', 1);
            } else {
                Cache::increment('choice_1', 1);
            } 
            break;
        
        case 'choice_2':
            if (Cache::has('choice_2'))
            {
                Cache::increment('choice_2', 1);
            } else {
                Cache::increment('choice_2', 1);
            }
            break;

        case 'choice_3':
            if (Cache::has('choice_3'))
            {
                Cache::increment('choice_3', 1);
            } else {
                Cache::increment('choice_3', 1);
            }
            break;

        default: dd("Vous n'aviez fait aucun choix!!!");
    }

    dd(Cache::get('choice_1'), Cache::get('choice_2'), Cache::get('choice_3'));
});
