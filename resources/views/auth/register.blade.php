<x-app-layout title="Registration">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Register Page</div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                   <div class="card-body">
                       <div class="mb-3">
                           <label for="name" class="form-label">Name</label>
                           <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name">
                           @error('name')
                               <small class="invalid-feedback">{{ $message }}</small>
                           @enderror
                       </div>
                       <div class="mb-3">
                           <label for="email" class="form-label">Email</label>
                           <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email">
                           @error('email')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                       </div>
                       <div class="mb-3">
                           <label for="username" class="form-label">Username</label>
                           <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" id="username">
                           @error('username')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                       </div>
                       <div class="mb-3">
                           <label for="password" class="form-label">Password</label>
                           <input type="password" class="form-control @error('password') is-invalid @enderror" value="" name="password" id="password">
                           @error('password')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                       </div>
                       <button type="submit" class="btn btn-primary">Register</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>