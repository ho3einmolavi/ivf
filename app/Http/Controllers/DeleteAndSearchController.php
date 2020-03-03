<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteAndSearchController extends Controller
{
    public function delete($table ,$id)
    {
        $itemToDelete = DB::table($table)->where('id' , $id);

        if ($itemToDelete->delete())
        {
            return back()->with('message' , 'item is deleted');
        }
        else
        {
            return back()->with('message' , 'Item could not be deleted');
        }
    }
}
