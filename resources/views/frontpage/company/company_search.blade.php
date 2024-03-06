@extends('frontpage.dashboard')

@section('main')

@section('title')
	Nollywoodetal - All Companies
@endsection


    <!-- Start Content -->
    <section class="featured section-padding">
    <div class="container">
        <h1 class="section-title">All Companies</h1>
        <form method="post" id="myForm" action="{{ route('search.company') }}">
        @csrf
            <div class="row mb-5">
                <div class="col-md-4 mb-3">
                <input type="text" name='company' class="form-control" id="inputEmail3" placeholder='Search for Companies'>
                </div>
                <div class="col-md-2">
                <button class='btn btn-success' style= 'border-radius: 20px;'><i class="fa-solid fa-magnifying-glass"></i> Search</button>
                </div>
            </div>
        </form>
        <div class='mx-auto text-center'>
            @if (count($companies) > 0)
                <div class="alert alert-success" role="alert">
                    {{ count($companies) }} companies found
                </div>
            @elseif (count($companies) > 0)
            @else
                <div class="alert alert-danger" role="alert">
                    No company found
                </div>
            @endif
        </div>
        <div class="row">
            @foreach ($companies as $item)
                        <div class='col-md-2 col-sm-3 mb-5 text-center '>
                            <a href="{{route('movie.details', $item->id)}}"><img class="img-fluid movies4" src="{{asset($item->company_logo)}}" alt=""></a>
                        </div>
                        <div class='col-md-2 col-sm-3 mb-5 text-center shadow pt-3'>
                            <h6 class='mb-5'>{{$item->company_name}}</h6>
                            <h6><a href="{{route('company.details', $item->id)}}" class= 'btn btn-success'>Company's Profile</a></h6>
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
              {!!$companies->links()!!}
            </div>
            <!-- End Pagination -->
        </div>
    </div>
</section>

@endsection