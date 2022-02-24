<?php

namespace App\Controller;

use App\Entity\Books;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/book/{id}", name="detail of book")
     */
    public function detail(Books $books): Response
    {
        return $this->render('book/detail.html.twig', [
            'book' => $books,
        ]);
    }

    /**
     * @Route("/book/delete/{id}", name="delete book")
     */
    public function deleteBookById($id)
    {
        $em = $this->getDoctrine()->getManager();
        $bookRepo = $em->getRepository(Books::class);
        $book = $bookRepo->find($id);
        $em->remove($book);
        $em->flush();

        $this->addFlash(
            'error',
            'Todo deleted'
        );

        return $this->redirectToRoute('home');

    }
}
