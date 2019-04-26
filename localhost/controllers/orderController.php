<?
class orderController extends Controller {

  private $pageTpl = '/views/order.tpl.php';


  public function __construct() {
    $this->model = new orderModel();
    $this->view = new View();

  }
  public function index() {
      global  $results;
    $results = $this->model->checkUsers();
  	$this->pageData['results'] = $results;

    $resultz = $this->model->checkBooks();
    $this->pageData['resultz'] = $resultz;

    if (isset($_POST['typeissue'])){
      $this->model->issueBook();
    }

    $this->pageData['title'] = "Каталог";
    $this->view->render($this->pageTpl, $this->pageData);
  }
}
