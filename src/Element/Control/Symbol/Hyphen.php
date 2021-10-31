<?php

namespace Jstewmc\Rtf\Element\Control\Symbol;

/**
 * Inserts an optional hyphen
 */
class Hyphen extends Symbol
{
    protected $symbol = '-';

    protected function toHtml(): string
    {
        return $this->toText();
    }

    protected function toText(): string
    {
        return '-';
    }
}
