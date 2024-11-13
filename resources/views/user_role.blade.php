<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Role</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 1200px;
            margin: 0 15px;
        }
        .role-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .role-header h2 {
            font-size: 24px;
        }
        .form-section {
            margin-bottom: 30px;
        }
        .form-section:last-child {
            margin-bottom: 0;
        }
        .form-section h3 {
            margin-top: 0;
        }
        .row .col-md-6 {
            padding: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <div class="role-header">
        <h2>Login As Admin or Organizer</h2>
    </div>

    <div class="row">
        <!-- Admin Login Form -->
        <div class="col-md-6">
            <div class="form-section">
                <h3>Admin Login</h3>
                <h6>username: admin / password:admin</h6>
                <form action="{{ route('login.admin') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="adminUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="adminUsername" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="adminPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="adminPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login as Admin</button>
                    @if(session('error_admin'))
                        <div class="alert alert-danger mt-3">{{ session('error_admin') }}</div>
                    @endif
                </form>
            </div>
        </div>

        <!-- Organizer Login Form -->
        <div class="col-md-6">
            <div class="form-section">
                <h3>Organizer Login</h3>
                <h6>username: organizer / password:organizer123</h6>
                <form action="{{ route('login.organizer') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="organizerUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="organizerUsername" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="organizerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="organizerPassword" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success">Login as Organizer</button>
                    @if(session('error_organizer'))
                        <div class="alert alert-danger mt-3">{{ session('error_organizer') }}</div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
