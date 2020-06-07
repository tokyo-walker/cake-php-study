<!-- File: src/Template/User/view.ctp -->

<p><?= h($user->name) ?></p>
<p><?= h($user->phone_number) ?></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $user->email]) ?></p>
