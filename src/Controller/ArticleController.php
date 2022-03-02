<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twig)
    {
        $html = $twig->render('articles/homepage.html.twig');
        return new Response($html);//10.10 Сервисы и Autowiring

        //return $this->render('articles/homepage.html.twig');
        //return new Response('Это наша первая страница на Symfony');
    }

    /**
     * @Route("/articles/{slug}", name="app_article_show")
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

//        return new Response(sprintf('Будущая страница статьи: %s',
//            ucwords(str_replace('-', ' ', $slug))
//        ));
    }
}