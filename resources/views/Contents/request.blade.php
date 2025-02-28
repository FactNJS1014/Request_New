@extends('TemplateSidebar/sidebartemp')
@section('content')
    <div id="app"></div>
@endsection

@push('activeNav')
    <script>
        document.getElementById('index').classList.add('active');
    </script>

@endpush