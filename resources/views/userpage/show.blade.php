@include('userpage.header')
<style>
    .div_deg
    {

        margin-top: 60px;
    }
    .table_deg
    {
        border: 2px solid rgb(0, 0, 0);
        border-radius: 8px;
    }
    th
    {
        background-color: skyblue;
        color: white;
        font-size: 19px;
        font-weight: bold;
        padding: 15px;
    }
    td
    {
        border: 1px solid skyblue;
        text-align: center;
    }
</style>
<div class="flex justify-start p-6">
    <h1 class="text-3xl">Product list</h1>
</div>

<div class="flex justify:center">
    <div class="page-header">
        <div class="container-fluid bg-white text-white p-6">
            <div class="div_deg p-8">
                
                <table class="table_deg p-8">
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
                        <!-- Access the related category_name -->
                        <td>{{ $product->category ? $product->category->category_name : 'No Category' }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>
                            <img height="200" width="200" src="{{ asset('products/'.$product->image) }}">
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@include('userpage.script')