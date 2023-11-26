@extends('app_base')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            @if(count($ad->media) === 1)
                <img
                    src="{{ asset('uploads/' . $ad->media[0]->media_url) }}"
                    class="card-img-top"
                    alt="{{ $ad->title }}"
                />
            @elseif(count($ad->media) > 1)

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @for($i = 0; $i < count($ad->media); $i++)
                            <div class="carousel-item @if($i === 0) active @endif">
                                <img src="{{ asset('uploads/' . $ad->media[$i]->media_url) }}" class="d-block w-100" alt="{{ $ad->title }}">
                            </div>
                        @endfor
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @endif

            <div class="card-body">
                <h5 class="card-title">
                    {{ $ad->title }}
                </h5>
                <p class="card-text">
                    {{ $ad->description }}
                </p>
                <div class="d-flex card-footer justify-content-between">
                    <p>{{ ['new' => 'Novo', 'used' => 'Korisceno'][$ad->status] }}</p>
                    <p class="fw-bolder text-danger">
                        {{ number_format($ad->price, 2) }} KM
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('sidebar')
    <div class="col-lg-12">
        <section class="section profile">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <h2>Kevin Anderson</h2>
                    <h3>Web Designer</h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="card">
            <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">
                            Overview
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile
                        </button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings
                        </button>
                    </li>

                </ul>
                <div class="tab-content pt-2">

                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">About</h5>
                        <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                            temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae
                            quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                        <h5 class="card-title">Profile Details</h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Full Name</div>
                            <div class="col-lg-9 col-md-8">Kevin Anderson</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Company</div>
                            <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Job</div>
                            <div class="col-lg-9 col-md-8">Web Designer</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Country</div>
                            <div class="col-lg-9 col-md-8">USA</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Address</div>
                            <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Phone</div>
                            <div class="col-lg-9 col-md-8">(436) 486-3538 x29071</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">k.anderson@example.com</div>
                        </div>

                    </div>

                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                        <!-- Profile Edit Form -->
                        <form>
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="assets/img/profile-img.jpg" alt="Profile">
                                    <div class="pt-2">
                                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i
                                                class="bi bi-upload"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                                class="bi bi-trash"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="fullName" type="text" class="form-control" id="fullName"
                                           value="Kevin Anderson">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="company" type="text" class="form-control" id="company"
                                           value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="country" type="text" class="form-control" id="Country" value="USA">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="address" type="text" class="form-control" id="Address"
                                           value="A108 Adam Street, New York, NY 535022">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="phone" type="text" class="form-control" id="Phone"
                                           value="(436) 486-3538 x29071">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="Email"
                                           value="k.anderson@example.com">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="twitter" type="text" class="form-control" id="Twitter"
                                           value="https://twitter.com/#">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="facebook" type="text" class="form-control" id="Facebook"
                                           value="https://facebook.com/#">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram
                                    Profile</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="instagram" type="text" class="form-control" id="Instagram"
                                           value="https://instagram.com/#">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="linkedin" type="text" class="form-control" id="Linkedin"
                                           value="https://linkedin.com/#">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form><!-- End Profile Edit Form -->

                    </div>

                    <div class="tab-pane fade pt-3" id="profile-settings">

                        <!-- Settings Form -->
                        <form>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email
                                    Notifications</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                        <label class="form-check-label" for="changesMade">
                                            Changes made to your account
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                        <label class="form-check-label" for="newProducts">
                                            Information on new products and services
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="proOffers">
                                        <label class="form-check-label" for="proOffers">
                                            Marketing and promo offers
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="securityNotify" checked
                                               disabled>
                                        <label class="form-check-label" for="securityNotify">
                                            Security alerts
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form><!-- End settings Form -->

                    </div>

                </div><!-- End Bordered Tabs -->

            </div>
        </div>

    </div>

@endsection
