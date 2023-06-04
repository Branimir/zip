@extends('no_content')

@section('content')

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="{{ route('app.home') }}" class="logo d-flex align-items-center w-auto">
                            <span class="d-none d-lg-block">ZIP</span>
                        </a>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Kreiranje naloga</h5>
                                <p class="text-center small">Molimo unesite vaše podatke</p>
                            </div>
                            <form class="row g-3 needs-validation" method="POST" action="{{ route('auth.register.submit') }}">
                                @csrf
                                @method("POST")
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Ime</label>
                                    <input type="text" name="name" class="form-control" id="yourName" required>
                                    <div class="invalid-feedback">Molimo upišite vaše ime</div>
                                </div>
                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                                    <div class="invalid-feedback">Molimo upišite vašu email adresu</div>
                                </div>
                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Šifra</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                                    <div class="invalid-feedback">Unesite željenu šifru</div>
                                </div>
                                <div class="col-12">
                                    <label for="yourPhone" class="form-label">Telefon</label>
                                    <div class="input-group has-validation">
                                        <input type="text" name="phone" class="form-control" id="yourPhone" required>
                                        <div class="invalid-feedback">Unesite telefon</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">Slažem se sa <a href="#">uslovima korišćenja</a></label>
                                        <div class="invalid-feedback">Morate prihvatiti prije registracije</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Napravi nalog</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Već imate nalog? <a href="{{ route('login') }}">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
