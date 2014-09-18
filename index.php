<?php
require 'vendor/autoload.php';

date_default_timezone_set("America/New_York");

$app = new \Slim\Slim();
$view = $app->view();
$view->setTemplatesDirectory(__DIR__ . '/templates');

$app->get('/', function () use ($app) {
    $talks_data = json_decode(file_get_contents('data.json'), true);

    $template_data = [
        'title' => 'All Talks',
        'talks_data' => $talks_data,
    ];

    $app->render('talk_index.php', $template_data);
});


$app->run();