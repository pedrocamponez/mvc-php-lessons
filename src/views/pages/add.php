<?php $render('header'); // esse $render significa puxar algum arquivo parcial (no caso, da pasta partials q tem o header) ?>



<h2>Add new user</h2>

<form method="POST" action="<?=$base;?>/new">
    <label>
        Name: <br/>
        <input type="text" name="name" />
    </label><br/><br/>
    <label>
        E-mail: <br/>
        <input type="email" name="email" />
    </label><br/><br/>

    <input type="submit" value="Add new user" />
</form>

<?php $render('footer'); ?>