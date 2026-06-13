{{-- resources/views/dashboard.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Dashboard</title>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Inter', sans-serif;
            background:#f5f7fb;
            color:#1f2937;
        }

        a{
            text-decoration:none;
        }

        .container{
            width:100%;
            max-width:1300px;
            margin:auto;
            padding:0 20px;
        }

        /* ================= HEADER ================= */

        .navbar{
            background:#ffffff;
            border-bottom:1px solid #e5e7eb;
            position:sticky;
            top:0;
            z-index:100;
        }

        .navbar-inner{
            height:75px;
            display:flex;
            align-items:center;
            justify-content:space-between;
        }

        .logo{
            font-size:24px;
            font-weight:700;
            color:#2563eb;
        }

        .nav-links{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .btn{
            padding:12px 22px;
            border-radius:10px;
            font-size:14px;
            font-weight:600;
            transition:0.3s;
            display:inline-flex;
            align-items:center;
            justify-content:center;
        }

        .btn-outline{
            border:1px solid #d1d5db;
            color:#111827;
            background:#fff;
        }

        .btn-outline:hover{
            background:#f3f4f6;
        }

        .btn-primary{
            background:#2563eb;
            color:#fff;
        }

        .btn-primary:hover{
            background:#1d4ed8;
        }

        /* ================= HERO ================= */

        .hero{
            padding:90px 0 70px;
        }

        .hero-wrapper{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:50px;
            align-items:center;
        }

        .hero-content h1{
            font-size:52px;
            line-height:1.2;
            margin-bottom:20px;
            color:#111827;
        }

        .hero-content p{
            font-size:18px;
            line-height:1.8;
            color:#6b7280;
            margin-bottom:35px;
        }

        .hero-buttons{
            display:flex;
            gap:15px;
            flex-wrap:wrap;
        }

        .hero-card{
            background:#fff;
            border-radius:25px;
            padding:35px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }

        .hero-card h3{
            margin-bottom:25px;
            font-size:24px;
        }

        .login-grid{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:18px;
        }

        .login-box{
            border:1px solid #e5e7eb;
            border-radius:16px;
            padding:22px;
            transition:0.3s;
            background:#fafafa;
        }

        .login-box:hover{
            transform:translateY(-3px);
            border-color:#2563eb;
            background:#fff;
        }

        .login-icon{
            width:52px;
            height:52px;
            border-radius:14px;
            background:#dbeafe;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:22px;
            margin-bottom:15px;
        }

        .login-box h4{
            margin-bottom:8px;
            font-size:18px;
        }

        .login-box p{
            font-size:14px;
            color:#6b7280;
            margin-bottom:15px;
            line-height:1.6;
        }

        .login-box a{
            color:#2563eb;
            font-weight:600;
            font-size:14px;
        }

        /* ================= FEATURES ================= */

        .section{
            padding:80px 0;
        }

        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:38px;
            margin-bottom:15px;
        }

        .section-title p{
            color:#6b7280;
            max-width:700px;
            margin:auto;
            line-height:1.8;
        }

        .feature-grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:25px;
        }

        .feature-card{
            background:#fff;
            border-radius:18px;
            padding:30px;
            border:1px solid #e5e7eb;
            transition:0.3s;
        }

        .feature-card:hover{
            transform:translateY(-5px);
            box-shadow:0 10px 25px rgba(0,0,0,0.06);
        }

        .feature-card .icon{
            width:60px;
            height:60px;
            border-radius:15px;
            background:#eff6ff;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:26px;
            margin-bottom:20px;
        }

        .feature-card h4{
            margin-bottom:15px;
            font-size:20px;
        }

        .feature-card p{
            color:#6b7280;
            line-height:1.8;
            font-size:15px;
        }

        /* ================= SUBSCRIPTION ================= */

        .subscription-box{
            background:linear-gradient(135deg,#2563eb,#1e40af);
            border-radius:25px;
            padding:60px;
            text-align:center;
            color:#fff;
        }

        .subscription-box h2{
            font-size:42px;
            margin-bottom:20px;
        }

        .subscription-box p{
            max-width:750px;
            margin:auto;
            line-height:1.8;
            font-size:17px;
            opacity:0.95;
        }

        .coming-soon{
            margin-top:35px;
            display:inline-block;
            background:rgba(255,255,255,0.15);
            padding:14px 28px;
            border-radius:12px;
            font-weight:600;
            backdrop-filter:blur(5px);
        }

        /* ================= FOOTER ================= */

        footer{
            padding:30px 0;
            text-align:center;
            color:#6b7280;
            font-size:14px;
        }

        /* ================= RESPONSIVE ================= */

        @media(max-width:992px){

            .hero-wrapper{
                grid-template-columns:1fr;
            }

            .feature-grid{
                grid-template-columns:1fr 1fr;
            }

            .hero-content h1{
                font-size:42px;
            }
        }

        @media(max-width:768px){

            .feature-grid{
                grid-template-columns:1fr;
            }

            .login-grid{
                grid-template-columns:1fr;
            }

            .hero-content h1{
                font-size:34px;
            }

            .subscription-box{
                padding:40px 25px;
            }

            .subscription-box h2{
                font-size:30px;
            }

            .navbar-inner{
                flex-direction:column;
                justify-content:center;
                gap:10px;
                height:auto;
                padding:18px 0;
            }
        }
    </style>
</head>
<body>

    {{-- ================= NAVBAR ================= --}}
    <header class="navbar">
        <div class="container navbar-inner">

            <div class="logo">
                {{ config('app.name') }}
            </div>

            <div class="nav-links">
                <a href="" class="btn btn-outline">
                    Login
                </a>

                <a href="" class="btn btn-primary">
                    Get Started
                </a>
            </div>

        </div>
    </header>


    {{-- ================= HERO SECTION ================= --}}
    <section class="hero">
        <div class="container">

            <div class="hero-wrapper">

                {{-- LEFT --}}
                <div class="hero-content">

                    <h1>
                        Manage Your Business Appointments Easily
                    </h1>

                    <p>
                        A complete SaaS platform for appointment booking,
                        service management, staff handling, subscriptions,
                        payments, and customer engagement.
                    </p>

                    <div class="hero-buttons">

                        <a href="" class="btn btn-primary">
                            Create Account
                        </a>

                        <a href="" class="btn btn-outline">
                            Login Now
                        </a>

                    </div>

                </div>

                {{-- RIGHT --}}
                <div class="hero-card">

                    <h3>
                        Quick Access
                    </h3>

                    <div class="login-grid">

                        <div class="login-box">
                            <div class="login-icon">👑</div>

                            <h4>Admin Panel</h4>

                            <p>
                                Manage platform settings, users, subscriptions, and reports.
                            </p>

                            <a href="">
                                Admin Login →
                            </a>
                        </div>

                        <div class="login-box">
                            <div class="login-icon">🏢</div>

                            <h4>Business Login</h4>

                            <p>
                                Access business dashboard, services, bookings, and staff.
                            </p>

                            <a href="">
                                Business Login →
                            </a>
                        </div>

                        <div class="login-box">
                            <div class="login-icon">📅</div>

                            <h4>Bookings</h4>

                            <p>
                                Customers can book appointments with businesses easily.
                            </p>

                            <a href="#">
                                Coming Soon →
                            </a>
                        </div>

                        <div class="login-box">
                            <div class="login-icon">💳</div>

                            <h4>Subscriptions</h4>

                            <p>
                                Subscription plans and premium business features.
                            </p>

                            <a href="#">
                                Coming Soon →
                            </a>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- ================= FEATURES ================= --}}
    <section class="section">

        <div class="container">

            <div class="section-title">
                <h2>Platform Features</h2>

                <p>
                    Everything you need to run and scale your appointment booking business.
                </p>
            </div>

            <div class="feature-grid">

                <div class="feature-card">
                    <div class="icon">📆</div>

                    <h4>Appointment Booking</h4>

                    <p>
                        Customers can easily schedule appointments online with real-time availability.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="icon">👥</div>

                    <h4>User & Staff Management</h4>

                    <p>
                        Manage customers, employees, roles, and permissions from one dashboard.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="icon">💰</div>

                    <h4>Online Payments</h4>

                    <p>
                        Accept secure payments using integrated payment gateways.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="icon">🔔</div>

                    <h4>Notifications</h4>

                    <p>
                        Automated SMS and email reminders for bookings and subscriptions.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="icon">📊</div>

                    <h4>Analytics Dashboard</h4>

                    <p>
                        Monitor bookings, earnings, growth, and customer activity in real time.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="icon">⚡</div>

                    <h4>Fast & Modern</h4>

                    <p>
                        Responsive UI with fast performance for mobile, tablet, and desktop users.
                    </p>
                </div>

            </div>

        </div>

    </section>


    {{-- ================= SUBSCRIPTION SECTION ================= --}}
    <section class="section">

        <div class="container">

            <div class="subscription-box">

                <h2>
                    Subscription Plans Coming Soon
                </h2>

                <p>
                    Soon you will be able to choose flexible subscription plans
                    for your business with premium features, unlimited bookings,
                    staff management, analytics, and payment integrations.
                </p>

                <div class="coming-soon">
                    🚀 Premium Plans Launching Soon
                </div>

            </div>

        </div>

    </section>


    {{-- ================= FOOTER ================= --}}
    <footer>
        <div class="container">
            © {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.
        </div>
    </footer>

</body>
</html>