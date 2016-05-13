<?php
namespace Controller;

use Model\pageRepository;

class pageController
{
    public function __construct(\PDO $PDO)
    {
        $this->repository = new pageRepository($PDO);
    }

    public function ajoutAction()
    {

    }

    public function supprimerAction()
    {

    }

    public function modifierAction()
    {

    }

    public function detailsAction()
    {

    }

    public function listeAction()
    {

    }

    public function displayAction()
    {
        include "../view/page-display.php";
    }
}