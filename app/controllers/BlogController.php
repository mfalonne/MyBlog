<?php

namespace App\controllers;

use App\Models\Tag;
use App\Models\Post;

class BlogController extends Controller {

    public function welcome()
    {
        // Aucune donnée supplémentaire à passer, juste rendre la vue
        return $this->view('blog.welcome');
    }

    public function index()
    {
        $post = new Post($this->getDB());
        $posts = $post->all();

        // Passer les posts à la vue en utilisant Twig
        return $this->view('blog.index', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        $post = new Post($this->getDB());
        $post = $post->findById($id);

        // Assurer que le post est trouvé avant de passer à la vue
        if (!$post) {
            // Vous pouvez également gérer un template d'erreur 404 ici
            return $this->view('errors.404');
        }

        // Passer le post trouvé à la vue en utilisant Twig
        return $this->view('blog.show', ['post' => $post]);
    }

    public function tag(int $id)
    {
        $tag = new Tag($this->getDB());
        $tag = $tag->findById($id);

        // Vérifier que le tag existe
        if (!$tag) {
            return $this->view('errors.404');
        }

        // Passer le tag à la vue en utilisant Twig
        return $this->view('blog.tag', ['tag' => $tag]);
    }
}