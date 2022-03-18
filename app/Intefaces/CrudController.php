<?php

namespace App\Intefaces;

interface CrudController
{
    public function create();
    public function alter();
    public function view();
    public function delete();
}
