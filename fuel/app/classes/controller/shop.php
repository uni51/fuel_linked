<?php

class Controller_Shop extends Controller {

    public function action_index() {
        $data['rows'] = Model_Item::find_all();
        // $data['rows'] = Model_Item::find_all(1, 1);
        // $data['row'] = Model_Item::find_by_pk(3);

        return View::forge('shop/index', $data);
    }
}
