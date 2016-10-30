<?php


class Base extends CI_Controller
{
	

	public function __construct(){
		 parent::__construct();		
	}

	function index(){
            $this->load->view('welcome_message');
		//echo $this->getday(date('Y-m-d'));
	}


	function getday($tanggal) {
		$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
		$day = date("w", mktime(0, 0, 0, substr($tanggal,5,2)+0, substr($tanggal,8,2), substr($tanggal,0,4)));
		return $Hari[$day];
	}


}