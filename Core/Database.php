<?php
namespace Core;
defined("APP_PATH") OR die("Acceso a denegado");

/**
 * Class Database
 * @package Core
 */
class Database extends \PDO {

    /**
     * Database constructor.
     */
    public function __construct(){
        parent::__construct(
            'mysql:host='.DB_HOST.';'.'dbname='.DB_NAME,
            DB_USER,
            DB_PASS,
            array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.DB_CHAR)
        );
    }
}