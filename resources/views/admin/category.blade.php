<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style text="text/css">

        input[type='text']
        {
            width: 400px;
            height: 50px;
        }
        .div_deg
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin: 30px;
        }
        .table_deg
        {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 600px;
        }
        th
        {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color:white;
        }
        td{
            color:white;
            padding: 10px;
            border: 1px solid skyblue;

        }
    </style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 style="color:white">Add category</h1>
            <div class="div_deg">
           


           <form action="{{url('add_category')}}" method="post">
            @csrf
           <div>
            <input type="text" name="category">
           
           <input class="btn btn-primary" type="submit" value="Add Category">
           </div>
    </form>
      
    </div>

<div>
    <table class="table_deg">
        <tr>
            <th>Category Name</th>
            <th>Edit</th>

            <th>Delete</th>
        </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->category_name}}</td>
                <td>
                    <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
                </td>
                <td><a class="btn btn-danger"  href="{{url('delete_category', $data->id)}}">Delete</a></td>
            </tr>
           
            @endforeach
        
    </table>
</div>















    <!-- JavaScript files-->

    <script type="text/javascript">
        function confirmation(ev)
        {
        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.Log(urlToRedirect);

        swal({
            title:"Are You Sure to Delete This",
            text: "This delete will be permanent",
            icon: "warning",
            buttons: true,
            dangerMode:true,
        })
        .then((willDelete) => {
            if (willDelete)
        {
            window.location.href=urlToRedirect;
        }
        });
    }

    </script>
    <script src="{{asset('/admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('/admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('/admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('/admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('/admincss/js/front.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<!-- Flasher will render Toastr notifications here -->
{!! Flasher::render() !!}

  </body>
</html>