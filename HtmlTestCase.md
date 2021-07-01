# Class HtmlTestCase

<a name="htmltestcase"></a>
Full name:    **\SKien\Test\HtmlTestCase**    
Base class:    **\PHPUnit\Framework\TestCase**
---

**Extension of PHPUnit Testcase for HTML testing.**

This class supports several methods to test/assert for
 - valid HTML5 document/block
 - existing HTML tag/element/attribute
 - HTML tag/element/attribute value equals expected
 - HTML tag/element/attribute contains expected part
 - given text is plain text (means, text doesn't contain any HTML tags)

<b>To test for valid HTML5 doc/block the PHP libraries cURL and OpenSSL required.</b>






## Overview
| Method | Description |
|:---  |:---         |
| [assertContainsNoHtmlTag](#assertcontainsnohtmltag) |Assert that the given text don't contain any HTML tags (-> contains plain text).|
| [assertHtmlElementAttribContains](#asserthtmlelementattribcontains) |Assert that the given HTML string contains element with requested ID and specified attrib containing expected part.|
| [assertHtmlElementAttribEquals](#asserthtmlelementattribequals) |Assert that the given HTML string contains element with requested ID and specified attrib having expected value.|
| [assertHtmlElementContains](#asserthtmlelementcontains) |Assert that the given HTML string contains element with requested ID containing expected part.|
| [assertHtmlElementEquals](#asserthtmlelementequals) |Assert that the given HTML string contains element with requested ID and expected value.|
| [assertHtmlElementHasAttrib](#asserthtmlelementhasattrib) |Assert that the given HTML string contains element with requested ID and specified attrib.|
| [assertHtmlElementHasStyle](#asserthtmlelementhasstyle) |Assert that the given HTML string contains element with requested ID and specified style having expected value.|
| [assertHtmlHasElement](#asserthtmlhaselement) |Assert that the given HTML string contains element with requested ID.|
| [assertHtmlHasTag](#asserthtmlhastag) |Assert that the given HTML string contains the requested tag.|
| [assertHtmlTagAttribContains](#asserthtmltagattribcontains) |Assert that the given HTML string contains the requested tag with specified attrib containing expected part.|
| [assertHtmlTagAttribEquals](#asserthtmltagattribequals) |Assert that the given HTML string contains the requested tag with specified attrib having expected value.|
| [assertHtmlTagContains](#asserthtmltagcontains) |Assert that the given HTML string contains the requested tag containing expected part.|
| [assertHtmlTagEquals](#asserthtmltagequals) |Assert that the given HTML string contains the requested tag with expected value.|
| [assertHtmlTagHasAttrib](#asserthtmltaghasattrib) |Assert that the given HTML string contains the requested tag with specified attrib.|
| [assertHtmlTagHasStyle](#asserthtmltaghasstyle) |Assert that the given HTML string contains the requested tag with specified style having expected value.|
| [assertValidHtml](#assertvalidhtml) |Assert that the given string is a valid HTML5 document.|
| [assertValidHtmlBlock](#assertvalidhtmlblock) |Assert that the given string is a valid HTML5 block.|

## Methods

### assertContainsNoHtmlTag
Assert that the given text don't contain any HTML tags (-> contains plain text).

```php
public HtmlTestCase::assertContainsNoHtmlTag(string $text, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `text` | **string** | The text to test |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlElementAttribContains
Assert that the given HTML string contains element with requested ID and specified attrib containing expected part.

```php
public HtmlTestCase::assertHtmlElementAttribContains(string $strHTML, string $strID, string $strAttrib, string $strContains, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML string |
| `strID` | **string** | ID of the element we are locking for |
| `strAttrib` | **string** | Attrib to test |
| `strContains` | **string** | Part the attrib value must contain |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlElementAttribEquals
Assert that the given HTML string contains element with requested ID and specified attrib having expected value.

```php
public HtmlTestCase::assertHtmlElementAttribEquals(string $strHTML, string $strID, string $strAttrib, string $strExpect, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strID` | **string** | ID of the element we are locking for |
| `strAttrib` | **string** | Attrib to test |
| `strExpect` | **string** | Expected attribute value |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlElementContains
Assert that the given HTML string contains element with requested ID containing expected part.

```php
public HtmlTestCase::assertHtmlElementContains(string $strHTML, string $strID, string $strContains, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strID` | **string** | ID of the element we are locking for |
| `strContains` | **string** | Part the node value must contain |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlElementEquals
Assert that the given HTML string contains element with requested ID and expected value.

```php
public HtmlTestCase::assertHtmlElementEquals(string $strHTML, string $strID, string $strExpect, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strID` | **string** | ID of the element we are locking for |
| `strExpect` | **string** | Expected node value |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlElementHasAttrib
Assert that the given HTML string contains element with requested ID and specified attrib.

```php
public HtmlTestCase::assertHtmlElementHasAttrib(string $strHTML, string $strID, string $strAttrib, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strID` | **string** | ID of the element we are locking for |
| `strAttrib` | **string** | Attrib to test |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlElementHasStyle
Assert that the given HTML string contains element with requested ID and specified style having expected value.

```php
public HtmlTestCase::assertHtmlElementHasStyle(string $strHTML, string $strID, string $strStyle, string $strExpect, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML string |
| `strID` | **string** | ID of the element we are locking for |
| `strStyle` | **string** | The style to test |
| `strExpect` | **string** | The expected value |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlHasElement
Assert that the given HTML string contains element with requested ID.

```php
public HtmlTestCase::assertHtmlHasElement(string $strHTML, string $strID, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strID` | **string** | ID of the element we are locking for |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlHasTag
Assert that the given HTML string contains the requested tag.

```php
public HtmlTestCase::assertHtmlHasTag(string $strHTML, string $strTag, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strTag` | **string** | The Tag we are locking for |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlTagAttribContains
Assert that the given HTML string contains the requested tag with specified attrib containing expected part.

```php
public HtmlTestCase::assertHtmlTagAttribContains(string $strHTML, string $strTag, string $strAttrib, string $strContains, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML string |
| `strTag` | **string** | The Tag we are locking for |
| `strAttrib` | **string** | Attrib to test |
| `strContains` | **string** | Part the attrib value must contain |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlTagAttribEquals
Assert that the given HTML string contains the requested tag with specified attrib having expected value.

```php
public HtmlTestCase::assertHtmlTagAttribEquals(string $strHTML, string $strTag, string $strAttrib, string $strExpect, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strTag` | **string** | The Tag we are locking for |
| `strAttrib` | **string** | Attrib to test |
| `strExpect` | **string** | Expected attribute value |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlTagContains
Assert that the given HTML string contains the requested tag containing expected part.

```php
public HtmlTestCase::assertHtmlTagContains(string $strHTML, string $strTag, string $strContains, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strTag` | **string** | The Tag we are locking for |
| `strContains` | **string** | Part the node value must contain |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlTagEquals
Assert that the given HTML string contains the requested tag with expected value.

```php
public HtmlTestCase::assertHtmlTagEquals(string $strHTML, string $strTag, string $strExpect, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strTag` | **string** | The Tag we are locking for |
| `strExpect` | **string** | Expected node value |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlTagHasAttrib
Assert that the given HTML string contains the requested tag with specified attrib.

```php
public HtmlTestCase::assertHtmlTagHasAttrib(string $strHTML, string $strTag, string $strAttrib, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strTag` | **string** | The Tag we are locking for |
| `strAttrib` | **string** | Attrib to test |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertHtmlTagHasStyle
Assert that the given HTML string contains the requested tag with specified style having expected value.

```php
public HtmlTestCase::assertHtmlTagHasStyle(string $strHTML, string $strTag, string $strStyle, string $strExpect, string $strMessage = null) : void

```


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML string |
| `strTag` | **string** | The Tag we are locking for |
| `strStyle` | **string** | The style to test |
| `strExpect` | **string** | The expected value |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertValidHtml
Assert that the given string is a valid HTML5 document.

```php
public HtmlTestCase::assertValidHtml(string $strHTML, string $strMessage = null) : void

```
Calls https://html5.validator.nu through cURL request.
More info can be found on https://github.com/validator/validator/wiki/Service-%C2%BB-HTTP-interface

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---
### assertValidHtmlBlock
Assert that the given string is a valid HTML5 block.

```php
public HtmlTestCase::assertValidHtmlBlock(string $strHTML, string $strMessage = null) : void

```
The HTML block is enclosed in a valid HTML5 Document definition before
validation.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `strHTML` | **string** | The HTML to validate |
| `strMessage` | **string** | Optional Message |


[[go to top]](#htmltestcase)

---

