<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoradController extends Controller
{


    public function index(Request $request)
    {

        $items = Board::all();
        return view('borad.index', ['item' => $items]);
    }

    public function add(Request $request)
    {
        return view('borad.add');
    }

    public function create(Request $request)
    {

        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('board');
    }
}
