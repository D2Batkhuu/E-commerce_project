<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Category;
use App\Models\Product; // Assuming you have a Product model
use Illuminate\Support\Facades\Storage; // For file handling
use Flasher\Laravel\Facade\Flasher;

class UserpageController extends Controller
{
    //
    public function index()
{
    // Fetch all products with their associated categories
    $products = Product::with('category')->get();

    // Fetch all categories from the database
    $categories = Category::all('category_name');

    // Check the authenticated user's type
    $user = auth()->user();

    if ($user && $user->usertype == 'admin') {
        // Redirect admin to the admin dashboard
        return view('admin.index');
    } elseif ($user && $user->usertype == 'user') {
        // Redirect regular users to the user dashboard, passing both products and categories
        return view('userpage.index', compact(['categories', 'products']));
    }

    // Default fallback view if usertype is not admin or user
    // Ensure $products is passed to the fallback view
    return view('userpage.index', compact(['categories', 'products']));
}

    
    public function home()
    {
        return view('userpage.index');
    }

    public function vendor()
    {
       
        return view('userpage.addproduct');
    }
    public function dashboard()
    {
        return view('userpage.dashboard');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all categories for the form
        $categories = Category::all();

        return view('userpage.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     // Validate the incoming request
        
    //     $validated = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'price' => 'required|numeric',
    //         'qty' => 'required|integer',
    //         'category' => 'required|exists:categories,id', // Ensure the category exists
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
    //     ]);

    //     // Create a new product record
    //     $product = new Product;
    //     $product->title = $validated['title'];
    //     $product->description = $validated['description'];
    //     $product->price = $validated['price'];
    //     $product->quantity = $validated['qty'];
    //     $product->category_id = $validated['category']; // Correctly referencing category_id

    //     // Handle image upload if provided
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imagename = time() . '.' . $image->getClientOriginalExtension();

    //         // Store the image in the 'public/products' directory
    //         $image->storeAs('public/products', $imagename);

    //         // Save the image name in the database
    //         $product->image = $imagename;
    //     }

    //     // Save the product to the database
    //     $product->save();

    //     // Redirect with success message
    //     toastr()->timeOut(10000)->closeButton()->addSuccess('Product Added Successfully');
    //     return redirect()->route('userpage.index'); // Redirect to the product listing
    // }


    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'qty' => 'required|integer',
            'category_id' => 'required|exists:categories,id', // Ensure the category exists
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);
    
        // Create a new product instance
        $data = new Product;
        $data->title = $validatedData['title'];
        $data->description = $validatedData['description'];
        $data->price = $validatedData['price'];
        $data->quantity = $validatedData['qty'];
        $data->category_id = $validatedData['category_id'];  // Use validated category_id
    
        $image = $request->file('image');
        if ($image) {
            // Generate a unique file name
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            
            // Move the image to the 'products' folder in the public directory
            $image->move('products', $imagename);
            
            // Save the image filename in the database
            $data->image = $imagename;
        }
    
        // Save the product data
        if ($data->save()) {
            toastr()->timeOut(10000)->closeButton()->addSuccess('Product Added Successfully');
            return redirect()->back(); // Redirect back with success
        } else {
            toastr()->timeOut(10000)->closeButton()->addError('There was a problem saving the product.');
            return back(); // Redirect back with error message
        }
    }
    



    

    /**
     * Display the specified resource.
     */
public function show()
{
    // Fetch all products
    $products = Product::with('category')->get();  // Get all products
    // $products = Product::all();  // Get all products
    // Return the view with the products data
    return view('userpage.show', compact('products'));
}

    
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Get the product and categories for the edit form
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('userpage.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Validate the incoming request
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'qty' => 'required|integer',
        'category_id' => 'required|exists:categories,id', // Ensure the category exists
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Find the existing product
    $product = Product::findOrFail($id);
    $product->title = $validated['title'];
    $product->description = $validated['description'];
    $product->price = $validated['price'];
    $product->quantity = $validated['qty'];
    $product->category_id = $validated['category_id']; // Correctly referencing category_id

    // Handle image update if a new image is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        // Store the image in the 'public/products' directory
        $image->storeAs('public/products', $imagename);

        // Delete the old image if exists (optional)
        if ($product->image && Storage::exists('public/products/' . $product->image)) {
            Storage::delete('public/products/' . $product->image);
        }

        // Save the new image name in the database
        $product->image = $imagename;
    }

    // Update the product in the database
    $product->save();

    // Redirect with success message
    toastr()->timeOut(10000)->closeButton()->addSuccess('Product Updated Successfully');
    return redirect()->route('vendorpage.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    try {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Delete the product image if it exists
        if ($product->image && Storage::exists('public/products/' . $product->image)) {
            Storage::delete('public/products/' . $product->image);
        }

        // Delete the product from the database
        $product->delete();

        // Redirect with success message
        toastr()->timeOut(10000)->closeButton()->addSuccess('Product Deleted Successfully');
        return redirect()->route('vendorpage.index');
    } catch (\Exception $e) {
        // Log or handle error if something goes wrong
        toastr()->timeOut(10000)->closeButton()->addError('Error occurred while deleting the product.');
        return redirect()->route('vendorpage.index');
    }
}


}