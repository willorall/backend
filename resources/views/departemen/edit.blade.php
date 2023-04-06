@extends('main_layout.main')
@section('main')
<form action='/departemen/{{$departemen->id}}' method='post'>
    @method('put')
      @csrf
    <div class="mb-3">
        <label for="tipe" class="form-label">Tipe</label>
        <select id="tipe" name="tipe">
            <option value="kantor_pusat" {{ $departemen->tipe == 'kantor_pusat' ? 'selected' : '' }}>Departemen Kantor Pusat</option>
            <option value="kantor_cabang" {{ $departemen->tipe == 'kantor_cabang' ? 'selected' : '' }}>Departemen Kantor Cabang</option>
            <option value="tambang" {{ $departemen->tipe == 'tambang' ? 'selected' : '' }}>Departemen Tambang</option>
        </select>
    </div>

    <div class="mb-3">
      <label class="form-label">Keterangan</label>
      <input type="text"  id="keterangan" name="keterangan" value="{{ old('keterangan',$departemen->keterangan) }}">
    </div>
    
    <div class="mb-3">
      <label for="lokasi" class="form-label">Lokasi</label>
      <select id="lokasi" name="lokasi">
        <option value="1" {{ $departemen->lokasi == '1' ? 'selected' : '' }}>Tambang 1</option>
        <option value="2" {{ $departemen->lokasi == '2' ? 'selected' : '' }}>Tambang 2</option>
        <option value="3" {{ $departemen->lokasi == '3' ? 'selected' : '' }}>Tambang 3</option>
        <option value="4" {{ $departemen->lokasi == '4' ? 'selected' : '' }}>Tambang 4</option>
        <option value="5" {{ $departemen->lokasi == '5' ? 'selected' : '' }}>Tambang 5</option>
        <option value="6" {{ $departemen->lokasi == '6' ? 'selected' : '' }}>Tambang 6</option>
        <option value="kantor_pusat" {{ $departemen->lokasi == 'kantor_pusat' ? 'selected' : '' }}>Kantor Pusat</option>
        <option value="kantor_cabang" {{ $departemen->lokasi == 'kantor_cabang' ? 'selected' : '' }}>Kantor Cabang</option>
    </select>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </form>
@endsection