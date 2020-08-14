<?php

namespace App\Controller;

use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('client/client.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    /**
     * @Route("/client", name="ajouter")
     */
    public function ajouter()
    {
        extract($_POST);
        $p = new Client();
        $p->setNom($nomclient);
        $p->setPrenom($prenomclient);
        $p->setAdresseclient($adresseclient);
        $p->setEmailclient($emailclient);
        $p->setTelephoneclient($phoneclient);
        $p->setProfession($professionclient);
        $p->setCni($numident);
        $p->setDatenaissance($datenais);
        $p->setSalaireclient($salaireclient);
        $p->setNomemployeur($idcli);
        $p->setRaisonsocial($moral);
        $p->setTelephoneemploy($raismoral);
        $p->setAdresseemploy($telemoral);
        $p->setNinea($adresemoral);
        $p->setEmailemploy($ninea);
        $p->setEmailemploy($emailmoral);

        $em= $this->getDoctrine()->getManager();
        $em->persist($p);
        $em->flush();

       // var_dump($_POST);
        //die;

        return $this->render('compte/compte.html.twig');
    }

    
}
