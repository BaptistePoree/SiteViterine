<?php
require_once("./model/General.php");
require_once("view/View.php");
require_once("controller/Controller.php");


class Router
{

	public function main()
	{
		$view = new View($this);
		$controller = new Controller($view);

		$action = key_exists('action', $_GET) ? $_GET['action'] : 'home';

		try {
			switch ($action) {

				case "home":
					$view->makeHomePage();
					break;

				case "langeProgrammations":
					$view->makeLangageProgrammationsPagePage();
					break;

				case "competence":
					$view->makeCompetencePage();
					break;
					
				case "expériances":
					$view->makeExpériancesPage();
					break;

				case "cv":
					$view->makeCVPage();
					break;

				case "contacter":
					$view->makeContactePage();
					break;

				default:
					$view->makeHomePage();
					//TO-DO: Page defaut Home
					break;
			}
		} catch (Exception $e) {
			//TO-DO: Page d'erreur
		}
		$view->render();
	}
}
