<?php  if (!$this->ion_auth->logged_in())
{
	redirect('auth/login', 'refresh');
}

?>

<?php

	echo $loggedin;
	//print_r( $this->ion_auth->users());
	$group = 5;
	if (!$this->ion_auth->in_group($group))
	{
		echo 'You must be part of the group 1 to view this page';
		$this->session->set_flashdata('message', 'You must be part of the group 1 to view this page');
		//redirect('welcome/index');
	}
	//$groups = $this->ion_auth->groups()->result();
	//print_r( $groups);
?>



