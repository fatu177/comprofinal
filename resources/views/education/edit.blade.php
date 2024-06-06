@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('education.update', $edit->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group mb-3">
                    <label for="">Sekolah</label>
                    <input class="form-control" type="text" name="school_name" id="school_name"
                        value="{{ $edit->school_name }}" placeholder="Masukan Sekolah Tempat Anda Bekerja">
                </div>
                <div class="form-group mb-3">
                    <label for="">Pedidikan</label>
                    <input class="form-control" type="text" name="degree" id="degree" value="{{ $edit->degree }}"
                        placeholder="Masukan Pedidikan Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <input class="form-control" type="text" name="field_of_study" id="field_of_study"
                        value="{{ $edit->field_of_study }}" placeholder="Masukan Jurusan Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Deskripsi</label>
                    <textarea class="form-control" type="text" name="description" id="description"
                        placeholder="Masukan Deskripsi Pekerjaan Anda"> {{ $edit->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="tanggalMasuk">Tanggal Masuk</label>
                    <input id="tanggalMasuk" class="form-control tanggalm" type="date" max="<?= date('Y-m-d') ?>"
                        name="start_date" value="{{ $edit->start_date }}" placeholder="Masukan Tanggal Anda Bekerja">
                </div>
                <div class="form-group mb-3">
                    <label for="tanggalKeluar">Tanggal Keluar</label>
                    <input id="tanggalKeluar" class="form-control tanggalk" type="date" name="end_date"
                        value="{{ $edit->end_date }}" max="<?= date('Y-m-d') ?>"
                        placeholder="Masukan Tanggal Anda Selesai Bekerja">
                </div>

                <script>
                    document.getElementById('tanggalMasuk').addEventListener('change', function() {
                        var masukDate = this.value;
                        document.getElementById('tanggalKeluar').min = masukDate;
                    });
                </script>


                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
<script>
    document.getElementById('tanggalMasuk').addEventListener('change', function() {
        var masukDate = this.value;
        document.getElementById('tanggalKeluar').min = masukDate;
    });
</script>
