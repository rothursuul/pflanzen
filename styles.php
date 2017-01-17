<?php
	header("Content-type: text/css; charset; UTF-8");

	$green = "rgb(0, 204, 0)";
	$background = "rgb(242, 242, 242)";
?>
*{
	box-sizing: border-box;
	margin: 0px;
	font-family: Arial, Helvetica, sans-serif;
}

[class*="col-"] {
    	width: 100%;
	float: left;
}
a{
	text-decoration: none;
	color: black;
}
a:hover{
	color: <?php echo $green; ?>;
}

.link_box{
	display: block;
	width: auto;
	height: auto;
	background-color: <?php echo $green; ?>
}
.link_box:hover{
	background-color: grey;
	color: white;
}

.small_header{
	text-align: center;
}
.content{
	margin: 3px;
	padding: 10px;
	height: 300px;
	background-color: <?php echo $background; ?>
}
.inside_content{
                display: flex;
                display: -webkit-flex;
                -webkit-justify-content: center;
                justify-content: center;
                margin-top: 5px;
}
.sub_title{
                margin-top: 10px;
                text-align: center;
 }

.navigation{
	display: block;
	width: 100%;
	height: 54px;
	background-color: <?php echo $green; ?>;
}

.navigation ul {
	display: flex;
	display: -webkit-flex;
	position: relative;
	height: 100%;
	width: 100%;
	list-style: none;
	font-size: 1rem;
	margin: 0px;
	padding: 0px;
}

.navigation a{
	display: block;
	color: black;
	width: 16.66%;
	height: 100%;
	text-decoration: none;
}

.navigation a:hover{
	background-color: grey;
}
.navigation li{
	display: flex;
	text-align: center;
}
.navigation img{
	display: inline-block;
}

.navigation span{
	display: none;
	align-self: center;
}


@media (min-width:320px)  { /* smartphones, iPhone, portrait 480x320 phones */}
@media (min-width:481px)  { /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
@media (min-width:641px)  { /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
@media (min-width:961px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */ }
@media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ }
@media (min-width:1281px) { /* hi-res laptops and desktops */ }


@media only screen and (min-width: 600px) {
	[class*="col-"]{padding: 0px;}
    	.col-m-1 {width: 8.33%;}
    	.col-m-2 {width: 16.66%;}
    	.col-m-3 {width: 25%;}
    	.col-m-4 {width: 33.33%;}
    	.col-m-5 {width: 41.66%;}
    	.col-m-6 {width: 50%;}
    	.col-m-7 {width: 58.33%;}
    	.col-m-8 {width: 66.66%;}
    	.col-m-9 {width: 75%;}
    	.col-m-10 {width: 83.33%;}
    	.col-m-11 {width: 91.66%;}
    	.col-m-12 {width: 100%;}
	.content{
		margin: 2px;}
	.inside_content{
		margin: 0px;}
	.navigation{
		height: 50px;}
	.navigation span{
		display: none;}
}

@media only screen and (min-width: 935px) {
    	.col-1 {width: 8.33%;}
    	.col-2 {width: 16.66%;}
   	.col-3 {width: 25%;}
   	.col-4 {width: 33.33%;}
    	.col-5 {width: 41.66%;}
    	.col-6 {width: 50%;}
    	.col-7 {width: 58.33%;}
    	.col-8 {width: 66.66%;}
    	.col-9 {width: 75%;}
    	.col-10 {width: 83.33%;}
    	.col-11 {width: 91.66%;}
    	.col-12 {width: 100%;}

	
	.content{
		margin: 15px;
	}
	inside_content{
		margin-top: 5px;
	}
	.navigation{
		height: 50px;
	}
	.navigation span{
		display: inline-block;
		margin-left: 10px;
	}
}

.row::after{
	content:"";
	clear: both;
	display: table;
}


