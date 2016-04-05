<?php

namespace VoorraadBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use VoorraadBundle\Entity\ReparatieRegel;

/**
 * ReparatieRegel controller.
 *
 * @Route("/reparatieregel")
 */
class ReparatieRegelController extends Controller
{
    /**
     * Lists all ReparatieRegel entities.
     *
     * @Route("/", name="reparatieregel_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reparatieRegels = $em->getRepository('VoorraadBundle:ReparatieRegel')->findAll();

        return $this->render('reparatieregel/index.html.twig', array(
            'reparatieRegels' => $reparatieRegels,
        ));
    }

    /**
     * Finds and displays a ReparatieRegel entity.
     *
     * @Route("/{id}", name="reparatieregel_show")
     * @Method("GET")
     */
    public function showAction(ReparatieRegel $reparatieRegel)
    {

        return $this->render('reparatieregel/show.html.twig', array(
            'reparatieRegel' => $reparatieRegel,
        ));
    }
}
