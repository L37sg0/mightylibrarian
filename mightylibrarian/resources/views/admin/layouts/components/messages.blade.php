@php use Illuminate\Support\Facades\Session; @endphp
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center">
            <p>{{ $error }}</p>
        </div>
    @endforeach
@endif
@if(Session::has('success'))
    <div class="alert alert-success text-center">
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
