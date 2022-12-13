<?php
	require_once('db_config.php');
	
	if(ISSET($_REQUEST['expense_id'])){
		$expense_id=$_REQUEST['expense_id'];
		
		
		// $delete = mysqli_query($con, "DELETE FROM `expense_tbl` WHERE `expense_id`='$expense_id'") or die("Failed to delete a row!");
		$sql = "DELETE FROM `expense_tbl` WHERE `expense_id`='$expense_id'";
		$result = mysqli_query($con, $sql);
		// }	
    //if data deleted successfully
	if(@$result === TRUE)
		  { ?>
		<script type='text/javascript'>
		alert("Item deleted successfully!");
		window.location.replace("expense_report.php");
		</script>
<?php 
	}
}
 mysqli_close($con);
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
// 	$(function(){
// Swal.fire({
// 	'title': 'Hello World',
// 	'text': 'This is from sweetalert2',
// 	'type': 'success'
// })
// 	});
</script>
