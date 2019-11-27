<?php
	class Database
	{
		private $hostname = 'localhost';
		private $username = 'root';
		private $pass = 'mysql';
		private $dbname = 'quanlythanhvien_mvc';

		private $conn = Null;
		private $result = Null;

		//Phương thức kết nối cơ sở dữ liệu
		public function connect()
		{
			$this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
			if(!$this->conn)
			{
				echo "Kết nối thất bại";
				exit;
			}
			else{
				mysqli_set_charset($this->conn, 'utf8');
			}
			return $this->conn;
		}

		//Phương thức thực hiện câu lệnh truy vấn
		public function execute($sql)
		{
			$this->result = $this->conn->query($sql);//Thực hiện câu lệnh truy vấn
			return $this->result;
		}

		//Phương thức lây dữ liệu
		public function getData()
		{
			//Kiểm tra xem 
			if($this->result){
				$data = mysqli_fetch_array($this->result);// Mảng lưu trữ các phần tử thực hiện câu truy vấn
			}else{
				$data = 0;
			}
			return $data;
		}

		//Phương thức lấy toàn bộ dữ liệu
		public function getallData()
		{
			if(!$this->result)
			{
				$data = 0;
			}else{
				while($datas = $this->getData()){
					$data[] = $datas;//Mảng ko tuần tự lưu trữ ds dữ liệu từ CSDL
				}
			}
			return $data;
		}

		//Phương thức đếm số bản ghi

		//Phương thức thêm dữ liệu
		public function InsertData($hoten, $namsinh, $quequan)
		{
			$sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan)VALUES(null, '$hoten', '$namsinh', '$quequan')";
			return $this->execute($sql);
		}

		//Phương thức sửa dữ liệu
		public function UpdateData($id, $hoten, $namsinh, $quequan)
		{
			$sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh = '$namsinh', quequan = '$quequan' WHERE id = '$id'";
			return $this->execute($sql);
		}

		//Phương thức xóa dữ liệu
		public function Delete($id)
		{
			$sql = "DELETE FROM thanhvien WHERE id = '$id'";
			return $this->execute($sql);
		}



	}

?>