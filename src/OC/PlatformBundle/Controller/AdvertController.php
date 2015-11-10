<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
    	$content = $this->get('templating')-> render('OCPlatformBundle:Advert:index.html.twig');
        return new Response( $content );
    }

    // La route fait appel à OCPlatformBundle:Advert:view,
  	// on doit donc définir la méthode viewAction.
  	// On donne à cette méthode l'argument $id, pour
  	// correspondre au paramètre {id} de la route
    public function viewAction($id)
    {
    	// $id vaut 5 si l'on a appelé l'URL /platform/advert/5

	    // Ici, on récupèrera depuis la base de données
	    // l'annonce correspondant à l'id $id.
	    // Puis on passera l'annonce à la vue pour
	    // qu'elle puisse l'afficher
        return new Response( "Affichage de l'annonce d'id : ".$id );
    }

    public function viewSlugAction($year, $slug, $_format) {
    	return new Response( 
    		"On peut afficher l'annonce correspondant au 
    		slug '".$slug."', créée en ".$year." et au format ".$_format."."
    	);
    }
}