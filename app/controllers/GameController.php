<?php

class GameController extends BaseController {
    public function action_games()
    {
        $name = Input::get('answer');
        $right_answer = Input::get('$game->name');

        if ($name == $right_answer) {
            // give point to user
        } else {
            // remove points from user
        }

        $games = Game::all();


        return View::make('games')->with('games', $games);
    }

}