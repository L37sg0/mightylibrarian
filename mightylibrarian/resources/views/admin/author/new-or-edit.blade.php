@extends('admin.layouts.app')

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#authorCreateViewEdit">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="authorCreateViewEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2">Add Author</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="">
                    <div class="modal-body p-5 pt-0">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-3" id="name"
                                   placeholder="Author Name">
                            <label for="name">Author Name</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
