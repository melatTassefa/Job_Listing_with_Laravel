@extends('layouts.app')
@section('content')
<form action="{{route('store_job')}}" method="POST">
    @csrf
<div class="space-y-12">
    <div class="border-b border-gray-900/10 bg-gray-800 ml-8 pb-12">
        <h2 class=" mt-8 ml-8 inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition ease-in-out duration-150">Add a Job Post</h2>

            <div class="mt-10 ml-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="job_name" class="block text-sm font-medium leading-6 text-gray-200">Job Title</label>
                    <div class="mt-2">
                    <span><input type="text" name="job_name" id="job_name" placeholder="Enter Job Title"></span>
                    </div>
                </div>
                <div class="sm:col-span-4">
                    <label for="job_field" class="block text-sm font-medium leading-6 text-gray-200">Job Field</label>
                    <div class="mt-2">
                        <select name="job_field" id="job_field">
                            <option value="" disabled selected>Select a Field</option>
                            @foreach ($job_fields as $field )
                                <option value="{{ $field->id }}">{{ $field->field_name }}</option>
                            @endforeach
                        </select>
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
                    @foreach ($job_types as $job_type )
                    <div style="display: inline-block; margin-right: 10px;">
                        <input type="radio" id="{{$job_type->job_type}}" name="job_type" value="{{$job_type->job_type}}">
                        <label for="{{$job_type->job_type}}" class="block text-sm font-medium leading-6 text-gray-200">{{$job_type->job_type}}</label>
                    </div>
                    @endforeach

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
                <div class="sm:col-span-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition ease-in-out duration-150"> Post</button>
            </div>
    </div>
</div>
</form>
@endsection
