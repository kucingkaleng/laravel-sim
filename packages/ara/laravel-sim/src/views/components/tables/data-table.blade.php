<table id="table" class="table table-bordered table-striped dataTable">
  <thead>
    @foreach ($data[0] as $x => $item)
    <th>{{ $dataHeader[$x] }}</th>
    @endforeach
  </thead>
  <tbody>
    @foreach ($data as $x => $item)
      @php
        $item = (object) $item
      @endphp
      <tr>
        <td>{{ $item->item_name }}</td>
        <td>{{ $item->category }}</td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->qty }}</td>
      </tr>
    @endforeach
  </tbody>
</table>