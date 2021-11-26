<?php 
    trait HomeModel{
        // sản phẩm nổi bật (6 sản phẩm)
        public function modelHotProduct(){
            $db = Connection::getInstance();
            $query = $db->query("select * from products order by id desc limit 0,6");
            return $query->fetchAll();
        }
        // lấy các danh mục có chứa sản phẩm bên trong
        public function modelCategories(){
            $db = Connection::getInstance();
            $query = $db->query("select * from categories where id in (select category_id from products)");
            return $query->fetchAll();
        }
        // lấy các sản phẩm thuộc danh mục
        public function modelProducts($category_id){
            $db = Connection::getInstance();
            $query = $db->query("select * from products where category_id = $category_id order by id desc");
            return $query->fetchAll();
        }
        // san 10 tin noi bat de hien thi o trang chu
        public function modelHotNews(){
            $db = Connection::getInstance();
            $query = $db->query("select * from news order by id desc limit 0,10");
            return $query->fetchAll();
        }
    }
?>