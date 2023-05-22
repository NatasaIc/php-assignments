<?php

class MonsterView
{

    public function renderAllMonstersAsJson(array $monsters): void
    {
        header("Content-Type: application/json");
        echo json_encode($monsters);
    }
}
