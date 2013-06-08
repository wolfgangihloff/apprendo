<?php

class GamesController extends BaseController {

    public function showWelcome()
    {
        return View::make('game');
    }

}