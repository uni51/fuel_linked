<?php

class Controller_Contact extends Controller {

    public function action_index() {
        return View::forge('contact/index');
    }
}