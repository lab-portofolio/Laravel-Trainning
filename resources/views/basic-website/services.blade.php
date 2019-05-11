@extends('../template')

@section('title', 'About')

@section('content')
    <div class="container-fluid" style="margin-top: 16px; margin-bottom: 16px">
        @component('basic-website/component/navbar')
        @endcomponent

        <h1>Services From Laravel</h1>
        
        <h2>Expressive, beautiful syntax.</h2>
        <p>Value elegance, simplicity, and readability? You’ll fit right in. Laravel is designed for people just like you. If you need help getting started, check out Laracasts and our great documentation.</p>

        <h2>Tailored for your team.</h2>
        <p>Whether you're a solo developer or a 20 person team, Laravel is a breath of fresh air. Keep everyone in sync using Laravel's database agnostic migrations and schema builder.</p>

        <h2>Modern toolkit. Pinch of magic.</h2>
        <p>An amazing ORM, painless routing, powerful queue library, and simple authentication give you the tools you need for modern, maintainable PHP. We sweat the small stuff to help you deliver amazing applications.</p>
    </div>
@endsection