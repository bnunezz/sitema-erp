<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Contato Controller
 *
 * @property \App\Model\Table\UsersTable $Contato
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContatoController extends AppController
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
        
        $contatoMsgTable = TableRegistry::get('ContatosMsgs');
        $contatoMsg = $contatoMsgTable->newEntity();

        if($this->request->is('post')){
            $contatoMsg = $contatoMsgTable->patchEntity($contatoMsg, $this->request->getData());

            if($contatoMsgTable->save($contatoMsg)){
                
                $this->Flash->success(__('Mensagem enviada!'));
                return $this->redirect(['controller' => 'Contato','action' => 'index']);

            }else{
                $this->Flash->error(__('Mensagem não foi enviada, tente novamente!'));
            }
        }

        $this->set(compact('contatoMsg'));
    } 
}