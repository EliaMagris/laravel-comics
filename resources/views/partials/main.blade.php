<main>

    <div class="containerComic">
        @foreach ($comic as $key => $elem)
            <div class="comicCard">
                <a href="{{ route('comics-specific', compact('key')) }}">
                    <div>
                        <img src="{{ $elem['thumb'] }}" alt="">
                    </div>
                    <div>
                        <h5>{{ $elem['title'] }}</h5>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</main>
