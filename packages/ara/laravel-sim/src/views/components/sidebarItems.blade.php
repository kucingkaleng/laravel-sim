@php
$hasChild = (isset($item->child) && is_array($item->child) && count($item->child) > 0);
@endphp

<li class="nav-item {{ $hasChild ? 'has-treeview menu-open' : '' }}">

  <a href="{{ $item->url }}" class="nav-link">
    <i class="nav-icon fas fa-{{ $item->faIcon }}"></i>
    <p>
      {{ $item->title }}

      @if ($hasChild)
      <i class="right fas fa-angle-left"></i>
      @endif
      {{-- <span class="right badge badge-danger">New</span> --}}
    </p>
  </a>

  @if ($hasChild)
    <ul class="nav nav-treeview">
      @foreach ($item->child as $child)
      {{ (new ARA\LaravelSim\Utils\BuildMe)->sidebarItems($child) }}
      @endforeach
    </ul>
  @endif
</li>