<?php

class catalogController extends Controller {

	private $pageTpl = '/views/catalog.tpl.php';


	public function __construct() {
		$this->model = new catalogModel();
		$this->view = new View();
  //  require_once MODEL_PATH. 'searchModel.php';
	}

	public function index() {
		  global  $results;
		$results = $this->model->checkCatalog();
		$this->pageData['results'] = $results;

			if(isset($_POST['search'])) {
					$results=$this->model->searchCatalog();
					$this->pageData['results'] = $results;
			}
			if(isset($_POST['nameBook'])) {
					$this->model->orderBook();

			}
		$this->pageData['title'] = "Каталог";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}
