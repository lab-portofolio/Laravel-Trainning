<div class="btn-group" style="margin-bottom: 16px">
  <button type="button" class="btn btn-primary" onclick="gotoPage('{{ route('basic-index') }}')">Home</button>
  <button type="button" class="btn btn-primary" onclick="gotoPage('{{ route('basic-services') }}')">Services</button>
  <button type="button" class="btn btn-primary" onclick="gotoPage('{{ route('basic-about') }}')">About</button>
</div> 

@section('custom-js')
    <script>
        function gotoPage(target) {
            location.assign(target)
        }
    </script>
@endsection