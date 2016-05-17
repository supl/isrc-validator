<?php

namespace Supl\IsrcValidator;

class Validator
{
    public function validate($isrc)
    {
        return (bool) preg_match('/[A-Z]{2}[A-Z0-9]{3}[0-9]{7}/i', $isrc);
    }
}
