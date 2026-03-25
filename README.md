<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> <p align="center"> <a href="#"><img src="https://img.shields.io/badge/status-active-brightgreen" alt="Status"></a> <a href="#"><img src="https://img.shields.io/badge/laravel-10-red" alt="Laravel Version"></a> <a href="#"><img src="https://img.shields.io/badge/license-MIT-blue" alt="License"></a> </p>
About This Project

User Activity Tracking System is a scalable real-time user activity monitoring system built with Laravel, Livewire, Redis, and MySQL. The system handles high-frequency events such as logins, logouts, and page views using asynchronous queues, stores them efficiently in the database, and provides a real-time dashboard for monitoring KPIs.

Features
Real-time dashboard with KPI cards (logins, logouts, active users).
Async event processing using Laravel Queues & Redis.
Per-user and global rate limiting for /events endpoint.
Event indexing for faster queries.
Load testing support for high-frequency events.
Responsive Livewire UI with Blade templates.
Screenshots
Dashboard
<p align="center"> <img src="public/dashboard.png" width="700" alt="Dashboard Screenshot"> </p>

<p align="center"> <img src="public/test1.png" width="700" alt="Test Screenshot"> </p>

<p align="center"> <img src="public/test12.png" width="700" alt="Test Screenshot"> </p>


Tech Stack
Backend: Laravel 12, Redis, MySQL
Frontend: Livewire, Blade, Tailwind CSS
Dev Tools: Docker (optional), Queue Worker
Testing: Load testing via cURL or Postman Runner