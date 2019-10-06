<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaBanco
 *
 * @author Família Muniz
 */
class ContaBanco {
   public $numConta;
   protected $tipo;
   private $dono;
   private $saldo;
   private $status;
   
   function GetnumConta(){
      return $this->numConta;
   }
   function Setnumconta($conta){
       $this->numConta = $conta;
}
    function getTipo(){
        return $this->tipo;
    }
    function setTipo($t){
        $this->tipo=$t;
    }
    function getDono(){
        return $this->dono;
    }
    function setDono($d){
        $this->dono = $d;
    }
    function getSaldo(){
        return $this->saldo;
    }
    function setSaldo($s){
        $this->saldo = $s;
    }
    function getStatus(){
        return $this->status;
    }
    function setStatus($stat){
        $this->status=$stat;
    }
    function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC"){
            $this->setSaldo(50);
            echo "Conta criada com sucesso!";
        }
        elseif ($t == "CP"){
            $this -> setSaldo(150);
            echo "Conta criada com sucesso!";
        }
    }
    function fecharConta(){
        if ($this->getSaldo() < 0){
            echo "<p>A conta está em débito!</p>";
        } elseif($this->getSaldo() > 0){
            echo "<p>A conta ainda tem dinheiro!</p>";
        } else {
          $this->setStatus(false);  
          echo "<p>Conta fechada com sucesso!</p>";
        }
    }
    function depositar($deposito){
       if ($this->getStatus() == true){
        $this->setSaldo($this->getSaldo() + $deposito);
       } elseif ($this->getStatus() == false) {
           echo "<p>Conta fechada, não consigo depositar!</p>";
       }
    }
    function sacar($saque){   
        if ($this->getStatus() == true){
            if ($this -> getSaldo() >= 0){
                if (($this->getsaldo() - $saque) < 0){
                echo "Saldo insuficiente";
                
            }
                 
                elseif($this->getSaldo() >= $saque) {
                $this->setSaldo($this->getSaldo() - $saque);
        }   }} else{
                echo '<p> não posso sacar de uma conta fechada!</p>';
            }
        
    }
    function pagarMensal(){       
        if ($this->getStatus() == true) {
            if ($this->getTipo()=="CC") {
                if ($this->getSaldo() < 20) {
                    echo "saldo insuficiente";
                }
                $this->setSaldo($this->getSaldo() - 12);
            } elseif($this->getTipo()=="CP"){
                if($this->getSaldo() < 20){
                    echo 'saldo insuficiente';
                } else {
                $this->setSaldo($this->getSaldo() - 20);
            }}
        } else {
         echo "Conta fechada!";   
        }
    }
    public function ContaBanco(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }
}
