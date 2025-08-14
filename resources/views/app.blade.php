<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex">
    <meta name="description" content="Coolify: An open-source & self-hostable alternative to Vercel, Heroku, Netlify and Railway for easily deploying websites, databases, web applications and 280+ one-click services to your own server.">
    <title>Coolify</title>
    @routes
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
