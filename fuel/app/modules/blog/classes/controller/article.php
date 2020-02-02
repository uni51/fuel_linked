<?php

namespace Blog;

class Controller_Article extends \Controller
{
    public function action_view()
    {
        return \View::forge('blog/view');
    }
}