<?php

namespace IWasHereFirst2\LaravelMultiMail\Exceptions;

class InvalidEmailSettingException extends \Exception
{
    public function __construct()
    {
        $this->message = 'The email setting is invalid.';
        parent::__construct();
    }
}