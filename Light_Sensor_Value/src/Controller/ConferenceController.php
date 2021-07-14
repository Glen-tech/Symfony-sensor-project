<?php

namespace App\Controller;

use App\Entity\LightSensor;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class ConferenceController extends AbstractController 
{
	
    public function __construct()
	{
		echo 'The class "' . __CLASS__ . '" was initiated!<br>';	
		$json_content = 0;
	}
	
	/**
     * @Route("/conference", name="conference")
     */
	 
    public function index(): Response
	{
		global $json_content;
	
		//$request = Request::createFromGlobals(); // nessicary
		
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
	    {
			$this-> FetchData();
		}
			
		return new Response('Yes');
		
		
    }
	
	
	private function FetchData() : void
	{
		$params = array();
		$request = New Request();
		
		$json_content = $request->getContent();
		
			if (!empty($json_content) )
			{
			$params = json_decode($json_content); 
			//print_r($params);
			}
			
				else
				{
					echo 'There is no data';
				}	
			
		$this -> InsertData($params);
		
	}
	
	private function InsertData($data) : void
	{
		$entityManager = $this->getDoctrine()->getManager();
		
		$product = new LightSensor();
		$product->setValue($data->Value);
        $product->setTimestamp(\DateTime::createFromFormat('Y-m-d', "2018-09-09"));

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($product);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();
		
		$this ->GetData();
		
	}
	
	private function GetData() : void
	{
		
	}

	public function __destruct()
	{
       // echo 'The class "' . __CLASS__ . '" was destroyed!<br>';
    }
	
}
	
	
