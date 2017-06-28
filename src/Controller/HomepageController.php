<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Homepage Controller
 *
 *
 * @method \App\Model\Entity\Homepage[] paginate($object = null, array $settings = [])
 */
class HomepageController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $homepage = $this->paginate($this->Homepage);

        $this->set(compact('homepage'));
        $this->set('_serialize', ['homepage']);
    }

    /**
     * View method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homepage = $this->Homepage->get($id, [
            'contain' => []
        ]);

        $this->set('homepage', $homepage);
        $this->set('_serialize', ['homepage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homepage = $this->Homepage->newEntity();
        if ($this->request->is('post')) {
            $homepage = $this->Homepage->patchEntity($homepage, $this->request->getData());
            if ($this->Homepage->save($homepage)) {
                $this->Flash->success(__('The homepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homepage could not be saved. Please, try again.'));
        }
        $this->set(compact('homepage'));
        $this->set('_serialize', ['homepage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homepage = $this->Homepage->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homepage = $this->Homepage->patchEntity($homepage, $this->request->getData());
            if ($this->Homepage->save($homepage)) {
                $this->Flash->success(__('The homepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homepage could not be saved. Please, try again.'));
        }
        $this->set(compact('homepage'));
        $this->set('_serialize', ['homepage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homepage = $this->Homepage->get($id);
        if ($this->Homepage->delete($homepage)) {
            $this->Flash->success(__('The homepage has been deleted.'));
        } else {
            $this->Flash->error(__('The homepage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
