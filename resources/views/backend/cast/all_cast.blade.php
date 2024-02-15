@extends('admin.admin_dashboard')


@section('admin')

@section('title')
	Nollywoodetal - All Cast
@endsection

<div class="page-wrapper">
    <div class="page-content">
        <h4>All Producers</h4>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Name of Cast</th>
                        <th>Movie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($casts as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name_of_cast }}</td>
                            <td>{{ $item->movie->movie_title }}</td>
                            <td>
                                <a href="{{ route('edit.cast', $item->id) }}" title="Edit" class="btn btn-primary">Edit</a>
                                <button href="{{ route('delete.cast', $item->id) }}" title="Delete" class="btn btn-danger" id="delete">Delete</button>
                                
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