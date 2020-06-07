<h1>ユーザーの追加</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('name',['placeholder'=>'Last-name First-name']);
    echo $this->Form->control('email',['placeholder'=>'hogehoge@test.com']);
    echo $this->Form->control('sex',['placeholder'=>'0=woman, 1=man, else= secret']);
    echo $this->Form->control('phone_number',['placeholder'=>'090-○○○○-××××']);
    echo $this->Form->button(__('Add User'));
    echo $this->Form->end();
?>
<?= $this->Html->link('ユーザー一覧に戻る', ['action' => 'index']) ?>
