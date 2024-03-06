@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Add Company
@endsection

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Add Company</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('store.company') }}" enctype="multipart/form-data">
									@csrf

									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">Company Name <span style="color: red;">*</span></label>
										<input type="text" name="company_name" class="form-control @error('company_name')is-invalid @enderror" id="input1" placeholder="Company Name">
                                        @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Company's Email <span style="color: red;">*</span></label>
										<input type="text" name="email" class="form-control @error('email')is-invalid @enderror" id="input1" placeholder="Email">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Phone <span style="color: red;">*</span></label>
										<input type="text" name="phone" class="form-control @error('phone')is-invalid @enderror" id="input1" placeholder="Phone">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Website <span style="color: red;">*</span></label>
										<input type="text" name="website" class="form-control @error('website')is-invalid @enderror" id="input1" placeholder="Website">
                                        @error('website')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
                                     <div class="col-md-6 form-group">
										<label for="input2" class="form-label">Select Movies<span style="color: red;">*</span></label>
										<select id="input7" class="form-select @error('movie_id')is-invalid @enderror" name="movie_id">
											<option selected="" disabled>Select Movie</option>
                                                @foreach ($movies as $movie)
                                                    <option value="{{$movie->id}}">{{$movie->movie_title}}</option>
                                                @endforeach
										</select>
                                        @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Company Logo<span style="color: red;">*</span></label>
										<input type="file" name="company_logo" class="form-control @error('company_logo')is-invalid @enderror" id="input1" onChange="mainThamUrl(this)">
										<div class="mt-2"></div>
											<img src="" id="mainThmb">
                                            @error('company_logo')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
									</div>
								
									<div class="col-md-12">
										<label for="input11" class="form-label">Address<span style="color: red;">*</span></label>
										<textarea class="form-control @error('address')is-invalid @enderror" id="input11" rows="5" name="address"></textarea>
                                        @error('address')
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