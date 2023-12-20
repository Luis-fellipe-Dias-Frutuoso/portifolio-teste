<?php
$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$celular = addcslashes($_POST['celular']);
$mensagem = addcslashes($_POST['mensagem']);
$para = "luisfellipe421@gmail.com";
$assunto = "coleta - portifolio";
$corpo = "Nome:" . $nome . "\n" . "E-mail: " . $email . "\n" . "Telefone: " . $celular . "\n" . "Mensagem: " . $mensagem . "\n";
$cabeca = "From: luisfellipediasgarcia@gmail.com" . "\n" . "Reply-To: " . $email . "\n" . "X-Mailer: PHP/" . phpversion();
if (mail($para, $assunto, $corpo, $cabeca)) {
    echo "E-mail enviado com sucesso";
} else {
    echo "Houve um erro";
}
?>
