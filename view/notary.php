<?php

/* @var \core\Site $site site module. */
/* @var array $notariesList list of realtors. */

$site->RenderHeader();
$site->StartContent();

/* Flashes */
if (true === $site->HasFlashes()) {
    $site->GetFlash();
}

/* Content */

$site->RenderLabel('List of Notaries.', [
    'class' => 'data-table',
    'style' => 'font-size: 32px;',
]);

$columnNames = [
    'Full Name',
    'Location',
    'Tariff',
    'Phone Number',
];

$site->RenderTable($columnNames, $notariesList, [
    'class' => 'data-table',
    'style' => 'background-color: yellow;',
]);

$site->EndContent();
$site->RenderFooter();
