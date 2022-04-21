<x-app-layout>
    <div class="container">
        <h1 class="text-center">DATA USER</h1>
        <a href="" type="submit" class="btn btn-primary mt-5">Add User</a>
        <table class="table table-bordered mt-3">
            <thead class="text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col" colspan="2">Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $index => $data)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('user.edit', $data->username) }}">Update</a>
                        </td>
                        <td>
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm"  onclick="return confirm('Delete it ?')">Delete</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</x-app-layout>