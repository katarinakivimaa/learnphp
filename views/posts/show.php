<?php include __DIR__ . '/../partials/header.php'; ?>

<style>
table, th, td {
  border:1px solid black;
}
</style>

<main class="container">
  <form method="GET" action="/admin/posts/show?id=<?=$post->id?>">
    <table style="width: 80%;">
      <tr>
      <label for="title" class="mb-2">Title / Heading</label>
      <label for="body">Content</label>
      </tr>
      <tr>
      <td><input readonly name="title" type="text" id="title" value="<?=$post->title?>"> 
      <!-- tühikuid ei tohi panna < ?=$post->title? >e need muidu liituvad teksti algusesse--></td>
      <td readonly name="body" id="body"><?=$post->title?></td>
      </tr>
    
    </div>
    </table>
    <!-- method default on GET -->
    <!-- kui actionit pole pandud siis ta tuleb samale leheküljele tagasi -->
  </form>
  <button class="btn btn-primary">Hot MILFS in your area!</button>

</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>