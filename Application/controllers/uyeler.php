<?php

class uyeler extends Controller {
	
	public function index()
	{
        $list = $this->model("uye")->uyeListe();
        $this->view->deneme ="Merhaba dünya!";
        $this->view->render("static/header");
		
		$data = [
			'data' => $list,
			'ok' => "oldu bu iş"
		];
		
        $this->view->render("uyeler/index", $data);
		$this->view->render("static/footer");
	}
	
}

?>