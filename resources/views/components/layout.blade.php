<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alfaruqy's Portfolio</title>
    <meta name="keywords" content="web developer, portfolio, digital marketing, business owner">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Alfaruqy">
    <meta name="title" content="Alfaruqy's Portfolio" />
    <meta name="description"
        content="I&apos;m a web developer that help business owners take their business's online presence to the next level. Check out my work and see how I can help your business grow!" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://alfaruqy.me/" />
    <meta property="og:title" content="Alfaruqy's Portfolio" />
    <meta property="og:description"
        content="I&apos;m a web developer that help business owners take their business's online presence to the next level. Check out my work and see how I can help your business grow!" />
    <meta property="og:image" content="https://alfaruqy.me/images/Banner-min.png" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://alfaruqy.me/" />
    <meta property="twitter:title" content="Alfaruqy's Portfolio" />
    <meta property="twitter:description"
        content="I&apos;m a web developer that help business owners take their business's online presence to the next level. Check out my work and see how I can help your business grow!" />
    <meta property="twitter:image" content="https://alfaruqy.me/images/Banner-min.png" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Alfaruqy's Portfolio</title>
</head>

<body class="font-rubik">
    {{ $slot }}
    <x-ui.social-media />
</body>

</html>
