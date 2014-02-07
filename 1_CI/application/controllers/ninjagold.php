<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninjagold extends CI_Controller {

	function index()
	{
		$this->load->view("gold_index_view.php");
	}

	function farm()
	{
		echo "you made it to the farm!";
		?>
			<form action="../ninjagold">
				<input type="submit" value="back">
			</form>
		<?php
	}

	function house()
	{
		echo "you made it to the house!";
	}

	function casino()
	{
		echo "you made it to the casino!";
	}

	function cave()
	{
		echo "you made it to the cave!";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */