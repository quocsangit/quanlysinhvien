<?php 
 	class hinhhoc
 	{
 		//Phương thức vẽ hình
 		public function vehinh()
 		{
 			//Phương thức vẽ hình
 		}
 		public function tinh_dien_tich()
 		{
 			//Phương thức tính diện tích
 		}
 	}
 	//Khai báo lớp hình vuông .
 	class hinhvuong extends hinhhoc
 	{
 		private $canh = 5;
 		public function vehinh()
 		{
 			echo "Ta vẽ hình vuông.</br>";
 			echo "Cạnh hình vuông :" . $this->canh . "</br>";
 		}
 		public function tinh_dien_tich()
 		{
 			echo "Diện tích hình vuông : " . $this->canh*$this->canh;
 		}
 	}
 	//khai báo lớp hình chữ nhật
 	class hinhchunhat extends hinhhoc
 	{
 		private $dai = 7;
 		private $rong = 5;
 		public function vehinh()
 		{
 			echo "</br>Ta vẽ hình chữ nhật :</br>";
 			echo "Chiều dài :".$this->dai. "</br>";
 			echo "Chiều rộng :".$this->rong. "</br>";
 			
 		}
 		public function tinh_dien_tich()
 		{
 			echo  "Diện tích hình chữ nhật  : ". $this->dai*$this->rong;
 		}
 	}

 	//Khởi tạo hv
 	$hv = new hinhvuong;
 	$hv->vehinh();
 	$hv->tinh_dien_tich();
 	//Khởi tạo hcn
 	$hcn = new hinhchunhat;
 	$hcn->vehinh();
 	$hcn->tinh_dien_tich();




 ?>