<?php

class Book
{
    private int $id = 0;
    private string $title = "";
    private int $year = 0;
    private int $pages = 0;
    private int $subject = "";


    public function __construct($id, $title, $year, $pages, $subject)
    {
        $this->id = $id;
        $this->title = $title;
        $this->year = $year;
        $this->pages = $pages;
        $this->subject = $subject;
    }

    public function getId () : int {
    return $this->id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getYear(): int
    {
        return $this->year;
    }
    public function getPages(): int
    {
        return $this->pages;
    }
     public function getSubject(): string
    {
        return $this->subject;
    }
}
