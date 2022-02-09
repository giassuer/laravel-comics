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

    <div class="main-bottom">
        <span>LOAD MORE</span>
    </div>

    <div class="main-menu">
        <div class="container flex">

            @foreach ($menu as $menus)
                <div class="main-menu-item flex">
                    <div class="main-menu-logo">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    </div>
                    <div class="main-menu-text">
                        <h3>{{$menus['text']}}</h3>
                    </div>
                </div>
            @endforeach
            


        </div>
    </div>
</main>