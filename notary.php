<?php

$sep = DIRECTORY_SEPARATOR;
include_once(dirname(__FILE__) . "{$sep}bootstrap.php");

$notariesList = GetNotaryList($db);

/**
 * Gets list with notaries info.
 *
 * @throws \PDOException in case of PDO error.
 *
 * @return array list with notaries.
 */
function GetNotaryList(PDO $db)
{
    $sql = $db->prepare('SELECT full_name, location, sum_tariff, phone_number FROM notary');
    try {
        $sql->execute();
    } catch (\PDOException $e) {
        /* TODO: по хорошему лучше было бы код ошибок каждый раз не дублировать,
         * а запилить структуру со списком часто повторяющихся ошибок
         */
        \core\Logger::CatchError("index::GetNotaryList: PDOException. Information about error: {$e->errorInfo[2]}");
    }

    return $sql->fetchAll();
}

include_once(VIEW_PATH . 'notary.php');
