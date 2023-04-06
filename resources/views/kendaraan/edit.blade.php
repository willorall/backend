@extends('main_layout.main')
@section('main')
{{-- {{dd($kendaraan)}} --}}
<form action='/kendaraan/{{$kendaraan->id}}' method='post'>
    @method('put')
      @csrf
    <div class="mb-3">
      <label class="form-label">Kode Kendaraan</label>
      <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode_kendaraan" name="kode_kendaraan"
        value="{{ old('kode_kendaraan',$kendaraan->kode_kendaraan) }}">
      @error('kode_kendaraan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="jenis" class="form-label">Jenis Kendaraan</label>
      <select id="jenis" name="jenis" >
        <option value="angkutan_barang" {{ $kendaraan->jenis == 'angkutan_barang' ? 'selected' : '' }}>Mobil Untuk Mengangkut Barang</option>
        <option value="angkutan_orang" {{ $kendaraan->jenis == 'angkutan_orang' ? 'selected' : '' }}>Mobil Untuk Mengangkut Orang</option>
    </select>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select id="status" name="status">
        <option value="rusak" {{ $kendaraan->status == 'rusak' ? 'selected' : '' }}>Mobil Rusak</option>
        <option value="aktif" {{ $kendaraan->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
        <option value="non_aktif" {{ $kendaraan->status == 'non_aktif' ? 'selected' : '' }}>Mobil Sudah Tidak Ada</option>
        <option value="diapakai" {{ $kendaraan->status == 'diapakai' ? 'selected' : '' }}>Sedang Dipakai</option>
        <option value="diservice" {{ $kendaraan->status == 'diservice' ? 'selected' : '' }}>Sedang Diservice</option>
    </select>
    </div>

    <div class="mb-3">
      <label for="sewa" class="form-label">Sewa</label>
      <select id="sewa" name="sewa">
        <option value="true" {{ $kendaraan->sewa == 'true' ? 'selected' : '' }}>Mobil Sewa</option>
        <option value="false" {{ $kendaraan->sewa == 'false' ? 'selected' : '' }}>Mobil Milik Perusahaan</option>
    </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal Terakhir Diservice</label>
      <input type="date" class="form-control @error('kode') is-invalid @enderror" id="tgl_akhir_service" name="tgl_akhir_service"
        value="{{ old('tgl_akhir_service',$kendaraan->tgl_akhir_service) }}">
      @error('tgl_akhir_service')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label class="form-label">Tanggal Service Selanjutnya</label>
      <input type="date" class="form-control @error('kode') is-invalid @enderror" id="tgl_service_selanjutnya" name="tgl_service_selanjutnya"
        value="{{ old('tgl_service_selanjutnya',$kendaraan->tgl_service_selanjutnya) }}">
      @error('tgl_service_selanjutnya')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="row">
    <div class="col">
      <label class="form-label">Jarak Waktu Service Terkahir Dengan Service Hari Ini</label>
      <input type="text" class="form-control @error('kode') is-invalid @enderror" id="jarak_service" name="jarak_service"
        value="{{ old('jarak_service',$kendaraan->jarak_service) }}">
      @error('jarak_service')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="col">
      <label class="form-label">Satuan Jarak Waktu Service Terkahir Dengan Service Hari Ini</label>
      <input type="text" class="form-control @error('kode') is-invalid @enderror" id="satuan_jarak" name="satuan_jarak"
        value="{{ old('satuan_jarak',$kendaraan->satuan_jarak) }}">
      @error('satuan_jarak')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
  </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
@endsection