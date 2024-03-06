@extends('admin.admin_dashboard')


@section('admin')

@section('title')
	Nollywoodetal - All Company
@endsection

<div class="page-wrapper">
    <div class="page-content">
        <h4>All Movies</h4>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Company Logo</th>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Movie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($companyData as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ asset($item->company_logo) }}" alt="Company Logo" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
                            <td>{{ $item->company_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->movie->movie_title }}</td>
                            <td>
                                <a href="{{ route('edit.company', $item->id) }}" title="Edit" class="btn btn-primary">Edit</a>
                                <button href="{{ route('delete.company', $item->id) }}" title="Delete" class="btn btn-danger" id="delete">Delete</button>
                                
                            </td>											
                        </tr>
        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    
@endsection