<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StudentController extends AbstractController
{
    public function index()
    {
        return 'Bonjour mes étudiants';
    }
}

