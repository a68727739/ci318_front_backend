<link rel="stylesheet" href="<?php echo base_url('public/kindeditor/themes/default/default.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('public/kindeditor/plugins/code/prettify.css');?>" />
	<script charset="utf-8" src="<?php echo base_url('public/kindeditor/kindeditor-all-min.js');?>"></script>
	<script charset="utf-8" src="<?php echo base_url('public/kindeditor/lang/zh-TW.js');?>"></script>
	<script charset="utf-8" src="<?php echo base_url('public/kindeditor/plugins/code/prettify.js');?>"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor = K.create('textarea[name="content"]', {
				cssPath : '<?php echo base_url('public/kindeditor/plugins/code/prettify.css');?>',
				uploadJson : '<?php echo base_url('public/kindeditor/php/upload_json.php');?>',
				fileManagerJson : '<?php echo base_url('public/kindeditor/php/file_manager_json.php');?>',
				allowFileManager : true
			});
			
		});
	</script>
