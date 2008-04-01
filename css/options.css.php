<?php require('gzip-header-css.php'); ?>

/* This file contains the CSS for the 'K2 Options' admin panel */

.k2wrap {
	font-family: Helvetica, Arial, Sans-Serif;
	border: none;
	border-bottom: 1px solid #eee;
	background: transparent;
	padding: 10px;
	margin: 0;
	}

.k2wrap a {
	color: #0A5199;
	border: none;
	white-space: pre;
	}

.configstuff {
	position: relative;
	font-size: 1.3em;
	width: 600px;
	margin: 0 auto;
	padding-top: 40px; /* For floating .savebutton */
	}

.savebutton {
	position: absolute;
	top: 0;
	width: 600px;
	margin: 0 auto;
	padding: 10px 0;
	background: #f9fcfe;
	}

#save {
	float: right;
	background: #222;
	color: white;
	border: none;
	padding: 5px 30px;
	}

body.smartposition .savebutton {
	border-bottom: 1px solid #ddd;
	position: fixed;
	top: 0;
	opacity: .9;
	z-index: 100;
	}

.container {
	margin: 30px 0 20px;
	position: relative;
	}

h3 {
	font: 1.3em/1.2em Helvetica, Arial, Sans-Serif;
	color: #333;
	border-right: 2px solid #eee;
	width: 225px;
	margin: 0;
	overflow: hidden;
	white-space: pre;
	}
.k2wrap p.description {
	margin-top: 5px;
	color: #888;
	font-size: .75em;
	}

.error {
	color: #666; font-size: .8em;
	}

.configstuff #k2-blogornoblog, .configstuff select {
	width: 50%;
	}

.configstuff #k2-asidescategory, .configstuff #k2-scheme, .checkboxelement {
	position: absolute;
	left: 240px;
	}

.checkboxelement {
	top: 6px;
	margin: 0;
	}
	
.configstuff #k2-asidescategory, .configstuff #k2-scheme {
	top: 4px;
	width: 240px;
	margin: 0;
	}

.configstuff select, .configstuff input {
	font-family: Helvetica, Arial, Sans-Serif;
	color: #222;
	font-size: 12px;
	padding: 2px;
	}

.configstuff option {
	padding: 0px;
	}

.configelap {
	text-align: center;
	}

.headerwrap {
	color: #888;
	font-size: 11px;
	}

.headerwrap div {
	clear: both;
	margin: 5px 0 10px;
	position: relative;
	height: 20px;
	}

.headerwrap p, .headerwrap span {
	float: left;
	margin: 0;
	}

.headerwrap span.span1 {
	width: 150px;
	}

.headerwrap span.span2 {
	width: 270px;
	}

.headerwrap span.span3 {
	padding-top: 3px;
	}

.headerwrap p {
	padding-left: 10px;
	line-height: 22px;
	}

.headerwrap label {
	font-size: 11px;
	margin-left: 5px;
	}

.headerwrap .span2 input, .headerwrap .span2 select {
	width: 240px;
	font-size: 12px;
	}

.headerwrap input[type=file] {
	border: none;
	padding: 0;
	}

.headerwrap #k2-blogornoblog {
	width: 232px;
	margin: 0;
	padding: 2px 4px;
	}

.sidebarradio {
	text-align: center;
	}

.sidebarradio span {
	margin-right: 40px;
	}

.sidebarradio span input {
	margin-right: 5px;
	}

.sidebarno {
	margin-right: 0;
	}


.k2wrap.uninstall {
	border: none;
	margin-top: 2px;
	padding: 30px 20px 50px;
	background: #eee url('../images/sbmmanager/sbmbg.png') top repeat-x;
	}

.k2wrap.uninstall input {
	background: #222;
	color: white;
	border: none;
	padding: 5px 30px;
	}

#wpcontent {
	padding-bottom: 0;
	}

#footer {
	display: none;
	}

