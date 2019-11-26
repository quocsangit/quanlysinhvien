<?php

	//Khai báo một lớp cú pháp :
			// class className
			// {
			//     // Các khai báo bên trong
			// }

	class dongvat
	{
		//Khai báo các thuộc tính của lớp với cú pháp :
		// var $tenthuoctinh;

		var $helloSen = "Chào sen. Meo meo đang ăn nhe.";
		var $mat;
		var $mui;
		var $mieng;

		//Khởi tạo các phương thức của lớp với cú pháp :
			// class ClassName
			// {
			//     function tenPhuongThuc($bien)
			//     {
			//         // các lệnh bên trong
			//     }
			// }

		function an($thucan)
		{
			// Câu lệnh
		}

		function uong()
		{
			// Câu lệnh
		}

		function chay()
		{
			// Câu lệnh
		}

		function anchuot($thucan_chuot)
		{
			echo " Hôm nay con mèo ăn " . $thucan_chuot;
		}

		function hello()
		{
			echo $this->helloSen;
		}


	}
	//////  Khởi tạo, gán và gọi thuộc tính – phương thức  //////

		//+ Khởi tạo lớp mới với cú pháp :
		//$ten_bien = new ClassName();

		//Khởi tạo các lớp động vật mới :
		$conmeo = new dongvat();
		$concho = new dongvat();
		$conbo = new dongvat();

		//Truy xuất đến các thuộc tính của đối tượng ta dùng toán tử (->)với cú pháp:

		// $classname->method;

		//Gán giá trị cho các thuộc tính :

		$conmeo->mat = "Mắt hai mí";
		$conmeo->mui = " Mũi tẹt";


		// Lấy giá trị và xuất ra màn hình

		echo $conmeo->mat;
		echo $conmeo->mui;

		// Gọi các phương thức của đối tượng. Ta cũng dùng toán tử (->) để gọi phương thức trong đối tượng.
		// Cú pháp : $classname->function();

		$conmeo->anchuot('chuột');

		// Goi den ham hello

		$conmeo->hello();

?>