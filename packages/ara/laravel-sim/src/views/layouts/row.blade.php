<div class="row">
  @if (is_array($data->child))
    {{ (new ARA\LaravelSim\Utils\Builder\Layout($data->child))->sharedData($shared)->renderLayout() }}
  @endif
  {{-- @includeFirst(['ara.laravel-sim.layouts.column', 'LaravelSim::layouts.column'], ['data' => $child]) --}}
</div>