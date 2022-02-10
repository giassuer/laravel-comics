
    <div class="container flex">
        @foreach ($comics as $comic)
            <div class="single-comic">
                <div class="comic-img">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="comic-title">
                    <a href="{{route('details',$comic['id'])}}">{{$comic['title']}}</a>
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
                        <img src="{{$menus['img']}}" alt="">
                    </div>
                    <div class="main-menu-text">
                        <span>{{$menus['text']}}</span>
                    </div>
                </div>
            @endforeach
            


        </div>
    </div>
    