<html>
<head><title>MHVTL Web Console</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>Active Monitor</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/monitoring.png" >
</td>
</tr>

<?php
echo "<pre><FONT COLOR=blue><b> System Monitor</FONT></b></pre>";
?>



<script type="text/javascript">
                        function Ajax()
                        {
                                var
                                        $http,
                                        $self = arguments.callee;

                                if (window.XMLHttpRequest) {
                                        $http = new XMLHttpRequest();
                                } else if (window.ActiveXObject) {
                                        try {
                                                $http = new ActiveXObject('Msxml2.XMLHTTP');
                                        } catch(e) {
                                                $http = new ActiveXObject('Microsoft.XMLHTTP');
                                        }
                                }

                                if ($http) {
                                        $http.onreadystatechange = function()
                                        {
                                                if (/4|^complete$/.test($http.readyState)) {
                                                        document.getElementById('ReloadThis').innerHTML = $http.responseText;
                                                        setTimeout(function(){$self();}, 1000);
                                                }
                                        };
                                        $http.open('GET', 'mon.php' + '?' + new Date().getTime(), true);
                                        $http.send(null);
                                }

                        }

                </script>
                <script type="text/javascript">
                        setTimeout(function() {Ajax();}, 1000);
                </script>



<div style="overflow:auto" id="ReloadThis" >
<?php
include 'mon.php' ;
?>
</div>
</body>
</html>
