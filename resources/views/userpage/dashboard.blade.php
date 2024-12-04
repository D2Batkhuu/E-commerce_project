@include('userpage.header')
@include('')
<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="div_deg">
                <h1>Products</h1>
                <table class="table_deg">
                    <tr>
                        <th>Product Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                    </tr>

                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->category->name }}</td>  <!-- Assuming category is a relation -->
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td><img src="{{ asset('storage/images/'.$product->image) }}" alt="Product Image" style="width: 100px; height: auto;"></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
