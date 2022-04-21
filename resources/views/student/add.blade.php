<x-app-layout title="Form Add Mahasiswa">
    <h1 class="text-center">TAMBAH DATA MAHASISWA</h1>
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('student.store') }}" method="post">
                @csrf
                @include('student._form')
            </form>
        </div>
    </div>
</x-app-layout>