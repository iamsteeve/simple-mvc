<?php

namespace App\Interfaces;
defined("APP_PATH") OR die("Acceso denegado");

/**
 * Interface CRUD
 * @package App\Interfaces
 */
interface CRUD
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @return mixed
     */
    public function getById();

    /**
     * @return mixed
     */
    public function create();

    /**
     * @return mixed
     */
    public function update();

    /**
     * @return mixed
     */
    public function delete();
}