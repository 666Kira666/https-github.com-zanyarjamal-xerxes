<?php
use models\Usrlog;

/**
* Tutorial CRUD
* Autor:Alan Klinger 05/06/2017
*/

#A classe devera sempre iniciar com letra maiuscula
#terá sempre o mesmo nome do arquivo
#e precisa terminar com a palavra Controller
class AdmPostagemController {

	/**
	* Para acessar http://localhost/NOMEDOPROJETO/usuarios/index
	**/
	function index($id = null){

		#variáveis que serao passados para a view
		$send = [];

		#cria o model
		$model = new Usrlog();
		
		
		$send['data'] = null;
		#se for diferente de nulo é porque estou editando o registro
		if ($id != null){
			#então busca o registro do banco
			$send['data'] = $model->findById($id);
		}

		#busca todos os registros
		$send['lista'] = $model->all();
		$usrcomentTexto = new Usrlog();
		$send['usrcoment'] = [0=>"Escolha uma opção", 1=>"Usuário comum", 2=>"Admin"];

		#chama a view
		render("admpostagem", $send);
	}

	
	function salvar($id=null){

		$model = new Usrlog();
		$_POST["usrlog_id"] = 1;
		if ($id == null){
			$id = $model->save($_POST);
		} else {
			$id = $model->update($id, $_POST);
		}
		
		redirect("admpostagem/index/$id");
	}

	function deletar(int $id){
		
		$model = new Usrlog();
		$model->delete($id);

		redirect("admpostagem/index/$id");
	}


}
