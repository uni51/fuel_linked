<?php

class Controller_Shop_Item extends Controller {

    public function action_index() {
        print('index');
    }

    public function action_tax($price = 0) {
        print($price * 1.05);
    }
}
