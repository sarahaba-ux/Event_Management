<div class="col-md-2 sidebar d-flex flex-column align-items-start p-3" style="min-height: 100vh; margin-top: 10px;">
    <ul class="nav flex-column">
        <li class="nav-item shadow-item">
            <a href="{{ route('homepage') }}" class="nav-link"><b>Category view</b></a>
        </li>
        <li class="nav-item shadow-item">
            <a href="event_details.php" class="nav-link"><b>Event details</b></a>
        </li>
        <li class="nav-item shadow-item">
            <a href="attendees.php" class="nav-link"><b>Attendees</b></a>
        </li>
    </ul>
</div>


<style>

/* Sidebar with transparent white background */
.sidebar {
    position: relative;
    background-color: rgba(0, 0, 0, 0.3);  /* Dark overlay effect */
    background: rgba(255, 255, 255, 0.5); /* Transparent white with a bit of opacity */
    color: #333; /* Darker text for contrast */
    padding: 20px;
    min-height: 100vh;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3); /* Shadow for modern look */
    border-radius: 15px; /* Rounded corners */
    border-top-left-radius: 0; /* Remove top left border radius */
    border-bottom-left-radius: 0; /* Remove bottom left border radius */
}

/* Link Styles */
.sidebar .nav-link {
    color: #333; /* Dark text for contrast */
    padding: 12px;
    font-weight: 500;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

/* Active Link Style */
.sidebar .nav-link.active {
    background-color: #39A2DB; /* Bright blue for active link */
    color: #ffffff;
}

/* Hover Effect for Links */
.sidebar .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Slightly more transparent white on hover */
}

/* Icon Styling for Consistent Look */
.sidebar .nav-link i {
    margin-right: 8px; /* Space between icon and text */
    color: #333;
    opacity: 0.8;
}

/* Shadow Effect Below Each Item */
.shadow-item {
    position: relative;
    width: calc(100% + 50%);
    padding: 10px 0;
    margin: 0;
}

/* Shadow effect below each item */
.shadow-item::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: calc(100%);
    height: 3px; /* Height of the shadow */
    background-color: transparent;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

/* Stronger shadow on hover */
.shadow-item:hover::after {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Stronger shadow on hover */
}
</style>