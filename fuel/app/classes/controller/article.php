<?php

class Controller_Article extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Article &raquo; Index';

        $data = array();
        $data['rows'] = Model_Article::find('all');

		$this->template->content = View::forge('article/index', $data);
	}

}
