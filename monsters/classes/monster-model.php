<?php

require_once 'db.php';

class MonsterModel extends DB
{

    protected $table = "monsters";

    public function getAllMonsters()
    {
        return $this->getAll($this->table);
    }
}
