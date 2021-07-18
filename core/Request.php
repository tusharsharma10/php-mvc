<?php 

namespace app\core;

/**
 * Deals with the _SERVER object like providing methods,URI
 */
class Request{

	public function getPath(){
		$pathUri = $_SERVER['REQUEST_URI'] ?? '/';
		$position = strpos($pathUri,'?');
        return $pathUri;
	}

	public function getMethod(){
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}

?>