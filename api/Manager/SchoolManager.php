<?php

namespace App\Manager;

use App\Classes\DB;
use App\Entity\School;


/**
 * Return School based on id
 * Class SchoolManager
 * @package App\Manager
 */
class SchoolManager {
    public function getSchool(int $id) : School {
        $request = DB::getInstance()->prepare("SELECT * FROM school WHERE id=:id");
        $request->bindValue(':id', $id);
        $request->execute();
        $school_data = $request->fetch();
        $school = new School();
        if ($school_data) {
            $school->setId($school_data['id']);
            $school->setName($school_data['name']);
        }
        return $school;
    }
}