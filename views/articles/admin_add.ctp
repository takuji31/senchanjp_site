<h2>記事の追加</h2>
<?= $session->flash() ?>
<?= $form->create('Article') ?>
<?= $form->input('title') ?>
<?= $form->input('body') ?>
<?= $form->end('投稿'); ?>
