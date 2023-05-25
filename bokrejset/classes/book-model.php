<?php

require_once 'db.php';

class BookModel extends DB{

    protected $table = "books";

    public function getAllBooks()
    {
        return $this->getAll($this->table);
    }

    public function getAllBooksAsLinks()
    {
        $sql = "SELECT books.title,books.year,books.pages,books.subject,authors.first_name,authors.last_name FROM books JOIN authors ON books.author_id=authors.id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addBook(string $title, int $year, int $pages, string $subject, int $authorId)
    {
        $sql = "INSERT INTO {$this->table} (title, year, pages, subject, author_id) VALUES (?,?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$title, $year, $pages, $subject, $authorId]);
    }
}
