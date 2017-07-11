<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Meet &amp; Greet Africa';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $title; ?>
    </title>
    <?= $this->Html->meta('favicon.png','/img/favicon.png',['type'=>'icon']) ?>

    <?= $this->fetch('meta') ?>
    <!-- Third Party dependencies -->
    <?= $this->Html->css('../bower_components/materialize/dist/css/materialize.min') ?>
    <!-- Custom Css goes here -->
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css('../js/slick-1.6.0/slick/slick') ?>
    <?= $this->Html->css('../js/slick-1.6.0/slick/slick-theme') ?>
    <?= $this->Html->css('ionicons-2.0.1/css/ionicons.min') ?>
    <?= $this->Html->css('animatism') ?>
    <?= $this->Html->css('../bower_components/hover/css/hover-min') ?>
    <?= $this->Html->css('../bower_components/imagehover.css/css/imagehover.min') ?>
    <?= $this->fetch('css') ?>
    
    <?= $this->Html->script('../bower_components/jquery/dist/jquery.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular.min') ?>
    <?= $this->Html->script('../bower_components/materialize/dist/js/materialize.min') ?>

    <?= $this->Html->script('../bower_components/angular/angular-materialize.min') ?>
    <?= $this->Html->script('../bower_components/angular/angular-ui-router.min') ?>
    <?= $this->Html->script('slick-1.6.0/slick/slick.min') ?>

   

    <?= $this->fetch('script') ?>

    <!-- BaseReference -->
    <base href="/">
</head>
<body ng-app="mga">
    
    <div ng-hide="$root.preloader" class="row center mg-margin-bottom-0" ui-view="navbar"></div>
    <div ng-hide="$root.preloader" ui-view></div>
    <div ng-hide="$root.preloader" ui-view="footer"></div> 
    
    <!-- loader -->
    <div ng-show="$root.preloader"  class="row center mg-padding-top-55 mg-margin-bottom-0" id="main_background_animate" style="padding-bottom: 100%; height: 1000px;">
        <div class="row center" style="position: relative;">
             <div class="col s12 hide-on-large-only center" style="position: fixed;top:28%;padding-bottom: 100%;">   <?= $this->Html->image('assets/basic_assets/meet_greet_original.png',['style'=>'width:80%;'])  ?>
             </div>
             <div class="col s12 hide-on-med-and-down center" style="position: fixed;top:20%;padding-bottom: 100%;">   <?= $this->Html->image('assets/basic_assets/meet_greet_original.png',['style'=>'width:50%;'])  ?>
             </div>
        </div>           
    </div>
    <!-- Angular App -->
    <?= $this->Html->script('Red/app') ?>
    <?= $this->Html->script('Red/controllers') ?>
    <?= $this->Html->script('Red/services') ?>

    <!-- Additional dependencies -->

</body>
</html>
