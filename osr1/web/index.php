<!doctype html>
<html>
<head>
<style>
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the links inside the tab */
div.tab a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 4px 8px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 14px;
	border: 1px solid black;
}

/* Change background color of links on hover */
div.tab a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent1 {
    display: none;
    border: 1px solid #ccc;
    border-top: none;
}
/* Style the tab content */
.tabcontent2 {
    display: none;
    border: 1px solid #bbb;
    border-top: none;
}
</style>

<title>
OSR
</title>
</head>
<body>
<table border='1' cellspacing='1' cellpadding='1' width='100%' height='100%'>
<tr>
<td colspan='1' width='5%' height='4%' align='left' valign='middle'>
Logo
</td>
<td colspan='1' width='10%' height='4%' align='left' valign='middle'>
<h4>OSR</h4>
</td>
<td colspan='1' width='40%' height='4%' align='left' valign='middle'>
&nbsp;
</td>
<td colspan='1' width='45%' height='4%' align='left' valign='middle'>
<table border='1' cellspacing='1' cellpadding='1' width='100%' height='100%'>
<tr>
<td colspan='5' width='100%' height='50%'  align='right' valign='middle'>Welcome LoginName Role&nbsp;&nbsp;</td>
</tr>
<tr>
<td colspan='5' width='100%' height='50%' align='right' valign='middle'>
<a href='user/profile/task_planning.php'>My Tasks</a>&nbsp;|&nbsp;
<a href='user/profile/profile_landing.php'>Profile</a>&nbsp;|&nbsp;
<a href='user/profile/logout.php'>Logout</a>&nbsp;&nbsp;
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan='4' width='100%' height='4%' align='left' valign='middle'>
<table border='0' cellspacing='1' cellpadding='1' width='100%' height='100%'>
<tr>
<td colspan='4' width='100%' height='4%'>
<div class="tab">
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'BP')">Big Picture</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'PVR')">Product Vision &amp; Roadmap</a>	
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'PLG')">Planning</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'CE')">Calendar &amp; Events</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'PB')">Product Backlog</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'RB')">Release Backlog</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'IB')">Iteration Backlog</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'DOD')">DoD</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'UAT')">UAT</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'STAGING')">Staging</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'PROD')">Production</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'SUPP')">Support</a>
	<a href="javascript:void(0)" class="tablinks1" onclick="openMenu1(event, 'MAINT')">Maintenance</a>
</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan='4' width='100%'  align='left' valign='middle'>
<div id="BP" class="tabcontent1">
<?php include("menu/display_bp.php"); ?>
</div>
<div id="PVR" class="tabcontent1">
<?php include("menu/display_pvr.php"); ?>
</div>
<div id="PLG" class="tabcontent1">
<?php include("menu/display_plg.php"); ?>
</div>
<div id="CE" class="tabcontent1">
<?php include("menu/display_ce.php"); ?>
</div>
<div id="PB" class="tabcontent1">
<?php include("menu/display_pb.php"); ?>
</div>
<div id="RB" class="tabcontent1">
<?php include("menu/display_rb.php"); ?>
</div>
<div id="IB" class="tabcontent1">
<?php include("menu/display_ib.php"); ?>
</div>
<div id="DOD" class="tabcontent1">
<?php include("menu/display_dod.php"); ?>
</div>
<div id="UAT" class="tabcontent1">
<?php include("menu/display_uat.php"); ?>
</div>
<div id="STAGING" class="tabcontent1">
<?php include("menu/display_staging.php"); ?>
</div>
<div id="PROD" class="tabcontent1">
<?php include("menu/display_prod.php"); ?>
</div>
<div id="SUPP" class="tabcontent1">
<?php include("menu/display_supp.php"); ?>
</div>
<div id="MAINT" class="tabcontent1">
<?php include("menu/display_maint.php"); ?>
</div>
</td>
</tr>
</td>
</tr>


</table>
<script>
function openMenu1(evt, menu1) {
    var i, tabcontent1, tablinks1;
    tabcontent1 = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent1.length; i++) {
        tabcontent1[i].style.display = "none";
    }
    tablinks1 = document.getElementsByClassName("tablinks1");
    for (i = 0; i < tablinks1.length; i++) {
        tablinks1[i].className = tablinks1[i].className.replace(" active", "");
    }
    document.getElementById(menu1).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</body>
</html>