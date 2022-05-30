<?php 
class Product{
    public $id;
    public $qnt;
    public $taille;
    // public $ref;

    public function __construct($id,$qnt,$taille){
        $this->id=$id;
        $this->qnt=$qnt;
        $this->taille=$taille;
        // $this->ref=$ref;
    }

    public function getId(){
        return $this->id;
    }

    public function getQnt(){
        return $this->qnt;
    }

    public function getTaille(){
        return $this->taille;
    }

    public function getRef(){
        return $this->ref;
    }

    public function setId($id){
        $this->id=$id;
    }

    public function setQnt($qnt){
        $this->qnt=$qnt;
    }

    // public function setTaille($taille){
    //     $this->taille=$taille;
    // }

    // public function setRef($ref){
    //     $this->ref=$ref;
    // }
    

    
}
?>