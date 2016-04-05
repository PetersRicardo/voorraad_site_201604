<?php

namespace VoorraadBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use VoorraadBundle\Entity\ReparatieOrder;

/**
 * ReparatieOrder controller.
 *
 * @Route("/reparatieorder")
 */
class ReparatieOrderController extends Controller
{
    /**
     * Lists all ReparatieOrder entities.
     *
     * @Route("/", name="reparatieorder_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reparatieOrders = $em->getRepository('VoorraadBundle:ReparatieOrder')->findAll();

        return $this->render('reparatieorder/index.html.twig', array(
            'reparatieOrders' => $reparatieOrders,
        ));
    }

    /**
     * Finds and displays a ReparatieOrder entity.
     *
     * @Route("/{id}", name="reparatieorder_show")
     * @Method("GET")
     */
    public function showAction(ReparatieOrder $reparatieOrder)
    {

        return $this->render('reparatieorder/show.html.twig', array(
            'reparatieOrder' => $reparatieOrder,
        ));
    }

    /**
     * Creates a new Product entity.
     *
     * @Route("/new", name="reparatieorder_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reparatieOrder = new ReparatieOrder();
        $form = $this->createForm('VoorraadBundle\Form\ReparatieOrderType', $reparatieOrder);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reparatieOrder);
            $em->flush();

            return $this->redirectToRoute('reparatieorder_show', array('id' => $reparatieOrder->getId()));
        }

        return $this->render('reparatieorder/new.html.twig', array(
          'reparatieOrder' => $reparatieOrder,
          'form' => $form->createView(),
        ));
    }
}
