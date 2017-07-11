<?php $this->layout='blank'; ?>
<!doctype html>
<html ng-app="zine" ng-controller="ZineCtrl as zinectrl">
<head>
    <title>FlowPaper AdaptiveUI</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="IE=Edge" http-equiv="X-UA-Compatible"></meta>
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" />
    <style type="text/css" media="screen">
        html, body	{ height:100%; }
        body { margin:0; padding:0; overflow:auto;}
        .infoBox > * {font-family:Lato;}
        #flashContent { display:none; }
    </style>
    
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <?= $this->Html->css('../flowpaper/css/flowpaper') ?>


    <?= $this->Html->script('../flowpaper/js/jquery.min') ?>
    <?= $this->Html->script('../flowpaper/js/jquery.extensions.min') ?>
    <?= $this->Html->script('../flowpaper/js/three.min') ?>
    <?= $this->Html->script('../flowpaper/js/flowpaper') ?>
    <?= $this->Html->script('../flowpaper/js/flowpaper_handlers') ?>


    <?= $this->Html->script('../bower_components/angular/angular.min') ?>


<style type="text/css">
    .flowpaper_viewer_container{
        background:url('/webroot/emag_cover/{{zinectrl.background}}') !important;
    }
    .red-text{
        color: red;
    }
</style>


</head>
<body  >
<div id="documentViewer" class="flowpaper_viewer" style="position:absolute;width:100%;height:100%;"> 
</div>


<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<?= $this->Html->script('Red/zine') ?>

</body>
</html>