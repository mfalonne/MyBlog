<div class="container masthead">
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <h1 class="m-3"><?= $params['tag']->name ?></h1>
            <?php foreach($params['tag']->getPosts() as $post): ?> 
                <div class="card mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="./posts/<?= $post->id ?>"><?= $post->title ?></a>   
                    </div>       
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

