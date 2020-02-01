<?php

class Controller_Sample extends Controller {

    /**
     * Chapter4-3：HTMLをそのままビューに受け渡す
     *
     * @return mixed
     */
//    public function action_index() {
//        $data = array();
//        $data['html'] = '<p>段落のタグです。<strong>強調します</strong></p>';
//
//        return View::forge('sample/index', $data, false);
//    }

    /**
     * Chapter4-3：HTMLをそのままビューに受け渡す
     *
     * @return mixed
     */
//    public function action_index() {
//        $view = View::forge('sample/index');
//        $view->set('html', '<p>段落です</p>', false); // サニタイズを無効にする
//        $view->set('danger', '<script></script>');
//
//        return $view;
//    }


    public function action_index() {
        return View::forge('sample/index');
    }


}
