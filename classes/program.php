<?php 
	
	namespace classes;
	class program {
		public function __construct(){
			$page_type = 'index';
			if(!empty($_GET)){
				$page_type = $_GET['page'];
				new $page_type;
			}
		}
	}
	
