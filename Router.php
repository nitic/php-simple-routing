<?php
class Router{
	private $request;
	public function __construct($request){
		$this->request = $request;
	}
	public function get($route, $target){
		$uri = trim( $this->request, "/" );
		$uri = explode("/", $uri);
		if($uri[0] == trim($route, "/")){
			array_shift($uri);
            $args = $uri;
            
            $findme = 'http';
            $pos = strpos($target, $findme);
            if($pos === false){
                if (!file_exists($target))
                    require '404.php';
                else
                    require $target;
            } else {
                header('Location: '.$target);
                exit;
            }
			
		}
	}
}