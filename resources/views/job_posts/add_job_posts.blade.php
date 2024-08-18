@extends('layouts.app')
@section('content')
<form action="" method="">
<div class="space-y-12">
    <div class="border-b border-gray-900/10 ml-8 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Add a Job Post</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="job_name" class="block text-sm font-medium leading-6 text-gray-200">Job Title</label>
                    <div class="mt-2">
                    <span><input type="text" name="job_name" id="job_name" placeholder="Enter Job Title"></span>
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="job_field" class="block text-sm font-medium leading-6 text-gray-200">Job Field</label>
                    <div class="mt-2">
                        {{-- <select name="job_field" id="job_field">
                            <option value="" disabled selected>Select a Field</option>
                            @foreach ($job_fields as $field => $value )
                                <option value="{{ $field }}">{{ $value }}</option>
                            @endforeach
                        </select> --}}
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="job_company" class="block text-sm font-medium leading-6 text-gray-200">Company Name</label>
                    <input type="text" name="job_company" id="job_company">
                </div>
                <div class="sm:col-span-4">
                    <label for="job_adress" class="block text-sm font-medium leading-6 text-gray-200">Job City</label>
                    <input type="text" name="job_adress" id="job_adress">
                </div>
                <div class="sm:col-span-4">
                    <label for="job_type" class="block text-sm font-medium leading-6 text-gray-200">Job Type</label><br>
                    <input type="radio" id="remote" name="remote" value="remote">
                    <label for="remote" class="block text-sm font-medium leading-6 text-gray-200">Remote</label>
                    <input type="radio" id="in_person" name="in_person" value="in_person">
                    <label for="in_person" class="block text-sm font-medium leading-6 text-gray-200">In Person</label>
                </div>
                <div class="sm:col-span-4">
                    <label for="job_salary" class="block text-sm font-medium leading-6 text-gray-200">Salary</label>
                    <input type="text" name="job_salary" id="job_salary">
                </div>
                <div class="sm:col-span-4">
                    <label for="job_deadline" class="block text-sm font-medium leading-6 text-gray-200">Deadline</label>
                    <input type="date" name="job_deadline" id="job_deadline">
                </div>
                <div class="sm:col-span-4">
                    <label for="job_required_qualification" class="block text-sm font-medium leading-6 text-gray-200">Required Qualification</label>
                    <input type="text" name="job_required_qualification" id="job_required_qualification">
                </div>
            </div>
    </div>
</div>
</form>
@endsection
