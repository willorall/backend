@extends('main_layout.main')
@section('main')
<form action='/departemen' method='post'>
    @csrf
    
    <div class="mb-3">
        <label for="tipe" class="form-label">Tipe</label>
        <select id="tipe" name="tipe">
            <option value="kantor_pusat">Departemen Kantor Pusat</option>
            <option value="kantor_cabang">Departemen Kantor Cabang</option>
            <option value="tambang">Departemen Tambang</option>
        </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Keterangan</label>
      <input type="text"  id="keterangan" name="keterangan">
    </div>
    
    <div class="mb-3">
      <label for="lokasi" class="form-label">Lokasi</label>
      <select id="lokasi" name="lokasi">
        <option value="1">Tambang 1</option>
        <option value="2">Tambang 2</option>
        <option value="3">Tambang 3</option>
        <option value="4">Tambang 4</option>
        <option value="5">Tambang 5</option>
        <option value="6">Tambang 6</option>
        <option value="kantor_pusat">Kantor Pusat</option>
        <option value="kantor_cabang">Kantor Cabang</option>
    </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection