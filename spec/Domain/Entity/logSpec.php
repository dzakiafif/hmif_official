<?php

namespace spec\Domain\Entity;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class logSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Domain\Entity\log');
    }
}
