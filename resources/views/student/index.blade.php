<x-app-layout>
    <h1 class="text-center">DATA MAHASISWA</h1>
    <a href="{{ route('student.create') }}" type="submit" class="btn btn-primary mt-5">Tambah Data Mahasiswa</a>
    <table class="table table-bordered mt-3">
        <thead class="text-center">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nim</th>
            <th scope="col">Email</th>
            <th scope="col">No WA</th>
            <th scope="col" colspan="2">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($students as $index => $data)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->no_wa }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('student.edit', $data->id) }}">Update</a>
                    </td>
                    <td>
                        <form action="{{ route('student.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm"  onclick="return confirm('Delete it ?')">Delete</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</x-app-layout>