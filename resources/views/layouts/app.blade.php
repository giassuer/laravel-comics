<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    @include('components.header')

    <main>
        <div class="container flex">
            @foreach ($comics as $comic)
                <div class="single-comic">
                    <div class="comic-img">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <div class="comic-title">
                        {{$comic['title']}}
                    </div>
                </div>
            @endforeach
        </div>
    </main>


</body>
</html>