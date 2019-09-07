<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <!-- Font Awesome JS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/styleBar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styleTable.css') }}">

    <title>
        @yield('title')
    </title>
</head>

<body>

        @section('sidebar')
        <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="" >
            <div class="container sidebar-header">
                <img class="sidebar-logo" id="sidebarCollapse" src="{{ URL::asset('img/logo.svg') }}">
                <h3><b>tech</b>area intern<b>ship</b></h3>
            </div>

            <ul class="list-unstyled components">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="/">
                    <i class="material-icons md-24">dashboard</i><p>Dashboard</p></a>
                </li>
                <li class="{{ Request::is('live') ? 'active' : '' }}">
                    <a href="/live">
                    <i class="material-icons md-24">desktop_mac</i><p>Monitor Today</p></a>
                </li>
            </ul>
        </nav>
        @show
        
        <div id="content">
        @yield('content') 
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('@yield('active')');
            });
        });
        </script>
    
</body>

</html>