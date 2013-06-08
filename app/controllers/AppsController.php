<?php

class AppsController extends BaseController {

    public function showWelcome()
    {
        return View::make('apps');
    }

}