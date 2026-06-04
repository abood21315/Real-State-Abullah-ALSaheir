<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaza Real Estate System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body{
            background: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa')
            no-repeat center center;
            background-size: cover;
            min-height: 100vh;
        }

        .overlay{
            min-height: 100vh;
            background: rgba(0,0,0,.7);
        }

        .hero-box{
            max-width: 800px;
        }

        .hero-title{
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-text{
            font-size: 1.1rem;
            color: #ddd;
        }
    </style>
</head>

<body>

<div class="overlay d-flex justify-content-center align-items-center">

    <div class="hero-box text-center text-white">

        <h1 class="hero-title mb-4">
            <i class="fas fa-house"></i>
            Gaza Real Estate System
        </h1>

        <p class="hero-text">
            A modern platform for managing properties, agents, and real estate listings in Gaza, Palestine.
        </p>

        <p class="hero-text mb-4">
            Buy • Sell • Rent properties with an easy-to-use management system.
        </p>

        <div class="d-flex justify-content-center flex-wrap gap-3">

            <a href="{{ route('login') }}" class="btn btn-light btn-lg">
                <i class="fas fa-sign-in-alt"></i> Login
            </a>

            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-user-plus"></i> Register
            </a>

            @auth
            <a href="{{ route('admin.index') }}" class="btn btn-success btn-lg">
                <i class="fas fa-chart-line"></i> Dashboard
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
            @endauth

        </div>

    </div>

</div>

</body>
</html>