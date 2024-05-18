<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * CourseClasses Controller
 *
 * @property \App\Model\Table\CourseClassesTable $CourseClasses
 * @method \App\Model\Entity\CourseClass[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CourseClassesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Courses', 'Teachers'],
        ];
        $courseClasses = $this->paginate($this->CourseClasses);

        $this->set(compact('courseClasses'));
    }

    /**
     * View method
     *
     * @param string|null $id Course Class id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courseClass = $this->CourseClasses->get($id, [
            'contain' => ['Courses', 'Teachers'],
        ]);

        $this->set(compact('courseClass'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courseClass = $this->CourseClasses->newEmptyEntity();
        if ($this->request->is('post')) {
            $courseClass = $this->CourseClasses->patchEntity($courseClass, $this->request->getData());
            if ($this->CourseClasses->save($courseClass)) {
                $this->Flash->success(__('The course class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course class could not be saved. Please, try again.'));
        }
        $courses = $this->CourseClasses->Courses->find('list', ['limit' => 200])->all();
        $teachers = $this->CourseClasses->Teachers->find('list', ['limit' => 200])->all();
        $this->set(compact('courseClass', 'courses', 'teachers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Course Class id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courseClass = $this->CourseClasses->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courseClass = $this->CourseClasses->patchEntity($courseClass, $this->request->getData());
            if ($this->CourseClasses->save($courseClass)) {
                $this->Flash->success(__('The course class has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The course class could not be saved. Please, try again.'));
        }
        $courses = $this->CourseClasses->Courses->find('list', ['limit' => 200])->all();
        $teachers = $this->CourseClasses->Teachers->find('list', ['limit' => 200])->all();
        $this->set(compact('courseClass', 'courses', 'teachers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Course Class id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courseClass = $this->CourseClasses->get($id);
        if ($this->CourseClasses->delete($courseClass)) {
            $this->Flash->success(__('The course class has been deleted.'));
        } else {
            $this->Flash->error(__('The course class could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
