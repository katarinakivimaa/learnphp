<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
  <form method="POST" action="/admin/posts/edit?id=<?=$post->id?>">
    <!-- method default on GET -->
    <!-- kui actionit pole pandud siis ta tuleb samale leheküljele tagasi -->
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input name="title" type="text" class="form-control" id="title" value="<?=$post->title?>"> 
      <!-- tühikuid ei tohi panna < ?=$post->title? >e need muidu liituvad teksti algusesse-->
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Content</label>
      <textarea name="body" class="form-control" id="body" rows="3"><?=$post->title?></textarea>
    </div>

    <div class="mb-3">
      <input type="submit" class="btn btn-primary" value="Hot DILFS in your area!">
    </div>
  </form>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>