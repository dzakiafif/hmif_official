<?php

namespace spec\Domain\Repository;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArrayUserRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Domain\Repository\ArrayUserRepository');
    }
}
