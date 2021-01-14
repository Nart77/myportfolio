<?php require('partials/head.php'); ?>

    <h1>Login Page</h1>

<?php foreach ($users as $user) : ?>
    <li><?= $user->name; ?></li>
<?php endforeach; ?>

<h1>Here the form to login</h1>

<form method="POST" action="/users">
    <input name="name"></input>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>
