@extends('layout.main')

@section('content')
<h2 class="card-title">REGISTER</h2>
<form action="{{ URL::to('/register') }}" method="POST" class="col-sm-4 mt-4">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon1"><i class="fas fa-user"></i></span>
        <input type="text" value="{{ old('username') }}" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" autofocus>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon1"><i class="fas fa-envelope"></i></span>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" aria-label="email" aria-describedby="basic-addon1">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon1"><i class="fas fa-address-card"></i></span>
        <input type="text" value="{{ old('fullname') }}" name="fullname" class="form-control @error('fullname') is-invalid @enderror" placeholder="Nama Lengkap" aria-label="Username" aria-describedby="basic-addon1">
        @error('fullname')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon1"><i class="fas fa-question-circle"></i></span>
        <select class="form-select @error('selectQuestion') is-invalid @enderror" aria-label="selectQuestion" name="selectQuestion">
            <option>Pilih Pertanyaan Keamanan...</option>
            <option value="Di kota mana ayah Anda lahir?">Di kota mana ayah Anda lahir?</option>
            <option value="Di kota mana ibu Anda lahir?">Di kota mana ibu Anda lahir?</option>
            <option value="Apa makanan favorit Anda?">Apa makanan favorit Anda?</option>
            <option value="Siapa nama tengah ibu Anda?">Siapa nama tengah ibu Anda?</option>
            <option value="Apa nama sekolah pertama yang Anda masuki?">Apa nama sekolah pertama yang Anda masuki?</option>
        </select>
        @error('selectQuestion')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon1"><i class="fas fa-voicemail"></i></span>
        <input type="text" value="{{ old('answerQuestion') }}" name="answerQuestion" class="form-control @error('answerQuestion') is-invalid @enderror" placeholder="Jawaban Anda" aria-label="answerQuestion" aria-describedby="basic-addon1">
        @error('answerQuestion')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon2"><i class="fas fa-lock"></i></span>
        <input type="password" name="password" id="passwordRegister1" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" id="password">
        <button type="button" class="input-group-text bg-custom" id="btnPassReg1">
            <i class="fas fa-eye-slash"></i>
        </button>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon2"><i class="fas fa-lock"></i></span>
        <input type="password" name="password_confirmation" id="passwordRegister2" class="form-control @error('password') is-invalid @enderror" placeholder="Re-Password" aria-label="RePassword" aria-describedby="basic-addon2" id="retypepassword">
        <button type="button" class="input-group-text bg-custom" id="btnPassReg2">
            <i class="fas fa-eye-slash"></i>
        </button>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn bg-custom mb-3" type="submit">
        <i class="fas fa-sign-in-alt"></i>
        Register
    </button>
    <p class="text-center">Sudah memiliki akun? <a href="{{ URL::to('/login') }}" class="custom-anchor">Masuk Disini</a></p>
</form>
@endsection