<?php 
	// load file PhongBanModel.php
	include "models/PhongBanModel.php";
 	// điều khiển dữ liệu -> kế thừa file Controller
	class PhongBanController extends Controller{
		// kế thừa class PhongBanModel
		use PhongBanModel;
		// lấy danh sách phòng ban
		public function listPhongBan(){
			// gọi hàm modelPhongBan để lấy dữ liệu
			$data = $this->modelPhongBan();
			// include file PhongBanView.php để hiển thị thông tin
			// include "views/PhongBanView.php";
			$this->loadView("PhongBanView.php",["data"=>$data]);
		} 
	}
?>
