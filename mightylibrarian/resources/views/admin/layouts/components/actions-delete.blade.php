<form action="{{route("dashboard.$path.delete",$model)}}" method="post"
      class="form-hidden">
    @csrf
    <button class="btn btn-link">{{__('Delete')}}</button>
</form>
