<?php require('partials/head.php'); ?>

   
  



<div class="container">
<form class="login" method="POST" action="/login">
    <input class="form-control" type="text" name="username" placeholder="username"/>
    <input class="form-control" type="password" name="password" placeholder="password"/>
    <input class="btn btn-primary form-control" type="submit" value="Login" />
</form>
</div>
<?php require('partials/footer.php'); ?>

