<?php
echo '<html>



<body bgcolor = "#CCFF99"



<head><font color = blue face = "Times New Roman"  > <h1><i> RATE MY
<br>    BOSS.com </i></h1></font></head>


<fieldset><legend>
<h2> Add New Organization</h2></legend>

<form method ="post">

<table>
	<tr>

		<td>Organization Name:</td>
        </tr>

        <tr>
		<td><input type="text" size="30" name = "name"  class="input" /></td>
	</tr>

<tr>

		<td>City:</td>
        </tr>

        <tr>
		<td><input type="text" size="30" name = "city"  class="input" /></td>
	</tr>

<tr>
      <td>Province:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "province"  class="input" /></td>
	</tr>

<tr>
      <td>Organization Type:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "type"  class="input" /></td>
	</tr>

<tr>
      <td>Approximate size of organization:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "size"  class="input" /></td>
	</tr>

<tr>
       <td>Organization Website:</td>
</tr>

        <tr>
		<td><input type="text" size="30" name = "url"  class="input" value = "http://" /></td>
	</tr>

</table>


</fieldset>

<input type="submit" value="Send">
<input type="reset" value="Clear"/>

<p><h3><a href="my_page.php" target=_top>Home</a></h3>

</form>

</body>

</html>';

?>