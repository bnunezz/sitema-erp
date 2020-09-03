<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class WelcomeController extends AppController{

    public function index(){
       $user  = $this->Auth->user(); //recuperando os valores
       $this->set(compact('user'));//enviando para a view

    }
}