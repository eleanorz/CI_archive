<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {

	function index()
	{		
		function date_push()
		{
			date_default_timezone_set('America/Los_Angeles');
			echo date('F d, 20y');
			echo "<br>".date('h:iA');
		}
		
		$this->load->view('display_times');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */