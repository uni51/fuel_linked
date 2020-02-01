<?php

class Controller_Sample extends Controller {

    /**
     * Chpter2-03：ビューを使う
     *
     */
//    public function action_index() {
//        $data['hello'] = 'こんにちは';
//
//        return View::forge('sample/index', $data);
//    }

    /**
     * Chpter2-06：モデルを使う
     *
     */
//    public function action_index() {
//        $user = new Model_User();
//
//        print($user->get_name());
//    }


    /**
     * Chpter3-01：データベースを使う
     *
     */
    public function action_index() {
        $item = Model_Item::forge();

        $data = array();
        $data['item_name'] = 'いちご';
        $data['price'] = 80;
        $item->set($data);
        $item->save();

        print('Saved!');
    }


    /**
     * Chpter2-05：アクションとパラメータ
     *
     */
    public function action_calc($a, $b) {
        $answer = $a * $b;

        print($answer);
    }

}
