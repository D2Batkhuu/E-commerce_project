<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        .table_deg
        {
            border: 2px solid greenyellow;
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
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

           <div class="div_deg">

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
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{ $product->category ? $product->category->category_name : 'No Category' }}</td>
                        <td>{{ $product->price }}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantity}}</td>
                    {{-- <td>{{$product->image}}<</td> --}}
                    <td>
                        <img height="200" width="200" src="products/{{$product->image}}">
                        {{-- <img src="product/{{$product->image}}" alt="Product Image" style="width:100px; height:auto;"> --}}
                        {{-- <img src="/public/products/{{$product->image}}" alt="Product Image" style="width:100px; height:auto;"> --}}

                    </td>
                </tr>
              @endforeach
            </table>
           </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>