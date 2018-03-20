<?php

namespace Validation\Assertions;

use Validation\InputValue;
use Validation\ValidationException;

class Optional extends AbstractAssertion
{
    /**
     * @param InputValue $input
     * @return boolean should continue or not
     * @throws ValidationException
     */
    public function process(InputValue $input)
    {
        if ($input->getValue() === null) {
            return false;
        }
    }
}
