<?php
	require_once('produto.class.php');
	require_once('usuario.class.php');
	require_once('lib/nusoap.php');
	
	$server = new nusoap_server;
	$server->configureWSDL('produto','urn:produto');
	
	//INSERIR PRODUTO
	function inserirProduto($nome,$serie,
		$tipo,$qtda,$descricao){
		$c1 = new produto();
		$c1->setNome($nome);
		$c1->setSerie($serie);
		$c1->setTipo($tipo);
		$c1->setQtda($qtda);
		$c1->setDescricao($descricao);
		if($c1->inserir()) return true;
		else return false;
	}

	$server->register(
		'inserirProduto',
		array('nome'=>'xsd:string',
			'serie'=>'xsd:float',
			'tipo'=>'xsd:string',
			'qtda'=>'xsd:int',
			'descricao'=>'xsd:string'
		),array('return'=>'xsd:boolean'),
		'urn:produto','urn:produto#inserirProduto',
		'rpc','encoded','Inserir produto'
	);
	
	$server->wsdl->addComplexType(
		'produtoInfo',
		'complexType',
		'struct',
		'all',
		'',
		array(
		'id' => array('name'=>'id','type'=>'xsd:int'),
		'nome' => array('name'=>'nome',
			'type'=>'xsd:string'),
		'serie' => array('name'=>'serie',
			'type'=>'xsd:float'),
		'tipo' => array('name'=>'tipo',
			'type'=>'xsd:string'),
		'qtda' => array(
			'name'=>'qtda','type'=>'xsd:int'),
		'descricao' => array(
			'name'=>'descricao','type'=>'xsd:string')
		)
	);

	//ALTERAR PRODUTO
	function AlterarProduto($id,$nome,$serie,
		$tipo,$qtda,$descricao){
		$c1 = new produto();
		$c1->setId($id);
		$c1->setNome($nome);
		$c1->setSerie($serie);
		$c1->setTipo($tipo);
		$c1->setQtda($qtda);
		$c1->setDescricao($descricao);
		if($c1->alterar()) return true;
		else return false;
	}

	$server->register(
		'AlterarProduto',
		array(
			'id'=>'xsd:int',
			'nome'=>'xsd:string',
			'serie'=>'xsd:string',
			'tipo'=>'xsd:string',
			'qtda'=>'xsd:int',
			'descricao'=>'xsd:string'
		),array('return'=>'xsd:boolean'),
		'urn:produto','urn:produto#AlterarProduto',
		'rpc','encoded','Alterar produto'
	);

	$server->wsdl->addComplexType(
		'produtoInfo',
		'complexType',
		'struct',
		'all',
		'',
		array(
		'id' => array('name'=>'id','type'=>'xsd:int'),
		'nome' => array('name'=>'nome',
			'type'=>'xsd:string'),
		'serie' => array('name'=>'serie',
			'type'=>'xsd:float'),
		'tipo' => array('name'=>'tipo',
			'type'=>'xsd:string'),
		'qtda' => array(
			'name'=>'qtda','type'=>'xsd:int'),
		'descricao' => array(
			'name'=>'descricao','type'=>'xsd:string')
		)
	);

	//BUSCAR TODOS PRODUTOS
	function buscarTodos(){
		$c1 = new produto();
		$c1->procurarID();
				return $r;
	}
	
	$server->register(
		'buscarTodos',
		array(),
		array('return'=>'tns:produtoInfo'),
		'urn:produto','urn:produto#buscarTodos',
		'rpc','encoded','Buscar Todos'
	);

	//PROCURAR POR PRODUTO COM ID	
	function procurarID($id){
		$c1 = new produto();
		$c1->setId($id);
		$r = $c1->buscarId();
		return $r;
	}
	
	$server->register(
		'procurarID',
		array('id'=>'xsd:int'),
		array('return'=>'tns:produtoInfo'),
		'urn:produto','urn:produto#procurarID',
		'rpc','encoded','Procurar por ID'
	);

	function excluirProduto($id){
		$c1 = new produto();
		$c1->setId($id);
		$r = $c1->apagar();
		return $r;
	}
	
	$server->register(
		'excluirProduto',
		array('id'=>'xsd:int'),
		array('return'=>'tns:produtoInfo'),
		'urn:produto','urn:produto#excluirProduto',
		'rpc','encoded','Excluir Produto'
	);

	// USUARIO
	//INSERIR USUARIO
	function inserirUsuario($nome,$sobrenome,
		$email,$datanascimento,$senha){
		$c1 = new usuario();
		$c1->setNome($nome);
		$c1->setSobrenome($sobrenome);
		$c1->setEmail($email);
		$c1->setData($datanascimento);
		$c1->setSenha($senha);
		if($c1->inserir()) return true;
		else return false;
	}

	$server->register(
		'inserirUsuario',
		array('nome'=>'xsd:string',
			'sobrenome'=>'xsd:string',
			'email'=>'xsd:string',
			'datanascimento'=>'xsd:date',
			'senha'=>'xsd:string'
		),array('return'=>'xsd:boolean'),
		'urn:usuario','urn:usuario#inserirUsuario',
		'rpc','encoded','Inserir Usuario'
	);
	
	$server->wsdl->addComplexType(
		'usuarioInfo',
		'complexType',
		'struct',
		'all',
		'',
		array(
		'id' => array('name'=>'id','type'=>'xsd:int'),
		'nome' => array('name'=>'nome',
			'type'=>'xsd:string'),
		'sobrenome' => array('name'=>'sobrenome',
			'type'=>'xsd:string'),
		'email' => array('name'=>'email',
			'type'=>'xsd:string'),
		'datanascimento' => array(
			'name'=>'datanascimento','type'=>'xsd:date'),
		'senha' => array(
			'name'=>'senha','type'=>'xsd:string')
		)
	);
	
	$HTTP_RAW_POST_DATA =
		isset($HTTP_RAW_POST_DATA)?
		$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
	/*$server->service(file_get_contents(
		"php://input"));*/

?>