<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/global_font.css")}}">

    <link rel="shortcut icon" href="{{asset("slike/Logo.svg")}}" type="image/x-icon">
    <title>Argo Student Robotics Team | {{ $title }}</title>

    @yield("head")

</head>
<body>
    @yield("page_content")
</body>
</html>
