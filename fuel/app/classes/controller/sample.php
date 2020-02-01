<?php

class Controller_Sample extends Controller {

//    public function action_index() {
//        $data['hello'] = 'こんにちは';
//
//        return View::forge('sample/index', $data);
//    }

//    public function action_index() {
//        $user = new Model_User();
//
//        print($user->get_name());
//    }

    public function action_index() {
        $item = Model_Item::forge();

        $data = array();
        $data['item_name'] = 'いちご';
        $data['price'] = 80;
        $item->set($data);
        $item->save();

        print('Saved!');
    }

    public function action_calc($a, $b) {
        $answer = $a * $b;

        print($answer);
    }

}
