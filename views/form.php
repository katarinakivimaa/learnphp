<?php include 'partials/header.php'; ?>

<main class="container">
  <?php if($flname): ?>
  <h3>Welcome back <?=$flname?> </h3>
  <?php endif; ?>
  <form method="POST" action="/form">
    <!-- method default on GET -->
    <!-- kui actionit pole pandud siis ta tuleb samale leheküljele tagasi -->
    <div class="mb-3">
      <label for="flname" class="form-label">First and Last Name</label>
      <input name="flname" type="text" class="form-control" id="flname" placeholder="Enter your legal name!">
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Hot MILFS in your area!">
    </div>
  </form>

</main>

<?php include 'partials/footer.php'; ?>