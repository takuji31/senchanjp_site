<h2>管理者一覧</h2>

<table>
    <thead>
        <tr>
            <td>id</td>
            <td>username</td>
            <td>name</td>
            <td>activated</td>
            <td>created</td>
            <td>updated</td>
        </tr>
    </thead>
    <tbody>
        <? if(!$users){ ?>
            <tr><td colspan="6">データがありません。</td></tr>
        <?
           }else{
           foreach($users as $data){
               $user = $data['SuperUser'];
        ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['activated'] ?></td>
            <td><?= $user['created'] ?></td>
            <td><?= $user['updated'] ?></td>
        </tr>
        <? }} ?>
    </tbody>
</table>

