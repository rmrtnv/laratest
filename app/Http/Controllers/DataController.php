<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    //

    public function store()
    {
        $request = request();
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        for ($i = 1; $i < count($fileContents); $i++) {

            $line = str_replace('"', '', $fileContents[$i]);
            $line = str_getcsv($line, ';', '', '');

            $data = [
                'code' => $line[0] ?? '',
                'name' => $line[1] ?? '',
                'level1' => $line[2] ?? '',
                'level2' => $line[3] ?? '',
                'level3' => $line[4] ?? '',
                'price' => $line[5] ?? '',
                'price_sp' => $line[6] ?? '',
                'qnty' => $line[7] ?? '',
                'property_fields' => $line[8] ?? '',
                'tbuy' => $line[9] ?? '',
                'unit' => $line[10] ?? '',
                'pic' => $line[11] ?? '',
                'display_on_main' => $line[12] ?? '',
                'description' => $line[13] ?? '',
            ];

            Data::create($data);
        }
        return redirect()->route('view');
    }

    public function view()
    {
        $data = Data::all();
        return view('table')->with(compact('data'));
    }

    public function truncate()
    {
        Data::truncate();
        return back();
    }
}
