<?php

namespace Design\Behavioral\Visitor;

interface Entity
{
    public function accept(Visitor $visitor): string;
}