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
    <div class="kpi-container" wire:poll.1s>
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


    <!-- inject styles -->
    @push('styles')
        <style>
            body {
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: #0f172a;
                color: #e2e8f0;
            }

            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: rgba(30, 41, 59, 0.8);
                backdrop-filter: blur(10px);
                color: #fff;
                padding: 15px 30px;
                border-bottom: 1px solid rgba(255,255,255,0.05);
            }

            .logo {
                font-weight: bold;
                font-size: 20px;
                color: #38bdf8;
            }

            .user-actions {
                display: flex;
                align-items: center;
                gap: 15px;
            }

            .logout-btn {
                background: linear-gradient(135deg, #38bdf8, #6366f1);
                color: #fff;
                border: none;
                padding: 6px 14px;
                border-radius: 8px;
                cursor: pointer;
                font-weight: bold;
                transition: 0.3s;
            }

            .logout-btn:hover {
                opacity: 0.8;
            }

            .kpi-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 25px;
                padding: 30px;
            }

            .kpi-card {
                background: rgba(30, 41, 59, 0.6);
                backdrop-filter: blur(12px);
                padding: 25px;
                border-radius: 16px;
                text-align: center;
                border: 1px solid rgba(255,255,255,0.05);
                transition: all 0.3s ease;
                position: relative;
                overflow: hidden;
            }

            .kpi-card::before {
                content: "";
                position: absolute;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(56,189,248,0.2), transparent 70%);
                top: -50%;
                left: -50%;
                opacity: 0;
                transition: 0.4s;
            }

            .kpi-card:hover::before {
                opacity: 1;
            }

            .kpi-card:hover {
                transform: translateY(-8px) scale(1.02);
            }

            .kpi-card h3 {
                font-size: 14px;
                color: #94a3b8;
                margin-bottom: 10px;
            }

            .kpi-card p {
                font-size: 32px;
                font-weight: bold;
                color: #f1f5f9;
            }

            .kpi-card:nth-child(1) p { color: #22c55e; }
            .kpi-card:nth-child(2) p { color: #ef4444; }
            .kpi-card:nth-child(3) p { color: #38bdf8; }
            .kpi-card:nth-child(4) p { color: #facc15; }
        </style>
    @endpush

    <!-- Dashboard -->


    <!-- render styles -->
    @stack('styles')
</div>