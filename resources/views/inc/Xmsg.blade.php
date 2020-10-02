<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Request Message </title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="content text-center">
        <h1> Sorry!! Something wrong with your account </h1>
        
        <button class="btn btn-primary mt-3" onclick="goBack()"> Go Back </button>
        &emsp;    
        <a class="btn btn-primary mt-3" href="/"> Go Home </a>
    </div>
   

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>




