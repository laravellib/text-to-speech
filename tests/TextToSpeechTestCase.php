<?php

namespace codicastudio\TextToSpeech\Tests;

use codicastudio\TextToSpeech\Providers\TextToSpeechServiceProvider;
use Orchestra\Testbench\TestCase;

class TextToSpeechTestCase extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [TextToSpeechServiceProvider::class];
    }
}
