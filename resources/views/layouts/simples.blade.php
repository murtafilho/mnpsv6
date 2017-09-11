<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AFISBH MNPS GEN 1.0</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    @yield('css')


</head>

<body>
<div class="wrapper">
    <!-- Main Header -->

    <div class="content-wrapper">
        @yield('content')
    </div>

</div>
<!-- jQuery 3.1.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


@yield('scripts')
</body>
</html>