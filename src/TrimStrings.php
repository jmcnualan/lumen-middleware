<?php

namespace Dmn\Middleware;

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
