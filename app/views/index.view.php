<?php require('partials/head.php'); ?>

    <h1>Home Page</h1>
    <div class="container">
    <?php foreach ($products as $product) : ?>
  <h1> <?= $product->title; ?> </h1>
   <img class="rounded mx-auto d-block" src="/public/images/<?= $product->image; ?>"> 
  <p> <?= $product->description; ?> </p>
  <?php endforeach; ?>
  </div>
<?php require('partials/footer.php'); ?>
