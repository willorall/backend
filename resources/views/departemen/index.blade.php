@extends('main_layout.main')
@section('main')
<table class="table">
    <tr>
      <th>Tipe</th>
      <th>Lokasi</th>
      <th>Keterangan</th>
      <th>Action</th>
  </tr>
    @foreach ($departemen as $item)
    <tr>
      <td>{{$item->tipe}}</td>
      <td>{{$item->lokasi}}</td>
      <td>{{$item->keterangan}}</td>
        <td> <a href='/departemen/edit/{{$item->id}}' class="btn btn-warning">EDIT</a>
        </td>
    </tr>
  @endforeach
  </table>

    <a href='/departemen/create' class="btn btn-primary">ADD</a>
@endsection