
<?php  
	foreach ($dataSubCat as $key => $value) {
		echo '<option value="'.$value->cat_id.'">'.$value->cat_name.'</option>';
	}
?>