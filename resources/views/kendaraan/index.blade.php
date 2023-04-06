@extends('main_layout.main')
@section('main')
<table class="table">
    <tr>
      <th>Kode Kendaraan</th>
      <th>Jenis Angkutan</th>
      <th>Status</th>
      <th>Sewa</th>
      <th>Tanggal Akhir Service</th>
      <th>Tanggal Service Selanjutnya</th>
      <th>Action</th>
  </tr>
    @foreach ($kendaraan as $item)
    <tr>
      <td>{{$item->kode_kendaraan}}</td>
      <td>{{$item->jenis}}</td>
        <td>{{$item->status}}</td>
        <td>{{$item->sewa}}</td>
        <td>{{$item->tgl_akhir_service}}</td>
        <td>{{$item->tgl_service_selanjutnya}}</td>
        <td> <a href='/kendaraan/edit/{{$item->id}}' class="btn btn-warning">EDIT</a>
        </td>
    </tr>
  @endforeach
  </table>

    <a href='/kendaraan/create' class="btn btn-primary">ADD</a>
@endsection