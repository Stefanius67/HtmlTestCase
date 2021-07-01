<?php
declare(strict_types=1);

use SKien\Test\HtmlTestCase;

/**
 * @author Stefanius <s.kientzler@online.de>
 * @copyright MIT License - see the LICENSE file for details
 */
class HtmlExampleTest extends HtmlTestCase
{
    public function test_ValidHtml() : void
    {
        $strValidHTML =
            "<!DOCTYPE html>" . PHP_EOL .
            "<html>" . PHP_EOL .
            "<head>" . PHP_EOL .
            "    <title>Test</title>" . PHP_EOL .
            "</head>" . PHP_EOL .
            "<body>" . PHP_EOL .
            "    <h1>This is a valid HTML doc</h1>" . PHP_EOL .
            "    <p>Containing H1 header and a paragraph...</p>" . PHP_EOL .
            "</body>";
        
        $this->assertValidHtml($strValidHTML);
    }
    
    public function test_InvalidHtml() : void
    {
        $strInvalidHTML =
            "<!DOCTYPE html>" . PHP_EOL .
            "<html>" . PHP_EOL .
            "<body>" . PHP_EOL .
            "    <h1>This is a invalid HTML doc</h2>" . PHP_EOL .
            "    - missing title tag" . PHP_EOL .
            "    - missing h1/h2 missmatch" . PHP_EOL .
            "    - closing p without opening</p>" . PHP_EOL .
            "</body>";
        
        $this->assertValidHtml($strInvalidHTML);
    }
    
    public function test_ValidHtmlBlock() : void
    {
        $strValidHTML =
        "    <h1>This is valid HTML</h1>" . PHP_EOL .
        "    <p>Containing H1 header and a paragraph...</p>";
        
        $this->assertValidHtmlBlock($strValidHTML);
    }
    
    public function test_InvalidHtmlBlock() : void
    {
        $strInvalidHTML =
        "    <h1>This is invalid HTML</h2>" . PHP_EOL .
        "    - missing title tag" . PHP_EOL .
        "    - missing h1/h2 missmatch" . PHP_EOL .
        "    - closing p without opening</p>";
        
        $this->assertValidHtmlBlock($strInvalidHTML);
    }
    
    public function test_ContainsNoHtmlTag() : void
    {
        $strValidText =
        "# This is plain text" . PHP_EOL .
        "Containing H1 header and a paragraph...";
        
        $this->assertContainsNoHtmlTag($strValidText);
    }
    
    public function test_ContainsNoHtmlTagFail() : void
    {
        $strInvalidText =
        "    <h1>This is valid HTML</h1>" . PHP_EOL .
        "    <p>Containing H1 header and a paragraph...</p>";
        
        $this->assertContainsNoHtmlTag($strInvalidText);
    }
    
    public function test_ExistingTag() : void
    {
        $this->assertHtmlHasTag('<input type="button">', 'input');
    }
    
    public function test_ExistingTagFail() : void
    {
        $this->assertHtmlHasTag('<inpu type="button">', 'input');
    }
    
    public function test_TagEquals() : void
    {
        $this->assertHtmlTagEquals('<div class="myclass">Overview</div>', 'div', 'Overview');
    }
    
    public function test_TagEqualsFail() : void
    {
        $this->assertHtmlTagEquals('<div class="myclass">Overviex</div>', 'div', 'Overview');
    }
    
    public function test_TagContains() : void
    {
        $this->assertHtmlTagContains('<div class="myclass">Overview</div>', 'div', 'Over');
    }
    
    public function test_TagContainsFail() : void
    {
        $this->assertHtmlTagContains('<div class="myclass">Oerview</div>', 'div', 'Over');
    }
    
    public function test_TagExistingAttrib() : void
    {
        $this->assertHtmlTagHasAttrib('<input type="button">', 'input', 'type');
    }
    
    public function test_TagExistingAttribFail() : void
    {
        $this->assertHtmlTagHasAttrib('<input typ="button">', 'input', 'type');
    }
    
    public function test_TagAttribEquals() : void
    {
        $this->assertHtmlTagAttribEquals('<input type="button">', 'input', 'type', 'button');
    }
    
    public function test_TagAttribEqualsFail() : void
    {
        $this->assertHtmlTagAttribEquals('<input type="buton">', 'input', 'type', 'button');
    }
    
    public function test_TagAttribContains() : void
    {
        $this->assertHtmlTagAttribContains('<input type="button">', 'input', 'type', 'but');
    }
    
    public function test_TagAttribContainsFail() : void
    {
        $this->assertHtmlTagAttribContains('<input type="btton">', 'input', 'type', 'but');
    }
    
    public function test_TagHasStyle() : void
    {
        $this->assertHtmlTagHasStyle('<input type="button" style="color: #CC00CC; padding: 0;">', 'input', 'color', '#CC00CC');
    }
    
    public function test_TagHasStyleFail() : void
    {
        $this->assertHtmlTagHasStyle('<input type="button" style="color: #FF00CC; padding: 0;">', 'input', 'color', '#CC00CC');
    }
    
    public function test_ExistingElement() : void
    {
        $this->assertHtmlHasElement('<input id="myID" type="button">', 'myID');
    }
    
    public function test_ExistingElementFail() : void
    {
        $this->assertHtmlHasElement('<input id="anotherID" type="button">', 'myID');
    }
    
    public function test_ElementEquals() : void
    {
        $this->assertHtmlElementEquals('<div id="myID" class="myclass">Overview</div>', 'myID', 'Overview');
    }
    
    public function test_ElementEqualsFail() : void
    {
        $this->assertHtmlElementEquals('<div id="myID" class="myclass">Overvie</div>', 'myID', 'Overview');
    }
    
    public function test_ElementContains() : void
    {
        $this->assertHtmlElementContains('<div id="myID" class="myclass">Overview</div>', 'myID', 'Over');
    }
    
    public function test_ElementContainsFail() : void
    {
        $this->assertHtmlElementContains('<div id="myID" class="myclass">Oerview</div>', 'myID', 'Over');
    }
    
    public function test_ElementExistingAttrib() : void
    {
        $this->assertHtmlElementHasAttrib('<input id="myID" type="button">', 'myID', 'type');
    }
    
    public function test_ElementExistingAttribFail() : void
    {
        $this->assertHtmlElementHasAttrib('<input id="myID" typ="button">', 'myID', 'type');
    }
    
    public function test_ElementAttribEquals() : void
    {
        $this->assertHtmlElementAttribEquals('<input id="myID" type="button">', 'myID', 'type', 'button');
    }
    
    public function test_ElementAttribEqualsFail() : void
    {
        $this->assertHtmlElementAttribEquals('<input id="myID" type="buton">', 'myID', 'type', 'button');
    }
    
    public function test_ElementAttribContains() : void
    {
        $this->assertHtmlElementAttribContains('<input id="myID" type="button">', 'myID', 'type', 'but');
    }
    
    public function test_ElementAttribContainsFail() : void
    {
        $this->assertHtmlElementAttribContains('<input id="myID" type="btton">', 'myID', 'type', 'but');
    }
    
    public function test_ElementHasStyle() : void
    {
        $this->assertHtmlElementHasStyle('<input id="myID" type="button" style="color: #CC00CC; padding: 0;">', 'myID', 'color', '#CC00CC');
    }
    
    public function test_ElementHasStyleFail() : void
    {
        $this->assertHtmlElementHasStyle('<input id="myID" type="button" style="color: #FF00CC; padding: 0;">', 'myID', 'color', '#CC00CC');
    }
}
