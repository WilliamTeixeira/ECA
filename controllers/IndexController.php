<?php
/**
 * Description of IndexController
 * @author wtx
 */
class IndexController {
    public function indexAction()
    {
        //redirecionando para a pagina principal
        header('Location: ?controle=Contato&acao=listarContato');
    }
}
