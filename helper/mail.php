<?php

include('PHPMailer/Exception.php');
include('PHPMailer/PHPMailer.php');
include('PHPMailer/SMTP.php');

// Start with PHPMailer class
use PHPMailer\PHPMailer\PHPMailer;
// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->SMTPDebug = 0;

$mail->Host = 'smtp.gmail.com';
$mail->Username = 'desafiolinx1@gmail.com';
$mail->Password = '@wdcb8r3';
$mail->Port = 587;
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

$mail->setFrom('contato@linx.com.br', '[Linx Impulse]');
$mail->addAddress($_POST['email'],$_POST['name']);
$mail->Subject = $_POST['name'].', um amigo seu te indicou estas ofertas!';

// Set HTML 
$mail->isHTML(TRUE);

$mail->Body  = '<html>';
$mail->Body .= '<body style="margin: 0;">';
$mail->Body .= '<center margin="0">';
$mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="600">';
$mail->Body .= '<tr bgcolor="#707070">';
$mail->Body .= '<td height="30"></td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr bgcolor="#707070">';
$mail->Body .= '<td>';
$mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
$mail->Body .= '<tr>';
$mail->Body .= '<td width="60"></td>';
$mail->Body .= '<td align="center">';
$mail->Body .= '<p style="margin: 0;">';
$mail->Body .= '<font face="helvetica" size="4" color="white">uma seleção de produtos</font>';
$mail->Body .= '</p>';
$mail->Body .= '<h1 style="margin: 0;">';
$mail->Body .= '<font face="helvetica" size="7" color="white">especial para você</font>';
$mail->Body .= '</h1>';
$mail->Body .= '<p style="margin: 0;">';
$mail->Body .= '<font face="helvetica" size="3" color="white">Todos os produtos desta lista foram selecionados a partir <br> da sua navegação. Aproveite!</font>';
$mail->Body .= '</p>';
$mail->Body .= '</td>';
$mail->Body .= '<td width="60"></td>';
$mail->Body .= '</tr>';
$mail->Body .= '</table>';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td height="40">';
$mail->Body .= '<img src="http://desafio-fullstack-developer.herokuapp.com/assets/img/img1.jpg" border="0" style="display: block;">';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>';
$mail->Body .= '<table border="0" cellpading="0" cellspacing="0" width="100%">';
$mail->Body .= '<tr>';
$mail->Body .= '<td width="15"></td>';
$mail->Body .= '<td>';
$mail->Body .= '<h5>';
$mail->Body .= '<font face="helvetica" size="5" color="#707070">Olá, '. $_POST['name'] .'</font>';
$mail->Body .= '</h5>';
$mail->Body .= '<p style="margin: 0;">';
$mail->Body .= '<font face="helvetica" size="2" color="#707070">Fizemos uma lista especial de produtos apenas para você. Isso mesmo: nesta lista temos só produtos que você pode gostar. Um amigo seu lhe recomendou esta lista especial! Olha só:</font>';
$mail->Body .= '</p>';
$mail->Body .= '</td>';
$mail->Body .= '<td width="15"></td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td></td>';
$mail->Body .= '<td height="60"></td>';
$mail->Body .= '<td></td>';
$mail->Body .= '</tr>';
$mail->Body .= '</table>';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>';
$mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
$mail->Body .= '<tr>';
$mail->Body .= '<td width="80"></td>';
$mail->Body .= '<td width="200" height=150>';
$mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
$mail->Body .= '<tr>';
$mail->Body .= '<td style="border: solid 1px #070707; margin-bottom: 10px; display: block;">';
$mail->Body .= '<img src="http://imagens.pontofrio.com.br/Control/ArquivoExibir.aspx?IdArquivo=6624363" alt="Product Number 1" border="0" style="display: block; margin: auto;">';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>';
$mail->Body .= '<p style="margin-bottom: 10px;">';
$mail->Body .= '<font face="helvetica" size="3" color="#707070">Product Number 1</font>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-bottom: 10px;">';
$mail->Body .= '<font face="helvetica" size="2" color="#707070">Product long description number 1 just to make more than one like of text.</font>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-top: 0; margin-bottom: 7px;">';
$mail->Body .= '<font face="helvetica" size="2" color="#707070">De: R$ 264,00</font>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-top: 0; margin-bottom: 7px;">';
$mail->Body .= '<strong>';
$mail->Body .= '<font face="helvetica" size="3" color="#707070">De: R$ 249,00</font>';
$mail->Body .= '</strong>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-top: 0; margin-bottom: 10px;">';
$mail->Body .= '<font face="helvetica" size="2" color="#707070">ou 10 de R$ 24,90</font>';
$mail->Body .= '</p>';
$mail->Body .= '<a href="">';
$mail->Body .= '<button style="width: 100%; background: white; border: solid 1px #707070; border-radius: 5px; padding: 8px; font-size: 14px;">Comprar</button>';
$mail->Body .= '</a>';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '</table>';
$mail->Body .= '</td>';
$mail->Body .= '<td width="40"></td>';
$mail->Body .= '<td width="200" height=150>';
$mail->Body .= '<table border="0" cellpadding="0" cellspacing="0" width="100%">';
$mail->Body .= '<tr>';
$mail->Body .= '<td style="border: solid 1px #070707; margin-bottom: 10px; display: block;">';
$mail->Body .= '<img src="http://imagens.pontofrio.com.br/Control/ArquivoExibir.aspx?IdArquivo=6829158" alt="Product Number 2" border="0" style="display: block; margin: auto;">';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td>';
$mail->Body .= '<p style="margin-bottom: 10px;">';
$mail->Body .= '<font face="helvetica" size="3" color="#707070">Product Number 2</font>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-bottom: 10px;">';
$mail->Body .= '<font face="helvetica" size="2" color="#707070">Product long description number 2 just to make more than one like of text.</font>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-top: 0; margin-bottom: 7px;">';
$mail->Body .= '<font face="helvetica" size="2" color="#707070">De: R$ 105,00</font>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-top: 0; margin-bottom: 7px;">';
$mail->Body .= '<strong>';
$mail->Body .= '<font face="helvetica" size="3" color="#707070">De: R$ 72,00</font>';
$mail->Body .= '</strong>';
$mail->Body .= '</p>';
$mail->Body .= '<p style="margin-top: 0; margin-bottom: 10px;">';
$mail->Body .= '<font face="helvetica" size="2" color="#707070">ou 10 de R$ 7,20</font>';
$mail->Body .= '</p>';
$mail->Body .= '<a href="">';
$mail->Body .= '<button style="width: 100%; background: white; border: solid 1px #707070; border-radius: 5px; padding: 8px; font-size: 14px;">Comprar</button>';
$mail->Body .= '</a>';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '</table>';
$mail->Body .= '</td>';
$mail->Body .= '<td width="80"></td>';
$mail->Body .= '</tr>';
$mail->Body .= '</table>';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td height="60"></td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td align="center">';
$mail->Body .= '<a href="">';
$mail->Body .= '<button style="width: 60%; background: white; border: solid 1px #707070; border-radius: 5px; padding: 8px; font-size: 14px;">Tem muito mais aqui. Vem ver!</button>';
$mail->Body .= '</a>';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td height="50"></td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr>';
$mail->Body .= '<td height="55">';
$mail->Body .= '<img src="http://desafio-fullstack-developer.herokuapp.com/assets/img/img2.jpg" border="0" style="display: block;">';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '<tr bgcolor="#707070">';
$mail->Body .= '<td align="center" height="120">';
$mail->Body .= '<p>';
$mail->Body .= '<font face="helvetica" size="2" color="white">Testando suas habilidades em HTML, CSS e JS. <br> Linx Impulse <br> 2021</font>';
$mail->Body .= '</p>';
$mail->Body .= '</td>';
$mail->Body .= '</tr>';
$mail->Body .= '</table>';
$mail->Body .= '</center>';
$mail->Body .= '</body>';
$mail->Body .= '</html>';


// send the message
if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    // echo 'Message has been sent';
    header('Location: http://desafio-fullstack-developer.herokuapp.com/?success=1');
    exit();
}
