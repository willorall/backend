@extends('main_layout.main')
@section('main')
<form action='/kendaraan' method='post'>
    @csrf
    <div class="mb-3">
      <label class="form-label">Kode Kendaraan</label>
      <input type="text" class="form-control @error('kode') is-invalid @enderror" id="kode_kendaraan" name="kode_kendaraan"
        value="{{ old('kode_kendaraan') }}">
      @error('kode_kendaraan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="jenis" class="form-label">Jenis Kendaraan</label>
      <select id="jenis" name="jenis">
        <option value="angkutan_barang">Mobil Untuk Mengangkut Barang</option>
        <option value="angkutan_orang">Mobil Untuk Mengangkut Orang</option>
    </select>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select id="status" name="status">
        <option value="rusak">Mobil Rusak</option>
        <option value="aktif">Aktif</option>
        <option value="non_aktif">Mobil Sudah Tidak Ada</option>
        <option value="diapakai">Sedang Dipakai</option>
        <option value="diservice">Sedang Diservice</option>
    </select>
    </div>

    <div class="mb-3">
      <label for="sewa" class="form-label">Sewa</label>
      <select id="sewa" name="sewa">
        <option value="true">Mobil Sewa</option>
        <option value="false">Mobil Milik Perusahaan</option>
    </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection