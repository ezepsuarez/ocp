<html>
<head>
<meta http-equiv="Content-Language" content="es-ar">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>OpenShift OCP v1 - prueba 17-02 08/02/2019</title>
<base target="_blank">

<style type="text/css"> 
a:link 
{ 
text-decoration:none; 
} 
</style>
  
<script type="text/javascript" src="jquery-1.9.1.js"></script>
  
<script type="text/javascript">
$(window).load(function(){
$(function() {

    $('#produccion').hide(); 
    $('#testeo').hide(); 

    $('#selector').change(function(){
        if($('#selector').val() == '0') 
	{
            $('#produccion').show();
	    $('#testeo').hide();
        } 

	if ($('#selector').val() == '1') 
	{
       	    $('#testeo').show();
	    $('#produccion').hide();
       	}

	if ($('#selector').val() == 'A')
	{
	    $('#testeo').hide();
            $('#produccion').hide();
	}
    });
});

    });

</script>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">


<div align="center">
<div align="center">
	<table border="0" style="border-collapse: collapse" width="100%" bgcolor="#F7C92C" height="91">
		<tr>
			<td bordercolor="#F7C92C">
			<p align="center">
			</p>
			<p>
			<img border="0" src="logo_home.png" width="180" height="48" hspace="50" align="left"></td>
		</tr>
	</table>
</div>
<br>
<div align="center">
	<table border="0" style="border-collapse: collapse" width="460" height="40">
		<tr>
			<td width="200" bgcolor="#CCCCCC">
			<p align="center"><font face="Calibri" align="left">Entorno:</font></td>
			<td bgcolor="#CCCCCC">
			<p align="center">
			<select size="1" name="selector" id="selector" style="font-family: Calibri">
			<option selected value="A">Seleccionar</option>
			<option value="0">Produccion</option>
			<option value="1">Desarrollo / Testeo</option>
			</select></td>
		</tr>
	</table>
	</div>
	<br>
<div id="produccion">
<table border="0" style="border-collapse: collapse; border: 1px dotted #CCCCCC; " width="460">
		<tr>
			<td width="147" height="64" align="center">
			<p align="center"><font face="Calibri" size="4">
			<a target="_blank" href="https://prod-openshift.correo.local">Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/open.png" width="170" height="44"></font></td>
		</tr>
		<tr>
			<td width="147" align="center" height="64">
			<font face="Calibri" size="4">
			<a target="_blank" href="https://kibana.prod.correo.local">Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/kibana.png" width="170" height="65"></font></td>
		</tr>
		<tr>
			<td width="147" height="64" align="center">
			<font face="Calibri" size="4">
			<a href="https://grafana-openshift-monitoring.prod.correo.local">
			Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/grafana.png" width="170" height="41"></font></td>
		</tr>
		<tr>
			<td width="147" align="center" height="64">
			<font face="Calibri" size="4">
			<a href="https://prometheus-k8s-openshift-monitoring.prod.correo.local">
			Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/prometheus.png" width="171" height="48"></font></td>
		</tr>
		<tr>
			<td width="147" align="center" height="64">
			<font face="Calibri" size="4">
			<a href="https://alertmanager-main-openshift-monitoring.prod.correo.local">
			Login</a></font></td>
			<td height="64" align="center">
			<p align="center"><b><font face="Calibri" size="5">Alert Manager</font></b></td>
		</tr>
		<tr>
			<td width="147" align="center" height="64">
			<font face="Calibri" size="4">
			<a href="https://satellite.correo.local/users/login">Login</a></font></td>
			<td height="64" align="center">
			<font face="Calibri" size="4">
			<img border="0" src="img/satellite.png" width="170" height="48"></font></td>
		</tr>
	</table>
</div>
<div id="testeo">
<table border="0" style="border-collapse: collapse; border: 1px dotted #CCCCCC; " width="460">
		<tr>
			<td width="143" height="64" align="center">
			<font face="Calibri" size="4">
			<a href="https://noprod-openshift.correo.local">Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/open.png" width="170" height="44"></font></td>
		</tr>
		<tr>
			<td width="143" align="center" height="64">
			<font face="Calibri" size="4">
			<a target="_blank" href="https://kibana.noprod.correo.local">Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/kibana.png" width="170" height="65"></font></td>
		</tr>
		<tr>
			<td width="143" height="64" align="center">
			<font face="Calibri" size="4">
			<a href="https://grafana-openshift-monitoring.noprod.correo.local">
			Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/grafana.png" width="170" height="41"></font></td>
		</tr>
		<tr>
			<td width="143" align="center" height="64">
			<font face="Calibri" size="4">
			<a href="https://prometheus-k8s-openshift-monitoring.noprod.correo.local">
			Login</a></font></td>
			<td height="64" align="center"><font face="Calibri" size="4">
			<img border="0" src="img/prometheus.png" width="171" height="48"></font></td>
		</tr>
		<tr>
			<td width="143" align="center" height="64">
			<font face="Calibri" size="4">
			<a href="https://alertmanager-main-openshift-monitoring.noprod.correo.local">
			Login</a></font></td>
			<td height="64" align="center">
			<p align="center"><b><font face="Calibri" size="5">Alert Manager</font></b></td>
		</tr>
		<tr>
			<td width="147" align="center" height="64">
			<font face="Calibri" size="4">
			<a href="https://satellite.correo.local/users/login">Login</a></font></td>
			<td height="64" align="center">
			<font face="Calibri" size="4">
			<img border="0" src="img/satellite.png" width="170" height="48"></font></td>
		</tr>
	</table>
	</div>
</div>

</body>

<p><a href="prueba.html">--------------------- cccc   <?php echo "$_ENV"; ?></a></p>

</html>
