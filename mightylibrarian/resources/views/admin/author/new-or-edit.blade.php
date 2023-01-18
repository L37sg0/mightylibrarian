@php
use App\Models\Author\Author;
@endphp

<button type="button" class="btn btn-link" data-bs-toggle="modal"
        data-bs-target="#authorCreateViewEdit{{($author) ? $author->getAttribute(Author::FIELD_ID) : ''}}">
    {{($author) ? __('Edit') : __('Add New')}}
</button>
<div class="modal fade"
     id="authorCreateViewEdit{{($author) ? $author->getAttribute(Author::FIELD_ID) : ''}}"
     tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">{{($author) ? __('Edit Author') : __('New Author')}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form role="form"
                  class="form-hidden"
                  action="{{($author) ? route('dashboard.authors.update', $author) : route('dashboard.authors.create')}}"
                  method="post">
                @csrf
                <div class="modal-body p-5 pt-0">
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control rounded-3"
                               id="name"
                               name="name"
                               placeholder="{{__('Author Name')}}"
                               value="{{($author) ? $author->getAttribute(Author::FIELD_NAME) : ''}}">
                        <label for="name">{{__('Author Name')}}</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">{{__('Close')}}
                    </button>
                    <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
