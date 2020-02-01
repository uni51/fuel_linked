<?php

class Controller_Sample extends Controller_Template {

    public function action_index() {
        $this->template->title = 'お問い合わせ';
        $data = array();
        $data['myname'] = 'たにぐち';
        $this->template->content = View::forge('sample/index', $data);
    }

    public function action_check() {
        $this->template->title = 'お問い合わせ：確認';
        $this->template->content = View::forge('sample/check');
    }

    public function action_thanks() {
        $this->template->title = 'お問い合わせ：完了';
        $this->template->content = View::forge('sample/thanks');
    }
}
