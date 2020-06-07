<?php
namespace App\Controller;

class UserController extends AppController
{
 public function index()
    {
        $this->loadComponent('Paginator');
        $user_list = $this->Paginator->paginate($this->User->find());
        $user_list = $this->Paginator->paginate($this->User->find());
        $this->set(compact('user_list'));
    }
 public function add()
    {
     $user = $this->User->newEntity();
        if ($this->request->is('post')) {
            $user = $this->User->patchEntity($user, $this->request->getData());
            if ($this->User->save($user)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add new User.'));
        }
        $this->set('user', $user);
    }

    public function edit($email)
    {
    $user = $this->User->findByEmail($email)->firstOrFail();
    if ($this->request->is(['post', 'put'])) {
        $this->User->patchEntity($user, $this->request->getData());
        if ($this->User->save($user)) {
            $this->Flash->success(__('User information has been updated.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Unable to update user.'));
    }

    $this->set('user', $user);
    }

 public function delete($email = null)
    {
    $this->request->allowMethod(['post', 'delete']);

    $user = $this->User->findByEmail($email)->firstOrFail();
    if ($this->User->delete($user)) {
        $this->Flash->success(__('The {0} article has been deleted.', $user->email));
        return $this->redirect(['action' => 'index']);
        }
    }

    public function view($email = null)
    {
        $user = $this->User->findByEmail($email)->firstOrFail();
        $this->set(compact('user'));
    }
}
