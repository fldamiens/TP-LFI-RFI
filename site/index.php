<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>Vulnerable to LFI</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="styles/mediaqueries.css" type="text/css" media="all">
		<script src="scripts/jquery.1.9.0.min.js"></script>
		<script src="scripts/jquery-mobilemenu.min.js"></script>
	</head>
	<body>
		<div class="wrapper row1">
		  <header id="header" class="clear">
			<div id="hgroup">
			  <h1><a href="#">Security</a></h1>
			  <h2>LFI/RFI</h2>
			</div>
		  </header>
		</div>
		<div class="wrapper row2">
		  <nav id="topnav">
			<ul class="clear">
			  <li class="active first"><a href="index.html">Homepage</a></li>
			  <li><a href="#">Style Demo</a></li>
			</ul>
		  </nav>
		</div>
<!-- content -->
		<div class="wrapper row3">
		  <div id="container">
			<div class="full_width clear">
			  <h2>File inclusion vulnerability</h2>
			  <div><p>A <b>file inclusion vulnerability</b> is a type of vulnerability that is most commonly found to affect web applications that rely on a scripting run time. This issue is caused when an application builds a path to executable code using an attacker-controlled variable in a way that allows the attacker to control which file is executed at run time. A file include vulnerability is distinct from a generic Directory Traversal Attack, in that directory traversal is a way of gaining unauthorized file system access, and a file inclusion vulnerability subverts how an application loads code for execution. Successful exploitation of a file include vulnerability will result in remote code execution on the web server that runs the affected web application.</p></div>
			</div>
			<div class="full_width clear">
			  <h2>Remote File Inclusion</h2>
			  <div><p>Remote File Inclusion (RFI) occurs when the web application downloads and executes a remote file. These remote files are usually obtained in the form of an HTTP or FTP URI as a user-supplied parameter to the web application.</p></div>
			</div>
			<div class="full_width clear">
			  <h2>Local File Inclusion</h2>
			  <div><p>Local File Inclusion (LFI) is similar to a Remote File Inclusion vulnerability except instead of including remote files, only local files i.e. files on the current server can be included for execution. This issue can still lead to remote code execution by including a file that contains attacker-controlled data such as the web server's access logs.</p></div>
			</div>
			<div class="full_width clear">
			  <h2>Programming languages - PHP</h2>
			  <div><p>In PHP the main cause is due to the use of unvalidated user-input with a filesystem function that includes a file for execution. Most notable are the include and require statements. Most of the vulnerabilities can be attributed to novice programmers not being familiar with all of the capabilities of the PHP programming language. The PHP language has a directive which, if enabled, allows filesystem functions to use a URL to retrieve data from remote locations. The directive is allow_url_fopen in PHP versions <= 4.3.4 and allow_url_include since PHP 5.2.0. In PHP 5.x this directive is disabled by default, in prior versions it was enabled by default. To exploit the vulnerability an attacker will alter a variable that is passed to one of these functions to cause it to include malicious code from a remote resource. To mitigate this vulnerability all user input needs to be validated before being used.[3][4]</p></div>
			</div>
			<div class="full_width clear">
			  <h2>Example:</h2>
<pre>
if ( isset( $_GET['language'] ) ) {
      include( $_GET['language'] . '.php' );
}
</pre>
			<!-- INSERT CODE HERE -->
			</div>
		</div>
		<div class="wrapper row4">
		  <footer id="footer" class="clear">
			<p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - LFI-RFI</p>
			<p class="fl_right">Laloy - Dutel - Mariot - Damiens</p>
		  </footer>
		</div>
	</body>
</html>
