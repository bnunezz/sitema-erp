<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function beforeFilter(\Cake\Event\Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['cadastrar', 'logout']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 40
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
    }


    public function perfil()
    {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id); //pegar do usuario que esta logado

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('Usuário não foi cadastrado, tente novamente!'));
        }
        $this->set(compact('user'));
    }

    public function cadastrar()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Cadastro Realizado!'));

                return $this->redirect(['controller' => 'Users', 'action' => 'login']);
            }
            $this->Flash->danger(__('Não foi possivel efetuar o cadastro, tente novamente!'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário salvo!'));

                return $this->redirect(['controller' => 'Users', 'action' => 'view', $id]);
            }
            $this->Flash->danger(__('Usuário não foi salvo, tente novamente!'));
        }
        $this->set(compact('user'));
    }

    /*public function alterarFotoUsuario($id = null)
    {
        $user = $this->Users->get($id);
        $imagemAntiga = $user->imagem;
        

        if ($this->request->is(['patch', 'post', 'put'])){
            $user = $this->Users->newEntity();
            $user->imagem = $this->Users->slugUploadImgRed($this->request->getData()['imagem']['name']);
            $user->id = $id;
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)){
                $destino = WWW_ROOT . "files" . DS . "user" . DS . $id . DS;
                $imgUpload = $this->request->getData()['imagem'];
                $imgUpload['name'] = $user->imagem;
                
                if($user->imagem = $this->Users->uploadImgRed($imgUpload, $destino, 150, 150)){
                    if (($imagemAntiga !== null) && ($imagemAntiga !== $user->imagem)) {
                        unlink($destino . $imagemAntiga);
                    }
                    $this->Flash->success(__('Imagem editada!'));
                    return $this->redirect(['controller' => 'Users', 'action' => 'view', $id]);
                }else{
                    $user->imagem = $imagemAntiga;
                    $this->Users->save($user);
                    $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));

                }

            }else{
                $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));

            }
        }
        $this->set(compact('user'));
    }*/

    public function alterarFotoUsuario($id = null)
    {
        $user = $this->Users->get($id);
        $imagemAntiga = $user->imagem;


        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->newEntity();
            $user->imagem = $this->Users->slugSingleUpload($this->request->getData()['imagem']['name']);
            $user->id = $id;
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $destino = WWW_ROOT . "files" . DS . "user" . DS . $id . DS;
                $imgUpload = $this->request->getData()['imagem'];
                $imgUpload['name'] = $user->imagem;

                if ($user->imagem = $this->Users->singleUpload($imgUpload, $destino)) {
                    //if (($imagemAntiga !== null) && ($imagemAntiga !== $user->imagem)) {
                    //    unlink($destino . $imagemAntiga);
                    //}
                    $this->Users->deleteFile($destino, $imagemAntiga, $user->imagem);
                    $this->Flash->success(__('Imagem editada!'));
                    return $this->redirect(['controller' => 'Users', 'action' => 'view', $id]);
                } else {
                    $user->imagem = $imagemAntiga;
                    $this->Users->save($user);
                    $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));
                }
            } else {
                $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));
            }
        }
        $this->set(compact('user'));
    }
    public function editSenha($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Senha do Usuário editada!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('Senha do usuário não foi editada, tente novamente!'));
        }
        $this->set(compact('user'));
    }



    public function editPerfil()
    {
        $user_id = $this->Auth->user('id'); //recuperando do user logado
        $user = $this->Users->get($user_id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Perfil salvo!'));

                return $this->redirect(['controller' => 'users', 'action' => 'perfil']);
            }
            $this->Flash->danger(__('Perfil não foi salvo, tente novamente!'));
        }

        $this->set(compact('user')); //enviando para a view os dados da variavel user

    }


    public function editSenhaPerfil()
    {
        $user_id = $this->Auth->user('id'); //recuperando do user logado
        $user = $this->Users->get($user_id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {

                $this->Flash->success(__('Senha Editada!'));

                return $this->redirect(['controller' => 'users', 'action' => 'perfil']);
            }
            $this->Flash->danger(__('Senha não foi editada, tente novamente!'));
        }

        $this->set(compact('user')); //enviando para a view os dados da variavel user

    }


    /*public function alterarFotoPerfil()
    {
        $user_id = $this->Auth->user('id'); //recuperando do user logado
        $user = $this->Users->get($user_id);
        $imagemAntiga = $user->imagem;
        

        if ($this->request->is(['patch', 'post', 'put'])){
            $user = $this->Users->newEntity();
            $user->imagem = $this->Users->slugSingleUpload($this->request->getData()['imagem']['name']);
            $user->id = $user_id;
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)){
                $destino = WWW_ROOT . "files" . DS . "user" . DS . $user_id . DS;
                $imgUpload = $this->request->getData()['imagem'];
                $imgUpload['name'] = $user->imagem;
                
                if($user->imagem = $this->Users->singleUpload($imgUpload, $destino)){
                    if (($imagemAntiga !== null) && ($imagemAntiga !== $user->imagem)) {
                        unlink($destino . $imagemAntiga);
                    }
                    $this->Flash->success(__('Imagem editada!'));
                    return $this->redirect(['controller' => 'Users', 'action' => 'perfil']);
                }else{
                    $user->imagem = $imagemAntiga;
                    $this->Users->save($user);
                    $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));

                }

            }else{
                $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));

            }
        }

        $this->set(compact('user'));
    }*/


    public function alterarFotoPerfil()
    {
        $user_id = $this->Auth->user('id'); //recuperando do user logado
        $user = $this->Users->get($user_id);
        $imagemAntiga = $user->imagem;


        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->newEntity();
            $user->imagem = $this->Users->slugSingleUpload($this->request->getData()['imagem']['name']);
            $user->id = $user_id;
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $destino = WWW_ROOT . "files" . DS . "user" . DS . $user_id . DS;
                $imgUpload = $this->request->getData()['imagem'];
                $imgUpload['name'] = $user->imagem;

                if ($user->imagem = $this->Users->singleUpload($imgUpload, $destino, 150, 150)) {

                    $this->Users->deleteFile($destino, $imagemAntiga, $user->imagem);
                    $this->Flash->success(__('Imagem editada!'));
                    return $this->redirect(['controller' => 'Users', 'action' => 'perfil']);
                } else {
                    $user->imagem = $imagemAntiga;
                    $this->Users->save($user);
                    $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));
                }
            } else {
                $this->Flash->danger(__('Imagem não foi editada, tente novamente!'));
            }
        }

        $this->set(compact('user'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $destino = WWW_ROOT . "files" . DS . "user" . DS . $user->id . DS;
        $this->Users->deleteArq($destino);

        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário apagado!'));
        } else {
            $this->Flash->danger(__('Usuário não foi apagado, tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->danger(__('Usuário ou Senha incorretos, tente novamente!'));
            }
        }
    }
    public function logout()
    {

        $this->Flash->success('Deslogado com sucesso!');
        return $this->redirect($this->Auth->logout());
    }
}
