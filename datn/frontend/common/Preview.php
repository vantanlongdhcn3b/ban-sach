<?php 
	namespace frontend\common;
	use Yii;
	use yii\web\Session;

	class Preview 
	{
		function addPreview($id,$arrData)
		{
			$session = Yii::$app->session;
			if(!isset($session['preview'])){
				$preview[$id]=array(
					"product_name"=>$arrData['product_name'],
					"product_id" => $id,
					"price_out"=>$arrData['price_out'],
					"sale"=>$arrData['sale'],
					"price"=>$arrData['price_out']*(100-$arrData['sale'])/100,
					"image"=>$arrData['image'],
					"author_name"=>$arrData['author_name'],
				);

			}else{
				$preview=$session['preview'];
				if(array_key_exists($id, $preview)){
					$preview[$id]=array(
						"product_name"=>$arrData['product_name'],
						"product_id" => $id,
						"price_out"=>$arrData['price_out'],
						"sale"=>$arrData['sale'],
						"price"=>$arrData['price_out']*(100-$arrData['sale'])/100,
						"image"=>$arrData['image'],
						"author_name"=>$arrData['author_name'],
					);
				}
				else{
					$preview[$id]=array(
						"product_name"=>$arrData['product_name'],
						"product_id" => $id,
						"price_out"=>$arrData['price_out'],
						"sale"=>$arrData['sale'],
						"price"=>$arrData['price_out']*(100-$arrData['sale'])/100,
						"image"=>$arrData['image'],
						"author_name"=>$arrData['author_name'],
					);
				}
			}
			$session['preview']=$preview;
		}

	}
 ?>