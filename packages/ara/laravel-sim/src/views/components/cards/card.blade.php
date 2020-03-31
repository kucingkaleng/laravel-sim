<div class="card card-primary card-outline">
  <div class="card-body">
    {{ (new ARA\LaravelSim\Utils\Builder\Layout($data->child))->sharedData($shared)->renderLayout() }}
  </div>
</div>