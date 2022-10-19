<?php $render('header'); // esse $render significa puxar algum arquivo parcial (no caso, da pasta partials q tem o header) ?>



<h2>Edit user</h2>

<form method="POST" action="<?=$base;?>/user/<?=$user['id'];?>/edit">
    <label>
        Name: <br/>
        <input type="text" name="name" value="<?=$user['name'];?>" />
    </label><br/><br/>
    <label>
        E-mail: <br/>
        <input type="email" name="email" value="<?=$user['email'];?>" />
    </label><br/><br/>

    <input type="submit" value="Save changes" />
</form>

<?php $render('footer'); ?>