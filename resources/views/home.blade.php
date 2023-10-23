@extends('layouts.app')

@section('title', 'Home')


@section('contents')

<section class="banner-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 px-0">
                <div class="banner-bg"></div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="banner-text">
                    <h1>@lang('words.applay request for your dream') <span>@lang('words.job')</span>
                        @lang('words.with LiebHerr')</h1>
                    <p class="py-3 rtl">@lang('words.We appreciate your interest in Liebherr')</p>
                    <a href="#applayForm" class="secondary-btn">@lang('words.applay now')<span
                            class="flaticon-next"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="aboutUs" class="category-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top text-center">
                    <h2>@lang('words.About us')</h2>
                    <p class="rtl">@lang('words.About us Details')</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-category text-center mb-4">
                    <img src="assets/images/vission.jpeg" width="50" height="50" alt="vission">
                    <h4>@lang('words.Vision')</h4>
                    <h5 class="rtl">@lang('words.The companys vision')</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-category text-center mb-4">
                    <img src="assets/images/message.jpeg" width="50" height="50" alt="message">
                    <h4>@lang('words.mission')</h4>
                    <h5 class="rtl">@lang('words.We want to introduce')</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-category text-center mb-4">
                    <img src="assets/images/goals.jpeg" width="50" height="50" alt="goals">
                    <h4>@lang('words.Goals')</h4>
                    <h5 class="rtl">@lang('words.The companys goals')</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="gallery" class="container mb-5">
    <div class="section-top-border">
        <h3 class="title_color">@lang('words.Image Gallery')</h3>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="assets/images/elements/g11.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g11.jpeg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="assets/images/elements/g22.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g22.jpeg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="assets/images/elements/g33.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g33.jpeg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="assets/images/elements/g44.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g44.jpeg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="assets/images/elements/g55.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g55.jpeg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="assets/images/elements/g66.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g66.jpeg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="assets/images/elements/g77.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g77.jpeg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="assets/images/elements/g88.jpeg" class="img-gal">
                    <div class="single-gallery-image" style="background: url(assets/images/elements/g88.jpeg);"></div>
                </a>
            </div>
        </div>
    </div>
</div>


<div id="applayForm" class="container mb-5">
    <div class="row">
        <div class="col text-center">

            <h3>@lang('words.applay for job')</h3>
            <p class="py-3">@lang('words.Please make sure that your answer')</p>
        </div>
    </div>
    <form action="{{ route('userSendData') }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- Display validation errors --}}
        @if(Session::has('success'))
        <div class="row">
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        </div>
        @endif

        @if ($errors->any())
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    <ul class="list-unstyled list-style-circle">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif
        <div class="row">

            <div class="col-12 form-group">
                <label for="fullname"> @lang('words.Full Name')</label>
                <input id="fullname" type="text"
                    class="form-control single-input  @error('fullname') is-invalid @enderror" name="fullname"
                    value="{{ old('fullname') }}" autofocus>

                @error('fullname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col-12 form-group">
                <label for="gender">@lang('words.Gender')</label>
                <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender">
                    <option value="">Select Gender</option>
                    <option value="male" {{ old('gender')==='male' ? 'selected' : '' }}>@lang('words.Male')
                    </option>
                    <option value="female" {{ old('gender')==='female' ? 'selected' : '' }}>
                        @lang('words.Female')
                    </option>
                </select>

                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col-12 form-group">
                <label for="nationality"> @lang('words.Nationality')</label>
                <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror"
                    name="nationality" value="{{ old('nationality') }}" autofocus>

                @error('nationality')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="date_of_birth"> @lang('words.Date Of Birth')</label>
                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                    name="date_of_birth" value="{{ old('date_of_birth') }}" autofocus>

                @error('date_of_birth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col-12 form-group">
                <label for="identity_number"> @lang('words.Identity Number')</label>
                <input id="identity_number" type="text"
                    class="form-control @error('identity_number') is-invalid @enderror" name="identity_number"
                    value="{{ old('identity_number') }}" autofocus>

                @error('identity_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col-12 form-group">
                <label for="residency">@lang('words.Residency')</label>
                <input id="residency" type="text" class="form-control @error('residency') is-invalid @enderror"
                    name="residency" value="{{ old('residency') }}">

                @error('residency')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="date_of_issue">@lang('words.Date of Issue')</label>
                <input id="date_of_issue" type="date" class="form-control @error('date_of_issue') is-invalid @enderror"
                    name="date_of_issue" value="{{ old('date_of_issue') }}">

                @error('date_of_issue')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="issuing_authority">@lang('words.Issuing Authority')</label>
                <input id="issuing_authority" type="text"
                    class="form-control @error('issuing_authority') is-invalid @enderror" name="issuing_authority"
                    value="{{ old('issuing_authority') }}">

                @error('issuing_authority')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="marital_status">@lang('words.Marital Status')</label>
                <select id="marital_status" class="form-control @error('marital_status') is-invalid @enderror"
                    name="marital_status">
                    <option value="">Select Marital Status</option>
                    <option value="single" {{ old('marital_status')==='single' ? 'selected' : '' }}>
                        @lang('words.Single')
                    </option>
                    <option value="married" {{ old('marital_status')==='married' ? 'selected' : '' }}>
                        @lang('words.Married')
                    </option>
                    <option value="widowed" {{ old('marital_status')==='widowed' ? 'selected' : '' }}>
                        @lang('words.Widowed')
                    </option>
                    <option value="divorced" {{ old('marital_status')==='divorced' ? 'selected' : '' }}>
                        @lang('words.Divorced')
                    </option>
                </select>

                @error('marital_status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="email">@lang('words.Email')</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="phone">@lang('words.Phone')</label>
                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                    value="{{ old('phone') }}">

                @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <input id="possibility_of_travel" type="checkbox"
                    class="custom-checkbox @error('possibility_of_travel') is-invalid @enderror"
                    name="possibility_of_travel" value="{{ old('possibility_of_travel') }}">
                <label for="possibility_of_travel">@lang('words.Possibility of Travel')</label>

                @error('possibility_of_travel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <input id="worked_before" type="checkbox"
                    class="custom-checkbox @error('worked_before') is-invalid @enderror" name="worked_before">
                <label for="worked_before">@lang('words.Worked Before')</label>

                @error('worked_before')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="qualification">@lang('words.Qualification')</label>
                <select id="qualification" class="form-control @error('qualification') is-invalid @enderror"
                    name="qualification">
                    <option value="university" {{ old('qualification')=='university' ? 'selected' : '' }}>
                        @lang('words.University')
                    </option>
                    <option value="school" {{ old('qualification')=='school' ? 'selected' : '' }}>
                        @lang('words.School')
                    </option>
                </select>

                @error('qualification')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="qualification_type">@lang('words.Qualification Type')</label>
                <select id="qualification_type" class="form-control @error('qualification_type') is-invalid @enderror"
                    name="qualification_type">
                    <option value="diploma" {{ old('qualification_type')=='diploma' ? 'selected' : '' }}>
                        @lang('words.Diploma')
                    </option>
                    <option value="bachelor" {{ old('qualification_type')=='bachelor' ? 'selected' : '' }}>
                        @lang('words.Bachelor')
                    </option>
                    <option value="master" {{ old('qualification_type')=='master' ? 'selected' : '' }}>
                        @lang('words.Master')
                    </option>
                </select>

                @error('qualification_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="certificate_source">@lang('words.Certificate Source')</label>
                <input id="certificate_source" type="text"
                    class="form-control @error('certificate_source') is-invalid @enderror" name="certificate_source"
                    value="{{ old('certificate_source') }}">

                @error('certificate_source')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
                <label for="attach_certificates">@lang('words.Attach Certificates')</label>
                <input id="attach_certificates" type="file"
                    class="form-control @error('attach_certificates') is-invalid @enderror" name="attach_certificates"
                    value="{{ old('attach_certificates') }}">

                @error('attach_certificates')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="section_type">@lang('words.Section Type')</label>
                <input id="section_type" type="text" class="form-control @error('section_type') is-invalid @enderror"
                    name="section_type" value="{{ old('section_type') }}">

                @error('section_type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="graduation_date">@lang('words.Graduation Date')</label>
                <input id="graduation_date" type="date"
                    class="form-control @error('graduation_date') is-invalid @enderror" name="graduation_date"
                    value="{{ old('graduation_date') }}">

                @error('graduation_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="academic_experience">@lang('words.Academic Experience')</label>
                <input id="academic_experience" type="text"
                    class="form-control @error('academic_experience') is-invalid @enderror" name="academic_experience"
                    value="{{ old('academic_experience') }}">

                @error('academic_experience')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
                <label for="attach_academic_experience">@lang('words.Attach Academic Experience')</label>
                <input id="attach_academic_experience" type="file" multiple
                    class="form-control @error('attach_academic_experience') is-invalid @enderror"
                    name="attach_academic_experience[]" value="{{ old('attach_academic_experience') }}">

                @error('attach_academic_experience')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
                <label for="training_courses">@lang('words.Training Courses')</label>
                <textarea id="training_courses" class="form-control @error('training_courses') is-invalid @enderror"
                    name="training_courses">{{ old('training_courses') }}</textarea>

                @error('training_courses')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
                <label for="attach_training_courses">@lang('words.Attach Training Courses')</label>
                <input id="attach_training_courses" type="file" multiple
                    class="form-control @error('attach_training_courses') is-invalid @enderror"
                    name="attach_training_courses[]" value="{{ old('attach_training_courses') }}">

                @error('attach_training_courses')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="english_level">@lang('words.English Level')</label>
                <select id="english_level" class="form-control @error('english_level') is-invalid @enderror"
                    name="english_level">
                    <option value="weak" {{ old('english_level')=='weak' ? 'selected' : '' }}>
                        @lang('words.Weak')
                    </option>
                    <option value="intermediate" {{ old('english_level')=='intermediate' ? 'selected' : '' }}>
                        @lang('words.Intermediate')</option>
                    <option value="advanced" {{ old('english_level')=='advanced' ? 'selected' : '' }}>
                        @lang('words.Advanced')
                    </option>
                </select>

                @error('english_level')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-12 form-group">
                <label for="computer_level">@lang('words.Computer Level')</label>
                <select id="computer_level" class="form-control @error('computer_level') is-invalid @enderror"
                    name="computer_level">
                    <option value="weak" {{ old('computer_level')=='weak' ? 'selected' : '' }}>
                        @lang('words.Weak')
                    </option>
                    <option value="intermediate" {{ old('computer_level')=='intermediate' ? 'selected' : '' }}>
                        @lang('words.Intermediate')</option>
                    <option value="advanced" {{ old('computer_level')=='advanced' ? 'selected' : '' }}>
                        @lang('words.Advanced')
                    </option>
                </select>

                @error('computer_level')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
                <label for="hear_about_company">@lang('words.Hear About Company')</label>
                <textarea id="hear_about_company" class="form-control @error('hear_about_company') is-invalid @enderror"
                    name="hear_about_company">{{ old('hear_about_company') }}</textarea>

                @error('hear_about_company')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
                <label for="cv">@lang('words.CV')</label>
                <input id="cv" type="file" class="form-control @error('cv') is-invalid @enderror" name="cv"
                    value="{{ old('cv') }}">

                @error('cv')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
                <label for="attach_additional_information">@lang('words.Attach Additional Information')</label>
                <input id="attach_additional_information" type="file" multiple
                    class="form-control @error('attach_additional_information') is-invalid @enderror"
                    name="attach_additional_information[]" value="{{ old('attach_additional_information') }}">

                @error('attach_additional_information')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>

        <div class="row">
            <div class="col text-center">
                <button type="submit" class="template-btn">@lang('words.SendData')</button>
            </div>
        </div>
    </form>
</div>





@endsection