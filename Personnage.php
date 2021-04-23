<?php 

 class Personnage{

   private $id;
    private $nom;
    private $prenom;

    public function _construct($id,$pdo){
        $req="select * from Personnage where id=".id;
        echo $req; ; 
        $RequetStatement=$pdo->query($req);
        if($RequetStatement){
           $tab=$RequetStatement->fetch();
           $this->id=$tab["nom"];
           $this->id=$tab["Prenom"]
        }
    
        $this->nom=$tab["nom"];
        $this->prenom=$tab["Prenom"]
     }
    public function Presentetoi(){
        echo"Je suis".$this->prenom." ".$this->nom;
    }
   
    
 }







































?>