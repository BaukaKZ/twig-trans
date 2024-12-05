<?php

declare(strict_types=1);

namespace jblond\TwigTrans;

use Twig\Attribute\YieldReady;
use Twig\Node\Node;

#[YieldReady]
class EmptyNode extends Node
{
}
