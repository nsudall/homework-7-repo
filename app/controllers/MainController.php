<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{

    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }

    public function notFound() {
        $template = $this->twig->load('404/404.twig');
        $homepageData = [
            'title' => 'Error 404',
        ];

        echo $template->render($homepageData);
        //DONE
        //todo create a 404 twig template in app/public/assets/views
        //an example is in app/controllers/UsersController
        //and return it from this method
    }

}