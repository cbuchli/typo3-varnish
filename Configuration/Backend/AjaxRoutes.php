<?php

return [
    'varnishbanall' => [
        'path' => '/varnish/banAll',
        'target' => \Snowflake\Varnish\Controller\AjaxController::class . '::banAll'
    ]
];