<?php
	class Person
	{
			private $hoten = null;
			private $gioitinh = null;
			private $ngaysinh = null;
			public function __construct(){
			}

			//Set va get cho thuoc tinh $hoten

			public function sethoten($ho_ten)
			{
				$this->hoten = $ho_ten;
			}
			public function gethoten()
			{
				return $this->hoten;
			}

			//Set va get cho thuoc tinh $gioitinh

			public function setgioitinh($gioi_tinh)
			{
				$this->gioitinh = $gioi_tinh;
			}
			public function getgioitinh()
			{
				return $this->gioitinh;
			}

			//Set va get cho thuoc tinh $ngay_sinh

			public function setngaysinh($ngay_sinh)
			{
				$this->ngaysinh = $ngay_sinh;
			}
			public function getngaysinh()
			{
				return $this->ngaysinh;
			}
	}
	class sinhvien extends Person
	{
		private $sv = null;
		public function __construct(){
			parent::__construct();
		}
		public function setsv($s_v)
			{
				$this->sv = $s_v;
			}
			public function getsv()
			{
				return $this->sv;
			}
	}
	class giaovien extends Person
	{
		private $gv = null;
		public function __construct(){
			parent::__construct();
		}
		public function setgv($g_v)
		{
			$this->gv = $g_v;
		}
		public function getgv()
		{
			return $this->gv;
		}
	}

	//Hiển thị sinh viên lên màn hình hiển thị
	$sinhvienmoi = new sinhvien();
	$sinhvienmoi->sethoten("Dương Hoài Sang");
	echo "Họ Tên SV :".$sinhvienmoi->gethoten();
	$sinhvienmoi->setgioitinh("Nam");
	echo "</br>Giới Tính :".$sinhvienmoi->getgioitinh();
	$sinhvienmoi->setngaysinh("16/09/1990");
	echo "</br>Ngày Sinh :".$sinhvienmoi->getngaysinh();
	$sinhvienmoi->setsv("Sinh Viên");
	echo "</br> Nghề Nghiệp :".$sinhvienmoi->getsv();

	//Hiển thị giáo viên lên màn hình hiển thị

	$giaovienmoi = new giaovien();
	$giaovienmoi->sethoten("Đặng Văn A");
	echo "</br> Họ Tên GV :".$giaovienmoi->gethoten();
	$giaovienmoi->setgioitinh("Nam");
	echo "</br> Giới Tính :".$giaovienmoi->getgioitinh();
	$giaovienmoi->setngaysinh("19/07/1977");
	echo "</br> Ngày Sinh :".$giaovienmoi->getngaysinh();
	$giaovienmoi->setgv("Giáo Viên");
	echo "</br> Chức Vụ :".$giaovienmoi->getgv();







?>