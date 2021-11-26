<?php 
	// dữ liệu 
	trait PhongBanModel{
		// danh sách phòng ban
		public function modelPhongBan(){
			// lấy biến kết nối từ class Connection
			$db = Connection::getInstance();
			// truyền câu lệnh sql vào cơ sở dữ liệu , lấy kết quả trả về một biến
			$query = $db->query("select * from phongban");
			// lấy tất cả các bản ghi
			$result = $query->fetchAll();
			return $result;
		}
	}
?> 