<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/common.css');?>">
<link rel="stylesheet" href="<?php echo base_url(PUB.'/'.MODULE.'/css/main.css');?>">
<script type="text/javascript" src="<?php echo base_url(PUB.'/'.MODULE.'/js/jquery.min.js');?></script>
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

<script type="text/javascript">
KindEditor.ready(function(K) {
	$('.type0').hide();
	$('input[name="type"]').click(function(){
		var $val = parseInt($(this).val());
		if ($val) {
			$('.type0').hide();
			$('.type1').show();
		} else {
			$('.type1').hide();
			$('.type0').show();
		}
	});
});
</script>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：内容管理<span>&gt;</span>添加分类</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php echo site_url(MODULE.'/'.C.'/'.M)?>/add" class="jqtransform" method="post">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr >
                                <td class="td_right">上级分类：</td>
                                <td>
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="pid" class="select">
                                                <option value="0" selected="selected">顶级分类</option>
                                                                                               
                                                                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">分类名称：</td>
                                <td><input type="text" name="name" class="input-text lh30" required="required" /></td>
                            </tr>
                           
                            <tr>
                                <td class="td_right">分类排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="1" pattern="[0-9]+" /> 值越小越排在前</td>
                            </tr>
                            
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td><input type="submit" class="btn btn82 btn_save2" value="保存">
                                    <input type="reset"  class="btn btn82 btn_res" value="重置"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
