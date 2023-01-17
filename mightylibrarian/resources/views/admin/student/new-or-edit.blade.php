@extends('admin.layouts.app')

@section('content')
<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Author</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('authors.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Author Name</label>
                            <input type="text" class="form-control @error('name') isinvalid @enderror"
                                   placeholder="Author Name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="save" required>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
