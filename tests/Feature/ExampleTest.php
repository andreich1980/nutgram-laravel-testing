<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use SergiX44\Nutgram\Nutgram;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_bot(): void
    {
        $bot = app(Nutgram::class);
        $bot->hearText('/test')->reply()->assertReplyText('expected-message');
    }
}
