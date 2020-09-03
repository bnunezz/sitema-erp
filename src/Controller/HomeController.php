<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Home
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
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
        
        $carouselTable = TableRegistry::get('Carousels');
        $carousels = $carouselTable->getListarSlidesHome();

        $servicosTable = TableRegistry::get('Servicos');
        $servicos = $servicosTable->getListarServicoHome('1');

        $depoimentosTable = TableRegistry::get('Depoimentos');
        $depoimentos = $depoimentosTable->getListarDepHome('1');
        

        $this->set(compact('carousels', 'servicos', 'depoimentos'));
    }
}