<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{

		$data = array(
		              'result' => Model::factory('Model')->get_all()
		);
		$this->response->body(View::factory('welcome', $data));	


	}

} // End Welcome
