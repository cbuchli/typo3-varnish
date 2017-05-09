<?php

return [
    'banall' => [
        'path' => '/varnishBanAll',
        'target' => \Snowflake\Varnish\Controller\AjaxController::class . '::banAll'
    ]
];