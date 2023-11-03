<?php

namespace MarvinPoehls\ProfitCalculator\Tests\Unit\Model;

use MarvinPoehls\ProfitCalculator\Model\Article;

class ArticleModelTest extends \OxidEsales\TestingLibrary\UnitTestCase
{
    public function testCalculateProfit()
    {
        $articleMock = $this->getMockBuilder(Article::class)->disableOriginalConstructor()->getMock();

        $articleMock->method('calculateProfit')->with(60, 119)->willReturn('40%');
    }

    public function testGetProfitColor()
    {
        $articleMock = $this->getMockBuilder(Article::class)->disableOriginalConstructor()->getMock();

        $articleMock->method('getProfitColor')->with(60,119)->willReturn('#32a852');
        $articleMock->method('getProfitColor')->with(100,1)->willReturn('#b30202');
    }
}