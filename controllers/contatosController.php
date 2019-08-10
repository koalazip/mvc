<?php 
class contatosController extends Controller {

    public function index() {   }

    public function adicionar(){
        $dados = array(
            'error' => ''
        );

        if(!empty($_GET['error'])) {
            $dados['error'] = $_GET['error'];
        }

        $this->loadTemplate('adicionar', $dados);
    }

    public function salvar() {
        if(!empty($_POST['email'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $c = new Contatos();
            if($c->adicionar($nome, $email)){ 
                header("Location: ".BASE_URL);
            } else {
            header("Location: ".BASE_URL."contatos/adicionar?error=exist");
            }
        } else {
            header("Location: ".BASE_URL."contatos/adicionar");
        }
    }

    public function editar($id) {
        if(!empty($id)) {
            $c = new Contatos();

            if(!empty($_POST['nome'])){
                $nome = $_POST['nome'];
                $c->editar($nome, $id);
            } else {
          
                $dados['info'] = $c->getInfo($id);

                if(isset($dados['info']['id'])) {
                    $this->loadTemplate('editar', $dados);
                    exit;
                }
            }
        }
        header("Location: ".BASE_URL);
    }

    public function deletar($id) {
        if(!empty($id)){
            $c = new Contatos();
            $c->deletar($id);
        }
        header("Location: ".BASE_URL);
    }


}