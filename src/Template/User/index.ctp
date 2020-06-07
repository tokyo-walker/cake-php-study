<!-- File: src/Template/Articles/index.ctp -->

<h1>ユーザー一覧</h1>
<table>
    <tr>
        <th>氏名</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>電話番号</th>
        <th>UPDATE</th>
        <th>DELETE</th>

    </tr>
    <?php foreach ($user_list as $user): ?>
    <tr>
        <td>
            <?= ($user->name) ?>
        </td>
        <td>
            <?php if($user->sex == 0): ?>
              <p> woman </p>
            <?php elseif($user->sex == 1): ?>
              <p> man </p>
            <?php else: ?>
              <p> secret </p>
            <?php endif;?>
        </td>
        <td>
            <?= ($user->email) ?>
        </td>
        <td>
            <?= ($user->phone_number) ?>
        </td>
        <td>
            <?= $this->Html->link("EDIT", ['action' => 'edit', $user->email]) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
            "DELETE",
             ['action' => 'delete', $user->email],
             ['confirm'=>'よろしいですか？']
             )
            ?>
        </td>

    </tr>
    <?php endforeach; ?>
</table>

<?= $this->Html->link('ユーザーの追加', ['action' => 'add']) ?>
