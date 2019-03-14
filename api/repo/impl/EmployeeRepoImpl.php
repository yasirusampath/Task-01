<?php
/**
 * Created by IntelliJ IDEA.
 * User: N.Yasiru Sampath
 * Date: 3/13/2019
 * Time: 11:04 PM
 */


require_once __DIR__ . '/../EmployeeRepo.php';
require_once __DIR__ . '/../../dbConnection/DBConnection.php';
require_once __DIR__ . '/../../core/EmployeeDTO.php';

class EmployeeRepoImpl implements EmployeeRepo
{
    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addEmployee(EmployeeDTO $dto): bool
    {
        $result = $this->connection->query("INSERT INTO employee VALUES('{$dto->getEmployeeID()}','{$dto->getName()}','{$dto->getEmail()}','{$dto->getTele()}','{$dto->getJoinDate()}','{$dto->getCurrentWorkingRoot()}','{$dto->getComment()}')");
        return $result;
    }

    public function deleteEmployee($empID): bool
    {
        $result = $this->connection->query("DELETE FROM employee WHERE employee.empID = '{$empID}'");
        return $result;
    }

    public function searchEmployee($empID): array
    {
        // TODO: Implement searchEmployee() method.
    }

    public function updateEmployee(EmployeeDTO $dto): bool
    {
        $result = $this->connection->query("UPDATE employee SET  employee.NAME = '{$dto->getName()}',employee.email = '{$dto->getEmail()}', employee.tele = '{$dto->getTele()}',employee.joinDate = '{$dto->getJoinDate()}' ,employee.currentWorkingRoot = '{$dto->getCurrentWorkingRoot()}' ,employee.COMMENT = '{$dto->getComment()}' WHERE employee.empID = '{$dto->getEmployeeID()}'");
        return $result;
    }

    public function getAllEmployees(): array
    {
        $result = $this->connection->query("Select * from employee ");
        return $result->fetch_all();
    }


}