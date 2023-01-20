@php
use App\Models\Author\Author;
use App\Models\Book\Book as Model;
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
                <h1 class="fw-bold mb-0 fs-2">{{($model) ? __('Edit Book') : __('New Book')}}</h1>
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
                            <label for="{{Model::FIELD_CATEGORY_ID}}">{{__('Book Category')}}</label>
                            <input type="text"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_CATEGORY_ID}}"
                                   name="{{Model::FIELD_CATEGORY_ID}}"
                                   placeholder="{{__('Book Category')}}"
                                   value="{{($model) ? $model->getAttribute(Model::REL_CATEGORY)->getAttribute(Category::FIELD_NAME) : ''}}">
                        </div>

                        <div class="form-group">
                            <label for="{{Model::FIELD_AUTHOR_ID}}">{{__('Book Author')}}</label>
                            <input type="text"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_AUTHOR_ID}}"
                                   name="{{Model::FIELD_AUTHOR_ID}}"
                                   placeholder="{{__('Book Author')}}"
                                   value="{{($model) ? $model->getAttribute(Model::REL_AUTHOR)->getAttribute(Author::FIELD_NAME) : ''}}">
                        </div>

                        <div class="form-group">
                            <label for="{{Model::FIELD_PUBLISHER_ID}}">{{__('Book Publisher')}}</label>
                            <input type="text"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_PUBLISHER_ID}}"
                                   name="{{Model::FIELD_PUBLISHER_ID}}"
                                   placeholder="{{__('Book Publisher')}}"
                                   value="{{($model) ? $model->getAttribute(Model::REL_PUBLISHER)->getAttribute(Publisher::FIELD_NAME) : ''}}">
                        </div>

                        <div class="form-group">
                            <label for="{{Model::FIELD_STATUS}}">{{__('Book Status')}}</label>
                            <input type="text"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_STATUS}}"
                                   name="{{Model::FIELD_STATUS}}"
                                   placeholder="{{__('Book Status')}}"
                                   value="{{($model) ? $model->getAttribute(Model::FIELD_STATUS)->name : ''}}">
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
