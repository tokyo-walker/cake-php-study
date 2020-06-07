<h1>ユーザーの編集</h1>
<?php
    echo $this->Form->create($user);
    echo $this->Form->control('email');
    echo $this->Form->control('name');
    echo $this->Form->control('sex');
    echo $this->Form->control('phone_number');

    echo $this->Form->button(__('Edit User'));
    echo $this->Form->end();
?>
