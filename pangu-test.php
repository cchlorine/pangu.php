<?php

require_once 'pangu.php';
use PHPUnit\Framework\TestCase;
class PanguTest extends TestCase
{

  public function testSpacingText() {
    $this->assertEquals('請問 Jackie 的鼻子有幾個？123 個！', pangu('請問Jackie的鼻子有幾個？123個！'));
    $this->assertEquals('請問 Jackie 的鼻子有幾個？123 個！', pangu('請問 Jackie 的鼻子有幾個？123 個！'));
  }


  public function testTilde() {
    $this->assertEquals('前面~ 後面', pangu('前面~後面'));
    $this->assertEquals('前面 ~ 後面', pangu('前面 ~ 後面'));
  }


  public function testBackQuote() {
    $this->assertEquals('前面 ` 後面', pangu('前面`後面'));
  }


  public function testExclamationMark() {
    $this->assertEquals('前面! 後面', pangu('前面!後面'));
    $this->assertEquals('前面! 後面', pangu('前面! 後面'));
    $this->assertEquals('前面 ! 後面', pangu('前面 ! 後面'));
  }


  public function testAt1() {
    $this->assertEquals('請 @vinta 吃大便', pangu('請@vinta吃大便'));
  }


  public function testAt2() {
    $this->assertEquals('請 @陳上進 吃大便', pangu('請@陳上進 吃大便'));
  }


  public function testHash1() {
    $this->assertEquals('前面 #H2G2 後面', pangu('前面#H2G2後面'));
  }


  public function testHash2() {
    $this->assertEquals('前面 #銀河便車指南 後面', pangu('前面#銀河便車指南 後面'));
  }


  public function testHash3() {
    $this->assertEquals('前面 #銀河公車指南 #銀河大客車指南 後面', pangu('前面#銀河公車指南 #銀河大客車指南 後面'));
  }


  public function testHash4() {
    $this->assertEquals('前面 #銀河閃電霹靂車指南# 後面', pangu('前面#銀河閃電霹靂車指南#後面'));
  }


  public function testDollar() {
    $this->assertEquals('前面 $ 後面', pangu('前面$後面'));
  }


  public function testPercent() {
    $this->assertEquals('前面 % 後面', pangu('前面%後面'));
  }


  public function testCarat() {
    $this->assertEquals('前面 ^ 後面', pangu('前面^後面'));
  }


  public function testAmpersand() {
    $this->assertEquals('前面 & 後面', pangu('前面&後面'));
  }


  public function testAsterisk() {
    $this->assertEquals('前面 * 後面', pangu('前面*後面'));
  }


  public function testParenthesis() {
    $this->assertEquals('前面 ( 後面', pangu('前面(後面'));
    $this->assertEquals('前面 ( 後面', pangu('前面 ( 後面'));
    $this->assertEquals('前面 ) 後面', pangu('前面)後面'));
    $this->assertEquals('前面 ) 後面', pangu('前面 ) 後面'));
  }


  public function testParenthesisPair() {
    $this->assertEquals('前面 (中文 123 漢字) 後面', pangu('前面(中文123漢字)後面'));
    $this->assertEquals('前面 (中文 123) 後面', pangu('前面(中文123)後面'));
    $this->assertEquals('前面 (123 漢字) 後面', pangu('前面(123漢字)後面'));
    $this->assertEquals('前面 (中文 123 漢字) tail', pangu('前面(中文123漢字) tail'));
    $this->assertEquals('head (中文 123 漢字) 後面', pangu('head (中文123漢字)後面'));
    $this->assertEquals('head (中文 123 漢字) tail', pangu('head (中文123漢字) tail'));
  }


  public function testMinus() {
    $this->assertEquals('前面 - 後面', pangu('前面-後面'));
  }


  public function testUnderscore() {
    $this->assertEquals('前面_後面', pangu('前面_後面'));
    $this->assertEquals('前面 _ 後面', pangu('前面 _ 後面'));
  }


  public function testPlus() {
    $this->assertEquals('前面 + 後面', pangu('前面+後面'));
  }


  public function testEqual() {
    $this->assertEquals('前面 = 後面', pangu('前面=後面'));
  }


  public function testBrace() {
    $this->assertEquals('前面 { 後面', pangu('前面{後面'));
  }


  public function testBracket() {
    $this->assertEquals('前面 [ 後面', pangu('前面[後面'));
  }


  public function testPipe() {
    $this->assertEquals('前面 | 後面', pangu('前面|後面'));
  }


  public function testBackslash() {
    $this->assertEquals('前面 \\ 後面', pangu('前面\\後面'));
  }


  public function testColon() {
    $this->assertEquals('前面: 後面', pangu('前面:後面'));
    $this->assertEquals('前面: 後面', pangu('前面: 後面'));
    $this->assertEquals('前面 : 後面', pangu('前面 : 後面'));
  }


  public function testSemicolon() {
    $this->assertEquals('前面; 後面', pangu('前面;後面'));
    $this->assertEquals('前面; 後面', pangu('前面; 後面'));
    $this->assertEquals('前面 ; 後面', pangu('前面 ; 後面'));
  }


  public function testQuote() {
    $this->assertEquals('前面 " 後面', pangu('前面"後面'));
    $this->assertEquals('前面 "中文 123 漢字" 後面', pangu('前面 "中文123漢字" 後面'));
    $this->assertEquals('前面 "" 後面', pangu('前面""後面'));
    $this->assertEquals('前面 " " 後面', pangu('前面" "後面'));
  }


  public function testSingleQuote() {
    $this->assertEquals('前面 \' 後面', pangu('前面\'後面'));
    $this->assertEquals('前面 \'中文 123 漢字\' 後面', pangu('前面\'中文123漢字\'後面'));
    $this->assertEquals('前面 \'\' 後面', pangu('前面\'\'後面'));
    $this->assertEquals('前面 \' \' 後面', pangu('前面\' \'後面'));
  }


  public function testLessThan() {
    $this->assertEquals('前面 < 後面', pangu('前面<後面'));
  }


  public function testComma() {
    $this->assertEquals('前面, 後面', pangu('前面,後面'));
    $this->assertEquals('前面, 後面', pangu('前面, 後面'));
    $this->assertEquals('前面, 後面', pangu('前面, 後面'));
  }


  public function testGreaterThan() {
    $this->assertEquals('前面 > 後面', pangu('前面>後面'));
  }


  public function testPeriod() {
    $this->assertEquals('前面. 後面', pangu('前面.後面'));$this->assertEquals('前面. 後面', pangu('前面. 後面'));

    $this->assertEquals('前面. 後面', pangu('前面. 後面'));
  }


  public function testQuestionMark() {
    $this->assertEquals('前面? 後面', pangu('前面?後面'));
    $this->assertEquals('前面? 後面', pangu('前面? 後面'));$this->assertEquals('前面? 後面', pangu('前面? 後面'));
  }

  public function testSlash() {
    $this->assertEquals('前面 / 後面', pangu('前面/後面'));
  }
}