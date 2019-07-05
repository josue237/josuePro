<?php
namespace App\Controller;

/*
 * to change this license header, choose license headers in project properties.
 * to change this template file, choose tools | templates
 * and open the template in the editor.
 */

/**
 * description of jobcomposer
 *
 * @author kwame
 */
#use Sensio\Bundle\FrameworkExtrabundle\Confirguration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class jobController extends AbstractController {

    /**
     * @route("/",name="app_homepage")
     */
    public function homepage(){
return $this -> render('job/homepage.html.twig');    }

    /**
      * @route("/index")
     */

    public function index() {

       $comments = [
           'objet candidature pour le poste d’administrateur de bases de données',
           'l\’optimisation de vos bases de données et leur bonne gestion',
           'mise à disposition est un enjeu stratégique pour une entreprise comme la vôtre',
           'susceptible d’intervenir autant sur la productivité de vos équipes que sur votre politique',
           'de communication, la sécurité de vos données confidentielles',
       ];
        return $this ->render('job/index.html.twig' ,
                [
                    'comments' =>$comments,
                ]);


    }

     /**
     * @route("/contact")
     */
    public function contact(){

        return $this ->render('job/Contact.html.twig');
    }
            
    
}
