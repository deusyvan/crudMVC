<?php
class contatosController extends controller{
    
    public function index(){
        
    }
    
    public function add(){
        $dados = array();
        
        
        $this->loadTemplate('add',$dados);
    }
}