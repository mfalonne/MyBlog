<?php require_once 'headerBlog.php'?>
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <h1 class="m-3">Les derniers articles</h1>
            <?php foreach($params['posts'] as $post): ?> 
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2><?= $post->title ?></h2>
                        <div>
                            <?php foreach($post->getTags() as $tag): ?>
                                <span class="badge text-bg-secondary mb-2"><a href="./tags/<?= $tag->id ?>"><?= $tag->name ?></a></span>
                            <?php endforeach ?>
                        </div>
                        <small class="text-bg-primary">Publié le <?= $post->getCreatedAt() ?></small>
                        <p><?= $post->getExcerpt() ?></p>
                        <?= $post->getButton() ?>   
                    </div>       
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

