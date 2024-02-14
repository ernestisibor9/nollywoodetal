@extends('admin.admin_dashboard')


@section('admin')

{{-- @section('title')
	Felicity Properties - All Property
@endsection --}}

<div class="page-wrapper">
    <div class="page-content">
        <h4>All Writers</h4>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name of Writers</th>
                        <th>Movie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($writers as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name_of_writer }}</td>
                            <td>{{ $item->movie->movie_title }}</td>
                            <td>
                                <a href="{{ route('edit.writer', $item->id) }}" title="Edit" class="btn btn-primary">Edit</a>
                                <button href="{{ route('delete.writer', $item->id) }}" title="Delete" class="btn btn-danger" id="delete">Delete</button>
                                
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