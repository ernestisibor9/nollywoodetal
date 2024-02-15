@extends('admin.admin_dashboard')

@section('admin')

{{-- @section('title')
	Felicity Properties - Add Property
@endsection --}}

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Add Movie</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('store.movie') }}" enctype="multipart/form-data">
									@csrf

									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">Movie Title <span style="color: red;">*</span></label>
										<input type="text" name="movie_title" class="form-control @error('movie_title')is-invalid @enderror" id="input1" placeholder="Movie title">
                                        @error('movie_title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Movie URL <span style="color: red;">*</span></label>
										<input type="text" name="movie_url" class="form-control @error('movie_url')is-invalid @enderror" id="input1" placeholder="Movie url">
                                        @error('movie_url')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Movie Duration <span style="color: red;">*</span></label>
										<input type="number" name="movie_duration" class="form-control @error('movie_duration')is-invalid @enderror" id="input1" placeholder="Movie duration">
                                        @error('movie_duration')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Country <span style="color: red;">*</span></label>
										<select id="input7" class="form-select @error('country')is-invalid @enderror" name="country">
											<option selected="" disabled>Select Country</option>
											<option value="Nigeria">Nigeria</option>
											<option value="USA">USA</option>
											<option value="China">China</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="England">England</option>
                                            <option value="France">France</option>
										</select>
                                        @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
									@php
										$genre = App\Models\Genre::latest()->get();
									@endphp
                                    <div class="col-md-6 form-group">
										<label for="input2" class="form-label">Genre <span style="color: red;">*</span></label>
										<select id="input7" class="form-select @error('genre_id')is-invalid @enderror" name="genre_id">
											<option selected="" disabled>Select Genre</option>
											@foreach ($genre as $item)
												<option value="{{$item->id}}">{{$item->genre}}</option>
											@endforeach
										</select>
                                        @error('genre_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
									@php
										$producer = App\Models\Producer::latest()->get();
									@endphp
                                    <div class="col-md-6 form-group">
										<label for="input2" class="form-label">Producer <span style="color: red;">*</span></label>
										<select id="input7" class="form-select @error('producer_id')is-invalid @enderror" name="producer_id">
											<option selected="" disabled>Select Producer</option>
											@foreach ($producer as $item)
												<option value="{{$item->id}}">{{$item->producer_name}}</option>
											@endforeach
										</select>
                                        @error('producer_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
									<div class="col-md-12 form-group">
										<label for="input2" class="form-label">Movie Cover <span style="color: red;">*</span></label>
										<input type="file" name="movie_cover" class="form-control @error('movie_cover')is-invalid @enderror" id="input1" onChange="mainThamUrl(this)">
										<div class="mt-2"></div>
											<img src="" id="mainThmb">
                                            @error('movie_cover')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
									</div>
								
									<div class="col-md-12">
										<label for="input11" class="form-label">Description <span style="color: red;">*</span></label>
										<textarea class="form-control @error('description')is-invalid @enderror" id="input11" rows="5" name="description"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
</div>

 <script type="text/javascript">
    function mainThamUrl(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
              $('#mainThmb').attr('src',e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    } 
 </script>


@endsection