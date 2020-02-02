<?php

class Controller_Admin extends Controller_Template
{
    public function before() {
        parent::before();
        if(!Auth::check())
        {
            Response::redirect('user/login');
        }
    }

	public function action_index()
	{
		$this->template->title = 'Admin &raquo; Index';
		$this->template->content = View::forge('admin/index');
	}

	public function action_view()
	{
		$this->template->title = 'Admin &raquo; View';
		$this->template->content = View::forge('admin/view');
	}

}
