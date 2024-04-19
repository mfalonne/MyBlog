<div class=" container masthead">
    <h1 class="mb-3">Administration des articles</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Titre</th>
            <th scope="col">Publié le </th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach($params['posts'] as $post): ?>
                <tr>
                    <th scope="row"><?= $post->id ?></th>
                    <td><?= $post->title ?></td>
                    <td><?= $post->getCreatedAt() ?></td>
                    <td>
                        <a href="./posts/edit/<?= $post->id ?>" class="btn btn-warning">Modifier</a>
                        <form action="./posts/delete/<?= $post->id ?>" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>


