<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js"></script>
</head>

<body>
    {{ $slot }} 
    {{-- slot is a defaul name of component. If you want to use other name like {{ $content }}, you'll have to use this:
    <x-layout>
        <x-slot name="content">
        </x-slot>
    </x-layout> --}}
</body>

</html>
