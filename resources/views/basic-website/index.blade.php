@extends('../template')

@section('title', config('app.name'))

@section('content')
    <div class="container-fluid" style="margin-top: 16px; margin-bottom: 16px">
        @component('basic-website/component/navbar')
        @endcomponent

        <h1>Welcome To Laravel</h1>
        <p>This is welcome message for you.</p>
    </div>
@endsection