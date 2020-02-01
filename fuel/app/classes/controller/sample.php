<?php

class Controller_Sample extends Controller {

//    public function action_index() {
//        $data = array();
//        $data['name'] = 'たにぐち';
//
//        return View::forge('sample/index', $data);
//    }


    public function action_index() {
        $view = View::forge('sample/index');
        $view->set('name', 'たきぐち');
        return $view;
    }
}
