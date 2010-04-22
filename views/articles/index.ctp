<h2>Blog</h2>

<? foreach($articles as $data){
    $article = $data['Article'];
?>
    <h3><?= $article['title'] ?></h3>
    <p><?= nl2br($article['body']) ?></p>
<? } ?>
