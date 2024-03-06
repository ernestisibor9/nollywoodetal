@extends('admin.admin_dashboard')

@section('admin')

@section('title')
	Nollywoodetal - Edit Company
@endsection

<div class="page-wrapper">
		<div class="page-content">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h6 class="mb-0 text-uppercase">Edit Company</h6>
					<hr>
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"></h5>
								<form class="row g-3" method="post" id="myForm" action="{{ route('update.company') }}" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" name="id" value="{{$editCompany->id}}">
                                    <input type="hidden" name="old_img" value="{{$editCompany->company_logo}}">

									<div class="col-md-6 form-group">
										<label for="input1" class="form-label">Company Name <span style="color: red;">*</span></label>
										<input type="text" name="company_name" class="form-control" id="input1" value="{{$editCompany->company_name}}">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Company's Email <span style="color: red;">*</span></label>
										<input type="text" name="email" class="form-control" id="input1" value="{{$editCompany->email}}">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Phone <span style="color: red;">*</span></label>
										<input type="text" name="phone" class="form-control " id="input1"  value="{{$editCompany->phone}}">
									</div>
                                    <div class="col-md-6 form-group">
										<label for="input1" class="form-label">Website <span style="color: red;">*</span></label>
										<input type="text" name="website" class="form-control" id="input1" value="{{$editCompany->website}}">
									</div>
                                     <div class="col-md-6 form-group">
										<label for="input2" class="form-label">Select Movies<span style="color: red;">*</span></label>
										<select id="input7" class="form-select" name="movie_id">
											<option selected="" disabled>Select Movie</option>
                                             <option value={{$editCompany->movie_id}} {{$editCompany->movie_id ? 'selected': ''}}>{{$editCompany->movie->movie_title}}</option>
                                             @foreach ($movieData as $item)
                                                 <option value="{{$item->id}}">{{$item->movie_title}}</option>
                                             @endforeach
										</select>
									</div>
									<div class="col-md-6 form-group">
										<label for="input2" class="form-label">Company Logo</label>
										<input type="file" name="company_logo" class="form-control" id="image">
                                            
									</div>
									<div class="col-md-6">
										<div>
                                            <img src="{{asset($editCompany->company_logo)}}" id="showImage" alt="" width="90px" height="90px">
                                        </div>
									</div>
								
									<div class="col-md-12">
										<label for="input11" class="form-label">Address<span style="color: red;">*</span></label>
										<textarea class="form-control" id="input11" rows="5" name="address">{{$editCompany->address}}</textarea>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Update</button>
										</div>
									</div>
								</form>
							</div>
						</div>
				</div>
			</div>
		</div>
</div>

<script>
    $(document).ready(function(){
      $('#image').change(function(e){
        let reader = new FileReader();
        reader.onload = function(e){
          $('#showImage').attr('src',e.target.result)
        }
        reader.readAsDataURL(e.target.files['0']);
      })
    })
  </script>


@endsection