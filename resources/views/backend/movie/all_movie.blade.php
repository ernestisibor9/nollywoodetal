@extends('admin.admin_dashboard')


@section('admin')

@section('title')
	Nollywoodetal - All Movie
@endsection

<div class="page-wrapper">
    <div class="page-content">
        <h4>All Movies</h4>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Movie Cover</th>
                        <th>Title</th>
                        {{-- <th>Movie URL</th> --}}
                        <th>Country</th>
                        {{-- <th>Duration</th> --}}
                        <th>Description</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movieData as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ asset($item->movie_cover) }}" alt="Movie cover" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
                            <td>{{ $item->movie_title }}</td>
                            {{-- <td>{{ $item->movie_url }}</td> --}}
                            <td>{{ $item->country }}</td>
                            {{-- <td>{{ $item->duration }}</td> --}}
                            <td>{{ Str::substr($item->description, 0, 30) }}...</td>
                            <td>
                                @if ( $item->status == '1')
                                            <span class="badge rounded-pill bg-success">Active</span>
                                    @else
                                            <span class="badge rounded-pill bg-danger">Inactive</span>
                                    @endif
                            </td>
                            <td>
                                @if ( $item->published == 1)
                                            <span class="badge rounded-pill bg-success">Approved</span>
                                    @else
                                            <span class="badge rounded-pill bg-danger">Unapproved</span>
                                    @endif
                            </td>
                            <td>
                                <a href="{{ route('change.published.status', $item->id) }}" class="btn btn-{{ $item->published ? 'dark': 'success'  }}">{{ $item->published ? 'Unapproved' : 'Approved'  }} </a>
                                <a href="{{ route('change.status', $item->id) }}" class="btn btn-{{ $item->status ? 'dark': 'success'  }}">{{ $item->status ? 'InActive' : 'Active'  }} </a>
                                <a href="{{ route('edit.movie', $item->id) }}" title="Edit" class="btn btn-primary">Edit</a>
                                <button href="{{ route('delete.movie', $item->id) }}" title="Delete" class="btn btn-danger" id="delete">Delete</button>
                                
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