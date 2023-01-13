@extends('layout.app')

@section('page-title')
    DC Comics - comics
@endsection

@section('main-content')
    <div class="containerMain">
        <div class="flex-item">
            <div>
                <img src="{{ $comics_singolo['thumb'] }}" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $comics_singolo['title'] }}</h5>
                <div class="green-line">
                    <div class="card-price">{{ $comics_singolo['price'] }}</div>
                    <div class="disponibility">AVAILABLE</div>
                    <div class="check">check the availability</div>
                </div>
                <p class="card-text">{!! $comics_singolo['description'] !!}</p>
            </div>
        </div>
    </div>
    <div class="container-blue">

        <div class="Talents">
            <h2 class="title">Talents</h2>
            <div class="artist-flex">
                <div>Art by:</div>
                <ul>
                    @foreach ($comics_singolo['artists'] as $artist)
                        <span>{{ $artist }},</span>
                    @endforeach
                </ul>
            </div>
            <div class="writers-flex">
                <div>Written by:</div>
                <ul>
                    @foreach ($comics_singolo['writers'] as $writers)
                        <span>{{ $writers }},</span>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="Specs">
            <h2>Specs</h2>
            <div class="little-info-flex">
                <div>Series:</div>
                <div class="Series">{{ $comics_singolo['series'] }}</div>
            </div>
            <div class="little-info-flex">
                <div>U.S Price</div>
                <div class="US">{{ $comics_singolo['price'] }}</div>
            </div>
            <div class="little-info-flex">
                <div>On Sale Date:</div>
                <div class="OnSale">{{ $comics_singolo['sale_date'] }}</div>
            </div>

        </div>
    </div>
@endsection
