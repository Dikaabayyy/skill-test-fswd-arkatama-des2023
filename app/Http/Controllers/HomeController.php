<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Data;
use Illuminate\Support\Facades\Redirect;

use function App\Models\splitdata;

class HomeController extends Controller
{
    public function index(){
        $validateData = request()->all();

        $data = Data::splitdata($validateData);

        $datainput['name'] = $data[0];
        $datainput['age'] = $data[1];
        $datainput['city'] = $data[2];
        Data::create($datainput);
        return Redirect::back()->with('success', 'Data has been Added!');

    }
}
