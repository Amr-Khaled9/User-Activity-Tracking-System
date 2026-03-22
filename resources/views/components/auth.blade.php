<div class="login-wrapper">

    <div class="login-card">

        <h2>Welcome Back</h2>
        <p class="subtitle">Sign in to your account</p>

        @if(session()->has('error'))
            <div class="error">{{ session('error') }}</div>
        @endif

        <form wire:submit.prevent="login">

            <div class="input-group">
                <label>Email</label>
                <input type="email" wire:model="email" placeholder="Enter your email">
                @error('email') <span class="text-error">{{ $message }}</span> @enderror
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" wire:model="password" placeholder="Enter your password">
                @error('password') <span class="text-error">{{ $message }}</span> @enderror
            </div>

            <button type="submit">Login</button>

        </form>

        <p class="footer-text">Don't have an account? <a href="#">Sign up</a></p>
    </div>

</div>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f2f5;
}

.login-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-card {
    background: #fff;
    padding: 40px;
    border-radius: 16px;
    width: 360px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
}

.login-card:hover {
    transform: translateY(-5px);
}

.login-card h2 {
    margin-bottom: 8px;
    font-size: 28px;
    color: #333;
}

.subtitle {
    font-size: 14px;
    color: #777;
    margin-bottom: 25px;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

.input-group label {
    display: block;
    font-size: 14px;
    margin-bottom: 6px;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    font-size: 14px;
    outline: none;
    transition: border 0.3s;
}

.input-group input:focus {
    border-color: #4facfe;
    box-shadow: 0 0 5px rgba(79,172,254,0.5);
}

button {
    width: 100%;
    padding: 12px;
    background: #4facfe;
    border: none;
    border-radius: 10px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}

button:hover {
    background: #00f2fe;
    transform: translateY(-2px);
}

.error {
    background: #ffe0e0;
    color: #d8000c;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 15px;
    font-size: 13px;
    text-align: center;
}

.text-error {
    color: #d8000c;
    font-size: 12px;
}

.footer-text {
    margin-top: 20px;
    font-size: 13px;
    color: #777;
}

.footer-text a {
    color: #4facfe;
    text-decoration: none;
    font-weight: bold;
}

.footer-text a:hover {
    text-decoration: underline;
}
</style>