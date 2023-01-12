<main>

    <div class="containerComic">
        @foreach ($comic as $elem)
        <div class="comicCard">
            <div>
                <img src="{{$elem['thumb']}}" alt="">
            </div>
            <div>
                <h5>{{$elem['title']}}</h5>
            </div>
        </div>

        @endforeach
    </div>
</main>