<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * EmpresaSobs Controller
 *
 * @property \App\Model\Table\EmpresaSobsTable $EmpresaSobs
 *
 * @method \App\Model\Entity\EmpresaSob[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpresaSobsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Situations']
            
        ];
        $empresaSobs = $this->paginate($this->EmpresaSobs);

        $this->set(compact('empresaSobs'));
    }

    /**
     * View method
     *
     * @param string|null $id Empresa Sob id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresaSob = $this->EmpresaSobs->get($id, [
            'contain' => ['Situations']
        ]);

        $this->set('empresaSob', $empresaSob);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    /*public function add()
    {
        $empresaSob = $this->EmpresaSobs->newEntity();
        if ($this->request->is('post')) {
            $empresaSob = $this->EmpresaSobs->patchEntity($empresaSob, $this->request->getData());
            if ($this->EmpresaSobs->save($empresaSob)) {
                $this->Flash->success(__('The empresa sob has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresa sob could not be saved. Please, try again.'));
        }
        $situations = $this->EmpresaSobs->Situations->find('list', ['limit' => 200]);
        $this->set(compact('empresaSob', 'situations'));
    }*/

    public function add()
    {
        $empresaSob = $this->EmpresaSobs->newEntity();
        if ($this->request->is('post')) {

            $empresaSob = $this->EmpresaSobs->patchEntity($empresaSob, $this->request->getData());
            if(!$empresaSob->errors()){
                $empresaSob->imagem = $this->EmpresaSobs->slugUploadImgRed($this->request->getData()['imagem']['name']);

                $empresaSobTable = TableRegistry::get('EmpresaSobs');
                $ultimoSlide = $empresaSobTable->getUltimoEmpresaSobs();
                $empresaSob->ordem = $ultimoSlide->ordem + 1;


                if ($resultSave = $this->EmpresaSobs->save($empresaSob)) {
                    $id = $resultSave->id; // último id inserido

                    $destino = WWW_ROOT. "files" . DS . "sob_emp" . DS . $id . DS;                
                    $imgUpload = $this->request->getData()['imagem'];
                    $imgUpload['name'] = $empresaSob->imagem;

                    if($this->EmpresaSobs->uploadImgRed($imgUpload, $destino, 500, 400)){
                        $this->Flash->success(__('Sobre empresa cadastrado com sucesso'));
                        return $this->redirect(['controller' => 'EmpresaSobs', 'action' => 'view', $id]);
                    }else{
                        $this->Flash->warning(__('Erro: Sobre empresa cadastrado com sucesso. Erro ao realizar o upload'));
                    }
                }
            }else{
                $this->Flash->error(__('Erro: Sobre empresa não foi cadastrado com sucesso'));
            } 
        }
        $situations = $this->EmpresaSobs->Situations->find('list', ['limit' => 200]);
        $this->set(compact('empresaSob', 'situations'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Empresa Sob id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresaSob = $this->EmpresaSobs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresaSob = $this->EmpresaSobs->patchEntity($empresaSob, $this->request->getData());
            if ($this->EmpresaSobs->save($empresaSob)) {
                $this->Flash->success(__('The empresa sob has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresa sob could not be saved. Please, try again.'));
        }
        $situations = $this->EmpresaSobs->Situations->find('list', ['limit' => 200]);
        $this->set(compact('empresaSob', 'situations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresa Sob id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresaSob = $this->EmpresaSobs->get($id);
        if ($this->EmpresaSobs->delete($empresaSob)) {
            $this->Flash->success(__('The empresa sob has been deleted.'));
        } else {
            $this->Flash->error(__('The empresa sob could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
