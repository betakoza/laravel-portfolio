<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nick White :: Front-end Developer</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/template.css') }}">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-resource.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.16/angular-sanitize.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.6.0/underscore-min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="assets/js/app.min.js"></script>
</head>
<body ng-app="portfoilo">
    <navblock></navblock>
    <homeblock></homeblock>
    <div ng-controller="about">
        <aboutblock></aboutblock>
    </div>
    <div ng-controller="portfolio">
        <portfolioblock></portfolioblock>
    </div>
    <getintouchblock></getintouchblock>
    <div ng-controller="footer">
        <footerblock></footerblock>
    </div>
</body>
</html>
