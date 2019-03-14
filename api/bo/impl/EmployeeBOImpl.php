<?php
/**
 * Created by IntelliJ IDEA.
 * User: N.Yasiru Sampath
 * Date: 3/13/2019
 * Time: 11:05 PM
 */

require_once __DIR__ . '/../EmployeeBO.php';
require_once __DIR__ . '/../../core/EmployeeDTO.php';
require_once __DIR__ . '/../../dbConnection/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/EmployeeRepoImpl.php';

class EmployeeBOImpl implements EmployeeBO
{

    private $employeeRepo;

    /**
     * EmployeeBOImpl constructor.
     */
    public function __construct()
    {
        $this->employeeRepo = new EmployeeRepoImpl();

    }


    public function addEmployee(EmployeeDTO $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->employeeRepo->setConnection($connection);
        return $this->employeeRepo->addEmployee($dto);
    }

    public function deleteEmployee($empID): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->employeeRepo->setConnection($connection);
        return $this->employeeRepo->deleteEmployee($empID);
    }

    public function searchEmployee($empID): array
    {
        // TODO: Implement searchEmployee() method.
    }

    public function updateEmployee(EmployeeDTO $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $this->employeeRepo->setConnection($connection);
        return $this->employeeRepo->updateEmployee($dto);
    }

    public function getAllEmployees(): array
    {
        $connection = (new DBConnection())->getConnection();
        $this->employeeRepo->setConnection($connection);
        return $this->employeeRepo->getAllEmployees();
    }
}