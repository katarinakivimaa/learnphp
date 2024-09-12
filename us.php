<?php
$posts = [
  ['title'=> 'Some UStitties 2', 'body' => 'Some boy 2'],
  ['title'=> 'Some UStitties 3', 'body' => 'Some boy 3'],
  ['title'=> 'Some UStitties 4', 'body' => 'Some boy 4'],
  ['title'=> 'Some UStitties 1', 'body' => 'Some boy 1'],
];
?>

<?php include 'partials/header.php'; ?>

<main class="container">
  <?php include 'partials/hero.php'; ?>
  <?php include 'partials/featured.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
    <?php include 'partials/posts.php'; ?>
    </div>

    <div class="col-md-4">
    <?php include 'partials/sidebar.php'; ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>