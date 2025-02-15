<?php
return [
    'enable' => true,

    'host'               => 'rabbitmq',
    'vhost'              => '/',
    'port'               => 5672,
    'username'           => 'guest',
    'password'           => 'guest',
    'mechanisms'         => 'AMQPLAIN',
    'timeout'            => 10,
    'heartbeat'          => 50,
    'heartbeat_callback' => function(){
    },
    'error_callback'     => function(Throwable $throwable){
    }
];