<?php


namespace App\Entities;


class Task
{
    private $_name;
    private $_date;
    private $_priority;
    private $_status;
    private $_category_id;

    /**
     * Task constructor.
     * @param $_name
     * @param $_date
     * @param $_priority
     * @param $_status
     * @param $_category_id
     */
    public function __construct($_name, $_date, $_priority, $_status, $_category_id)
    {
        $this->_name = $_name;
        $this->_date = $_date;
        $this->_priority = $_priority;
        $this->_status = $_status;
        $this->_category_id = $_category_id;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->_date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->_date = $date;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->_priority;
    }

    /**
     * @param mixed $priority
     */
    public function setPriority($priority)
    {
        $this->_priority = $priority;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->_status = $status;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->_category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->_category_id = $category_id;
    }

}