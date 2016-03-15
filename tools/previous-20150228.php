<?php
$title = 'MAME | Tools for building MAME on Windows';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Tools for building MAME on Windows</h1></center>
                 
<p>
1. Download <a href="https://github.com/mamedev/buildtools/releases/download/1.0/install.exe">install.exe</a> and complete installation. It will take some time to pull up-to-date code<br/>
2. Start <b>buildtools.bat</b> (plain cmd) or <b>cmder.exe</b> (fancy console) from installed folder (by default it is C:\buildtools)<br/>
3. From time to time run <b>update</b> in order to update tools <br/>
4. Download MAME source<br/>
<br/>
<b>git clone https://github.com/mamedev/mame.git</b><br/>
Console emulator is based on Cmder, with some small changes in scripts.<br/>
<br/>
For those needed offline download<br>
Download from here : <a href="https://github.com/mamedev/buildtools/releases/download/1.2/buildtools.7z">buildtools.7z</a> (updated to Mingw 5.2.0)<br/>
<br/>
For those already having GIT installed<br/>
<b>git clone https://github.com/mamedev/buildtools</b> <br/>
This works same as when installed with installer.<br/>
<br/>
<font color="red"><b>NOTE: This compile tools (as previous one) will not work on old PC's without <a href="http://en.wikipedia.org/wiki/SSE3">SSE3 instructions</a></b></font>
</p>
				
			<br/><br/>
			<a href="previous-20140905.php">Previous version</a> is still available
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>					