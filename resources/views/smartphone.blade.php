<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SmartPhone</title>
</head>
<body>
    {{--<h1>{{ $smartPhone->name }}, {{ $smartPhone->processor->vendor }} {{ $smartPhone->processor->cores }} cores, {{ $smartPhone->display->resolution }} display, {{ $smartPhone->camera->mpixels }} megapixels camera, battery capacity {{ $smartPhone->battery->capacity }}.</h1>--}}
    <h1>{{ $smartPhone->getInfo() }}</h1>
</body>
</html>