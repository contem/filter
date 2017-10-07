<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>untitled</title>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	$(function(){
        $.expr[':'].icontains = function(obj, index, meta, stack){
            return (obj.textContent || obj.innerText || jQuery(obj).text() || '').toLowerCase().indexOf(meta[3].toLowerCase()) >= 0;
        };

        $("ul.filtre li:icontains('Bugus')").css("color","red");


	});
	</script>
    <style type="text/css">

    </style>
</head>
<body>
<ul class="filtre">
    <li>benim adım bugus</li>
    <li>benim adım Bugus</li>
    <li>Meraba ben Bugus</li>
    <li>ben bugus</li>
</ul>
</body>
</html>