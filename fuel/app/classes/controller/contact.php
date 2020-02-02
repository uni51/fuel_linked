<?php

class Controller_Contact extends Controller_Template {

    public function action_index() {
        $this->template->title = 'お問い合わせ';
        $this->template->content = View::forge('contact/index');
    }

    public function action_check() {
        $this->template->title = 'お問い合わせ：確認';

        $data = array();
        $data['myname'] = Input::post('myname');
        $data['email'] = Input::post('email');
        $data['gender'] = Input::post('gender');

        $this->template->content = View::forge('contact/check', $data);
    }
}