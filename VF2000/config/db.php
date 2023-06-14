<?php 

class connector 
{
	public function connect()
		{
			try {
			$conn = new mysqli_connect("localhost", "root", "", "vfclone");
			return $conn;
			} catch (Exception $e) {
				return  $e->getMessage();
			}
		}	
}
 ?>