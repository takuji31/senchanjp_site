<?= $form->create('User') ?>
<table>
  <tr>
    <td><?= $form->input('username') ?></td>
  </tr>
  <tr>
    <td><?= $form->input('password') ?></td>
  </tr>
</table>
<?= $form->end('Add') ?>
