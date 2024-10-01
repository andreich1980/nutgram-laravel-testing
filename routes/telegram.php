<?php

use SergiX44\Nutgram\Nutgram;

/** @var SergiX44\Nutgram\Nutgram $bot */

/*
|--------------------------------------------------------------------------
| Nutgram Handlers
|--------------------------------------------------------------------------
|
| Here is where you can register telegram handlers for Nutgram. These
| handlers are loaded by the NutgramServiceProvider. Enjoy!
|
*/

$bot->onCommand('test', function(Nutgram $bot) {
    $bot->sendMessage('wrong-message');
});
