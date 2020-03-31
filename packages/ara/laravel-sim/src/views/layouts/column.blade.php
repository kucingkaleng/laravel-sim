<div class="col-{{ $data->option->length }}">
  {{ (new ARA\LaravelSim\Utils\Builder\Layout($data->child))->sharedData($shared)->renderLayout() }}
</div>