<?php 

/**
 * 
 */
class authModel
{
	private $db;
	private $users;

	function __construct()
	{
		$this->db=connector::connect();
		$this->users=array();
	}
	
	public function getUser()
	{
		$sql="SELECT * FROM users";
		$result=$this->db->query($sql);
		while ($row= $result->fetch_assoc()) {
			$this->users[] = $row;
		}
		return $this->users;
	}

	public function register()
	{
	$result = $this->db->query("INSERT INTO users VALUES");
	}

}
 ?>