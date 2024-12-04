<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

use Flasher\Laravel\Facade\Flasher;


class AdminController extends Controller
{
    //
    public function index()
    {
        // $data =Catagory::all();
        $data =Product::all();
        return view('admin.index');
    }
    public function view_category()
    {
        $data = Category::all();

        return view('admin.category',compact('data'));
        // The compact() function in PHP is used to create an associative array from variables and their values. 
        // In Laravel, it's commonly used when passing data from the controller to a view.
    }
    public function add_category(Request $request)
    {
        $category = new Category;
        
        $category->category_name = $request->category;

        $category->save();
        
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully');
        // Flasher::addSuccess('Category Added Successfully');

        return redirect()->back();
    }
    public function delete_category($id)
    {
        $data = Category::find($id); 

        $data->delete();
        
        return redirect()->back();
    }
    public function edit_category($id)
    {
        $data = Category::find($id);

        
        return view('admin.edit_category',compact('data'));
    }
    public function update_category(Request $request,$id)
    {
        $data = Category::find($id);

        $data-> category_name = $request->category;
        $data->save();

        return redirect('view_category');
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.add_product',compact('category'));
    }
    public function upload_product(Request $request)
{
    // Look up the category ID using the category name
    $category = Category::where('category_name', $request->category)->first();

    // Check if the category exists
    if (!$category) {
        return response()->json(['error' => 'Category not found'], 400);
    }

    // Create a new Product instance
    $data = new Product;
    $data->title = $request->title;
    $data->description = $request->description;
    $data->price = $request->price;
    $data->quantity = $request->qty;

    // Set the category_id from the found category
    $data->category_id = $category->id; // Use category ID, not the name

    // Handle the image upload if present
    $image = $request->image;
    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('products', $imagename);
        $data->image = $imagename;
    }

    // Save the product record
    $data->save();

    // Success message
    toastr()->timeOut(10000)->closeButton()->addSuccess('Product Added Successfully');
    return redirect()->back();
}

    public function view_product()
    {
        $products = Product::all();
        return view('admin.view_product',compact('products'));
    }
}
