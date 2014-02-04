<!DOCTYPE html>

<html> 
<head>
	<title>Calendar</title>
</head>
<body>
Years:
<select id ="years">
	<option value="1998">1998</option>
	<option value="1999">1999</option>
	<option value="2000">2000</option>
	<option value="2001">2001</option>
	<option value="2002">2002</option>
	<option value="2003">2003</option>
	<option value="2004">2004</option>
	<option value="2005">2005</option>
	<option value="2006">2006</option>
	<option value="2007">2007</option>
	<option value="2008">2008</option>
	<option value="2009">2009</option>
	<option value="2010">2010</option>
	<option value="2011">2011</option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>
	<option value="2014">2014</option>

</select>

Month:
<select id ="months">
	<option value="jan">January</option>
	<option value="feb">February</option>
	<option value="mar">March</option>
	<option value="apr">April</option>
	<option value="may">May</option>
	<option value="jun">June</option>
	<option value="jul">July</option>
	<option value="aug">August</option>
	<option value="sep">September</option>
	<option value="oct">October</option>
	<option value="nov">November</option>
	<option value="dec">December</option>
</select>

Day:
<select id ="days">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>


<div id="print"></div>
<script type ="text/javascript" src ="jquery.1.10.2.js"></script>
<script type ="text/javascript">
$(document).ready(function(){
	$('#years').on("change", function(){
		var years = $("#years").val();
		var month = $("#months").val();
		$.ajax({
			url: 'yrs.php',
			data: {mon: month, yr: years},
			dataType: 'JSON',
			method: 'GET',

			success:function(r){
				
			}

		});
	});
});
</script>
</body>
</html>