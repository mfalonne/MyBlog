<div class="container masthead">
    <img src="" class="img-fluid" alt="image-article-2">
    <h1><?= $params['post']->title ?></h1>
    <div>
        <?php foreach($params['post']->getTags() as $tag): ?>
            <span class="badge text-bg-secondary mb-2"><?= $tag->name ?></span>
        <?php endforeach ?>
    </div>
    <p><?= $params['post']->content ?></p>
    <a href="./" class="btn btn-primary">Retourner</a>
</div>
