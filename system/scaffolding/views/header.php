<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<html>
        <head>
                <meta charset="utf-8">
<title><?php echo $title; ?></title>
<style type='text/css'>
<?php $this->file(BASEPATH.'scaffolding/views/stylesheet.css'); ?>
</style>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv='expires' content='-1' />
<meta http-equiv= 'pragma' content='no-cache' />
<meta name="viewport" content="width=device-width">
</head>
        <body>
                <!--[if lt IE 7]>
                        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                <![endif]-->
<div id="header">
<div id="header_left">
<h3>Scaffolding:&nbsp; <?php echo $title; ?></h3>
</div>
<div id="header_right">
<?php echo anchor(array($base_uri, 'view'), $scaff_view_records); ?> &nbsp;&nbsp;|&nbsp;&nbsp;
<?php echo anchor(array($base_uri, 'add'),  $scaff_create_record); ?>
</div>
</div>
<br clear="all">
<div id="outer">
