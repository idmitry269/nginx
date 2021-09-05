<?php

namespace application\controllers;


use application\core\Controller;

class PostsController extends Controller
{
    public function allAction()
    {
        $this->view->render('Новости');
    }
}