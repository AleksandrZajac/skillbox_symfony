<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleLikeController extends AbstractController
{
    /**
     * @Route("/articles/{id<\d+>}/like/{type<like|dislike>}", methods={"POST"}, name="app_article_like")
     */
    public function like($id, $type)
    {
        //return new Response('gygygyg');
        if ($type == 'like') {
            $likes = rand(121, 200);
        } else {
            $likes = rand(0, 119);
        }

        //return new Response(json_encode(['likes' => $likes]));
        return new JsonResponse(['likes' => $likes]);
    }
}
