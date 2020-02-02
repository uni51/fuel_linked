<?php

class Controller_Contact extends Controller_Template {

    public function action_index() {
        $val = Validation::forge();

        $val->add('myname', 'お名前')
            ->add_rule('required');
        $val->add('email', 'メールアドレス')
            ->add_rule('required')
            ->add_rule('valid_email');

        if (Input::post('submit')) {
           if($val->run()) {
               Response::redirect('contact/check');
           }
        }

        $this->template->title = 'お問い合わせ';
        $data = array();
        $data['val'] = $val;
        $this->template->content = View::forge('contact/index', $data);
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