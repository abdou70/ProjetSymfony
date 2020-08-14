<?php

namespace App\Controller;

use App\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte", name="compte")
     */
    public function ajouter1()
    {
        extract($_POST);
        $p = new Compte();
        $p->setNumagence($numagence);
        $p->setNumcompte($numcompte);
        $p->setClerib($rib);
        $p->setDateOuverture($date);
        $p->setMontantInitial($montant0);
        $p->setFraisOuverture($frais);
        $p->setAgios($agios);
        $p->setDateBloquage($date1);
        $p->setDateDebloquage($date2);
        $em= $this->getDoctrine()->getManager();
        $em->persist($p);
        $em->flush();
        //var_dump($_POST);
        //die;
        return $this->render('client/client.html.twig');
    }
}
