<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Это наша первая страница на Symfony');
    }

    /**
     * @Route("/articles/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'afdfsfsd fdsfsdfsdf fsdfsdf',
            'fsdfsdf fsdfsdfsd fdsfsdghdsgh',
            'sdfsdfasg sdfgsdfgs dfgsfg',
        ];

        return $this->render('articles/show.html.twig', [
            'article' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);

        return new Response(sprintf('Будущая страница статьи: %s',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}