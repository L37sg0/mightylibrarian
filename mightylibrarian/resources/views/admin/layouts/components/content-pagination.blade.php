@section('content-pagination')
    {{ $models->appends(request()->input())->links('admin.layouts.components.pagination') }}
@endsection
