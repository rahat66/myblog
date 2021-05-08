<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Achievements Controller
 *
 * @property \App\Model\Table\AchievementsTable $Achievements
 * @method \App\Model\Entity\Achievement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AchievementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $achievements = $this->paginate($this->Achievements);

        $this->set(compact('achievements'));
    }

    /**
     * View method
     *
     * @param string|null $id Achievement id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $achievement = $this->Achievements->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('achievement'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $achievement = $this->Achievements->newEmptyEntity();
        if ($this->request->is('post')) {
            $achievement = $this->Achievements->patchEntity($achievement, $this->request->getData());
            //debug($achievement);
           // exit;
            if(!$achievement->getErrors){
                    
           $attachment = $this->request->getData('image_file');
           $name = $attachment->getClientFilename();

           //$type = $attachment->getClientMediaType();
           //$size = $attachment->getSize();
           //$tmpName = $attachment->getStream()->getMetadata('uri');
            list($width, $height) = getimagesize($name);
            echo "width: " . $width . "<br />";
            echo "height: " .  $height;

            exit();
           $targetPath = 'frontEnd'.DS.'images'.DS.$name;
           if($name){
            $attachment->moveTo($targetPath);
           }
           //$error = $attachment->getError();
           $achievement-> image = $targetPath;
           
        
        }


            if ($this->Achievements->save($achievement)) {
                $this->Flash->success(__('The achievement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The achievement could not be saved. Please, try again.'));
        }
        $this->set(compact('achievement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Achievement id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $achievement = $this->Achievements->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $achievement = $this->Achievements->patchEntity($achievement, $this->request->getData());
            if ($this->Achievements->save($achievement)) {
                $this->Flash->success(__('The achievement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The achievement could not be saved. Please, try again.'));
        }
        $this->set(compact('achievement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Achievement id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $achievement = $this->Achievements->get($id);
        if ($this->Achievements->delete($achievement)) {
            $this->Flash->success(__('The achievement has been deleted.'));
        } else {
            $this->Flash->error(__('The achievement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
