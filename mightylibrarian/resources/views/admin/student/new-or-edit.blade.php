@php
    use App\Models\Globals;
    use App\Models\Student\Gender;
    use App\Models\Student\Student as Model;
    use App\Models\Student\Address;
    use Carbon\Carbon;
    /** @var Model|null $model */
    /** @var string $modelId */
    /** @var string $labelSingle */
    /** @var string $path */
    $modelId = ($model) ? $model->getAttribute(Model::FIELD_ID) : '';
    $modelLabelLink = ($model) ? __('Edit') : __('Add New');
    $modelLabelTitle = ($model) ? __("Edit $labelSingle") : __("New $labelSingle");
    $modelActionRoute = ($model) ? route("dashboard.$path.update", $model) : route("dashboard.$path.create");
    $currentName = ($model) ? $model->getAttribute(Model::FIELD_NAME) : '';
    $currentDateOfBirth = ($model) ? Carbon::createFromDate($model->getAttribute(Model::FIELD_DATE_OF_BIRTH))->format(Globals::DATE_FORMAT_YMD) : '';
    $currentEmail = ($model) ? $model->getAttribute(Model::FIELD_EMAIL) : '';
    $currentGender = ($model) ? $model->getAttribute(Model::FIELD_GENDER) : Gender::None;
    $currentPhone = ($model) ? $model->getAttribute(Model::FIELD_PHONE) : '';
    $currentClass = ($model) ? $model->getAttribute(Model::FIELD_CLASS) : '';
    $defaultAddress = [
            Address::FIELD_COUNTRY_CODE => '',
            Address::FIELD_PROVINCE => '',
            Address::FIELD_CITY => '',
            Address::FIELD_POSTCODE => '',
            Address::FIELD_STREET_NAME => '',
            Address::FIELD_STREET_NUMBER => '',
            Address::FIELD_FLOOR => '',
            Address::FIELD_SUIT_NUMBER => '',
        ];
    $currentAddress = ($model) ? $model->getAttribute(Model::FIELD_ADDRESS) : $defaultAddress;

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

                        <x:text-input id="{{Model::FIELD_NAME}}"
                                      name="{{Model::FIELD_NAME}}"
                                      :label="__('Student Name')"
                                      placeholder="Type a name..."
                                      value="{{$currentName}}"/>

                        <x:date-input id="{{Model::FIELD_DATE_OF_BIRTH}}"
                                      name="{{Model::FIELD_DATE_OF_BIRTH}}"
                                      :label="__('Date Of Birth')"
                                      placeholder=""
                                      value="{{$currentDateOfBirth}}"/>

                        <x:email-input id="{{Model::FIELD_EMAIL}}"
                                       name="{{Model::FIELD_EMAIL}}"
                                       :label="__('Student Email')"
                                       placeholder="Type an email..."
                                       value="{{$currentEmail}}"/>

                        <x:select-input id="{{Model::FIELD_GENDER}}"
                                        name="{{Model::FIELD_GENDER}}"
                                        :label="__('Gender')"
                                        :cases="Gender::cases()"
                                        :currentCase="$currentGender"/>

                        <x:text-input id="{{Model::FIELD_PHONE}}"
                                      name="{{Model::FIELD_PHONE}}"
                                      :label="__('Student Phone Number')"
                                      placeholder="Type a phone number..."
                                      value="{{$currentPhone}}"/>

                        <x:text-input id="{{Model::FIELD_CLASS}}"
                                      name="{{Model::FIELD_CLASS}}"
                                      :label="__('Class')"
                                      placeholder="Type a class name..."
                                      value="{{$currentClass}}"/>

                        <x:address-form id="{{Model::FIELD_ADDRESS}}"
                                      name="{{Model::FIELD_ADDRESS}}"
                                        :currentAddress="$currentAddress"
                        />


{{--                        {{dd($currentAddress)}}--}}
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
