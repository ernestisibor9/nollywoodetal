@extends('admin.admin_dashboard')


@section('admin')

@section('title')
	Nollywoodetal - All Post
@endsection

<div class="page-wrapper">
    <div class="page-content">
        <h4>All Post</h4>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Author</th>
                        {{-- <th>Email</th> --}}
                        <th>Content</th>
                        <th>Published</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postData as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td><img src="{{ asset($item->post_image) }}" alt="Movie cover" class="rounded-circle p-1 bg-primary" width="60" height="60"></td>
                            <td>{{ $item->post_title }}</td>
                            <td>{{ $item->author }}</td>
                            {{-- <td>{{ $item->author_email }}</td> --}}
                            <td>{!! Str::substr($item->post_content, 0, 40) !!}...</td>
                            <td>
                                @if ( $item->published == 1)
                                            <span class="badge rounded-pill bg-success">Published</span>
                                    @else
                                            <span class="badge rounded-pill bg-danger">Not Published</span>
                                    @endif
                            </td>
                            <td>
                                <a href="{{ route('change.published.status', $item->id) }}" class="btn btn-{{ $item->published ? 'dark': 'success'  }}">{{ $item->published ? 'Not Published' : 'Published'  }} </a>

                                <a href="{{ route('edit.post', $item->id) }}" title="Edit" class="btn btn-primary">Edit</a>
                                <button href="{{ route('delete.post', $item->id) }}" title="Delete" class="btn btn-danger" id="delete">Delete</button>
                                
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