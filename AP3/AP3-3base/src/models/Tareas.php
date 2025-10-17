<?php

namespace AP33\Models;

use AP33\Core\DataBase;
class Tareas
{
    public function findAll()
    {
        $db = DataBase::getInstance();
        return $db->executeSQL("SELECT * FROM tareas");
    }

    public function findById($id)
    {
        $db = DataBase::getInstance();
        return $db->executeSQL("SELECT * FROM tareas WHERE id = $id");
    }
}