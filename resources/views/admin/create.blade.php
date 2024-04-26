<!DOCTYPE html>
<html lang="en">



<head>
    <style>
        .title {
            color: darkgoldenrod;
            padding-top: 25px;
            font-size: 25px;
            font-weight: bold;
        }

        .input {
            padding: 15px;
        }

        .input label {
            font-weight: bold;
            color: black;
            display: inline-block;
            width: 200px;
        }

        .input input {
            border-radius: 25px;
            color: black;
            background-color: wheat;
        }
    </style>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
     <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    @yield('styles')
</head>



<body style="">
    @include('admin.layouts.navigation');
    @include('admin.layouts.sidebar');

    <div class="container-fluid page-body-wrapper">
        <div class="container" style="text-align: center; ">
            <h1 class="title">Add Category</h1>

            <form action="{{ url('addcategory') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input">
                    <label>Category Name</label>
                    <input type="text" name="name" placeholder="Category Name" required="">
                </div>
                <div class="input">
                    <label>Description</label>
                    <input type="text" name="description" placeholder="Description" required="">
                </div>
                <div class="button">
                    <input type="submit" class="btn btn-primary" style="font-size:15px;">

                </div>
            </form>
        </div>
    </div>
</body>



</html>
