<!DOCTYPE html>
<html lang="en">

@include('userpage.header')

@include('userpage.svg')
<div class="flex justify-center p-6">
    <h1 class="text-3xl">Add Product</h1>
</div>


<div class="container bg-secondary text-white p-6">
    <form action="{{ route('userpage.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Product Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description Input -->
        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Input -->
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Quantity Input -->
        <div class="mb-3">
            <label for="qty" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="qty" name="qty" value="{{ old('qty') }}" required>
            @error('qty')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Category Dropdown -->
        <div class="mb-3">
            
            {{-- <select class="form-select" id="category" name="category" required>
                <option value="">Select a category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                        {{ $category->category_name }} <!-- Use category_name here -->
                    </option>
                @endforeach
            </select> --}}
            <!-- Category Dropdown -->
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-select" id="category" name="category_id" required>
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->category_name }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

        </div>
        

        <!-- Image Input -->
        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>

@include('userpage.script')
@include('userpage.footer')

</html>
