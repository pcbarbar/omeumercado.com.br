<?php

require("vendor/autoload.php");

// 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

require_once("sendgrid-php.php");
$email = new \SendGrid\Mail\Mail();
$email->setFrom("paulobarbar@hotmail.com", "Example de Usar");
$email->setSubject("Texto de dentro");
$email->addTo("paulocbarbar@gmail.com", "Example email 2 User");
$email->addContent("Aonde vai esse?", "and easy to do anywhere, even with PHP");
//$email->addContent("text/html", "<strong>and easy está em html esse to do anywhere, even with PHP</strong>");
$sendgrid = new \SendGrid(getenv('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'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
?>