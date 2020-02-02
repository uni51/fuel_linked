<?php

class Controller_Item extends Controller_Template
{

	public function action_index()
	{
		$data["subnav"] = array('index'=> 'active' );
		$this->template->title = 'Item &raquo; Index';
		$this->template->content = View::forge('item/index', $data);
	}

	public function action_view()
	{
		$data["subnav"] = array('view'=> 'active' );
		$this->template->title = 'Item &raquo; View';
		$this->template->content = View::forge('item/view', $data);
	}

}
