<?php

require_once 'db.php';

class BookModel extends DB{

    protected $table = "books";

    public function getAllBooks()
    {
        return $this->getAll($this->table);
    }

    public function getAllBooks()
    {
        $sql = "SELECT * FROM books";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addBook(string $title, int $year, int $pages, int $authorId)
    {
        $sql = "INSERT INTO {$this->table} (title, year, pages, author_id) VALUES (?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$title, $year, $pages, $authorId]);
    }
}
