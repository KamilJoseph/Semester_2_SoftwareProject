<?php

function getUsers (){
    $db = new SQLITE3('C:/xampp/Data/InventorySystem.db');
    $sql = "SELECT * FROM SignUp";
    $stmt = $db->prepare($sql);
    $result = $stmt->execute();

    $arrayResult = [];//prepare an empty array first
    while ($row = $result->fetchArray()){ // use fetchArray(SQLITE3_NUM) - another approach
        $arrayResult [] = $row; //adding a record until end of records
    }
    return $arrayResult;
}
