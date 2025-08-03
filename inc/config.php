<?php


function config($key)
{
    static $configuration = [
        'phone_number' => '(888) 381-6477',
        'email_id' => 'info@travelntravel.online',
        'address' => '202 Hudson St Suite 700
New York, NY',
        'domain_name' => 'travelntravel.online',
    ];

    return isset($configuration[$key]) ? $configuration[$key] : null;
}
