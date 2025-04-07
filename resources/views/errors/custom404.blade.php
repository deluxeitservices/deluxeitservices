<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Not Found')

@section('content')

<style>
    /* Error Container Styling */
    .error-container {
        text-align: center;
        background: #fff;
        padding: 80px 40px;
        width: 100%;
        max-width: 500px;
        border-radius: 8px;
        animation: fadeIn 1s ease-in-out;
        margin: auto;
    }

    /* Icon Styling */
    .error-container .icon {
        font-size: 4em;
        color: #e74c3c;
        margin-bottom: 20px;
        animation: pulse 1.5s infinite;
    }

    /* Heading and Message Styling */
    .error-container h1 {
        font-size: 2.5em;
        color: #070d3f;
        margin-bottom: 20px;
        animation: slideInDown 0.8s ease-out;
    }

    .error-container p {
        font-size: 1.1em;
        margin-bottom: 30px;
        color: #666;
        animation: fadeIn 1.2s ease-in-out;
    }

    /* Button Styling */
    .pr-btn1 {
        width: 200px !important;
        transition: background-color 0.3s ease, transform 0.2s;
        animation: bounce 2s infinite 0.5s ease-in-out;
        cursor: pointer;
    }

   

    /* Keyframes for Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes slideInDown {
        from {
            transform: translateY(-20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-5px);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.7;
        }
    }

    /* Small Screen Styling */
    @media (max-width: 600px) {
        .error-container {
            padding: 20px;
        }

        .error-container h1 {
            font-size: 2em;
        }

        .error-container p {
            font-size: 1em;
        }
    }
</style>

<!-- resources/views/errors/customerror.blade.php -->
<div class="error-container">
    <div class="icon">🔍</div>
    <h1>Page Not Found</h1>
    <p>Sorry, the page you're looking for doesn't exist. Please try again.</p>
    
    <form action="{{ url('/') }}" method="GET">
        @csrf
        <button type="submit" class="pr-btn1 button w-25">Go to Homepage</button>
    </form>
</div>

@endsection
