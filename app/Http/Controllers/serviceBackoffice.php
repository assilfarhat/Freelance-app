<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class serviceBackoffice extends Controller
{
          /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {          // Retrieve posts, latest first, and paginate them

        $data = Service::latest()->filter(request(['search']))->paginate(5);

        return view('backoffice.service.index',compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
