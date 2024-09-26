<?php include __DIR__ . '/../partials/header.php'; ?>

<main class="container">
  <form method="GET" action="/admin/posts/show?id=<?=$post->id?>">
    <!-- method default on GET -->
    <!-- kui actionit pole pandud siis ta tuleb samale leheküljele tagasi -->
    <div class="mb-4">
      <label for="title" class="mb-2">Title / Heading</label>
      <input readonly name="title" type="text" class="form-control" id="title" value="<?=$post->title?>"> 
      <!-- tühikuid ei tohi panna < ?=$post->title? >e need muidu liituvad teksti algusesse-->
    </div>

    <div class="mb-3">
      <label for="body" class="form-label">Content</label>
      <textarea readonly name="body" class="form-control" id="body" rows="3"><?=$post->title?></textarea>
    </div>

    <div class="mb-3">
    <input type="submit" class="btn btn-primary" value="Hot MILFS in your area!">
    </div>
  </form>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>