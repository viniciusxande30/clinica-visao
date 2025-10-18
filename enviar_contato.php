<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ajuste o caminho se estiver em outra pasta

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome     = $_POST['nome'];
    $whatsapp = $_POST['whatsapp'];
    $mensagem = !empty($_POST['mensagem']) ? $_POST['mensagem'] : 'Não informado';

    $mail = new PHPMailer(true);

    try {
         // ✅ Configuração UTF-8
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.clinicavisaoslz.com.br'; // Ex: mail.clinicavisao.com.br
        $mail->SMTPAuth = true;
        $mail->Username = 'administrativo@clinicavisaoslz.com.br'; // E-mail autenticado
        $mail->Password = 'Resultado@2025'; // Senha do e-mail
        $mail->SMTPSecure = 'ssl'; // tls ou ssl conforme servidor
        $mail->Port = 465; // 465 para SSL, 587 para TLS

        // Remetente e Destinatário
        $mail->setFrom('administrativo@clinicavisaoslz.com.br', 'Site Clínica Visão');
        $mail->addAddress('administrativo@clinicavisaoslz.com.br', 'Recepção Clínica'); // Destino

        // ✅ Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = "Novo Contato via Site - Clínica Visão";
        $mail->Body = "
            <h2>📩 Nova mensagem via site</h2>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>WhatsApp:</strong> $whatsapp</p>
            <p><strong>Mensagem:</strong> $mensagem</p>
        ";

        // ✅ Enviar
        if ($mail->send()) {
            echo "<script>alert('Mensagem enviada com sucesso! Em breve entraremos em contato.');window.location.href='index.php#contato';</script>";
        } else {
            echo "<script>alert('Não foi possível enviar. Tente novamente.');window.history.back();</script>";
        }

    } catch (Exception $e) {
        echo "<script>alert('Erro: {$mail->ErrorInfo}');window.history.back();</script>";
    }

} else {
    header("Location: index.php");
}
?>