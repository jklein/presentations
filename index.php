<?php
require 'vendor/autoload.php';

date_default_timezone_set("America/New_York");

$app = new \Slim\Slim();
$view = $app->view();
$view->setTemplatesDirectory(__DIR__ . '/templates');

$app->talks_data = json_decode(file_get_contents('data.json'), true);

$app->get('/', function () use ($app) {
    header('Location: http://www.jonathanklein.net');
    die();
});
$app->get('/talks', function () use ($app) {
    $template_data = [
        'title' => 'All Talks',
        'talks_data' => $app->talks_data,
    ];

    $app->render('talk_index.php', $template_data);
});

// Now automatically generate all of the routes
foreach ($app->talks_data as $time => $talks) {
    foreach ($talks as $title => $data) {
        if (preg_match('/^\/[a-zA-Z0-9\_]+$/', $data['page_link']) === 1) {
            $app->get($data['page_link'], function () use ($app, $title, $time) {
                $template_data = [
                    'title' => $title,
                    'data' => $app->talks_data[$time][$title],
                ];

                $app->render('talk.php', $template_data);
            })->name(substr($data['page_link'], 1));
        }
    }
}

$app->run();
