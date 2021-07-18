<?php

use app\model\StudentRepo;

require_once dirname(__DIR__)."/model/StudentRepo.php";
require_once dirname(__DIR__)."/smarty/libs/Smarty.class.php";
require_once dirname(__DIR__)."/core/globals.inc.php";
class StudentController{

    private $data;
    private Smarty $smarty;
    private StudentRepo $studentRepo;

    public function __construct($smarty,$studentRepo){
        $this->smarty = $smarty;
        $this->studentRepo = $studentRepo;
    }

    public function findAllStudents(){
        $this->data = $this->studentRepo->findAllStudents();
    }

    public function assignTemplateData(){
        $this->smarty->assign("data",$this->data);
    }

}

$smarty = new Smarty();
$studentRepo = new StudentRepo();
$student = new StudentController($smarty,$studentRepo);
$student->findAllStudents();
$student->assignTemplateData();
$smarty->display($TEMPLATE_DIR.'/student.tpl');

?>