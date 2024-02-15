@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Add Writer
@endsection

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Add Writer</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('store.writer') }}" enctype="multipart/form-data">
									@csrf

									<div class="col-md-12 form-group">
										<label for="input1" class="form-label">Name of Writer<span style="color: red;">*</span></label>
										<input type="text" name="name_of_writer" class="form-control @error('name_of_writer')is-invalid @enderror" id="input1" placeholder="Name">
                                        @error('name_of_writer')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
									<div class="col-md-12 form-group">
										<label for="input2" class="form-label">Movies <span style="color: red;">*</span></label>
										<select id="input7" class="form-select @error('movie_id')is-invalid @enderror" name="movie_id">
											<option selected="" disabled>Select Movie</option>
                                            @foreach ($movies as $movie)
                                                <option value="{{$movie->id}}">{{$movie->movie_title}}</option>
                                            @endforeach
										</select>
                                        @error('movie_id')
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