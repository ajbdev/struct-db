<?php

namespace StructDb;
use PDO;

class Manager {
    protected $connections;
    protected $selectedConnection;

    public function addConnection(string $alias, PDO $conn, $select = false) {
        $this->connections[$alias] = $conn;

        if (!$this->selectedConnection instanceof PDO || $select) {
            $this->selectedConnection = $conn;
        }
    }

    public function selectConnection(string $alias) {
        $this->selectedConnection = $this->connections[$alias];
    }

}