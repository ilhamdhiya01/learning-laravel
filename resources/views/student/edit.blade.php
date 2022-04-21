<x-app-layout title="Form Add Mahasiswa">
    <h1 class="text-center">UBAH DATA MAHASISWA</h1>
    <div class="row justify-content-center mt-5">
        <div class="col-6">
            <form action="{{ route('student.update',$student->id) }}" method="post">
                @method('put')
                @csrf
               @include('student._form')
            </form>
        </div>
    </div>
</x-app-layout>