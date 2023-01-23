@php
    use App\Models\Book\BookIssue as Model;use App\Models\Book\IssueStatus;use App\Models\Globals;use Carbon\Carbon;

    /** @var Model|null $model */
    $modelId = ($model) ? $model->getAttribute(Model::FIELD_ID) : '';
    $modelLabelLink = ($model) ? __('Edit') : __('Add New');
    $modelLabelTitle = ($model) ? __("Edit $labelSingle") : __("New $labelSingle");
    $modelActionRoute = ($model) ? route("dashboard.$path.update", $model) : route("dashboard.$path.create");
    $currentStudent = ($model) ? $model->getAttribute(Model::REL_STUDENT) : null;
    $currentBook = ($model) ? $model->getAttribute(Model::REL_BOOK) : null;
    $currentIssueDate = ($model)
    ? Carbon::createFromDate($model->getAttribute(Model::FIELD_ISSUE_DATE))->format(Globals::DATE_FORMAT_YMD) :
     Carbon::today()->format(Globals::DATE_FORMAT_YMD);
    $currentReturnDate = ($model)
     ? Carbon::createFromDate($model->getAttribute(Model::FIELD_RETURN_DATE))->format(Globals::DATE_FORMAT_YMD) : '';
    $currentReturnDay = ($model)
     ? Carbon::createFromDate($model->getAttribute(Model::FIELD_RETURN_DAY))->format(Globals::DATE_FORMAT_YMD) : '';
    $currentStatus = ($model) ? $model->getAttribute(Model::FIELD_ISSUE_STATUS) : IssueStatus::Not_Returned;

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
                            @livewire('search-students', ['currentItem' => $currentStudent, 'parentId' => $modelId])
                        </div>

                        <div class="form-group">
                            @livewire('search-books', ['currentItem' => $currentBook, 'parentId' => $modelId])
                        </div>

                        <div class="form-group">
                            <label for="{{Model::FIELD_ISSUE_DATE}}{{$modelId}}">{{__('Issue Date')}}</label>
                            <input type="date"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_ISSUE_DATE}}{{$modelId}}"
                                   name="{{Model::FIELD_ISSUE_DATE}}"
                                   placeholder="{{__('Book Name')}}"
                                   value="{{$currentIssueDate}}">
                        </div>

                        <div class="form-group">
                            <label for="{{Model::FIELD_RETURN_DATE}}{{$modelId}}">{{__('Return Date')}}</label>
                            <input type="date"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_RETURN_DATE}}{{$modelId}}"
                                   name="{{Model::FIELD_RETURN_DATE}}"
                                   value="{{$currentReturnDate}}">
                        </div>

                        <div class="form-group">
                            <label for="{{Model::FIELD_ISSUE_STATUS}}{{$modelId}}">{{__('Status')}}</label>
                            <select
                                class="form-select"
                                aria-label="Default select example"
                                id="{{Model::FIELD_ISSUE_STATUS}}{{$modelId}}"
                                name="{{Model::FIELD_ISSUE_STATUS}}">
                                <option value="{{$currentStatus->value}}" selected>{{$currentStatus->name}}</option>
                                @foreach(IssueStatus::cases() as $status)
                                    @if($status !== $currentStatus)
                                        <option value="{{$status->value}}">{{$status->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="{{Model::FIELD_RETURN_DAY}}{{$modelId}}">{{__('Return Day')}}</label>
                            <input type="date"
                                   class="form-control rounded-3"
                                   id="{{Model::FIELD_RETURN_DAY}}{{$modelId}}"
                                   name="{{Model::FIELD_RETURN_DAY}}"
                                   value="{{$currentReturnDay}}">
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
