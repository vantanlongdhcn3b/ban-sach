<option>--Chon danh mục con tương ứng--</option>
<?php  
	foreach ($dataSubCat as $key => $value) {
		echo '<option value="'.$value->cat_id.'">'.$value->cat_name.'</option>';
	}
?>