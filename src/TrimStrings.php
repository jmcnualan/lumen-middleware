<?php

namespace App\Http\Middleware\Foundation;

class TrimStrings extends TransformsRequest
{
    /**
     * @inheritDoc
     */
    protected function transform($key, $value)
    {
        return is_string($value) ? trim($value) : $value;
    }
}
