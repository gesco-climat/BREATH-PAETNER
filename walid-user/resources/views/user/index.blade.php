<!DOCTYPE html>
<html>
<head>
    <title>walid-User</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .zoom-img {
    cursor: pointer;
    transition: transform 0.3s ease;
}

.zoom-img.zoomed {
    transform: scale(1.5); /* Increase this value to zoom in more */
}
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: none;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .zoom-img {
            object-fit:contain;
            height: 200px;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }

        .card-text {
            color: #6c757d;
        }
    

</style>
<body>
<div class="container mt-5">
    <h2 class="mb-4">utilisateurs</h2>
    <div class="row">
        @foreach($users as $user)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $user->photo) }}" class="card-img-top zoom-img" alt="User Photo">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h5>
                    <p class="card-text" href="mailto:{{ $user->email }}">Email: {{ $user->email }}</p>
                    <p class="card-text">Age: {{ $user->age }}</p>
                    <p class="card-text">{{ $user->bio }}</p>
                </div>

                <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Suprimmer</button>
                    </form>     
            </div>
        </div>
        @endforeach
    </div>
</div>
 <script>
    // Add this script after your HTML content or in an external .js file
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('.zoom-img');

    images.forEach(image => {
        image.addEventListener('click', function() {
            this.classList.toggle('zoomed');
        });
    });
});

 </script>
</body>
</html>
