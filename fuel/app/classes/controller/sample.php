<?php

class Controller_Sample extends Controller {

    public function action_index() {
        $data['hello'] = 'こんにちは';
        
        return View::forge('sample/index', $data);
    }

}
