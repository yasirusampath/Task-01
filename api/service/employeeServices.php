<?php
/**
 * Created by IntelliJ IDEA.
 * User: N.Yasiru Sampath
 * Date: 3/13/2019
 * Time: 10:51 PM
 */



require_once __DIR__ . '/../bo/impl/EmployeeBOImpl.php';
require_once __DIR__ . '/../core/EmployeeDTO.php';


$method = $_SERVER['REQUEST_METHOD'];
$EmployeeBusiness = new EmployeeBOImpl();
switch ($method) {
    case "POST":

        $operation = $_POST['operation'];

        switch ($operation) {
            case "add":
                $employeeID=$_POST['employeeID'];
                $name=$_POST['name'];
                $email=$_POST['email'];
                $tele=$_POST['tele'];
                $joinDate=$_POST['joinedDate'];
                $currentWorkingRoot=$_POST['workingRoutes'];
                $comment=$_POST['comment'];

                $EmployeeTempObject = new EmployeeDTO($employeeID,$name,$email,$tele,$joinDate,$currentWorkingRoot,$comment);
                echo $EmployeeBusiness->addEmployee($EmployeeTempObject);
                break;
            case "getAll";
                echo json_encode($EmployeeBusiness->getAllEmployees());
                break;
            case "delete":
                $employeeID = $_POST['employeeID'];
                echo $EmployeeBusiness->deleteEmployee($employeeID);
                break;
            case "update":

                $editemployeeID=$_POST['employeeIDedit'];
                $editname=$_POST['nameedit'];
                $editemail=$_POST['emailedit'];
                $edittele=$_POST['teleedit'];
                $editjoinDate=$_POST['joinedDateedit'];
                $editcurrentWorkingRoot=$_POST['workingRoutesedit'];
                $editcomment=$_POST['commentedit'];

                $EmployeeTempObject = new EmployeeDTO($editemployeeID,$editname,$editemail,$edittele,$editjoinDate,$editcurrentWorkingRoot,$editcomment);
                echo $EmployeeBusiness->updateEmployee($EmployeeTempObject);
                break;
            case "search":
                echo json_encode($EmployeeBusiness->searchEmployee($employeeID));
        }
        break;

    case "GET":
        $operation = $_GET['operation'];

        switch ($operation) {

            case "getAll";
                echo json_encode($EmployeeBusiness->getAllEmployees());
                break;
        }
        break;
}











