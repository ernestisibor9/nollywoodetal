@extends('frontpage.dashboard')

@section('main')

@section('title')
    Nollywoodetal - All Films
@endsection

<style>
    .accordion-button {
        background-color: #198754 !important;
        color: #fff !important;
    }

    .accordion-button::after {
        content: "";
        background: white;
        transform: scale(1.2);
        border-radius: 3px;
        transition: .5s !important;
        color: #fff !important;
    }
</style>


<!-- Start Content -->
<section class="featured section-padding">
    <div class="container">
        <h1 class="section-title">All Films</h1>
        <div class='d-flex' style='justify-content: space-between;'>
            <form method="post" id="myForm" action="{{ route('search.movie') }}">
                @csrf
                <div class="row mb-5">
                    <div class="col-md-8 col-sm-12 col-xs-12  mb-3">
                        <input type="text" name='movie_title' class="form-control" id="inputEmail3"
                            placeholder='Movie' required>
                    </div>
                    <div class="col-md-2">
                        <button class='btn btn-success' style= 'border-radius: 20px;'><i
                                class="fa-solid fa-magnifying-glass"></i> Search</button>
                    </div>
                </div>
            </form>

            <div class = 'col-md-3 col-sm-6 col-xs-12  mb-4'>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Genre
                            </button>
                        </h2>

                        @php
                            $genres = App\Models\Genre::orderBy('genre', 'ASC')->get();
                        @endphp
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <form action='{{ route('genre.filter') }}' method='post'>
                                    @csrf
                                    <select class="form-select" name='genre_id' required>
                                        @foreach ($genres as $item)
                                            <option value='{{ $item->id }}'>{{ $item->genre }}</option>
                                        @endforeach
                                    </select>
                                    <button class='btn btn-success mt-3'><i class="fa-solid fa-magnifying-glass"></i>
                                        Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $countries = App\Models\Movie::orderBy('country', 'ASC')
                    ->distinct()
                    ->get(['country']);
            @endphp
            <div class = 'col-md-3 col-sm-6 col-xs-12   mb-4'>
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Country
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">
                                <form action='{{ route('country.filter') }}' method='post'>
                                    @csrf
                                    <select class="form-select" name='country' required>
                                        @foreach ($countries as $item)
                                            <option value='{{ $item->country }}'>{{ $item->country }}</option>
                                        @endforeach
                                    </select>
                                    <button class='btn btn-success mt-3'><i class="fa-solid fa-magnifying-glass"></i>
                                        Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class='col-md-3 mb-4'>
            </div> --}}
        </div>
        <div class="row">
            @foreach ($films as $item)
                <div class='col-md-2 col-sm-3 mb-5 text-center movies4'>
                    <a href="{{ route('movie.details', $item->id) }}"><img class="img-fluid movies4"
                            src="{{ asset($item->movie_cover) }}" alt=""></a>
                </div>
                <div class='col-md-2 col-sm-3 mb-5 text-center shadow pt-3'>
                    <h6 class='mb-2'>Title: {{ $item->movie_title }}</h6>
                    <h6 class='mb-3'>Genre: {{ $item->genre->genre }}</h6>
                    <h6><a href="{{ route('movie.details', $item->id) }}" class= 'btn btn-success'>
                            Profile</a></h6>
                </div>
            @endforeach

            {{-- <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                <div class="banner-cover">
                    <div class="box-banner">
                        <h5>Advert</h5>
                    </div>
                </div>
            </div> --}}
            <!-- Start Pagination -->
            <div class="pagination-bar mx-auto mb-5">
                {!! $films->links() !!}
            </div>
            <!-- End Pagination -->
        </div>
    </div>
</section>

@endsection
