@extends('LaravelSim::layouts.dashboard-layout')

@section('style')
<style>
  .card-body {
    overflow-x:auto;
  }
</style>
@endsection

@section('content')

{{ (new ARA\LaravelSim\Utils\Builder\Layout($shared->layout))->sharedData($shared)->renderLayout() }}

@endsection

@section('script')
<script>
  $(function () {
    $('#table').DataTable()
  })
</script>
@endsection