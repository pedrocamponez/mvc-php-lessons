<?php $render('header'); // esse $render significa puxar algum arquivo parcial (no caso, da pasta partials q tem o header) ?>



<a href="<?=$base;?>/new">New User</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>E-MAIL</th>
        <th>ACTIONS</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?=$user['id'];?></td>
            <td><?=$user['name'];?></td>
            <td><?=$user['email'];?></td>
            <td>
                <a href="<?=$base;?>/user/<?=$user['id']?>/edit">
                    <img width="20" src="<?=$base;?>/assets/images/document.png" alt="edit-icon" />
                </a>
                <a href="<?=$base;?>/user/<?=$user['id']?>/delete" onclick="return confirm('Are you sure you want to delete this user: <?=$user['name'];?>?')">
                    <img width="20" src="<?=$base;?>/assets/images/trash.png" alt="trash-icon" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>