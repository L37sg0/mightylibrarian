@php
    use App\Models\Book\Book as Model;
    use App\Models\Book\Status;

    /** @var Model|null $model */
    ($model) ? $modelId = $model->getAttribute(Model::FIELD_ID) : $modelId = '';
    ($model) ? $modelLabelLink = __('Edit') : $modelLabelLink = __('Add New');
    ($model) ? $modelLabelTitle = __('Edit Book') : $modelLabelTitle = __('New Book');
    ($model) ? $modelActionRoute = route("dashboard.$path.update", $model) : $modelActionRoute = route("dashboard.$path.create");
    ($model) ? $currentAuthor = $model->getAttribute(Model::REL_AUTHOR) : $currentAuthor = null;
    ($model) ? $currentCategory = $model->getAttribute(Model::REL_CATEGORY) : $currentCategory = null;
    ($model) ? $currentPublisher = $model->getAttribute(Model::REL_PUBLISHER) : $currentPublisher = null;
    ($model) ? $currentStatus = $model->getAttribute(Model::FIELD_STATUS) : $currentStatus = Status::Available;

@endphp

<button type="button" class="btn btn-link" data-bs-toggle="modal"
        data-bs-target="#{{$path}}CreateViewEdit{{$modelId}}">
    {{$modelLabelLink}}
</button>
<div class="modal fade"
     id="{{$path}}CreateViewEdit{{$modelId}}"
     tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2">{{$modelLabelTitle}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <form role="form"
                  class="form-hidden"
                  action="{{$modelActionRoute}}"
                  method="post">
                @csrf
                <div class="modal-body p-5 pt-0">
                    <div class="form-floating mb-3">

                        <div class="form-group">
                            <label for="{{Model::FIELD_NAME}}">{{__('Book Name')}}</label>
                            <input type="text"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_NAME}}"
                                   name="{{Model::FIELD_NAME}}"
                                   placeholder="{{__('Book Name')}}"
                                   value="{{($model) ? $model->getAttribute(Model::FIELD_NAME) : ''}}">
                        </div>

                        <div class="form-group">
                            @livewire('search-authors', ['currentItem' => $currentAuthor, 'parentId' => $modelId])
                        </div>

                        <div class="form-group">
                            @livewire('search-categories', ['currentItem' => $currentCategory, 'parentId' => $modelId])
                        </div>

                        <div class="form-group">
                            @livewire('search-publishers', ['currentItem' => $currentPublisher, 'parentId' => $modelId])
                        </div>

                        <div class="form-group">
                            <label for="{{Model::FIELD_STATUS}}{{$modelId}}">{{__('Book Status')}}</label>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                id="{{Model::FIELD_STATUS}}{{$modelId}}"
                                name="{{Model::FIELD_STATUS}}">
                                <option value="{{$currentStatus->value}}" selected>{{$currentStatus->name}}</option>
                                @foreach(Status::cases() as $status)
                                    @if($status !== $currentStatus)
                                        <option value="{{$status->value}}">{{$status->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

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
