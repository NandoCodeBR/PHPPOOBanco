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
//Require_once para chamar o arquivo com a classe ContaBanco
        require_once 'ContaBanco.php';
// Criação de dois objetos ContaBanco
 $p1 = new ContaBanco();   //jubileu
 $p2 = new ContaBanco();   //creusa
/*Definindo todos os atributos da classe e chamando o método pagarMensal()
Na qual vai verificar se a conta está fechada ou aberta, verificar o saldo da conta
Caso tudo esteja OK, é debitado 20 do saldo da conta
*/
      $p1->AbrirConta("CC");
      $p1->setDono("Jubileu");
      $p1->Setnumconta(5555);
      $p1->depositar(300);
      $p1->sacar(200);
      $p1->pagarMensal();      
      
/* Criação da segunda conta e chamando o método fecharConta()
Na qual vai verificar se a conta ainda tem dinheiro ou se ainda tem alguma dívida
Caso não tenha dinheiro ou dívidas, a conta é fechada
*/
      $p2->AbrirConta("CP");
      $p2->setDono("creusa");
      $p2->Setnumconta(1234);
      $p2->depositar(500);
      $p2->sacar(650);
      $p2->fecharConta();
      
/* Mostra na tela os atributos de cada classe
*/
      print_r($p1);
      print_r($p2);
        ?>
        </pre></body>
</html>
