<div class="main-details-top">
    <div class="container flex">
        <div class="logo-details">
            <img src="{{$comics_d['thumb']}}" alt="">
        </div>
        <div class="details-top-left">
            <h2>{{$comics_d['title']}}</h2>
            <div class="prise-container flex">
                <div>
                    U.S. prise{{$comics_d['price']}}
                </div>
            </div>
            <p>
                {{$comics_d['description']}}
            </p>
        </div>
        <div class="details-top-right">
            
                <img src="{{ asset('images/super.jpg') }}" alt="">
            
        </div>
    </div>
</div>

<div class="main-details-bottom">
    <div class="container flex">
        <div class="col-left">
            <h3>Talent</h3>
            <div class="art flex">
                <div class="art-d flex">
                    <div>Art by</div>
                    <div>
                        @foreach ($comics_d['artists'] as $artist_comic)
                            {{$artist_comic}}
                        @endforeach
                    </div>
                </div>


                <div class="art-d flex">
                    <div>Art by</div>
                    <div>
                        @foreach ($comics_d['writers'] as $writer_comic)
                            {{$writer_comic}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-left">
            <h3>Specs</h3>
        </div>
    </div>
</div>