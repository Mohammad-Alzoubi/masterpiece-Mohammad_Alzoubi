<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::all();
        return view('admin.brand', compact('brands'));
    }

    public function store(Request $request){
        request()->validate([
            'name' => 'required|min:3'
        ]);

        $var = new Brand;
        $var->name = $request->input('name');
        $var->save();
        return back()->with('success', 'Brand Created Successfully.');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.editBrand', compact('brand'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|min:3',
        ]);

        $brand =  Brand::find($id);
        $brand->name = $request->get('name');
        $brand->save();
        return redirect('admin/brand')->with('success', 'Brand updated!');
    }



    // Delete Brand
    public function destroy($id)
    {
        $category = Brand::find($id);
        $category->delete();

        return back()->with('success', 'Brand deleted!');
    }

}
