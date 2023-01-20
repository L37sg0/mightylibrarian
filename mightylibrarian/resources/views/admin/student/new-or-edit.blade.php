@php
    use App\Models\Author\Author;
    use App\Models\Book\BookIssue as Model;
    use App\Models\Category\Category;
    use App\Models\Publisher\Publisher;
@endphp

<button type="button" class="btn btn-link" data-bs-toggle="modal"
        data-bs-target="#{{$path}}CreateViewEdit{{($model) ? $model->getAttribute(Model::FIELD_ID) : ''}}">
    {{($model) ? __('Edit') : __('Add New')}}
</button>
<div class="modal fade"
     id="{{$path}}CreateViewEdit{{($model) ? $model->getAttribute(Model::FIELD_ID) : ''}}"
     tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">{{($model) ? __("Edit $labelSingle") : __("New $labelSingle")}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form role="form"
                  class="form-hidden"
                  action="{{($model) ? route("dashboard.$path.update", $model) : route("dashboard.$path.create")}}"
                  method="post">
                @csrf
                <div class="modal-body p-5 pt-0">
                    <div class="form-floating mb-3">

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
