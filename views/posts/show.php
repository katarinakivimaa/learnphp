<?php include __DIR__ . '/../partials/header.php'; ?>

<style>
table, th, td {
  border:2px solid grey;
  background-color: lightgrey;
}



</style>

<main class="container">
    <table align="center" method="GET" action="/admin/posts/show?id=<?=$post->id?>" style="width: 80%;">
      <tr>
        <td><label for="title">Title / Heading</label></td>
        <td><label for="body">Content</label></td>
      </tr>
      <tr>
        <td readonly name="title" type="text" id="title"><?=$post->title?></td> 
      <!-- tühikuid ei tohi panna < ?=$post->title? >e need muidu liituvad teksti algusesse--></td>
        <td readonly name="body" id="body"><?=$post->body?></td>
      </tr>
    </table>
    <!-- method default on GET -->
    <!-- kui actionit pole pandud siis ta tuleb samale leheküljele tagasi -->


</main>

<?php include __DIR__ . '/../partials/footer.php'; ?>