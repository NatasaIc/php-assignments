<?php

class BookView
{

    public function renderAllBooksAsList(array $books): void
    {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>Titel: {$book['title']}, År: ({$book['year']}, Sidor: {$book['pages']}, Ämne: {$book['subject']}</li>";
        }
        echo "</ul>";
    }

    public function renderAllBooksWithAuthorsAsList(array $books): void
    {
        echo "<ul>";
        foreach ($books as $book) {
            echo "<li>{$book['title']} av {$book['first_name']} {$book['last_name']} ({$book['year']})</li>";
        }
        echo "</ul>";
    }
}
