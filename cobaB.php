<?php
	$name = "ujicoba";
	echo "PHP output ".$name;
	$array = ["blue","black","yellow"];

	$coba = array('a','b','c','d');
	$id = array(1,2,1,2);
	$assoc = array_combine($id, $coba);

	var_dump($assoc);
?>
<script>
	var name = <?php echo json_encode($name = 'asd')?>;
	document.write("<br/> JS Output : "+name);
</script>