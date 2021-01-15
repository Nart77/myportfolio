<?php require('partials/head.php'); ?>

    <h1>Home Page</h1>
    <?php foreach ($products as $product) : ?>
  <h1> <?= $product->title; ?> </h1>
   <img src="/public/images/<?= $product->image; ?>"> 
  <p> <?= $product->description; ?> </p>
  <?php endforeach; ?>
<?php require('partials/footer.php'); ?>
