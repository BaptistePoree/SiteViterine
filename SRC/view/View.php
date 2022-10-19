<?php

require_once("./model/General.php");

class View {

	protected $router;
	protected $title;
    protected $nav;
    protected $content;
    protected $scriptList;
    protected $styleSheetList;

	public function __construct(Router $router) 
    {
		$this->router = $router;
		$this->title = null;
        $this->nav = null;
        $this->content = null;
        $this->scriptList = array();
        $this->styleSheetList = array();
    }

    /* Gestion des Erreur  */
    public function makeErrorPage($title, $description)
    {
        $this->title = "Erreur";
        ob_start();
        include_once('templates/errorPage.php');
        $this->content .= ob_get_clean();
        $this->styleSheetList[] = 'general';
    }

    public function makeAccessDeniedPage()
    {
        $this->title = "Accès refusé";
        ob_start();
        include_once('templates/accessDenied.php');
        $this->content .= ob_get_clean();
        $this->styleSheetList[] = 'general';
    }

    /* Page Corps Home */
    public function makeHomePage($valid = false)
    {
        $this->makeNav("home");
        $this->title = "Accueil";
        ob_start();
        include_once('templates/homePage.php');
        $this->content .= ob_get_clean();
        $this->styleSheetList[] = 'home';
        $this->styleSheetList[] = 'general';
    }

    /* Page Corps Langage Programmation */
    public function makeLangageProgrammationsPagePage($valid = false)
    {
        $this->makeNav("langeProgrammations");
        $this->title = "Les langageProgrammations";
        ob_start();
        include_once('templates/langageProgrammationsPage.php');
        $this->content .= ob_get_clean();
        $this->styleSheetList[] = 'langeProgramation';
        $this->styleSheetList[] = 'topmaindiv';
        $this->styleSheetList[] = 'general';
    }

    /* Page Corps Competences */
    public function makeCompetencePage($valid = false)
    {
        $this->makeNav("competence");
        $this->title = "Mes Competences";
        ob_start();
        include_once('templates/competencePage.php');
        $this->content .= ob_get_clean();
        $this->styleSheetList[] = 'competence';
        $this->styleSheetList[] = 'topmaindiv';
        $this->styleSheetList[] = 'general';
    }

    /* Page Corps expériances */
    public function makeExpériancesPage($valid = false)
    {
        $this->makeNav("expériances");
        $this->title = "Mes Expériances";
        ob_start();
        include_once('templates/expériancesPage.php');
        $this->content .= ob_get_clean();
        // $this->styleSheetList[] = '';
        $this->styleSheetList[] = 'topmaindiv';
        $this->styleSheetList[] = 'general';
    }

    /* Page Corps CV */
    public function makeCVPage($valid = false)
    {
        $this->makeNav("cv");
        $this->title = "Mon CV";
        ob_start();
        include_once('templates/cvPage.php');
        $this->content .= ob_get_clean();
        $this->styleSheetList[] = 'cv';
        $this->styleSheetList[] = 'general';

    }

    /* Page Corps Contacte */
    public function makeContactePage($valid = false)
    {
        $this->makeNav("contacter");
        ob_start();
        include_once('templates/contactePage.php');
        $this->content .= ob_get_clean();
        $this->title = "Me contacter";
        $this->styleSheetList[] = 'contacter';
        $this->styleSheetList[] = 'general';
    }

    /* Page Nav */
    private function makeNav($page = "home")
    {
        $this->titreGeneral = "Baptiste Poree";
        $this->reseau =  [ 
                ["UrlWeb"=>"https://github.com/BaptistePoree", "UrlImg"=>"img/reseau/iconmonstr-github-1.svg" ], 
                ["UrlWeb"=>"https://www.linkedin.com/in/baptiste-poree/", "UrlImg"=>"img/reseau/iconmonstr-linkedin-1.svg"] 
            ];
        $this->navigation = [
            "home" => 
                ["Action"=>($page ==="home"),                   "UrlChemin"=>"?action=home",                "Text"=>"Home"],
            "langeProgrammations" =>
                ["Action"=>($page ==="langeProgrammations"),    "UrlChemin"=>"?action=langeProgrammations", "Text"=>"Les Langages Informatique"],
            // "projet" =>
            //     ["Action"=>($page ==="projet"),                 "UrlChemin"=>"?action=projet",                           "Text"=>"Mes Projets"],
            "competence" =>
                ["Action"=>($page ==="competence"),             "UrlChemin"=>"?action=competence",          "Text"=>"Mes Competences"],
            "expériances" =>
                ["Action"=>($page ==="expériances"),            "UrlChemin"=>"?action=expériances",                           "Text"=>"Mes Experiences"],
            "cv" =>
                ["Action"=>($page ==="cv"),                     "UrlChemin"=>"?action=cv",                  "Text"=>"Mon CV"],
            "contacter" =>
                ["Action"=>($page ==="contacter"),              "UrlChemin"=>"?action=contacter",           "Text"=>"Me Contacter"]
        ];
        include_once('templates/nav.php');
        $this->styleSheetList[] = 'nav';
        // $this->styleSheetList[] = 'autre';
    }    
    


    /* Rendu General */
	public function render() 
    {
        include_once("templates/top.php");
        echo $this->content;
        include_once("templates/bottom.php");
    }
}
?>