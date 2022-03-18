<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intefaces\CrudController;
use App\Models\Book;

class BookController extends Controller implements CrudController
{
    public function index(){
        $books = Book::all();

        // echo '<pre>';
        // var_dump($books);
        // echo '</pre>';
        return view( '/book/index', [ 'books' => ['1','2','3'] ] );
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function alter()
    {
        // TODO: Implement alter() method.
    }

    public function view()
    {
        // TODO: Implement view() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}
