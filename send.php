<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kasipoooooooo@yandex.ru"; // замените на свой email
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = "Сообщение с сайта";
    $message = $_POST["message"];
    $headers = "From: $name <$email>" . "\r\n" . "Reply-To: $email" . "\r\n" . "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        echo "Ваше сообщение было успешно отправлено.";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
}
?>