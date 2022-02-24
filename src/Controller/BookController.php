<?php

namespace App\Controller;

use App\Entity\Books;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book/{id}", name="book")
     */
    public function detail(Books $books): Response
    {
        return $this->render('book/detail.html.twig', [
            'book' => $books,
        ]);
    }
}
