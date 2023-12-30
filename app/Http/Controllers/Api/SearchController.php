<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function __invoke(Request $request){
        $user=User::search($request->keyword)->paginate(20);
        return $user;
    }
}
