@extends('TemplateSidebar/sidebartemp')
@section('content')
    <div id="myrequest"></div>
@endsection

@push('activeNav')
    <script>
        document.getElementById('myreq').classList.add('active');
    </script>

@endpush