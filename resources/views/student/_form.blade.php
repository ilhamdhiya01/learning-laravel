<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama',  $student->nama) }}" name="nama" id="nama" placeholder="Nama mahasiswa">
    @error('nama')
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') ?? $student->nim }}"  name="nim" id="nim" placeholder="NIM mahasiswa">
    @error('nim')
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $student->email }}"  name="email" id="email" placeholder="Email mahasiswa">
    @error('email')
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
<div class="mb-3">
    <label for="no_wa" class="form-label">No WA</label>
    <input type="text" class="form-control @error('no_wa') is-invalid @enderror" value="{{ old('no_wa') ?? $student->no_wa }}"  name="no_wa" id="no_wa" placeholder="No WA mahasiswa">
    @error('no_wa')
        <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>