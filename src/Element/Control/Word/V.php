<?php

namespace Jstewmc\Rtf\Element\Control\Word;

/**
 * The "\v" control word hides text. The "\v" control word is a two-state control
 * word.
 */
class V extends Word
{
    public function run(): void
    {
        $this->style->getCharacter()->setIsVisible(
            $this->parameter === null || (bool)$this->parameter
        );
    }
}
