<x-app-layout title="Form Add Mahasiswa">
    <h1 class="text-center">Update User</h1>
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" name="nama" id="nama" placeholder="Nama mahasiswa">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Username</label>
                    <input type="text" readonly class="form-control" value="{{ $user->username }}"  name="nim" id="nim" placeholder="NIM mahasiswa">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" value="{{ $user->email }}"  name="email" id="email" placeholder="Email mahasiswa">
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
        </div>
    </div>
</x-app-layout>