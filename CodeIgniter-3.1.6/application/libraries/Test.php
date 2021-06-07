<?php
class Test
{

	public function dbdetails()
	{
	//Using existing helper in custon library
	$ci=&get_instance();
	$ci->load->helper('array');
	$arr=['Abc'=>'abc','BCD'=>'bcd'];
	echo element('Abc',$arr,'Notfound');
	echo"This function provides db details";
	}
}
?>