<?php

require __DIR__ . '/autoload.php';

$form = new \Runn\Html\Form\Form();
$form->login = new \Runn\Html\Form\Fields\TextField();
$form->password = new \Runn\Html\Form\Fields\PasswordField();

echo $form->render();
