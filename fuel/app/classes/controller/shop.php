<?php

class Controller_Shop extends Controller {

    public function action_index() {
        $data = array();
        $data['rows'] = Model_Item::find_all();

        return View::forge('shop/index', $data);
    }
}
