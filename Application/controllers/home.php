<?php

class home extends Controller {
	
	public function index()
	{
		$a = new dene;
		$data = [
			'datax' => $a
		];
		
		
		$this->view->render("static/header");
		$this->view->render("home/index",$data);
		$this->view->render("static/footer");
	}
}

?>