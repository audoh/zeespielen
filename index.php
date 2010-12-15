<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>The Game of Zeeshan</title>
    	<link href="site.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    	<div id="menuBar" class="mbar">
        	<div id="button1" class="mbarbutton" onclick="menuBtn_click('http://www.google.co.uk');" onmouseover="menuBtn_over('button1');" onmouseout="menuBtn_out('button1');"  style="cursor:pointer;">My Z</div>
        </div>
        
        <script type='text/javascript'>
			function menuBtn_over(div)
			{
				document.getElementById(div).style.backgroundColor = "#DDD";
			}
			function menuBtn_out(div)
			{
				document.getElementById(div).style.backgroundColor = "#CCC";
			}
			function menuBtn_click(url)
			{
				window.location.href=url;
			}
		</script>
    </body>
</html>