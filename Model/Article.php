<?php

namespace MarvinPoehls\ProfitCalculator\Model;

class Article extends Article_parent
{
    protected const VAT = 0.19;
    protected const POSITIVE_PROFIT_COLOR = '#32a852';
    protected const NEGATIVE_PROFIT_COLOR = '#b30202';

    protected $profit;

    public function calculateProfit()
    {
        $buyPrice = $this->oxarticles__oxbprice->value;

        $sellPrice = $this->getPrice()->getPrice();
        $sellPrice = $sellPrice/(100 + self::VAT * 100) * 100;

        $this->profit = $sellPrice - $buyPrice;
        return round($this->profit/$sellPrice * 100, 2) . '%';
    }

    public function getProfitColor()
    {
        if(!isset($this->profit)){
            $this->calculateProfit();
        }

        if ($this->profit > 0) {
            return self::POSITIVE_PROFIT_COLOR;
        }
        return self::NEGATIVE_PROFIT_COLOR;
    }
}