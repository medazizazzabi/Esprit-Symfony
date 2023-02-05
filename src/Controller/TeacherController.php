<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }

    public function showTeacher(string $name): Response
    {
        return $this->render('teacher/showTeacher.html.twig', [
            'name' => $name,
        ]);
    }

    public function goToIndex()
    {
        return $this->redirectToRoute('student');
    }
}
