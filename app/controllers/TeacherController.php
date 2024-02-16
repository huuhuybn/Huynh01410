<?php
namespace Huuhu\Huynh01410\controllers;
use Huuhu\Huynh01410\models\Teacher;
class TeacherController extends BaseController
{
    public function getTeacher() {
        $teacher = new Teacher();
        $teachers = $teacher->getListTeacher();
        return $this->render('teacher.index',compact('teachers'));
    }
}