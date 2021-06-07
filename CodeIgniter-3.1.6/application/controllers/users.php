 <?php

class Users extends My_controller
{
	
	public function User()
	{
		$this->test();
		//Extending libraries
		$this->load->library('email');
		$this->email->show();
		//custom library
		$this->test->dbdetails();
		//extending helper
		$this->load->helper('array');
		show();
		$data['users']=$this->Usermodel->getUserdata();
		
		$this->load->view('Users/userlist.php',$data);
	}
	
}
?>
