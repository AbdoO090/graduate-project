<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getdata()
    {
        $categories=Category::all();
        return view('admin.dashboard',compact('categories'));
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function create()
    {
        return view('admin.create');
    }
    public function addcategory(Request $request)
    {
        $data = new Category;
        $data->name=$request->name;
        $data->description=$request->description;
        $data->save();
        //return response('تم التسجيل');
        return redirect()->back();
    }
    public function edit($id)
    {
        $categories = Category::findorFail($id);

        return view('admin.edit',compact('categories'));

    }
    public function update(Request $request, $id)
    {
        $categories = Category::Findorfail($id);
        $categories->name = $request->name;
        $categories->description  = $request->description;
        $categories->save();
        return redirect()->back();
        //return redirect()->route('admin.dashboard');
    }


}
