@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-header">{{ $title }}</div>
        <div class="card-body">
            <form action="{{ route('skill.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Skill</label>
                    <input class="form-control" type="text" name="name" value=""
                        placeholder="Masukan Nama Skill Anda">
                </div>
                <div class="form-group mb-3">
                    <label for="">Level</label>
                    <input class="form-control" type="text" name="level" value=""
                        placeholder="Masukan Level Skill Anda">
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
