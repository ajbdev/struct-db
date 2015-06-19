<?php
namespace StructDb\Query;

use PDO;

abstract class AbstractQuery
{
    protected $conn;
    public function __construct(PDO $pdo) {
        $this->conn = $pdo;
    }
}