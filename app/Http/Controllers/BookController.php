<?php
namespace App\Controllers;

use App\Models\Book;

class BookController {
    private $bookModel;
    
    public function __construct($database) {
        $this->bookModel = new Book($database);
    }
    
    public function index() {
        $data = [
            'title' => 'Daftar Buku - Perpustakaan Digital',
            'books' => $this->bookModel->getAll(),
            'categories' => $this->bookModel->getCategories()
        ];
        
        require_once __DIR__ . '/../Views/books/index.php';
    }
    
    public function show($id) {
        // Logic untuk detail buku
    }
}