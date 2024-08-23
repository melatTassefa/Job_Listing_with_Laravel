@extends ('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Finder</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-50">
    <!-- Your existing navbar goes here -->

    <!-- Main Content -->
    <section class="container mx-auto mt-16 px-4 flex items-center justify-between">
        <div class="max-w-lg">
            <h2 class="text-5xl font-extrabold text-blue-900 leading-tight">Find the most exciting startup jobs</h2>
        </div>
        <div class="h-screen w-screen overflow-hidden">
            <img src="{{ asset('images/home.avif') }}" alt="Person Image" class="object-cover h-full w-full">
        </div>


    </section>

    <!-- Search Form -->
    
</body>
</html>

@endsection
