<?php 
/**
* 
*/
class Controller_Books extends Controller
{
	function __construct()
	{
		$this->model = new Model_Books();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('books_view.php', 'template_view.php', $data);
	}
}