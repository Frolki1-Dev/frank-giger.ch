<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Frank Giger</title>

    <link rel="stylesheet" href="css/app.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('layout.navbar')
@include('layout.sidemenu')

@include('sections.hero')
@include('sections.about-me')
@include('sections.skills')
@include('sections.resume')
@include('sections.portfolio')
@include('sections.testimonials')
@include('sections.contact')

@include('sections.footer')
<!-- Scroll To Top -->
<div class="scroll-up">
    <span class="top-one"><i class="fas fa-angle-double-up"></i></span>
    <span class="top-three"><i class="fas fa-angle-double-up"></i></span>

</div>
<!-- Decoration -->
<div class="page-line">
    <div class="grid-line one"></div>
    <div class="grid-line two"></div>
    <div class="grid-line three"></div>
    <div class="grid-line four"></div>
    <div class="grid-line fifth"></div>
</div>
</body>

<script src="js/app.js"></script>
<script src="js/dependencies.js"></script>
</html>
