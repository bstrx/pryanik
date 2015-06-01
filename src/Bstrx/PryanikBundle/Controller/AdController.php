<?php

namespace Bstrx\PryanikBundle\Controller;

use Bstrx\PryanikBundle\Form\AdType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdController extends Controller
{
    /**
     * @Route("/ad/new", name="new_ad")
     */
    public function indexAction()
    {
        $form = $this->createForm(new AdType());

        return new \Symfony\Component\HttpFoundation\Response($this->renderView('BstrxPryanikBundle:Ad:new.html.twig', ['form' => $form->createView()]));
    }
}
