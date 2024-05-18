<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Enrollments Controller
 *
 * @property \App\Model\Table\EnrollmentsTable $Enrollments
 * @method \App\Model\Entity\Enrollment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EnrollmentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $enrollments = $this->paginate($this->Enrollments);

        $this->set(compact('enrollments'));
    }

    /**
     * View method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $enrollment = $this->Enrollments->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('enrollment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $enrollment = $this->Enrollments->newEmptyEntity();
        if ($this->request->is('post')) {
            $enrollment = $this->Enrollments->patchEntity($enrollment, $this->request->getData());
            if ($this->Enrollments->save($enrollment)) {
                $this->Flash->success(__('The enrollment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrollment could not be saved. Please, try again.'));
        }
        $this->set(compact('enrollment'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $enrollment = $this->Enrollments->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $enrollment = $this->Enrollments->patchEntity($enrollment, $this->request->getData());
            if ($this->Enrollments->save($enrollment)) {
                $this->Flash->success(__('The enrollment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The enrollment could not be saved. Please, try again.'));
        }
        $this->set(compact('enrollment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Enrollment id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $enrollment = $this->Enrollments->get($id);
        if ($this->Enrollments->delete($enrollment)) {
            $this->Flash->success(__('The enrollment has been deleted.'));
        } else {
            $this->Flash->error(__('The enrollment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
