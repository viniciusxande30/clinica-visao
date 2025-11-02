<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // ou ajuste o caminho conforme sua pasta PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servico  = $_POST['servico'];
    $data     = $_POST['data'];
    $telefone = $_POST['telefone'];

    $mail = new PHPMailer(true);

    try {
         // ✅ Configuração UTF-8
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.clinicavisaoslz.com.br'; // Ex: mail.clinicavisao.com.br
        $mail->SMTPAuth = true;
        $mail->Username = 'agendamento@clinicavisaoslz.com.br'; // E-mail autenticado
        $mail->Password = 'Resultado@2025'; // Senha do e-mail
        $mail->SMTPSecure = 'ssl'; // tls ou ssl conforme servidor
        $mail->Port = 465; // 465 para SSL, 587 para TLS

        // Remetente e Destinatário
        $mail->setFrom('agendamento@clinicavisaoslz.com.br', 'Site Clínica Visão');
        $mail->addAddress('agendamento@clinicavisaoslz.com.br', 'Recepção Clínica'); // Destino

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = "Novo Agendamento - Clínica Visão";

        $mail->Body = "
            <h2>📅 Novo agendamento via site</h2>
            <p><strong>Serviço:</strong> $servico</p>
            <p><strong>Data desejada:</strong> $data</p>
            <p><strong>Telefone/WhatsApp:</strong> $telefone</p>
        ";

        // Enviar
        if ($mail->send()) {
            echo "<script>alert('Agendamento enviado com sucesso! Em breve entraremos em contato.');window.location.href='index.php#agendamento';</script>";
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