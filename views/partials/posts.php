<h3 class="pb-4 mb-4 fst-italic border-bottom">
    From the Firehose
</h3>

<?php foreach($posts as $post): ?> 
    <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1"><?= $post['title']?></h2>
        <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>
        <!-- < ?php echo asemel < ?=   (need tühikud olid kommentaari jaoks-->
        <p><?php echo $post['body'] ?> </p>
    </article>
<?php endforeach; ?>

<!-- lahtioleva loogelise sulu asemel paned ; lõppu ja siis endfor; (või enforeach kui foreach on kasutatud) lõppu -->

<nav class="blog-pagination" aria-label="Pagination">
    <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
    <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
</nav>