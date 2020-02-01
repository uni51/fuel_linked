<?php

class Controller_Shop extends Controller {

    public function action_index() {
        // $data['rows'] = Model_Item::find_all();
        // $data['rows'] = Model_Item::find_all(1, 1); // limit, offset
        // $data['row'] = Model_Item::find_by_pk(3);

        // $data['rows'] = Model_Item::find_by('price', '100', '<=' );
         $data['row'] = Model_Item::find_one_by('item_name', 'バナナ', '=' );

        return View::forge('shop/index', $data);
    }

    public function action_save() {
        $item = Model_Item::forge();

        $data = array();
        $data['item_name'] = '柿';
        $data['price'] = 90;

        $item->set($data);
        $item->save();
    }

    public function action_delete() {
        $item = Model_Item::find_by_pk(9);
        $item->delete();
    }

    public function action_update() {
        $item = Model_Item::find_by_pk(1);
        $item['price'] = 100;
        $item->save();
    }
}
