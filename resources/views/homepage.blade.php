<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management: Admin</title>
    <!-- Add RSVP-style font -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<!-- Navbar -->
@include('components.navbar')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Main Content Area -->
         
        <div class="col-md-10 mt-4">
            <div class="row g-4 justify-content-center px-4">
            <h1>Welcome,  {{ $username }}!</h1>
                <!-- First Row: 2 Columns -->
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="form">
                        <div class="card-container">
                            <div class="card p-3 wedding-card"> <!-- Added wedding-card class -->
                                <div class="card-body">
                                    <h5 class="card-title"><b>Wedding</b></h5>
                                    <p>Description of wedding event.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="form">
                        <div class="card-container">
                            <div class="card p-3 birthday-card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Birthday</b></h5>
                                    <p>Description of birthday event.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Second Row: 2 Columns -->
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="form">
                        <div class="card-container">
                            <div class="card p-3 graduation-card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Graduation</b></h5>
                                    <p>Description of graduation event.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-12 mb-4">
                    <a href="form">
                        <div class="card-container">
                            <div class="card p-3 housewarming-card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Housewarming Party</b></h5>
                                    <p>Description of housewarming party.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
@include('components.footer')

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
