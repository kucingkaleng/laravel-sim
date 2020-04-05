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
        @foreach ($item as $i)
        <td>{{ $i }}</td>
        @endforeach
      </tr>
    @endforeach
  </tbody>
</table>