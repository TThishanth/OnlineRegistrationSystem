<!DOCTYPE html>
<html>

    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> SUSL </title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>

        <style>
            .myBtn {
                border: none;
                outline: none;
                padding: 10px 16px;
                cursor: pointer;
            }

            /* Style the active class (and buttons on mouse-over) */
            .active, .myBtn:hover {
                background-color: #1E90FF;
                color: white;
            }
        </style>

        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        

    </head>

    <body class="w3-light-grey">

        <!-- Top container -->
        <div class="w3-bar w3-top w3-black w3-Size" style="z-index:4">
        <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
        <span class="w3-bar-item w3-right" id="home"><a href="/"><i class="fa fa-home"></i> Home</a> </span>
        </div>

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left pb-5" style="z-index:3; width:300px;" id="mySidebar"><br>
            <div class="w3-container w3-row" id="myAdmin">
                <div class="w3-col s4">
                    <img src="/images/admin.png" class="w3-circle" style="width:46px" id="navUserImg">
                </div>
                <div class="w3-col s8">
                    <p> Wellcome Admin, <br><b>{{ !empty(Auth::user()) ? Auth::user()->name : '' }}</b></p>
                </div>
            </div>
            <hr>

            <div class="w3-bar-block container">
                <ul class="nav flex-column">

                    <li>
                        <button class="dashSet myBtn active">
                            <a href="{{ action('AdminDashboardController@index') }}"> <b style="color:white"> <i class="fa fa-dashboard fa-fw"></i> Dashboard </b> </a>
                        </button>
                    </li>

                    <hr>

                    <li>     
                        <button class="dropdown-btn myBtn"><i class="fa fa-user-circle-o"></i> Users 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminUsersController@create') }}"><i class="fa fa-clipboard"></i><b> Create User </b></a>
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminUsersController@index') }}"><i class="fa fa-file-text-o"></i> Administrators </a>
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminYearsController@firstYear') }}"><i class="fa fa-file-text-o"></i> First Year Students </a>
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminYearsController@secondYear') }}"><i class="fa fa-file-text-o"></i> Second Year Students </a>
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminYearsController@thirdYear') }}"><i class="fa fa-file-text-o"></i> Third Year Students </a>
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminYearsController@fourthYear') }}"><i class="fa fa-file-text-o"></i> Fourth Year Students </a>
                        </div>
                    </li>

                    <li>
                        <a class="w3-bar-item w3-button w3-padding navFSize" href="{{ action('AdminRolesController@index') }}"><i class="fa fa-list-alt"></i> Roles </a>
                    </li>

                    <li>
                        <a class="w3-bar-item w3-button w3-padding navFSize" href="{{ action('AdminJobsController@index') }}"><i class="fa fa-list-alt"></i> Job Names </a>
                    </li>

                </ul>

                <hr>

                <ul class="nav flex-column">
                    
                    <h4 class="page-header  container">
                    <span><b><i class="fa fa-database"></i> Submissions </b></span>
                    <hr>
                    </h4>

                    <li>
                        <a class="w3-bar-item w3-button w3-padding navFSize" href="{{ action('AdminRepeatsController@index') }}"><i class="fa fa-files-o"></i> Repeat Exam </a>
                    </li>

                    <li>
                        <a class="w3-bar-item w3-button w3-padding navFSize" href="{{ action('AdminAcademicsController@index') }}"><i class="fa fa-files-o"></i> Academic Registration </a>
                    </li>

                    <li>     
                        <button class="dropdown-btn myBtn"><i class="fa fa-files-o"></i> Hostel Registration 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminHostelGendersController@boysHostel') }}"><i class="fa fa-file-text-o"></i> Boys Hostel </a>
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminHostelGendersController@girlsHostel') }}"><i class="fa fa-file-text-o"></i> Girls Hostel </a>
                        </div>
                    </li>
                    
                </ul>

                <hr>

                <ul class="nav flex-column">
                    
                    <h4 class="page-header  container">
                    <span><b><i class="fa fa-database"></i> Un-approved Submissions </b></span>
                    <hr>
                    </h4>

                    <li>
                        <a class="w3-bar-item w3-button w3-padding navFSize" href="{{ action('AdminUnApprovedController@repeat') }}"><i class="fa fa-files-o"></i> Repeat Exam </a>
                    </li>

                    <li>
                        <a class="w3-bar-item w3-button w3-padding navFSize" href="{{ action('AdminUnApprovedController@academic') }}"><i class="fa fa-files-o"></i> Academic Registration </a>
                    </li>

                    <li>     
                        <button class="dropdown-btn myBtn"><i class="fa fa-files-o"></i> Hostel Registration 
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-container">
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminUnApprovedController@boysHostel') }}"><i class="fa fa-file-text-o"></i> Boys Hostel </a>
                            <a class="w3-bar-item w3-button w3-padding" href="{{ action('AdminUnApprovedController@girlsHostel') }}"><i class="fa fa-file-text-o"></i> Girls Hostel </a>
                        </div>
                    </li>
                    
                </ul>
               
                <hr>

            </div>
        </nav>


        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main">
            <div class="container-fluid" id="main">
                <!-- Header -->
                <header class="w3-container" style="padding-top:22px">
                    <h1>
                        <b>
                            @yield('header')
                        </b>
                    </h1>
                    <hr>
                </header>

                <div class="container pt-3"> 
                    @yield('content')
                </div>

            </div>

        <!-- End page content -->
        </div>

        <!-- JS, Popper.js, and jQuery -->
        <script src="{{asset('js/admin.js')}}"></script>
        
        @yield('scripts')

    </body>

</html>
