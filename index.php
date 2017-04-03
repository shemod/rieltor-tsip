<?php

$sep = DIRECTORY_SEPARATOR;
include_once(dirname(__FILE__) . "{$sep}bootstrap.php");

$realtorsList = GetRealtorsList($db);

/**
 * Gets rieltors list.
 *
 * @throws \PDOException in case of PDO error.
 *
 * @return array rieltors list.
 */
function GetRealtorsList(PDO $db)
{
    $sql = $db->prepare('SELECT surname, name, patronymic, phone_number FROM realtor');
    try {
        $sql->execute();
    } catch (\PDOException $e) {
        \core\Logger::CatchError("index::GetRieltorsList: PDOException. Information about error: {$e->errorInfo[2]}");
    }

    return $sql->fetchAll();
}

include_once(VIEW_PATH . 'index.php');
