<div class="container masthead">
    <h1>Modifier <?= $params['post']->title ?></h1>
    <form action="./posts/edit/<?= $params['post']->id ?>" method="POST">
        <div class="for-group mb-3">
            <label for="title">Titre de l'article</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $params['post']->title ?>">
        </div>
        <div class="form-group mb-3">
            <label for="content">Contenu de l'article</label>
            <textarea name="content" id="content" rows="8" class="form-control"><?= $params['post']->content ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
</div>
