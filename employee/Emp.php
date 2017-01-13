<?php

/**
 * Created by PhpStorm.
 * User: Lonmee
 * Date: 1/13/17
 * Time: 12:47 AM
 */
class Emp
{
    private $id, $name, $grade, $email, $salary;

    public function __construct($id, $name, $grade, $email, $salary)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
        $this->email = $email;
        $this->salary = $salary;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return integer
     */
    public function getSalary()
    {
        return $this->salary;
    }

}