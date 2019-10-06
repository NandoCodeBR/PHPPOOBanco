<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> <pre>
        <?php
        require_once 'ContaBanco.php';
 $p1 = new ContaBanco();   //jubileu
 $p2 = new ContaBanco();   //creusa
      $p1->AbrirConta("CC");
      $p1->setDono("Jubileu");
      $p1->Setnumconta(5555);
      $p1->depositar(300);
      $p1->sacar(200);
      $p1->pagarMensal();      
      
      
      $p2->AbrirConta("CP");
      $p2->setDono("creusa");
      $p2->Setnumconta(1234);
      $p2->depositar(500);
      $p2->sacar(650);
      $p2->fecharConta();
      
      print_r($p1);
      print_r($p2);
        ?>
        </pre></body>
</html>
