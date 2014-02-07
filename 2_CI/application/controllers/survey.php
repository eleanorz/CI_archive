<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Survey extends CI_Controller
{
	function index()
	{
		$view_data = array('topic' => 'math');
		$this->load->view('survey/survey.php', $view_data);
	}

	public function add_result()
	{
		if($this->session->userdata('total_visits') === false)
		{
			var_dump($this->session->userdata('total_visits'));
			$this->session->set_userdata('total_visits', 0);
		}
		else
		{
			$total_visits = $this->session->userdata('total_visits');
			$this->session->set_userdata('total_visits', $total_visits+1);
		}

		$this->load->view('survey/result', $this->input->post());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */