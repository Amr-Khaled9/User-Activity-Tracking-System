<div class="dashboard-wrapper">

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">User Activity Dashboard</div>
        <div class="user-actions">
            <span>{{ auth()->user()->name ?? 'User' }}</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </nav>

    <!-- KPI Cards -->
    <div class="kpi-container" wire:poll.5s>
        <div class="kpi-card">
            <h3>Logins</h3>
            <p>{{ $logins ?? 0 }}</p>
        </div>
        <div class="kpi-card">
            <h3>Logouts</h3>
            <p>{{ $logouts ?? 0 }}</p>
        </div>
        <div class="kpi-card">
            <h3>Clicks</h3>
            <p>{{ $clicks ?? 0 }}</p>
        </div>
        <div class="kpi-card">
            <h3>Page Views</h3>
            <p>{{ $pageviews ?? 0 }}</p>
        </div>
    </div>

</div>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f4f6f8;
}

/* Navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #4facfe;
    color: #fff;
    padding: 15px 30px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.navbar .logo {
    font-weight: bold;
    font-size: 20px;
}

.navbar .user-actions {
    display: flex;
    align-items: center;
    gap: 15px;
}

.navbar .user-actions span {
    font-weight: 500;
}

.logout-btn {
    background: #fff;
    color: #4facfe;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    transition: background 0.3s, color 0.3s;
}

.logout-btn:hover {
    background: #4facfe;
    color: #fff;
}

/* KPI Container */
.kpi-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
    padding: 30px;
}

.kpi-card {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    text-align: center;
    transition: transform 0.2s;
}

.kpi-card:hover {
    transform: translateY(-5px);
}

.kpi-card h3 {
    font-size: 16px;
    color: #777;
    margin-bottom: 10px;
}

.kpi-card p {
    font-size: 28px;
    font-weight: bold;
    color: #333;
}
</style>