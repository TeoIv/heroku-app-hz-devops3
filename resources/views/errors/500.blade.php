<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500 Error</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        /* Custom styles for the error page */
        .error-page {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-color: #f5f5f5;
        }

        .error-page .error-code {
            font-size: 8rem;
            margin-bottom: 2rem;
            color: #ff3860;
        }

        .error-page .title {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .error-page .subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }

        .error-page a {
            color: #3273dc;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<section class="section error-page">
    <div class="container">
        <h1 class="error-code">500</h1>
        <h2 class="title">We are sorry!</h2>
        <h3 class="subtitle">We are experiencing some technical difficulties.</h3>
        <p>Please try again later.</p>
        <a href="{{ url('/') }}">Go back to the home page</a>
    </div>
</section>
</body>
</html>
