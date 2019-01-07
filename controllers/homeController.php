<?php
class homeController extends controller {
    
    public function index() {
        $data = array();
        
        $contatos = new Contatos();
        
        $dados['lista'] = $contatos->getAll();
        
        $this->loadTemplate('home', $data);
    }
    
}