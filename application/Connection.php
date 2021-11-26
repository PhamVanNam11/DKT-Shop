<?php 
	//ket noi csdl
	class Connection{
		//ham ket noi csdl, ket qua tra ve mot bien -> kieu bien nay la bien object
		public static function getInstance(){
			// $db = new PDO("mysql:host=localhost;dbname=php57_project","root","");
			$db = new PDO("mysql:host=sql310.byethost7.com;dbname=b7_30304236_php57_project","b7_30304236","phamnamfctk4");
			//lay du lieu theo kieu unicode
			$db->exec("set names utf8");
			//lay ket qua tra ve theo kieu object
			$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $db;
		}
	}
 ?>