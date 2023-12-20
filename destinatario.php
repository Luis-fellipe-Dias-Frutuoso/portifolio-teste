<?php
$nome=addcslashes($_POST['nome']);
$email =addcslashes($_POST['email']);
$celular=addcslashes($_POST['celular']);
$mensagem=addcslashes($_POST['mensagem']);
$para="luisfellipe421@gmail.com"
$assunto="coleta - portifolio"
$corpo="Nome:".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$celula."\n"."Mensagem: ".$mensagem."\n";
$cabeca="from:luisfellipediasgarcia@gmail.com"."\n"."reply-to: ". $email."\n"."X=Mailer:PHP/".phpversion();
if(mail($para,$assunto,$corpo,$cabeca)){
    echo("e-mail enviado com sucesso")
}else{
    echo("houve um erro")
}
?>
