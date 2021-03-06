<?php
$this->pageTitle = Yii::app()->params['appTitle'];
$this->addMetaProperty('og:title', Yii::app()->params['appTitle']);
$this->addMetaProperty('og:type', 'website');
$this->addMetaProperty('og:url', $this->createUrl('index'));
$this->addMetaProperty('og:image', Yii::app()->request->getBaseUrl(true).'/images/bootstrap-avatar_normal.png');
$this->addMetaProperty('og:site_name', Yii::app()->name);
$this->addMetaProperty('og:locale',Yii::app()->fb->locale);
$this->addMetaProperty('fb:app_id', Yii::app()->fb->appID);
?>

<section id="bootAlert">

	<h2>Alerts</h2>

	<?php
	Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
	Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
	Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
	Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');
	?>

	<?php $this->widget('bootstrap.widgets.BootAlert'); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php
Yii::app()->user->setFlash('success', '<strong>Well done!</strong> You successfully read this important alert message.');
Yii::app()->user->setFlash('info', '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.');
Yii::app()->user->setFlash('warning', '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.');
Yii::app()->user->setFlash('error', '<strong>Oh snap!</strong> Change a few things up and try submitting again.');
?>
~~~
~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootAlert'); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootCrumb">

	<h2>Breadcrumbs</h2>

	<?php $this->widget('bootstrap.widgets.BootCrumb', array(
		'links'=>array('Library'=>'#', 'Data'),
	)); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootCrumb', array(
	'links'=>array('Library'=>'#', 'Data'),
)); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootNavbar">

	<h2>Navbar</h2>

	<?php $this->widget('bootstrap.widgets.BootNavbar', array(
		'fixed'=>false,
		'brand'=>'Project name',
		'brandUrl'=>'#',
		'collapse'=>true, // requires bootstrap-responsive.css
		'items'=>array(
			array(
				'class'=>'bootstrap.widgets.BootMenu',
				'items'=>array(
					array('label'=>'Home', 'url'=>'#', 'active'=>true),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
						array('label'=>'DROPDOWN HEADER', 'header'=>true),
						array('label'=>'Action', 'url'=>'#'),
						array('label'=>'Another action', 'url'=>'#'),
						array('label'=>'Something else here', 'url'=>'#'),
						'---',
						array('label'=>'Separated link', 'url'=>'#'),
					)),
				),
			),
			'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
			array(
				'class'=>'bootstrap.widgets.BootMenu',
				'htmlOptions'=>array('class'=>'pull-right'),
				'items'=>array(
					array('label'=>'Link', 'url'=>'#'),
					array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
						array('label'=>'Action', 'url'=>'#'),
						array('label'=>'Another action', 'url'=>'#'),
						array('label'=>'Something else here', 'url'=>'#'),
						'---',
						array('label'=>'Separated link', 'url'=>'#'),
					)),
				),
			),
		),
	)); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootNavbar', array(
	'fixed'=>false,
	'brand'=>'Project name',
	'brandUrl'=>'#',
	'collapse'=>true, // requires bootstrap-responsive.css
	'items'=>array(
		array(
			'class'=>'bootstrap.widgets.BootMenu',
			'items'=>array(
				array('label'=>'Home', 'url'=>'#', 'active'=>true),
				array('label'=>'Link', 'url'=>'#'),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'DROPDOWN HEADER', 'itemOptions'=>array('class'=>'nav-header')),
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'#'),
				)),
			),
		),
		'<form class=\"navbar-search pull-left\" action=\"\"><input type=\"text\" class=\"search-query span2\" placeholder=\"Search\"></form>',
		array(
			'class'=>'bootstrap.widgets.BootMenu',
			'htmlOptions'=>array('class'=>'pull-right'),
			'items'=>array(
				array('label'=>'Link', 'url'=>'#'),
				array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
					array('label'=>'Action', 'url'=>'#'),
					array('label'=>'Another action', 'url'=>'#'),
					array('label'=>'Something else here', 'url'=>'#'),
					'---',
					array('label'=>'Separated link', 'url'=>'#'),
				)),
			),
		),
	),
)); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootMenu">

	<h2>Menus</h2>

	<h3>Basic tabs</h3>

	<?php $this->widget('bootstrap.widgets.BootMenu', array(
		'type'=>'tabs',
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h3>Stacked tabs</h3>

	<?php $this->widget('bootstrap.widgets.BootMenu', array(
		'type'=>'tabs',
		'stacked'=>true,
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h3>Basic pills</h3>

	<?php $this->widget('bootstrap.widgets.BootMenu', array(
		'type'=>'pills',
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h3>Stacked pills</h3>

	<?php $this->widget('bootstrap.widgets.BootMenu', array(
		'type'=>'pills',
		'stacked'=>true,
		'items'=>array(
			array('label'=>'Home', 'url'=>'#', 'active'=>true),
			array('label'=>'Profile', 'url'=>'#'),
			array('label'=>'Messages', 'url'=>'#'),
		),
	)); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootMenu', array(
	'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
	'stacked'=>false, // whether this is a stacked menu
	'items'=>array(
		array('label'=>'Home', 'url'=>'#', 'active'=>true),
		array('label'=>'Profile', 'url'=>'#'),
		array('label'=>'Messages', 'url'=>'#'),
	),
)); ?>
~~~"); ?>

	<h3>Nav list</h3>

	<div class="well" style="padding: 8px 0;">

		<?php $this->widget('bootstrap.widgets.BootMenu', array(
			'type'=>'list',
			'items'=>array(
				array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
				array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
				array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
				array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
				array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
				array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
				array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
			),
		)); ?>

	</div>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootMenu', array(
	'type'=>'list',
	'items'=>array(
		array('label'=>'LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
		array('label'=>'Home', 'icon'=>'home', 'url'=>'#', 'active'=>true),
		array('label'=>'Library', 'icon'=>'book', 'url'=>'#'),
		array('label'=>'Application', 'icon'=>'pencil', 'url'=>'#'),
		array('label'=>'ANOTHER LIST HEADER', 'itemOptions'=>array('class'=>'nav-header')),
		array('label'=>'Profile', 'icon'=>'user', 'url'=>'#'),
		array('label'=>'Settings', 'icon'=>'cog', 'url'=>'#'),
		array('label'=>'Help', 'icon'=>'flag', 'url'=>'#'),
	),
)); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootTabbed">

	<h2>Tabs</h2>

	<?php $this->widget('bootstrap.widgets.BootTabbed', array(
		'htmlOptions'=>array('class'=>'tabbed'),
		'tabs'=>array(
			array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.'),
			array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
			array('label'=>'Dropdown', 'items'=>array(
				array('label'=>'@fat', 'content'=>'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
				array('label'=>'@mdo', 'content'=>'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
			)),
		),
	)); ?>

	<?php $this->widget('bootstrap.widgets.BootTabbed', array(
		'type'=>'pills',
		'htmlOptions'=>array('class'=>'tabbed'),
		'tabs'=>array(
			array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.'),
			array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
			array('label'=>'Dropdown', 'items'=>array(
				array('label'=>'@fat', 'content'=>'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
				array('label'=>'@mdo', 'content'=>'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
			)),
		),
	)); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootTabbed', array(
	'type'=>'pills', // 'tabs' or 'pills'
	'tabs'=>array(
		array('label'=>'Home', 'content'=>'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.'),
		array('label'=>'Profile', 'content'=>'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
		array('label'=>'Dropdown', 'items'=>array(
			array('label'=>'@fat', 'content'=>'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
			array('label'=>'@mdo', 'content'=>'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
		)),
	),
)); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootDetailView">

	<h2>Detail views</h2>

	<?php $this->widget('bootstrap.widgets.BootDetailView', array(
		'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
		'attributes'=>array(
			array('name'=>'firstName', 'label'=>'First name'),
			array('name'=>'lastName', 'label'=>'Last name'),
			array('name'=>'language', 'label'=>'Language'),
		),
	)); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootDetailView', array(
	'data'=>array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
	'attributes'=>array(
		array('name'=>'firstName', 'label'=>'First name'),
		array('name'=>'lastName', 'label'=>'Last name'),
		array('name'=>'language', 'label'=>'Language'),
	),
)); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootGridView">

	<h2>Grid views</h2>

	<h3>Default</h3>

	<?php $this->widget('bootstrap.widgets.BootGridView', array(
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'itemsCssClass'=>'table',
		'columns'=>$gridColumns,
	)); ?>

	<h3>Striped</h3>

	<?php $this->widget('bootstrap.widgets.BootGridView', array(
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'itemsCssClass'=>'table table-striped',
		'columns'=>$gridColumns,
	)); ?>

	<h3>Bordered</h3>

	<?php $this->widget('bootstrap.widgets.BootGridView', array(
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'itemsCssClass'=>'table table-bordered',
		'columns'=>$gridColumns,
	)); ?>

	<h3>Condensed</h3>

	<?php $this->widget('bootstrap.widgets.BootGridView', array(
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'itemsCssClass'=>'table table-condensed',
		'columns'=>$gridColumns,
	)); ?>

	<h3>Striped, bordered and condensed</h3>

	<?php $this->widget('bootstrap.widgets.BootGridView', array(
		'dataProvider'=>$gridDataProvider,
		'template'=>"{items}",
		'itemsCssClass'=>'table table-striped table-bordered table-condensed',
		'columns'=>$gridColumns,
	)); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
\$gridDataProvider = new CArrayDataProvider(array(
	array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS'),
	array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript'),
	array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML'),
));
~~~
~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootGridView', array(
	'dataProvider'=>\$gridDataProvider,
	'template'=>\"{items}\",
	'itemsCssClass'=>'table table-striped table-bordered table-condensed',
	'columns'=>array(
		array('name'=>'id', 'header'=>'#'),
		array('name'=>'firstName', 'header'=>'First name'),
		array('name'=>'lastName', 'header'=>'Last name'),
		array('name'=>'language', 'header'=>'Language'),
		array(
			'class'=>'bootstrap.widgets.BootButtonColumn',
			'htmlOptions'=>array('style'=>'width: 50px'),
		),
	),
)); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootThumbs">

	<h2>Thumbnails</h2>

	<?php $this->widget('bootstrap.widgets.BootThumbs', array(
		'dataProvider'=>$listDataProvider,
		'template'=>"{items}\n{pager}",
		'itemView'=>'_thumb',
		// Remove the existing tooltips and rebind the plugin after each ajax-call.
		'afterAjaxUpdate'=>"js:function() {
			jQuery('.tooltip').remove();
			jQuery('a[rel=tooltip]').tooltip();
		}",
	)); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootThumbs', array(
	'dataProvider'=>\$listDataProvider,
	'template'=>\"{items}\\n{pager}\",
	'itemView'=>'_thumb',
	// Remove the existing tooltips and rebind the plugin after each ajax-call.
	'afterAjaxUpdate'=>\"js:function() {
		jQuery('.tooltip').remove();
		jQuery('a[rel=tooltip]').tooltip();
	}\",
)); ?>
~~~
**\_thumb.php**
~~~
[html]
<li class=\"span3\">
	<a href=\"#\" class=\"thumbnail\" rel=\"tooltip\" data-title=\"Tooltip\">
		<img src=\"http://placehold.it/280x180\" alt=\"\">
	</a>
</li>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootTooltip">

	<h2>Tooltips</h2>

	<p class="well">
		Lorem ipsum dolor sit <a href="#" rel="tooltip" title="First tooltip">amet</a>,
		consectetur adipiscing elit.
		Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
		Pellentesque at tellus urna.
		Ut congue, <a href="#" rel="tooltip" title="Another tooltip">nibh eu</a> interdum commodo,
		ligula urna consequat tortor, at vehicula tellus est a orci.
		Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
		Sed odio dui, pretium eu pellentesque ac,
		<a href="#" rel="tooltip" title="Yet another tooltip">tempor</a> sed sem.
	</p>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[html]
<p class=\"well\">
	Lorem ipsum dolor sit <a href=\"#\" rel=\"tooltip\" title=\"First tooltip\">amet</a>,
	consectetur adipiscing elit.
	Fusce ut velit sem, id elementum elit. Quisque tincidunt magna in quam luctus a ultrices tellus luctus.
	Pellentesque at tellus urna.
	Ut congue, <a href=\"#\" rel=\"tooltip\" title=\"Another tooltip\">nibh eu</a> interdum commodo,
	ligula urna consequat tortor, at vehicula tellus est a orci.
	Maecenas nec ligula sed ipsum posuere sollicitudin pretium ac sapien.
	Sed odio dui, pretium eu pellentesque ac,
	<a href=\"#\" rel=\"tooltip\" title=\"Yet another tooltip\">tempor</a> sed sem.
</p>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootPopover">

	<h2>Popovers</h2>

	<div class="well">
		<?php echo CHtml::link('Hover me', '#', array(
			'class'=>'btn btn-primary btn-danger',
			'data-title'=>'Heading',
			'data-content'=>'Content ...',
			'rel'=>'popover'
		)); ?>
	</div>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php echo CHtml::link('Hover me', '#', array('class'=>'btn btn-primary btn-danger', 'data-title'=>'Heading', 'data-content'=>'Content ...', 'rel'=>'popover')); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootModal">

	<h2>Modals</h2>

	<?php $this->beginWidget('bootstrap.widgets.BootModal', array(
		'id'=>'modal',
		'htmlOptions'=>array('class'=>'hide'),
		'events'=>array(
			'show'=>"js:function() { console.log('modal show.'); }",
			'shown'=>"js:function() { console.log('modal shown.'); }",
			'hide'=>"js:function() { console.log('modal hide.'); }",
			'hidden'=>"js:function() { console.log('modal hidden.'); }",
		),
	)); ?>

	<div class="modal-header">
		<a class="close" data-dismiss="modal">&times;</a>
		<h3>Modal header</h3>
	</div>
	<div class="modal-body">
		<p>One fine body...</p>
	</div>
	<div class="modal-footer">
		<?php echo CHtml::link('Save changes', '#', array('class'=>'btn btn-primary', 'data-dismiss'=>'modal')); ?>
		<?php echo CHtml::link('Close', '#', array('class'=>'btn', 'data-dismiss'=>'modal')); ?>
	</div>

	<?php $this->endWidget(); ?>

	<div class="well">
		<?php echo CHtml::link('Click me','#modal', array(
			'class'=>'btn btn-primary',
			'data-toggle'=>'modal',
		)); ?>
	</div>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->beginWidget('bootstrap.widgets.BootModal', array(
	'id'=>'modal',
	'htmlOptions'=>array('class'=>'hide'),
	'events'=>array(
		'show'=>\"js:function() { console.log('modal show.'); }\",
		'shown'=>\"js:function() { console.log('modal shown.'); }\",
		'hide'=>\"js:function() { console.log('modal hide.'); }\",
		'hidden'=>\"js:function() { console.log('modal hidden.'); }\",
	),
)); ?>
~~~
~~~
[html]
<div class=\"modal-header\">
	<a class=\"close\" data-dismiss=\"modal\">&times;</a>
	<h3>Modal header</h3>
</div>
<div class=\"modal-body\">
	<p>One fine body…</p>
</div>
<div class=\"modal-footer\">
	<?php echo CHtml::link('Save changes', '#', array('class'=>'btn btn-primary', 'data-dismiss'=>'modal')); ?>
	<?php echo CHtml::link('Close', '#', array('class'=>'btn', 'data-dismiss'=>'modal')); ?>
</div>
~~~
~~~
[php]
<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php echo CHtml::link('Click me','#modal', array('class'=>'btn btn-primary', 'data-toggle'=>'modal')); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootActiveForm">

	<h2>Forms</h2>

	<h3>Vertical</h3>

	<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
		'id'=>'verticalForm',
		'htmlOptions'=>array('class'=>'well'),
	)); ?>

	<?php echo $form->textFieldRow($model, 'textField', array('class'=>'span3')); ?>
	<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'span3')); ?>
	<?php echo $form->checkboxRow($model, 'checkbox'); ?>
	<?php echo CHtml::htmlButton('<i class="icon-ok"></i> Submit', array('class'=>'btn', 'type'=>'submit')); ?>

	<?php $this->endWidget(); ?>

	<h3>Search</h3>

	<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
		'id'=>'searchForm',
		'type'=>'search',
		'htmlOptions'=>array('class'=>'well'),
	)); ?>

	<?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-medium')); ?>
	<?php echo CHtml::htmlButton('<i class="icon-search"></i> Search', array('class'=>'btn', 'type'=>'submit')); ?>

	<?php $this->endWidget(); ?>

	<h3>Inline</h3>

	<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
		'id'=>'inlineForm',
		'type'=>'inline',
		'htmlOptions'=>array('class'=>'well'),
	)); ?>

	<?php echo $form->textFieldRow($model, 'textField', array('class'=>'input-small')); ?>
	<?php echo $form->passwordFieldRow($model, 'password', array('class'=>'input-small')); ?>
	<?php echo CHtml::htmlButton('Go', array('class'=>'btn', 'type'=>'submit')); ?>

	<?php $this->endWidget(); ?>

	<h3>Horizontal</h3>

	<?php /** @var BootActiveForm $form */
	$form = $this->beginWidget('bootstrap.widgets.BootActiveForm', array(
		'id'=>'horizontalForm',
		'type'=>'horizontal',
	)); ?>

	<fieldset>

		<legend>Legend</legend>

		<?php echo $form->textFieldRow($model, 'textField',
				array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
		<?php echo $form->dropDownListRow($model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
		<?php echo $form->dropDownListRow($model, 'multiDropdown', array('1', '2', '3', '4', '5'),
				array('multiple'=>true)); ?>
		<?php echo $form->fileFieldRow($model, 'fileField'); ?>
		<?php echo $form->textAreaRow($model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?>
		<?php echo $form->uneditableRow($model, 'uneditable'); ?>
		<?php echo $form->textFieldRow($model, 'disabled', array('disabled'=>true)); ?>
		<?php echo $form->checkBoxRow($model, 'disabledCheckbox', array('disabled'=>true)); ?>
		<?php echo $form->checkBoxListInlineRow($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
		<?php echo $form->checkBoxListRow($model, 'checkboxes', array(
			'Option one is this and that—be sure to include why it\'s great',
			'Option two can also be checked and included in form results',
			'Option three can—yes, you guessed it—also be checked and included in form results',
		), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
		<?php echo $form->radioButtonRow($model, 'radioButton'); ?>
		<?php echo $form->radioButtonListRow($model, 'radioButtons', array(
			'Option one is this and that—be sure to include why it\'s great',
			'Option two can is something else and selecting it will deselect option one',
		)); ?>

	</fieldset>

	<div class="form-actions">
		<?php echo CHtml::htmlButton('<i class="icon-ok icon-white"></i> Submit', array('class'=>'btn btn-primary', 'type'=>'submit')); ?>
		<?php echo CHtml::htmlButton('<i class="icon-ban-circle"></i> Reset', array('class'=>'btn', 'type'=>'reset')); ?>
	</div>

	<?php $this->endWidget(); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'verticalForm',
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'span3')); ?>
<?php echo \$form->passwordFieldRow(\$model, 'password', array('class'=>'span3')); ?>
<?php echo \$form->checkboxRow(\$model, 'checkbox'); ?>
<?php echo CHtml::htmlButton('<i class=\"icon-ok\"></i> Submit', array('class'=>'btn', 'type'=>'submit')); ?>

<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'searchForm',
	'type'=>'search',
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'input-medium')); ?>
<?php echo CHtml::htmlButton('<i class=\"icon-search\"></i> Search', array('class'=>'btn','type'=>'submit')); ?>

<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'inlineForm',
	'type'=>'inline',
	'htmlOptions'=>array('class'=>'well'),
)); ?>

<?php echo \$form->textFieldRow(\$model, 'textField', array('class'=>'input-small')); ?>
<?php echo \$form->passwordFieldRow(\$model, 'password', array('class'=>'input-small')); ?>
<?php echo CHtml::htmlButton('Go', array('class'=>'btn', 'type'=>'submit')); ?>

<?php \$this->endWidget(); ?>
~~~
~~~
[php]
<?php /** @var BootActiveForm \$form */
\$form = \$this->beginWidget('bootstrap.widgets.BootActiveForm', array(
	'id'=>'horizontalForm',
	'type'=>'horizontal',
)); ?>

<fieldset>

	<legend>Legend</legend>

	<?php echo \$form->textFieldRow(\$model, 'textField', array('hint'=>'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'dropdown', array('Something ...', '1', '2', '3', '4', '5')); ?>
	<?php echo \$form->dropDownListRow(\$model, 'multiDropdown', array('1', '2', '3', '4', '5'), array('multiple'=>true)); ?>
	<?php echo \$form->fileFieldRow(\$model, 'fileField'); ?>
	<?php echo \$form->textAreaRow(\$model, 'textarea', array('class'=>'span8', 'rows'=>5)); ?>
	<?php echo \$form->uneditableRow(\$model, 'uneditable'); ?>
	<?php echo \$form->textFieldRow(\$model, 'disabled', array('disabled'=>true)); ?>
	<?php echo \$form->checkBoxRow(\$model, 'disabledCheckbox', array('disabled'=>true)); ?>
	<?php echo \$form->checkBoxListInlineRow(\$model, 'inlineCheckboxes', array('1', '2', '3')); ?>
	<?php echo \$form->checkBoxListRow(\$model, 'checkboxes', array(
		'Option one is this and that—be sure to include why it\'s great',
		'Option two can also be checked and included in form results',
		'Option three can—yes, you guessed it—also be checked and included in form results',
	), array('hint'=>'<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
	<?php echo \$form->radioButtonRow(\$model, 'radioButton'); ?>
	<?php echo \$form->radioButtonListRow(\$model, 'radioButtons', array(
		'Option one is this and that—be sure to include why it\'s great',
		'Option two can is something else and selecting it will deselect option one',
	)); ?>

</fieldset>

<div class=\"form-actions\">
	<?php echo CHtml::htmlButton('<i class=\"icon-ok icon-white\"></i> Submit', array('class'=>'btn btn-primary', 'type'=>'submit')); ?>
	<?php echo CHtml::htmlButton('<i class=\"icon-ban-circle\"></i> Reset', array('class'=>'btn', 'type'=>'reset')); ?>
</div>

<?php \$this->endWidget(); ?>
~~~"); ?>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="bootButton">

	<h2>Buttons</h2>

	<div class="row">
		<div class="span4">
			<h3>Large</h3>
			<p>
				<?php $this->widget('bootstrap.widgets.BootButton', array(
					'label'=>'Primary', 'type'=>'primary', 'size'=>'large',
				)); ?>

				<?php $this->widget('bootstrap.widgets.BootButton', array(
					'label'=>'Action', 'size'=>'large',
				)); ?>
			</p>
		</div>

		<div class="span4">
			<h3>Normal</h3>
			<p>
				<?php $this->widget('bootstrap.widgets.BootButton', array(
					'label'=>'Primary', 'type'=>'primary',
				)); ?>

				<?php $this->widget('bootstrap.widgets.BootButton', array(
					'label'=>'Action',
				)); ?>
			</p>
		</div>

		<div class="span4">
			<h3>Small</h3>
			<p>
				<?php $this->widget('bootstrap.widgets.BootButton', array(
					'label'=>'Primary', 'type'=>'primary', 'size'=>'small',
				)); ?>

				<?php $this->widget('bootstrap.widgets.BootButton', array(
					'label'=>'Action', 'size'=>'small',
				)); ?>
			</p>
		</div>
	</div>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<p>
	<?php \$this->widget('bootstrap.widgets.BootButton', array(
		'label'=>'Primary',
		'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'size'=>'small', // '', 'small' or 'large'
	)); ?>
</p>
~~~"); ?>

	<h3>Button groups</h3>

	<div class="btn-toolbar">
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'buttons'=>array(
				array('label'=>'Left', 'url'=>'#'),
				array('label'=>'Middle', 'url'=>'#'),
				array('label'=>'Right', 'url'=>'#'),
			),
		)); ?>
	</div>

	<div class="btn-toolbar">
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'buttons'=>array(
				array('label'=>'1', 'url'=>'#'),
				array('label'=>'2', 'url'=>'#'),
				array('label'=>'3', 'url'=>'#'),
				array('label'=>'4', 'url'=>'#'),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'buttons'=>array(
				array('label'=>'5', 'url'=>'#'),
				array('label'=>'6', 'url'=>'#'),
				array('label'=>'7', 'url'=>'#'),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'buttons'=>array(
				array('label'=>'8', 'url'=>'#'),
			),
		)); ?>
	</div>

	<h3>Dropdowns</h3>

	<div class="btn-toolbar">
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'buttons'=>array(
				array('label'=>'Action', 'items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'primary',
			'buttons'=>array(
				array('label'=>'Action', 'items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'danger',
			'buttons'=>array(
				array('label'=>'Danger', 'items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
	</div>
	<div class="btn-toolbar">
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'success',
			'buttons'=>array(
				array('label'=>'Success', 'items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'info',
			'buttons'=>array(
				array('label'=>'Info', 'items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
	</div>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<div class=\"btn-toolbar\">
	<?php \$this->widget('bootstrap.widgets.BootButtonGroup', array(
		'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'buttons'=>array(
			array('label'=>'Action', 'items'=>array(
				array('label'=>'Action'),
				array('label'=>'Another action'),
				array('label'=>'Something else'),
				'---',
				array('label'=>'Separate link'),
			)),
		),
	)); ?>
</div>
~~~"); ?>

	<h3>Split dropdowns</h3>

	<div class="btn-toolbar">
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'buttons'=>array(
				array('label'=>'Action', 'url'=>'#'),
				array('items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'primary',
			'buttons'=>array(
				array('label'=>'Action', 'url'=>'#'),
				array('items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'danger',
			'buttons'=>array(
				array('label'=>'Danger', 'url'=>'#'),
				array('items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
	</div>
	<div class="btn-toolbar">
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'success',
			'buttons'=>array(
				array('label'=>'Success', 'url'=>'#'),
				array('items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
		<?php $this->widget('bootstrap.widgets.BootButtonGroup', array(
			'type'=>'info',
			'buttons'=>array(
				array('label'=>'Info', 'url'=>'#'),
				array('items'=>array(
					array('label'=>'Action'),
					array('label'=>'Another action'),
					array('label'=>'Something else'),
					'---',
					array('label'=>'Separate link'),
				)),
			),
		)); ?>
	</div>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<div class=\"btn-toolbar\">
	<?php \$this->widget('bootstrap.widgets.BootButtonGroup', array(
	    'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		'buttons'=>array(
			array('label'=>'Action', 'url'=>'#'),
			array('items'=>array(
				array('label'=>'Action'),
				array('label'=>'Another action'),
				array('label'=>'Something else'),
				'---',
				array('label'=>'Separate link'),
			)),
		),
	)); ?>
</div>
~~~"); ?>

	<h3>Stateful</h3>

	<p>
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'tag'=>'button',
			'type'=>'primary',
			'label'=>'Click me',
			'loadingText'=>'loading...',
			'htmlOptions'=>array('id'=>'buttonStateful'),
		)); ?>
	</p>

	<?php Yii::app()->clientScript->registerScript('buttonStateful', "
		$('#buttonStateful').click(function() {
			var btn = $(this);
			btn.button('loading'); // call the loading function
			setTimeout(function() {
				btn.button('reset'); // call the reset function
			}, 3000);
		});
	"); ?>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootButton', array(
	'tag'=>'button',
	'type'=>'primary',
	'label'=>'Click me',
	'loadingText'=>'loading...',
	'htmlOptions'=>array('id'=>'buttonStateful'),
)); ?>
~~~"); ?>

<?php echo $parser->safeTransform("~~~
[javascript]
$('#buttonStateful').click(function() {
	var btn = $(this);
	btn.button('loading'); // call the loading function
	setTimeout(function() {
		btn.button('reset'); // call the reset function
	}, 3000);
});
~~~"); ?>

	<h3>Single state</h3>

	<p>
		<?php $this->widget('bootstrap.widgets.BootButton', array(
			'tag'=>'button',
			'type'=>'primary',
			'label'=>'Toggle me',
			'toggle'=>true,
		)); ?>
	</p>

	<h4>Source code</h4>

<?php echo $parser->safeTransform("~~~
[php]
<?php \$this->widget('bootstrap.widgets.BootButton', array(
	'tag'=>'button',
	'type'=>'primary',
	'label'=>'Toggle me',
	'toggle'=>true,
)); ?>
~~~"); ?>

	<h3>Checkbox and radio</h3>

	<p>@todo</p>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<section id="comments">

	<h2>Comments</h2>

	<div class="fb-comments" data-href="<?php echo $this->createAbsoluteUrl('index'); ?>" data-num-posts="10" data-width="470"></div>

	<a class="top" href="#top">Back to top &uarr;</a>

</section>

<div class="subnav subnav-fixed">

	<?php $this->widget('BootMenu', array(
		'type'=>'pills',
		'scrollspy'=>array('spy'=>'.subnav', 'offset'=>50),
		'items'=>array(
			array('label'=>'Alert', 'url'=>'#bootAlert'),
			array('label'=>'Breadcrumb', 'url'=>'#bootCrumb'),
			array('label'=>'Navbar', 'url'=>'#bootNavbar'),
			array('label'=>'Menu', 'url'=>'#bootMenu'),
			array('label'=>'Tabs', 'url'=>'#bootTabbed'),
			array('label'=>'Detail view', 'url'=>'#bootDetailView'),
			array('label'=>'Grid view', 'url'=>'#bootGridView'),
			array('label'=>'Thumbnails', 'url'=>'#bootThumbs'),
			array('label'=>'Tooltip', 'url'=>'#bootTooltip'),
			array('label'=>'Popover', 'url'=>'#bootPopover'),
			array('label'=>'Modal', 'url'=>'#bootModal'),
			array('label'=>'Forms', 'url'=>'#bootActiveForm'),
			array('label'=>'Buttons', 'url'=>'#bootButton'),
		),
	)); ?>

</div>