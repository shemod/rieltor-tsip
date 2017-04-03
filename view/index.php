<?php

/* @var \core\Site $site site module. */
/* @var array $realtorsList list of realtors. */

$site->RenderHeader();
$site->StartContent();

/* Flashes */
if (true === $site->HasFlashes()) {
    $site->GetFlash();
}

/* Content */

$site->RenderLabel('Here Is The List Of The Best Realtors Of The Site!', [
    'class' => 'data-table',
    'style' => 'font-size: 32px;',
]);

$columnNames = [
    'Surname',
    'Name',
    'Patronymic',
    'Phone Number',
];


$site->RenderTable($columnNames, $realtorsList, [
    'class' => 'data-table',
    'style' => 'background-color: yellow;',
]);

$site->RenderDiv('Hola a todos!', [
    'class' => 'data-table',
    'style' => 'font-size: 42px; display: inline',
]);
$site->RenderDiv('Hola a todos!', [
    'class' => 'data-table',
    'style' => 'font-size: 42px; display: inline',
]);
$site->RenderDiv('Hola a todos!', [
    'class' => 'data-table',
    'style' => 'font-size: 42px; display: inline',
]);

$site->EndContent();
$site->RenderFooter();
