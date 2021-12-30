<?php

declare(strict_types=1);

namespace EventSauce\ObjectHydrator\Fixtures;

use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

class ClassWithPropertyThatUsesListCasting
{
    public function __construct(
        #[CastListToType('int')]
        public array $ages,
    ) {
    }
}
