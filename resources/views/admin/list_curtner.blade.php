
  @forelse($menus as $key)
  <div class="row">
    <div class="col-lg-4 col-md-6">
      {{ $key->menu_name }}
    </div>
    <div class="col-lg-4 col-md-6">

    </div>
    <div class="col-lg-4 col-md-6">

    </div>
  </div>
  @empty
    No data.
  @endforelse
