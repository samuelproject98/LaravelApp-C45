@extends('layout.main')

@section('content')
<h2 class="card-title">Forgot Password</h2>
<form action="{{ URL::to('/forgot') }}" method="POST" class="col-sm-4 mt-4">
    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible d-flex align-items-center fade show" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
            <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
            </symbol>
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>

        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            {{ session('error') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <p>Isi field berikut untuk memverifikasikan akun anda. Jika benar, maka password akan terupdate.</p>
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text bg-custom" id="basic-addon1"><i class="fas fa-envelope"></i></span>
        <input type="email" value="{{ old('email') }}" name="email" class="form-control @error('username') is-invalid @enderror" placeholder="E-mail" aria-label="email" aria-describedby="basic-addon1" autofocus>
        @error('email')
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
        <input type="password" name="password" id="passwordRegister1" class="form-control @error('password') is-invalid @enderror" placeholder="New Password" aria-label="Password" aria-describedby="basic-addon2" id="password">
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

    <button class="btn bg-custom mb-3">
        <i class="fas fa-sign-in-alt"></i>
        Submit
    </button>
</form>
@endsection