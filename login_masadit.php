Public function checking_access(){
	$username1 = $this->input->post('username');
	$password1 = $this->input->post('password');
    $username = $this->security->xss_clean($username1);
    $password = $this->security->xss_clean($password1);
   	$dataop=$username." / ".$_SERVER['REMOTE_ADDR']." | ".date('d-m-Y H:i:s');
	$ldap = ldap_connect("10.90.2.253");
	if ($bind = ldap_bind($ldap, $username, $password)) {
		$hasil = $this->M_admin->query_in("data_admin",$username);
		$userid = substr($username,0,strpos($username,'@artajasa.co.id'));

		if ($hasil){
			$data_session1 = array(
						'username' => $userid,
						'nama'=>$hasil['0']['nama'],
		       	        'email'=>$hasil['0']['email'], 
						'id'=>$hasil['0']['no'],
						'token'=>"iniadmin",
						);

		    $data_session=$this->security->xss_clean($data_session1);
			$this->session->set_userdata($data_session);
		   	$loginsert = array('EMAIL' => $username,'KETERANGAN' =>  "Sukses Admin - ".$dataop);
			$logging=$this->M_admin->insert('log',$loginsert);
			$this->session->set_userdata($data_session);

		    redirect(base_url("dashboard"));

		} else { 
			$data_session1 = array(
						'username' => $userid,
		       	        'email'=>$username, 
						'token'=>"useriki",
						);
						
		    $data_session=$this->security->xss_clean($data_session1);
		   	$loginsert = array('EMAIL' => $username,'KETERANGAN' =>  "Sukses User - ".$dataop
			);
			$logging=$this->M_admin->insert('log',$loginsert);
			$this->session->set_userdata($data_session);
		    redirect(base_url("home"));	     
	    }
    } else {$loginsert = array('EMAIL' =>  $username,'KETERANGAN' => "gagal - ".$dataop);$logging=$this->M_admin->insert('log',$loginsert);echo "<script>alert('Username/Password Anda SALAH');window.location.href='login';</script>";}	
}