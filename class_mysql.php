<?php
	class database
	{
		private $conn = null;
		private $result = null;

		//Ham kết nối
		public function connect()
		{
			$this->conn = mysqli_connect("localhost", "root", "mysql", "qlhocsinh") or die ("Ke noi that bai");
			mysqli_select_db($this->conn,"qlhocsinh");
		}

		//Hàm ngắt kết nối
		public function dis_connect()
		{
			if($this->conn)
			{
				mysqli_close($this->conn);
			}
		}

		//Phương thức thực thi chạy câu truy vấn
		public function query ($sql)
		{
			$this->result = mysqli_query($this->conn,$sql);
		}

		//Phương thức đếm số record
		public function num_rows()
		{
			if($this->result)
			{
				$row = mysqli_num_rows($this->result);

			}else{
				$row = 0;
			}
			return $row;
		}

		//Phương thức lấy dữ liệu
		public function fecth()
		{
			if($this->result)
			{
				$data = mysqli_fetch_assoc($this->result);
			}else{
				$data = 0; 
			}
			return $data;
		}
	}

	$db = new database();
	$db->connect();
	$sql = "select * from hocsinh";
	$db ->query($sql);
	$row = $db->num_rows();
	echo $row;
	//Hiện ra mảng ds sinh viên.
	while ($data = $db->fecth()) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
?>