@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title mb-3">
        <h3>
            <span class="bi bi-building"></span>
            Create New - Institution
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.institution.store') }}" method="POST">
                    @csrf

                <div class="form-group mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" id="name" class="form-control" />
    
                </div>
            </div>
        </div>
    </section>
    <button type="submit" class="btn btn-sm btn-primary btn-sm ">Simpan</button>
    <a href="{{route('admin.institution.index')}}" class="btn btn-sm btn-secondary"> Kembali </a>
</form>
</div>
@endsection
