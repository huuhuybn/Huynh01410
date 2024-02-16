<?php

namespace Huuhu\Huynh01410\models;

class Teacher extends BaseModel
{
    function getListTeacher() {
        $sql = "select * from teacher";
        return $this->loadAllRows([],$sql);
    }
}