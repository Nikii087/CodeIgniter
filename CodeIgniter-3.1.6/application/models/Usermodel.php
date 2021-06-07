<?php
class Usermodel extends CI_model
{
	public function getUserdata()
	{
		// $this->db->select("Firstname");
		// $this->db->where("id",2);
		$q=$this->db->where("id",2)
					->get("users");
		return $q->result();


		// return[

		// 	['Firstname'=>'Nikita','AccountNo'=>'23435456'],
		// 	['Firstname'=>'Divya','AccountNo'=>'65765653'],
		// ];
	}
}

?>