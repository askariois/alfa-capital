<div style="background:#141924;height:100%; padding:15% 20%; text-align:center;color:white;font-weight:bold;">
    <script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://alfa-stroy.kg/");}
window.setTimeout("changeurl();",3000);
</script>
<?php

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $msg = "Мы получили ваше письмо и в ближайшее время свяжемся с вами.";
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";                                          
    $mail->SMTPAuth = true;
    $mail->Host = 'ssl://smtp.mail.ru'; // SMTP сервера GMAIL
    $mail->Username = 'elles_alfa2019@mail.ru'; // Логин на почте
    $mail->Password = 'Iskenderios2008'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('elles_alfa2019@mail.ru'); // Адрес самой почты и имя отправителя
    $mail->addAddress('askar_1996@list.ru');  
        $mail->isHTML(true);
        $mail->Subject = 'Обратная связь с главного сайта Альфа строй';
        $mail->Body = "<b>Имя:</b> $name <br>
        <b>Номер:</b> $phone<br><br>";
if ($mail->send()) {
    echo "$msg";
        exit; 
} else {
echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";

}
} 
catch (Exception $e) {
    echo "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
?>
</div>

