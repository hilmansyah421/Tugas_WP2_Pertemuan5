<?php

class Library {
    private $books = [];

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function borrowBook($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() == $title) {
                return $book->borrow();
            }
        }
        return false; // Buku tidak ditemukan
    }

    public function returnBook($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() == $title) {
                return $book->returnBook();
            }
        }
        return false; // Buku tidak ditemukan
    }

    public function listAvailableBooks() {
        $availableBooks = [];
        foreach ($this->books as $book) {
            if (!$book->isBorrowed()) {
                $availableBooks[] = $book;
            }
        }
        return $availableBooks;
    }
}

?>
