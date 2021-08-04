<?php


namespace App\O;


class DataBaseSave implements ISaver
{
    private \mysqli $mysqli;

    private string $host;

    private string $user;

    private string $password;

    private string $db;

    public function __construct(string $host, string $user, string $password, string $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    public function connect(): void
    {
        $this->mysqli = new \mysqli($this->host, $this->user, $this->password, $this->db);
        if ($this->mysqli->connect_error) {
            exit('Connection error');
        }
    }

    public function save(string $data): void
    {
        $this->connect();
        $this->mysqli->query("INSERT INTO `reports` (report) VALUES ('" . $data . "')");
    }
}