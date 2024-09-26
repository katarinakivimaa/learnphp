<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
  <form method="POST" action="/register">
    <!-- method default on GET -->
    <!-- kui actionit pole pandud siis ta tuleb samale leheküljele tagasi -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input name="email" type="email" class="form-control" id="email">
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="password">
    </div>

    <div class="mb-3">
      <label for="password_confirm" class="form-label">Password Confirm</label>
      <input name="password_confirm" type="password" class="form-control" id="password_confirm">
    </div>

    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Register now for the MILFs!">
    </div>
  </form>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>