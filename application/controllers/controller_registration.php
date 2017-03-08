<?php
/**
* 
*/
class Controller_Registration extends Controller
{
	
	function __construct()
	{
		$this->model = new Model_Registration();
		$this->view = new View();
	}

	function action_index()
	{

		$data = $this->model->save_data();
		$this->view->generate('registration_view.php', 'template_view.php', $data);
	}
}