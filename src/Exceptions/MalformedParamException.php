<?php

namespace Livewire\Exceptions;

class MalformedParamException extends \Exception
{
    use BypassViewHandler;

    public function __construct($param)
    {
        parent::__construct(
            "One param is malformed. The param [{$param}] is malformed"
        );
    }
}
