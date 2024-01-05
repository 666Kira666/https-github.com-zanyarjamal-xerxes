<?php

use models\Usrcoment;

class BlogController {

	function index(){

		#variáveis que serao passados para a view
		$send = [];

		#cria o model
		$model = new Usrcoment();

		$send['lista'] = $model->all();

		#chama a view
		render("blog", $send);
		
	}

}

