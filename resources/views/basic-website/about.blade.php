@extends('../template')

@section('title', 'About')

@section('content')
    <div class="container-fluid" style="margin-top: 16px; margin-bottom: 16px">
        @component('basic-website/component/navbar')
        @endcomponent

        <h1>About Laravel</h1>
        <p>Laravel is a free, open-source PHP web framework, 
        created by Taylor Otwell and intended for the development of web applications
        following the model–view–controller architectural pattern and based on Symfony.</p>
    </div>
@endsection