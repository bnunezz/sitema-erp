<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Sobre Controller
 *
 * @property \App\Model\Table\UsersTable $Sobre
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SobreController extends AppController
{
    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }

    

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        $sobre = "Sobre";

        $this->set(compact('Sobre'));
    }
}