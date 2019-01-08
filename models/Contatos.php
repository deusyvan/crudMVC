<?php 

class  Contatos extends model{
    
    public function getAll(){
       $array = array();
       
       $sql = "SELECT * FROM contatos";
       $sql = $this->db->query($sql);
       
       if($sql->rowCount() > 0){
           $array = $sql->fetchAll();
       }
       
       return $array;
    }
    
    public function add($nome, $email){
        if ($this->emailExists($email) == FALSE){
            $sql = "INSERT INTO contatos (nome,email) VALUES (:nome, :email)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':email',$email);
            $sql->execute();
        }
    }
    
    private function emailExists($email){
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email',$email);
        $sql->execute();
        
        if ($sql->rowCount()>0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
}