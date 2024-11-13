<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSVP Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Event Created</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $eventData['eventName'] }}</h5>
                        <p class="card-text"><strong>Location:</strong> {{ $eventData['eventLocation'] }}</p>
                        <p class="card-text"><strong>Date:</strong> {{ $eventData['eventDate'] }}</p>
                        <p class="card-text"><strong>Time:</strong> {{ $eventData['eventTime'] }}</p>
                        <p class="card-text"><strong>Event URL:</strong> <a href="{{ $eventData['eventURL'] }}" target="_blank">{{ $eventData['eventURL'] }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
