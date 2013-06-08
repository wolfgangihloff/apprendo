<?php

class GameController extends BaseController {
    public function action_games(){

        if (isset($gamecounter)){
            // none
        }else{
            $gamecounter=0;
            $gamestatus=1;
        }

        //$user = Auth::user()->id;
        $user=1;
        $name = Input::get('answer');
        $right_answer = Input::get('right-answer');

        if ($name == $right_answer) {
            DB::table('gamescores')->insert(
                array('game_id' => '1', 'user_id' => $user, 'score' => 1)
            );
        } else {
            DB::table('gamescores')->insert(
                array('game_id' => '1', 'user_id' => $user, 'score' => 2)
            );
        }
        $gamecounter++;
        $gamestatus++;
        $games = Game::all();


        return View::make('games')
            ->with('games', $games)
            ->with('gamecounter', $gamecounter)
            ->with('gamestatus', $gamestatus);
    }

}