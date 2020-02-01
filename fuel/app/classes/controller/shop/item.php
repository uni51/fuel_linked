<?php

class Controller_Shop_Item extends Controller {

    /**
     * Chapter4-2：サブディレクトリ、パラメータとURL
     *
     */
    public function action_index() {
        print('index');
    }

    /**
     * Chapter4-2：サブディレクトリ、パラメータとURL
     *
     */
    public function action_tax($price = 0) {
        print($price * 1.05);
    }
}
