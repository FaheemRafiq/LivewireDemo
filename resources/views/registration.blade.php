<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    Tailwind CSS    --}}
    @vite('resources/css/app.css')
    <title>Registration</title>
    <style>
        body{
            background: #e0e0e0;
            display: flex;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
        }
        #container{
            border-radius: 12px;
            background: #e0e0e0;
            box-shadow:  35px 35px 50px #989898,
            -35px -35px 50px #ffffff
        }
    </style>
    @livewireStyles
</head>
<body>

<livewire:registration/>

@livewireScripts
</body>
</html>
