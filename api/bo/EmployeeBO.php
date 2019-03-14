<?php
/**
 * Created by IntelliJ IDEA.
 * User: N.Yasiru Sampath
 * Date: 3/13/2019
 * Time: 11:05 PM
 */

interface EmployeeBO
{

    public function addEmployee(EmployeeDTO $dto): bool;

    public function deleteEmployee($cusID): bool;

    public function searchEmployee($cusID): array;

    public function updateEmployee(EmployeeDTO $dto): bool;

    public function getAllEmployees(): array;

}