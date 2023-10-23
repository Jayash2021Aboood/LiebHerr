@extends('layouts.admin.app')

@section('title', 'Show JobOrder')

@section('contents')
<h1 class="mb-0">Detail JobOrder</h1>
<hr />


<div class="row">

    <div class="col-12 form-group">
        <label for="fullname"> @lang('words.Full Name')</label>
        <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname"
            value="{{ $joborder->fullname }}" autofocus>
    </div>


    <div class="col-12 form-group">
        <label for="gender">@lang('words.Gender')</label>
        <select id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender">
            <option value="">Select Gender</option>
            <option value="male" {{ $joborder->gender ==='male' ? 'selected' : '' }}>@lang('words.Male')</option>
            <option value="female" {{ $joborder->gender ==='female' ? 'selected' : '' }}>@lang('words.Female')
            </option>
        </select>

    </div>


    <div class="col-12 form-group">
        <label for="nationality"> @lang('words.Nationality')</label>
        <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror"
            name="nationality" value="{{ $joborder->nationality }}" autofocus>

    </div>

    <div class="col-12 form-group">
        <label for="date_of_birth"> @lang('words.Date Of Birth')</label>
        <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
            name="date_of_birth" value="{{ $joborder->date_of_birth }}" autofocus>
    </div>


    <div class="col-12 form-group">
        <label for="identity_number"> @lang('words.Identity Number')</label>
        <input id="identity_number" type="text" class="form-control @error('identity_number') is-invalid @enderror"
            name="identity_number" value="{{ $joborder->identity_number }}" autofocus>

    </div>


    <div class="col-12 form-group">
        <label for="residency">@lang('words.Residency')</label>
        <input id="residency" type="text" class="form-control @error('residency') is-invalid @enderror" name="residency"
            value="{{ $joborder->residency }}">

    </div>

    <div class="col-12 form-group">
        <label for="date_of_issue">@lang('words.Date of Issue')</label>
        <input id="date_of_issue" type="date" class="form-control @error('date_of_issue') is-invalid @enderror"
            name="date_of_issue" value="{{ $joborder->date_of_issue }}">

    </div>

    <div class="col-12 form-group">
        <label for="issuing_authority">@lang('words.Issuing Authority')</label>
        <input id="issuing_authority" type="text" class="form-control @error('issuing_authority') is-invalid @enderror"
            name="issuing_authority" value="{{ $joborder->issuing_authority }}">

    </div>

    <div class="col-12 form-group">
        <label for="marital_status">@lang('words.Marital Status')</label>
        <select id="marital_status" class="form-control @error('marital_status') is-invalid @enderror"
            name="marital_status">
            <option value="">Select Marital Status</option>
            <option value="single" {{ $joborder->marital_status === 'single' ? 'selected' : '' }}>@lang('words.Single')
            </option>
            <option value="married" {{ $joborder->marital_status === 'married' ? 'selected' : ''
                }}>@lang('words.Married')
            </option>
            <option value="widowed" {{ $joborder->marital_status === 'widowed' ? 'selected' : ''
                }}>@lang('words.Widowed')
            </option>
            <option value="divorced" {{ $joborder->marital_status === 'divorced' ? 'selected' : '' }}>
                @lang('words.Divorced')
            </option>
        </select>

    </div>

    <div class="col-12 form-group">
        <label for="email">@lang('words.Email')</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ $joborder->email }}">

    </div>

    <div class="col-12 form-group">
        <label for="phone">@lang('words.Phone')</label>
        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
            value="{{ $joborder->phone }}">

    </div>

    <div class="col-12 form-group">
        <input id="possibility_of_travel" type="checkbox"
            class="custom-checkbox @error('possibility_of_travel') is-invalid @enderror" name="possibility_of_travel" {{
            $joborder->possibility_of_travel == 1 ? 'checked' : '' }}>
        <label for="possibility_of_travel">@lang('words.Possibility of Travel')</label>

    </div>

    <div class="col-12 form-group">
        <input id="worked_before" type="checkbox" class="custom-checkbox @error('worked_before') is-invalid @enderror"
            name="worked_before" {{ $joborder->worked_before == 1 ? 'checked' : '' }}>
        <label for="worked_before">@lang('words.Worked Before')</label>

    </div>

    <div class="col-12 form-group">
        <label for="qualification">@lang('words.Qualification')</label>
        <select id="qualification" class="form-control @error('qualification') is-invalid @enderror"
            name="qualification">
            <option value="university" {{ $joborder->qualification === 'university' ? 'selected' : '' }}>
                @lang('words.University')
            </option>
            <option value="school" {{ $joborder->qualification === 'school' ? 'selected' : '' }}>@lang('words.School')
            </option>
        </select>
    </div>

    <div class="col-12 form-group">
        <label for="qualification_type">@lang('words.Qualification Type')</label>
        <select id="qualification_type" class="form-control @error('qualification_type') is-invalid @enderror"
            name="qualification_type">
            <option value="diploma" {{ $joborder->qualification_type === 'diploma' ? 'selected' : '' }}>
                @lang('words.Diploma')
            </option>
            <option value="bachelor" {{ $joborder->qualification_type === 'bachelor' ? 'selected' : '' }}>
                @lang('words.Bachelor')
            </option>
            <option value="master" {{ $joborder->qualification_type === 'master' ? 'selected' : ''
                }}>@lang('words.Master')
            </option>
        </select>
    </div>

    <div class="col-12 form-group">
        <label for="certificate_source">@lang('words.Certificate Source')</label>
        <input id="certificate_source" type="text"
            class="form-control @error('certificate_source') is-invalid @enderror" name="certificate_source"
            value="{{ $joborder->certificate_source }}">
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
        <label for="attach_certificates">@lang('words.Attach Certificates')</label>
        <input id="attach_certificates" type="file" disabled
            class="form-control @error('attach_certificates') is-invalid @enderror" name="attach_certificates"
            value="{{ $joborder->attach_certificates }}">
        <a target="_blink" href="{{ asset('storage/'.$joborder->attach_certificates)  }}">
            @lang('words.Attach Certificates') </a>
    </div>

    <div class="col-12 form-group">
        <label for="section_type">@lang('words.Section Type')</label>
        <input id="section_type" type="text" class="form-control @error('section_type') is-invalid @enderror"
            name="section_type" value="{{ $joborder->section_type }}">
    </div>

    <div class="col-12 form-group">
        <label for="graduation_date">@lang('words.Graduation Date')</label>
        <input id="graduation_date" type="date" class="form-control @error('graduation_date') is-invalid @enderror"
            name="graduation_date" value="{{ $joborder->graduation_date }}">

    </div>

    <div class="col-12 form-group">
        <label for="academic_experience">@lang('words.Academic Experience')</label>
        <input id="academic_experience" type="text"
            class="form-control @error('academic_experience') is-invalid @enderror" name="academic_experience"
            value="{{ $joborder->academic_experience }}">
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
        <label for="attach_academic_experience">@lang('words.Attach Academic Experience')</label>
        <input id="attach_academic_experience" type="file" disabled multiple
            class="form-control @error('attach_academic_experience') is-invalid @enderror"
            name="attach_academic_experience[]" value="{{ $joborder->attach_academic_experience }}">

        @foreach ( explode('|', $joborder->attach_academic_experience) as $file )
        <a target="_blink" href="{{ asset('storage/'.$file)  }}">
            @lang('words.Attach Academic Experience') {{ $loop->iteration }}
        </a>
        <br>
        @endforeach

    </div>


    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
        <label for="training_courses">@lang('words.Training Courses')</label>
        <textarea id="training_courses" class="form-control @error('training_courses') is-invalid @enderror"
            name="training_courses">{{ $joborder->training_courses }}</textarea>

    </div>


    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
        <label for="attach_training_courses">@lang('words.Attach Training Courses')</label>
        <input id="attach_training_courses" type="file" disabled multiple
            class="form-control @error('attach_training_courses') is-invalid @enderror" name="attach_training_courses[]"
            value="{{ $joborder->attach_training_courses }}">

        @foreach ( explode('|', $joborder->attach_training_courses) as $file )
        <a target="_blink" href="{{ asset('storage/'.$file)  }}">
            @lang('words.Attach Training Courses') {{ $loop->iteration }}
        </a>
        <br>
        @endforeach

    </div>

    <div class="col-12 form-group">
        <label for="english_level">@lang('words.English Level')</label>
        <select id="english_level" class="form-control @error('english_level') is-invalid @enderror"
            name="english_level">
            <option value="weak" {{ $joborder->english_level === 'weak' ? 'selected' : '' }}>@lang('words.Weak')
            </option>
            <option value="intermediate" {{ $joborder->english_level === 'intermediate' ? 'selected' : '' }}>
                @lang('words.Intermediate')</option>
            <option value="advanced" {{ $joborder->english_level === 'advanced' ? 'selected' : '' }}>
                @lang('words.Advanced')
            </option>
        </select>

    </div>

    <div class="col-12 form-group">
        <label for="computer_level">@lang('words.Computer Level')</label>
        <select id="computer_level" class="form-control @error('computer_level') is-invalid @enderror"
            name="computer_level">
            <option value="weak" {{ $joborder->computer_level === 'weak' ? 'selected' : '' }}>@lang('words.Weak')
            </option>
            <option value="intermediate" {{ $joborder->computer_level === 'intermediate' ? 'selected' : '' }}>
                @lang('words.Intermediate')</option>
            <option value="advanced" {{ $joborder->computer_level === 'advanced' ? 'selected' : '' }}>
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
            name="hear_about_company">{{ $joborder->hear_about_company }}</textarea>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
        <label for="cv">@lang('words.CV')</label>
        <input id="cv" type="file" disabled class="form-control" name="cv" value="{{ $joborder->cv }}">

        <a target="_blink" href="{{ asset('storage/'.$joborder->cv)  }}">
            @lang('words.CV') </a>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 form-group">
        <label for="attach_additional_information">@lang('words.Attach Additional Information')</label>
        <input id="attach_additional_information" type="file" disabled
            class="form-control @error('attach_additional_information') is-invalid @enderror" name="attach_additional_information[]"
            value="{{ $joborder->attach_additional_information }}">

        @foreach ( explode('|', $joborder->attach_additional_information) as $file )
        <a target="_blink" href="{{ asset('storage/'.$file)  }}">
            @lang('words.Attach Additional Information') {{ $loop->iteration }}
        </a>
        <br>
        @endforeach

    </div>



</div>

<div class="row">
    <div class="d-grid">
        <a href="{{ route('joborders.index') }}" class="btn btn-primary">@lang('words.Back')</a>
    </div>
</div>

<div class="row">
    <div class="col mb-3">
        <label class="form-label">Created At</label>
        <input type="text" name="created_at" class="form-control" placeholder="Created At"
            value="{{ $joborder->created_at }}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-label">Updated At</label>
        <input type="text" name="updated_at" class="form-control" placeholder="Updated At"
            value="{{ $joborder->updated_at }}" readonly>
    </div>
</div>
@endsection