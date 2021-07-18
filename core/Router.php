<?php 

namespace app\core; 

use app\core\Request;
use app\model\StudentRepo;

class Router{

	protected array $routes = [];
	public Request $request;

	public function __construct(Request $req){
		$this->request = $req;
	}

	//acts as a controller
	public function get($path,$callback){
	    // get request with a path
		$this->routes['get'][$path] = $callback;
	}

	public function resolve(){

		$pathUri = $this->request->getPath();
		$method =  $this->request->getMethod();
		$callback = $this->routes[$method][$pathUri] ?? false;

		if($callback === false){
		    return "Not Found";
        }
		if(is_string($callback)){
		    return $this->renderView($callback);
        }

		return call_user_func($callback);
	}

	private function renderView($view){
	   // $layoutContent = $this->layoutContent();
        $this->renderModel();
        include_once Application::$ROOT_DIR."/view/$view.php";
    }

    private function layoutContent(){
        include_once Application::$ROOT_DIR."/../view/layout/main.php";
    }

    private function renderModel(){
	     $s = new StudentRepo();
	    $s->findAllStudents();
    }
}

?>