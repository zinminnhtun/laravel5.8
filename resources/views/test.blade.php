<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
<h1 class="bg-danger">test</h1>
@php
    $name = "zinminnhtun";
    $age = 23;
    $fruits = ["orange","apple","pineapple","mango"];

    $myHtml = "<h1>hello html</h1>";



@endphp
<h1>My name is {{$name}} and {{$age}} years old.</h1>
{{--{{ dd($fruits) }}--}}
{!! $myHtml !!}
<script>
    console.log(@json($fruits))
</script>


</body>
</html>
