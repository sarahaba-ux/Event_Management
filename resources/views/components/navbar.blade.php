<head>
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<nav class="navbar navbar-dark w-100 px-4" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), rgba(255, 105, 180, 0.5);"> <!-- Dark overlay with pinkish tint -->
    <!-- Logo on the left -->
    <a href="#" class="navbar-brand">
        <img src="logo.png" alt="logo" class="logo" style="width: 40px;">
    </a>

    <!-- Search bar beside login button -->
    <div class="d-flex ms-auto"> <!-- 'ms-auto' pushes items to the right -->
        <form class="d-flex" style="width: 250px;"> <!-- Adjusted width to 250px for a bit wider look -->
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
        
        <!-- Login Icon button -->
        <button class="btn btn-outline-light ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            <i class="fas fa-sign-in-alt"></i> <!-- Font Awesome login icon -->
        </button>
    </div>
</nav>

<style>
    /* Optional: Additional styling for the navbar if needed */
    .navbar {
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Adds a subtle shadow under the navbar */
    }

    .navbar-brand .logo {
        width: 40px;
    }

    .form-control {
        border-radius: 20px; /* Rounded corners for the search bar */
    }

    .btn-outline-light {
        border-radius: 50%; /* Rounded corners for the login button */
    }
</style>
