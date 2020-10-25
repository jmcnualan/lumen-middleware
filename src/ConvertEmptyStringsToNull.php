<?php

namespace App\Http\Middleware\Foundation;

class ConvertEmptyStringsToNull extends TransformsRequest
{
    /**
     * @inheritDoc
     */
    protected function transform($key, $value)
    {
        return is_string($value) && $value === '' ? null : $value;
    }
}
