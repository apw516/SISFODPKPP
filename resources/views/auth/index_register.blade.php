@extends('auth.main')
@section('container')
    <div class="login_wrapper">
        <div class="animate form login_form">
            <h4 class="text-dark text-center" style="margin-bottom:15px" style="font-weight: 50px;"><i
                    class="bi bi-house-door"></i> SISFO DPKPP</h4>
            <!-- start form for validation -->
            <div class="x_panel rcorners1 solid">
                <form method="post" action="register" id="demo-form" data-parsley-validate>
                    @csrf
                    <h5 class="text-dark mb-4 text-center mt-2 text-bold" style="font-weight: bold;">DAFTAR</h5>
                    <label for="fullname" class="text-dark">Username</label> @error('username')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" id="fullname" class="form-control rcorners1" name="username"
                        value="{{ old('username') }}" />
                    <label for="fullname" class="text-dark">Nama Lengkap ( Sesuai KTP )</label> @error('fullname')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" id="fullname" class="form-control rcorners1" name="fullname"
                        value="{{ old('fullname') }}" />
                    <label for="" class="text-dark text-bold mt-2">Nomor Ponsel</label>
                    @error('nomorponsel')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" id="nomorponsel" class="form-control rcorners1 " name="nomorponsel"
                        data-parsley-trigger="change" value="{{ old('nomorponsel') }}" />
                    <label for="password" class="text-dark text-bold mt-2">Email</label> @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    <input type="email" id="email"
                        class="form-control rcorners1 @error('email', 'post') is-invalid @enderror " name="email"
                        data-parsley-trigger="change" value="{{ old('email') }}" />
                    <label for="password" class="text-dark text-bold mt-2">Password</label> @error('password1')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    <input type="password" id="password1" class="form-control rcorners1 " name="password1"
                        data-parsley-trigger="change" />
                    <label for="password" class="text-dark text-bold mt-2">Konfirmasi Password</label>
                    <input type="password" id="password2" class="form-control rcorners1 " name="password2"
                        data-parsley-trigger="change" />
                    <label for="password" class="text-dark text-bold mt-2">Nama Perusahaan</label> @error('namaperusahaan')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    <input type="text" id="namaperusahaan" class="form-control rcorners1 " name="namaperusahaan"
                        data-parsley-trigger="change" value="{{ old('namaperusahaan') }}" />
                    <button type="submit" style="background-color:rgb(240, 235, 230)"
                        class="btn mt-2 form-control rcorners1 mb-3">Daftar</button>
                </form>
                <p class="text-center text-dark text-bold">Sudah punya akun ? <a href="{{ route('login') }}">Login</a>
                </p>
            </div>
        </div>
    </div>
@endsection
