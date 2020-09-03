<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Artigos Controller
 *
 * @property \App\Model\Table\ArtigosTable $Artigos
 *
 * @method \App\Model\Entity\Artigo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArtigosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Robots', 'Users', 'Situations', 'ArtigosTps', 'ArtigosCats', 'Situations.Colors']
        ];
        $artigos = $this->paginate($this->Artigos);

        $this->set(compact('artigos'));
    }

    /**
     * View method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $artigo = $this->Artigos->get($id, [
            'contain' => ['Robots', 'Users', 'Situations', 'ArtigosTps', 'ArtigosCats']
        ]);

        $this->set('artigo', $artigo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $artigo = $this->Artigos->newEntity();
        if ($this->request->is('post')) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('The artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
        }
        $robots = $this->Artigos->Robots->find('list', ['limit' => 200]);
        $users = $this->Artigos->Users->find('list', ['limit' => 200]);
        $situations = $this->Artigos->Situations->find('list', ['limit' => 200]);
        $artigosTps = $this->Artigos->ArtigosTps->find('list', ['limit' => 200]);
        $artigosCats = $this->Artigos->ArtigosCats->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'robots', 'users', 'situations', 'artigosTps', 'artigosCats'));
    }

    /*public function add()
    {
        $artigo = $this->Artigos->newEntity();
        if ($this->request->is('post')) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if (!$artigo->errors()) {
                $artigo->imagem = $this->Artigos->slugUploadImgRed($this->request->getData()['imagem']['name']);

                $artigo->user_id = $this->Auth->user('id');;

                if ($resultSave = $this->Artigos->save($artigo)) {
                    $id = $resultSave->id; // último id inserido

                    $destino = WWW_ROOT . "files" . DS . "artigo" . DS . $id . DS;
                    $imgUpload = $this->request->getData()['imagem'];
                    $imgUpload['name'] = $artigo->imagem;

                    if ($this->Artigos->uploadImgRed($imgUpload, $destino, 500, 400)) {
                        $this->Flash->success(__('Artigo cadastrado com sucesso'));
                        return $this->redirect(['controller' => 'Artigos', 'action' => 'view', $id]);
                    } else {
                        $this->Flash->danger(__('Erro: Imagem não foi cadastrada com sucesso. Erro ao realizar o upload'));
                    }
                } else {
                    $this->Flash->error(__('Erro: Artigo não foi cadastrado com sucesso'));
                }
            } else {
                $this->Flash->error(__('Erro: Artigo não foi cadastrado com sucesso'));
            }
        }
        $robots = $this->Artigos->Robots->find('list', ['limit' => 200]);
        $users = $this->Artigos->Users->find('list', ['limit' => 200]);
        $situations = $this->Artigos->Situations->find('list', ['limit' => 200]);
        $artigosTps = $this->Artigos->ArtigosTps->find('list', ['limit' => 200]);
        $artigosCats = $this->Artigos->ArtigosCats->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'robots', 'users', 'situations', 'artigosTps', 'artigosCats'));
    }*/

    /**
     * Edit method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $artigo = $this->Artigos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $artigo = $this->Artigos->patchEntity($artigo, $this->request->getData());
            if ($this->Artigos->save($artigo)) {
                $this->Flash->success(__('The artigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The artigo could not be saved. Please, try again.'));
        }
        $robots = $this->Artigos->Robots->find('list', ['limit' => 200]);
        $users = $this->Artigos->Users->find('list', ['limit' => 200]);
        $situations = $this->Artigos->Situations->find('list', ['limit' => 200]);
        $artigosTps = $this->Artigos->ArtigosTps->find('list', ['limit' => 200]);
        $artigosCats = $this->Artigos->ArtigosCats->find('list', ['limit' => 200]);
        $this->set(compact('artigo', 'robots', 'users', 'situations', 'artigosTps', 'artigosCats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Artigo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $artigo = $this->Artigos->get($id);
        if ($this->Artigos->delete($artigo)) {
            $this->Flash->success(__('The artigo has been deleted.'));
        } else {
            $this->Flash->error(__('The artigo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
