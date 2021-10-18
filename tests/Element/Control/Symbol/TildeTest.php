<?php

namespace Jstewmc\Rtf\Element\Control\Symbol;

/**
 * A test suite for the tilde control symbol
 *
 * @author     Jack Clayton
 * @copyright  2015 Jack Clayton
 * @license    MIT
 * @since      0.1.0
 */
 
class TildeTest extends \PHPUnit\Framework\TestCase
{
    /* !format() */
    
    /**
     * format() should return string if format is html
     */
    public function testFormatReturnsStringWhenFormatIsHtml()
    {
        $symbol = new Tilde();
        
        $expected = '&nbsp;';
        $actual   = $symbol->format('html');
        
        $this->assertEquals($expected, $actual);
        
        return;
    }
    
    /**
     * format() should return string if format is html
     */
    public function testFormatReturnsStringWhenFormatIsText()
    {
        $symbol = new Tilde();
        
        $expected = html_entity_decode('&nbsp;');
        $actual   = $symbol->format('text');
        
        $this->assertEquals($expected, $actual);
        
        return;
    }
}
