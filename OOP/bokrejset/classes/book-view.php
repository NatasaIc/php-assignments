<?php

class BookView
{

    public function renderAllBooksAsLinks(array $books): void
    {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<a href='?book-id={$book->getId()}'>{$book->getTitle()} ({$book->getYear()}) Sidor:{$book->getPages()}</a>";
        }
        echo "</ul>";
    }

     public function renderSingleBook (array $book):void {

        echo "<h2>{$book[0]->getTitle()}</h2>";
        echo "<h3>År: {$book[0]->getYear()}</h3>";
    }

}
