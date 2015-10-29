<script src="JS/jquery-1.8.3.js"></script>
<?php
    include("config/autoload.php");
?>
<form name="Change_Variable" action="index.php?action=change" method="post">
Change Variabel. Silahkan masukkan angka yang ingin anda change.
        <table>
     <tr>
        <td>Variabel a : </td>
        <td><input type="text" name="var_a" id="var_a" value=""></td>
     </tr>
     <tr>
        <td>Variabel b: </td>
        <td><input type="text" name="var_b" id="var_b" value=""></td>
     </tr>
     <tr>
        <td><input type="submit" name="action" value="change"></td>
     </tr>
     </table>
</form>
<?php
//$action = $_GET['action'];
if(!empty($_GET['action'])){
   
   if($_GET['action']=='change')
    {
		$a = $_POST['var_a'];
        $b = $_POST['var_b'];
		$Test = new Mytest($a,$b);
		$Test->changeVar();
		 ?>  
		
<script>
		$(document).ready(function(){
		    $("#var_a").val(<?php echo $Test->a ?>);
			$("#var_b").val(<?php echo $Test->b ?>);
		});
</script>
	<?php
	}
    
}
?>

