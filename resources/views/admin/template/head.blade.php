<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Laravel') }} | Управление</title>
    <meta name="description" content="Responsive, Bootstrap, BS4" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../assets/images/logo.svg">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.svg">
    <!-- style -->
    <link rel="stylesheet" href="{{mix('css/admin/core.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{mix('css/admin/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{mix('css/admin/custom.css')}}" type="text/css" />
</head>
