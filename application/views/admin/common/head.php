<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/common.css');?>">
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/main.css');?>">
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/colResizable-1.3.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/common.js');?>"></script>
<script type="text/javascript">
$(function(){
	$(".list_table").colResizable({
		liveDrag:true,
		gripInnerHtml:"<div class='grip'></div>", 
		draggingClass:"dragging", 
		//minWidth:30
	}); 
}); 
</script>
