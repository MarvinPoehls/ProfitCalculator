<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'profitcalculator',
    'title'  => [
        'de' => 'Gewinnberechner',
        'en' => 'Profit calculator',
    ],
    'description'  => [
        'de' => 'Modul welches den Gewinn für jeden Artikel berechnet und im Admin ausgibt.',
        'en' => 'Module which calculates the profit for each article and displays it in the admin.',
    ],
    'thumbnail'    => 'profitCalc_100_100.png',
    'version'      => '1.0',
    'author'       => 'Marvin Poehls',
    'url'          => 'https://www.fatchip.de/',
    'email'        => 'marvin.poehls@fatchip.de',
    'controllers'  => [],
    'extend'       => [
        \OxidEsales\Eshop\Application\Model\Article::class => \MarvinPoehls\ProfitCalculator\Model\Article::class,
    ],
    'blocks' => [
        [
            'template' => 'article_main.tpl',
            'block' => 'admin_article_main_form',
            'file' => 'profitcalculator_admin_article_main_form.tpl',
        ],
        [
            'template' => 'article_list.tpl',
            'block' => 'admin_article_list_item',
            'file' => 'profitcalculator_admin_article_list_item.tpl',
        ]
    ],
    'settings' => [],
    'events' => []
];