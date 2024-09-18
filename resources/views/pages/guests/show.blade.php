@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Guest</h3>
    <table class="table tanle-striped table-bordered">
        <tr>
            <th>ID</th>
            <td><strong>#{{ $guests->id }}</strong></td>
        </tr>
        <tr>
            <td>Nama Guest</td>
            <td>{{ $guests->fullname }}</td>
        </tr>
        <tr>
            <td>From</td>
            <td>{{ $guests->from }}</td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td>{{ $guests->phonenumber}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $guests->email }}</td>
        </tr>
        <tr>
            <td>Note</td>
            <td>{{ $guests->note }}</td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>{{ \Carbon\Carbon::parse($guests->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
        </tr>
        <tr>
            <td>Update At</td>
            <td>{{ \Carbon\Carbon::parse($guests->update_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
        </tr>
    </table>
    <a href="{{ route('admin.guests.index') }}"
    class="btn btn-sm btn-secondary mb-2">
    Kembali
    </a>
</table>
</div>
@endsection
      