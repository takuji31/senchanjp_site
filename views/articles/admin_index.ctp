<h2>記事の一覧</h2>
<?= $session->flash() ?>
<?= $html->link('記事を追加','/admin/articles/add') ?>
<table>
    <thead>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Body</td>
        <td>Created</td>
        <td>Updated</td>
    </tr>
    </thead>
    <tbody>
    <? foreach($articles as $data){
        $article = $data['Article'];
    ?>
    <tr>
        <td><?= $article['id'] ?></td>
        <td><?= $article['title'] ?></td>
        <td><?= $article['body'] ?></td>
        <td><?= $article['created'] ?></td>
        <td><?= $article['updated'] ?></td>
    </tr>
    <? }
        if(!count($articles)){
    ?>
    <tr>
        <td colspan="6">No Data</td>
    </tr>
    <? } ?>
    </tbody>
</table>
