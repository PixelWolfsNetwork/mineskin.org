<!DOCTYPE html>
<html ng-app="mineskinApp" ng-controller="skinController">
<head>
    <title>{{head.pageTitle || 'MineSkin'}}</title>
    <link id="favicon" rel="shortcut icon" type="image/png" href="{{head.pageIcon || 'favicon.png'}}"/>

    <!-- Style -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://spiget.org/css/sticky-footer.min.css">

    <meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container">
    <div class="well clearfix">
        <h1 id="mainTitle" class="page-header" style="cursor: pointer;" onclick="window.location='/'">
            MineSkin
            <small>Custom Skin &amp; Skull Generator</small>
        </h1>

        <div id="alerts">
            <script type="text/ng-template" id="alert.html">
                <div ng-transclude></div>
            </script>
            <div uib-alert ng-repeat="alert in alerts" ng-class="'alert-' + (alert.type || 'info')" close="closeAlert($index)" dismiss-on-timeout="{{alert.timeout}}">{{alert.msg}}</div>
        </div>

        <div id="mainContent" ng-view>
            <!-- Main Content -->
        </div>
    </div>
</div>

<footer class="footer" ng-init="refreshStats()">
    <br/>
    <div class="container">
        <div class="pull-left">
            <span title="{{stats.unique}} unique, {{stats.private}} private">{{stats.total}}</span><strong> Skulls generated by </strong><span>{{stats.accounts}}</span><strong> accounts, </strong><span>{{stats.lastDay}}</span><strong> in the past 24 hours | <a href="https://inventivetalent.org/contact/" target="_blank">Donate an account to speed things up!</a></strong>
        </div>

        <div class="pull-right">
            <a href="https://donation.inventivetalent.org/paypal/?item=Custom+Skulls"><img src="https://static.spigotmc.org/img/btn_donate.gif"/></a> | Maintained by <a href="https://inventivetalent.org?ref=skulls">inventivetalent</a> | <a href="http://status.inventivetalent.org/?aff=38996" title="Website Uptime Monitoring"><img
                    src="https://www.statuscake.com/App/button/index.php?Track=iHCbVHDPUh&Days=1&Design=5"/></a>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js" integrity="sha384-V6/dyDFv85/V/Ktq3ez5B80/c9ZY7jV9c/319rqwNOz3h9CIPdd2Eve0UQBYMMr/" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.1/ui-bootstrap.min.js" integrity="sha384-wdLJc2YyjuluHF3HVyjY3+6XbqHKHmlryPgblRIwxza9hLmxD9YJtWs16lUOIJB0" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.1/ui-bootstrap-tpls.min.js" integrity="sha384-WtvotrktirgylB2PB0Rmy8GyjqcT3ho9v1cyvjNZYLj8KZC1bsjfE8S4pniiFqyZ" crossorigin="anonymous"></script>
<script src="//anglibs.github.io/angular-location-update/angular-location-update.min.js"></script>
<script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<script src="/js/ng-file-upload.min.js"></script>

<?php
echo '<script src="script.js?' . rand() . '"></script>';
?>
</body>
</html>