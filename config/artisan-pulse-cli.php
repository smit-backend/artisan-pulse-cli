<?php

return [
    'enabled' => env('ARTISAN_PULSE_CLI_ENABLED', true),
    'timeout' => env('ARTISAN_PULSE_CLI_TIMEOUT', 30),
    'log_channel' => env('ARTISAN_PULSE_CLI_LOG', 'stack'),
];
