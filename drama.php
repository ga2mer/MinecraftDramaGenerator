<?php
	$drama_inc = 828615 - 803260 - 55164;
	if(isset($_GET["count"])) {
		echo $drama_inc + (int)file_get_contents("/srv/http/drama.txt");
		exit(0);
	}
?>
<?php if (!isset($_GET["plain"])) : ?>
<!DOCTYPE html>
<html>
<head><title>Генератор Майнкрафт Драмы</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
<style type="text/css">
h6 {
	text-align: center;
	font-weight: normal;
	color: #777;
}
a {
	color: #55C;
}
h3 {
	text-align: center;
	font-family: serif;
	font-weight: normal;
	font-size: 24px;
}
h1 {
	text-align: center;
	font-family: sans-serif;
}
button#refre {
	background  : none;
	 color   : #428bca;
	 border  : none;
}
</style>
<script src="/js/jquery-latest.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.0/html2canvas.js"></script>
<script>
        $(function () {
            $("#menu").load("../menu.html");
        });
</script>
</head>
<body>
<div id="menu"></div>
<center><div id="dramaa" style="display: inline-block;">
<h3>Генератор Майнкрафт Драмы</h3>
<h1><?php endif; ?>
<script type="text/javascript">
	$.ajax(
    {
        url: 'drama_load.php',
        dataType: 'text',
        data: {test: '1'},
        success: function(data)
        {
            $('#refresh').html(data);
        }
    })
</script>
<div id="refresh"></div>
<?php if (!isset($_GET["plain"])) : ?>
</h1>
<h3><button id="refre">БОЛЬШЕ ДРАМЫ БОГУ ДРАМЫ!</button></h3></div></center>
<center><input id="generateImage" type="submit"   value="Заскриншотить"></center>
<input type="hidden" name="img_val" id="img_val" value="" />
 <center><input name="linker" id="link" type="hidden" value="ссылка" size="40"><center>
 <script type="text/javascript">
 $("#refre").click(function () {
 	document.getElementById("refre").disabled = true;
    setTimeout(function () {
    document.getElementById("refre").disabled = false;
    }, 1000);
    $('#refresh').load('drama_load.php');
    document.getElementsByName("linker")[0].setAttribute('value', "")
    document.getElementsByName("linker")[0].setAttribute('type','hidden')
});
 </script>
<script> 
$(function () {
    $('#generateImage').click(function () {
        html2canvas($('#dramaa'), {
            onrendered: function (canvas) {
                $('#img_val').val(canvas.toDataURL("image/jpeg"));
                var str = canvas.toDataURL("image/jpeg");
					str = str.replace("data:image/jpeg;base64,", "");
                //console.log(str);
                    $.ajax({
                    url: 'https://api.imgur.com/3/image',
                    type: 'post',
                    headers: {
                        Authorization: 'Client-ID 49d74245468a4c7'
                    },
                    data: {
                        image: str
                    },
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            //console.log(response.data.link);
                            document.getElementsByName("linker")[0].setAttribute('value',response.data.link)
                            document.getElementsByName("linker")[0].setAttribute('type','text')
                        }
                    }
                });
            }
        });
    });
});
</script>
<!--<h6>Over <?php echo $drama_inc+file_get_contents("/srv/http/drama.txt"); ?> dramas and counting!<br><br> -->
</body>
</html>
<?php endif; ?>
