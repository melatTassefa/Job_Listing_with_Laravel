@extends('layouts.app')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Create an Account</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf

            <!-- First Name -->
            <div class="mb-6">
                <label for="First_name" class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
                <input type="text" name="First_name" id="First_name" placeholder="Your first name"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('First_name') border-red-500 @enderror"
                       value="{{ old('First_name') }}" required>
                @error('First_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="mb-6">
                <label for="last_name" class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Your last name"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('last_name') border-red-500 @enderror"
                       value="{{ old('last_name') }}" required>
                @error('last_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Username -->
            <div class="mb-6">
                <label for="username" class="block text-gray-700 text-sm font-medium mb-2">Username</label>
                <input type="text" name="username" id="username" placeholder="Username"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('username') border-red-500 @enderror"
                       value="{{ old('username') }}" required>
                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Age -->
            <div class="mb-6">
                <label for="Age" class="block text-gray-700 text-sm font-medium mb-2">Age</label>
                <input type="number" name="Age" id="Age" placeholder="Your age"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('Age') border-red-500 @enderror"
                       value="{{ old('Age') }}" required>
                @error('Age')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Gender -->
            <div class="mb-6">
                <label for="Gender" class="block text-gray-700 text-sm font-medium mb-2">Gender</label>
                <select name="Gender" id="Gender"
                        class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('Gender') border-red-500 @enderror"
                        required>
                    <option value="" disabled selected>Select your gender</option>
                    <option value="male" {{ old('Gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('Gender') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('Gender')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Phone Number -->
            <div class="mb-6">
                <label for="phone_number" class="block text-gray-700 text-sm font-medium mb-2">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" placeholder="Your phone number"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('phone_number') border-red-500 @enderror"
                       value="{{ old('phone_number') }}" required>
                @error('phone_number')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Address -->
            <div class="mb-6">
                <label for="Adress" class="block text-gray-700 text-sm font-medium mb-2">Address</label>
                <input type="text" name="Adress" id="Adress" placeholder="Your address"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('Adress') border-red-500 @enderror"
                       value="{{ old('Adress') }}" required>
                @error('Adress')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Email -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                       value="{{ old('email') }}" required>
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" placeholder="Choose a Password"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                       required>
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-2">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your Password"
                       class="bg-gray-200 border border-gray-300 w-full p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password_confirmation') border-red-500 @enderror"
                       required>
                @error('password_confirmation')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-lg font-medium w-full hover:bg-blue-600 transition duration-300 ease-in-out">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
