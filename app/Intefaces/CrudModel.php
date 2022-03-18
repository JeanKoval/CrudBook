<?php

namespace App\Intefaces;

interface CrudModel
{
    public function create();
    public function alter();
    public function view();
    public function delete();
}
