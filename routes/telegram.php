<?php
/** @var SergiX44\Nutgram\Nutgram $bot */

use Bot\Handlers\MainHandler;
use Bot\Middleware\UserMiddleware;
use SergiX44\Nutgram\Nutgram;

$bot->group(function (Nutgram $bot) {
    $bot->onCommand('start', [MainHandler::class, 'start']);
    $bot->onCallbackQueryData('back', [MainHandler::class, 'back']);

    $bot->onCallbackQueryData('category_{index}', [MainHandler::class, 'category']);
    $bot->onCallbackQueryData('subcategory_{category}_{index}', [MainHandler::class, 'subcategory']);
    $bot->onCallbackQueryData('product_{category}_{subcategory}_{index}', [MainHandler::class, 'product']);
})->middleware(UserMiddleware::class);
