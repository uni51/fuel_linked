<?php

class Controller_Shop extends Controller {

    /**
     * Chpter3-02：データベースの内容を表示する
     */
//    public function action_index() {
//        $data = array();
//        $data['rows'] = Model_Item::find_all();
//
//        return View::forge('shop/index', $data);
//    }

    /**
     * Chpter3-03：フォームとの連携
     *
     * @return mixed
     */
    public function action_index() {
        return View::forge('shop/index');
    }

    /**
     * Chpter3-03：フォームとの連携
     *
     */
    public function action_save() {
        $item = Model_Item::forge();

        $data = array();
        $data['item_name'] = Input::post('item_name');
        $data['price'] = Input::post('price');
        $item->set($data);
        $item->save();

        print('Saved!!');
    }

}
