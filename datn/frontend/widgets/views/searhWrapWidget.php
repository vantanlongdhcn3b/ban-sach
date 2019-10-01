<?php 
use yii\widgets\ActiveForm;
use kartik\typeahead\Typeahead;
use yii\helpers\Url;
use yii\web\JsExpression;
 ?>
<div class="searh-wrap">
	<ul class="tags-1">
		
		<li><span>Liên hệ: .84 97 573 8903</span></li>
	</ul>
	
	<form method="GET" action="<?php echo Yii::$app->homeUrl.'search/search'?>">
		
		<div class="text-filed-1">
			<?php 
			$homeUrl=Yii::$app->homeUrl;
			 $template = 
			 	'<a href='.Yii::$app->homeUrl.'product/detail/{{product_id}} style="padding:0;">'.
				 '<div class="row" style="margin:0; padding:5px 10px;border-bottom: 1px dashed #ccc;">' .
		            '<div class="col-md-2 avatar">' .
		                '<img src="{{image}}" style="width:55px;heght:auto">' .
		            "</div>" .
		            '<div class="col-md-10">'.
			            '<div class="row">'.
				            '<span class="col-md-12 username" style="color: #000;font-size:13px"><b>{{name}}</b> <span style="font-size:12px">-{{cat_name}}</span></span>' .
				            '<div class="col-md-12 id">Tác giả: {{author}}</div>' .
				            '<div class="col-md-12 id"><del>{{price_out}}      </del> <span style="color:red">{{price}}</span></div>' .
				        '</div>'.
		            '</div>'.
		        '</div>'.
		        '</a>';
			echo Typeahead::widget([
	        'name' => 'search',
	        'options' => ['placeholder' => 'Tìm kiếm theo tên sách, tác giả, thể loại, nội dung, NXB,...','id'=>'search'],
	        'pluginOptions' => ['highlight'=>true],
	        'dataset' => [
	            [
	                'datumTokenizer' => "Bloodhound.tokenizers.obj.whitespace('name')",
	                'display' => ['name'],
	                'prefetch' => Yii::$app->homeUrl.'search/search-list',
	                'limit' => 7,
	                'remote' => [
	                    'url' => Url::to(['search/search-list']) . '?q=%QUERY%',
	                    'wildcard' => '%QUERY%'
	                ],
	                'templates' => [
		                'notFound' => '<div class="text-danger" style="padding:0 8px">Unable to find repositories for selected query.</div>',
		                 'suggestion' => new JsExpression("Handlebars.compile('{$template}')")
		            ]
	            ]
	        ]
	    ]);
			 ?>
			<button type="subbmit" id="submitSearch"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
