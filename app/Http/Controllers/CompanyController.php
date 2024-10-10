<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
     
     public $model = Company::class;

     public function index()
     {
         $item = $this->model::orderBy('id', 'desc')->get();
         return response()->json(['success' => true, 'data' => $item]);
     }
 
     public function store(Request $request)
     {
         $item = $this->model::create($request->all());
         return response()->json(['success' => true, 'data' => $item]);
     }
 
     public function show(string $id)
     {
         $item = $this->model::findOrFail($id);
         return response()->json(['success' => true, 'data' => $item]);
     }
 
     public function update(Request $request, string $id)
     {
         $item = $this->model::findOrFail($id);
         $item->update($request->all());
         return response()->json(['success' => true, 'data' => $item]);
     }
 
     public function destroy(string $id)
     {
         $item = $this->model::find($id);
         $item->delete();
         return response()->json(['success' => true, 'data' => 'Deleted']);
     }
 
 
     public function create(){}
     public function edit(string $id){}
}
