@extends('layouts.admin.app')

@section('title', 'Home JobOrder')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List JobOrder</h1>
    <a href="{{ route('joborders.create') }}" class="btn btn-primary">Add JobOrder</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
</div>
@endif
<table class="table table-hover table-responsive table-">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>@lang('words.Full Name')</th>
            <th>@lang('words.Gender')</th>
            <th>@lang('words.Nationality')</th>
            <th>@lang('words.Date Of Birth')</th>
            <th>@lang('words.Identity Number')</th>
            <th>@lang('words.Residency')</th>
            <th>@lang('words.Action')</th>
        </tr>
    </thead>
    <tbody>+
        @if($joborder->count() > 0)
        @foreach($joborder as $rs)
        <tr>
            <td class="align-middle">{{ $loop->iteration }}</td>
            <td class="align-middle">{{ $rs->fullname }}</td>
            <td class="align-middle">{{ $rs->gender }}</td>
            <td class="align-middle">{{ $rs->nationality }}</td>
            <td class="align-middle">{{ $rs->date_of_birth }}</td>
            <td class="align-middle">{{ $rs->identity_number }}</td>
            <td class="align-middle">{{ $rs->residency }}</td>
            <td class="align-middle">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ route('joborders.show', $rs->id) }}" type="button"
                        class="btn btn-secondary">@lang('words.Detail')</a>
                    {{-- <a href="{{ route('joborders.edit', $rs->id)}}" type="button"
                        class="btn btn-warning">@lang('words.Edit')</a> --}}
                    <form action="{{ route('joborders.destroy', $rs->id) }}" method="POST" type="button"
                        class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">@lang('words.Delete')</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="5">JobOrder not found</td>
        </tr>
        @endif
    </tbody>
</table>
@endsection