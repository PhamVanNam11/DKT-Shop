<?php 
	// load file ChucDanhModel.php
	include "models/ChucDanhModel.php";
 	// điều khiển dữ liệu
	class ChucDanhController{
		// kế thừa class ChucDanhModel
		use ChucDanhModel;
		// lấy danh sách chức danh
		public function listChucDanh(){
			// gọi hàm modelChucDanh để lấy dữ liệu
			$data = $this->modelChucDanh();
			// include file ChucDanhView.php để hiển thị thông tin
			include "views/ChucDanhView.php";
		} 
	}
?>