<?php

use Phalcon\Mvc\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        if(count($this->session->get('login')) == 0)
        $this->response->redirect('/login');
        //return '<h1>Hello!!!</h1>';
    }
}