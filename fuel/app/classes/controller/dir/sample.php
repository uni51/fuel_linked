<?php

class Controller_Dir_Sample extends Controller {

    /**
     * Chapter4-1：ビューへの値の受け渡し
     *
     * @return mixed
     */
//    public function action_index() {
//        $data = array();
//        $data['name'] = 'たにぐち';
//
//        return View::forge('sample/index', $data);
//    }


    /**
     * Chapter4-1：ビューへの値の受け渡し
     *
     * @return mixed
     */
//    public function action_index() {
//        $view = View::forge('sample/index');
//        $view->set('name', 'たきぐち');
//        return $view;
//    }


    public function action_index() {
        print('index');
    }

    public function action_save() {
        print('save');
    }
}
