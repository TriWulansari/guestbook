@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Institutions</h3>
    <table class="table tanle-striped table-bordered">
        <tr>
            <th>ID</th>
            <td><strong>#{{ $institutions->id }}</strong></td>
        </tr>
        <tr>
            <td>Nama Institution</td>
            <td>{{ $institutions->name }}</td>
        </tr>
        <tr>
            <td>Created At</td>
            <td>{{ \Carbon\Carbon::parse($institutions->created_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
        </tr>
        <tr>
            <td>Update At</td>
            <td>{{ \Carbon\Carbon::parse($institutions->update_at)->isoFormat('DD MMMM Y HH:mm') }}</td>
        </tr>
    </table>
    <a href="{{ route('admin.institution.index') }}"
    class="btn btn-sm btn-secondary mb-2">
    Kembali
    </a>
</table>
</div>
@endsection
      