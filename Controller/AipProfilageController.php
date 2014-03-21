<?php

/*
 * This file is part of the Claroline Connect package.
 *
 * (c) Claroline Consortium <consortium@claroline.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Aip\ProfilageBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;
use HvH\APIschemaBundle\Controller\Validation;
use HvH\APIschemaBundle\Controller\Helpers;


class AipProfilageController extends Controller
{
               
 
    public function fileAction()
    {
    	$message = 'Mon premier bundle';

  return $this->container->get('templating')->renderResponse('AipProfilageBundle:Default:aipprofilage.html.twig',
    array('message' => $message)
  );
    }
}
