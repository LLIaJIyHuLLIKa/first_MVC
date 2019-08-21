<?php
    class Films {
        private $dsn;
        private $username;
        private $password;
        private $options;
        private $pdo;

        public function __construct()
        {
            $this->dsn = DB_DSN;
            $this->username = DB_USERNAME;
            $this->password = DB_PASSWORD;
            $this->options = DB_OPTIONS;
            $this->pdo = new PDO($this->dsn, $this->username, $this->password, $this->options);
        }

        public function getFilms()
        {
            $sql = 'SELECT * FROM films';
            $films = $this->pdo->query($sql);

            return $films;
        }

        public function searchFilms($field, $data)
        {
            if($field == 'actor')
            {
                $sql = "SELECT * FROM films WHERE '$field' LIKE '%$data%'";
            }
            else
            {
                $sql ="SELECT * FROM films WHERE '$field' = '$data'";
            }

            $films = $this->pdo->query($sql);

            return $films;
        }

        public function registerUsers($name, $login, $email, $password)
        {
            $sql = 'SELECT * FROM users WHERE login = ? AND password = ?';
            $result = $this->pdo->prepare($sql);
            $result->execute(array($login, $password));
            $users = $result->fetchAll();

            if(count($users) == 0)
            {
                $sql = 'INSERT INTO users (name, login, email, password) VALUES(?, ?, ?, ?)';
                $result = $this->pdo->prepare($sql);
                $result->execute(array($name, $login, $email, $password));
            }
        }
    }