<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ToDoList-Web</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- Include Bootstrap Datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">





</head>
<body>
    @include('sweetalert::alert')

    @include('includes.navbar')

    <div class="container-fluid">
        @yield('content')
    </div>
    

    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
    <script>
        $("#datetimepicker").datepicker({
            format: 'yyyy-mm-dd'
        });

        // //Strikethrough when checked
        // $(document).ready(function(){
        //   $("#item_checkbox").click(function(){
        //     var checkbox = document.getElementById("#item_checkbox");
        //     alert("checkbox")
        //   });
        // });

        $(".delete").on("submit", function(){
            return confirm("Are you sure?");
        });

    </script>
</body>
</html>
