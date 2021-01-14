<?php require('partials/head.php'); ?>

    <h1>Products Page</h1>




<form method="POST" action="/products">
    <input name="title">title</input>
    <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
    <!-- <input name="image">image</input> -->
    <input name="description">Description</input>
    <button type="submit">Submit</button>
</form>
<div>
     <?php foreach ($products as $product) : ?>
  <h1> <?= $product->title; ?> </h1>
   <img src="/public/images/<?= $product->image; ?>"> 
  <p> <?= $product->description; ?> </p>
  <a href="/products/delete?id=<?= $product->id; ?>">delete</a>
<?php endforeach; ?>

</div>

<?php require('partials/footer.php'); ?>