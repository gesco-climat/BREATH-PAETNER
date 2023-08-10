<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WALID</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
       
        <style>
        /* Custom CSS for User Information Form */
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #333;
            border-color: #0056b3;
        }
        .photo {
            font-size: 25px;
            
        }
    </style>
    </head>
    <body>
        <!-- Include any CSS or styling links here -->
    <div class="container mt-5">
        <h2 class="mb-4">information utilisateur</h2>
        <form action="/user/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="first_name">nom</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="last_name">prenom</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="bio">Bio</label>
                <textarea name="bio" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="photo" class="photo">Photo</label>
                <br>
                <input type="file" name="photo" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Submit</button>
        </form>
        <a href="user.blade.php" class="btn btn-primary mt-3">View Users</a>

    </div>
    <!-- Include any JavaScript or script tags here -->
</body>
</html>

       