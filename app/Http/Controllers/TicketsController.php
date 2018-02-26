<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function latest()
    {
        dd('latest');
    }

    public function popular()
    {
        dd('populares');
    }

    public function open()
    {
        dd('open');
    }

    public function closed()
    {
        dd('closed');
    }

    public function details($id)
    {
        dd('details'. $id);
    }
}
