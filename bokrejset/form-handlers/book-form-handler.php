<?php

require '../classes/book-model.php';
$bookModel = new BookModel(require '../partials/connect.php');

if (isset($_POST['title'], $_POST['year'], $_POST['pages'], $_POST['subject'], $_POST['author_id'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $year = filter_var((int)$_POST['year'], FILTER_SANITIZE_NUMBER_INT);
    $pages= filter_var((int)$_POST['pages'], FILTER_SANITIZE_NUMBER_INT);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_SPECIAL_CHARS);
    $authorId = filter_var((int)$_POST['author_id'], FILTER_SANITIZE_NUMBER_INT);
    $bookModel->addBook($title, $year, $pages, $subject, $authorId);
}

header("Location: ../books.php");
