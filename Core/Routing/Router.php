<?php

class Router
{
	// Конструктор.
	public function __construct(){
		
	}
	
	public function route(){
		if(isset($_GET['route'])){
			$temp = explode('/', $_GET['route']);
			
			$params['controller'] = $temp[0];
			$params['action'] = $temp[1];
			
			return $params;
		}
		
		return null;
	}
}