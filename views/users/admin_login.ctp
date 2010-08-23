<?= $form->create('User'); ?>
<table>
  <tbody>
    <tr>
      <td><?= $form->input('User.username') ?></td>
    </tr>
    <tr>
      <td><?= $form->input('User.password') ?></td>
    </tr>
  </tbody>
</table>
<?= $form->end('ログイン'); ?>
