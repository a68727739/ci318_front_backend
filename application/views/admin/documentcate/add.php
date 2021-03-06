<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/common/head')?>

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
												<?php 
													if(!empty($lists)):
														foreach($lists as $v):
													?>                                               
                                                <option value="<?php echo $v['id']?>"><?php echo str_repeat('&nbsp;',($v['level']-1)*4),$v['name']?></option>
												<?php
														endforeach; 
													endif;
												?>
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
