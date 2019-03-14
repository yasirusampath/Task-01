<?php
/**
 * Created by IntelliJ IDEA.
 * User: N.Yasiru Sampath
 * Date: 3/13/2019
 * Time: 11:10 PM
 */

class EmployeeDTO
{
    private $employeeID;
    private $name;
    private $email;
    private $tele;
    private $joinDate;
    private $currentWorkingRoot;
    private $comment;

    /**
     * EmployeeDTO constructor.
     * @param $employeeID
     * @param $name
     * @param $email
     * @param $tele
     * @param $joinDate
     * @param $currentWorkingRoot
     * @param $comment
     */
    public function __construct($employeeID, $name, $email, $tele, $joinDate, $currentWorkingRoot, $comment)
    {
        $this->employeeID = $employeeID;
        $this->name = $name;
        $this->email = $email;
        $this->tele = $tele;
        $this->joinDate = $joinDate;
        $this->currentWorkingRoot = $currentWorkingRoot;
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getEmployeeID()
    {
        return $this->employeeID;
    }

    /**
     * @param mixed $employeeID
     */
    public function setEmployeeID($employeeID): void
    {
        $this->employeeID = $employeeID;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTele()
    {
        return $this->tele;
    }

    /**
     * @param mixed $tele
     */
    public function setTele($tele): void
    {
        $this->tele = $tele;
    }

    /**
     * @return mixed
     */
    public function getJoinDate()
    {
        return $this->joinDate;
    }

    /**
     * @param mixed $joinDate
     */
    public function setJoinDate($joinDate): void
    {
        $this->joinDate = $joinDate;
    }

    /**
     * @return mixed
     */
    public function getCurrentWorkingRoot()
    {
        return $this->currentWorkingRoot;
    }

    /**
     * @param mixed $currentWorkingRoot
     */
    public function setCurrentWorkingRoot($currentWorkingRoot): void
    {
        $this->currentWorkingRoot = $currentWorkingRoot;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }


}