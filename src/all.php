<?php

include __DIR__ . '/History.php';
include __DIR__ . '/HistoryItem.php';

$items = array ();


$items[] = new \Nsimaria\Socrates\HistoryItem(
    array(
        'dateIn' => '2015-11-26 16:02',
        'dateOut' => null,
        'textIn' => 'Portugal gets Antonio Costa as new PM after election winner only lasted 11 days',
        'textOut' => null,
        'sourceIn' => 'http://www.theguardian.com/world/2015/nov/25/portugal-gets-new-leftwing-pm-after-election-winner-only-lasted-11-days',
        'sourceOut' => null,
    )
);

$history = new \Nsimaria\Socrates\History($items);
