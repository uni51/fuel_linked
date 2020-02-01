<?php

class Model_User extends Model {
    var $name = 'Yamada';

    function get_name() {
        return $this->name;
    }
}
