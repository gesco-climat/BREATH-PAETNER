<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Users Information</h2>
        <div class="row">
            @foreach($users as $user)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                        <p class="card-text">Age: {{ $user->age }}</p>
                        <p class="card-text">Bio: {{ $user->bio }}</p>
                        <img src="{{ asset('storage/' . $user->photo) }}" class="img-fluid" alt="User Photo">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Include any JavaScript or script tags here -->
</body>
</html>
