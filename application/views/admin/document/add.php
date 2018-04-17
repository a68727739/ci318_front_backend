<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：内容管理<span>&gt;</span>添加内容</div>
    <div id="forms">
        <div class="box">
            <div class="box_border">
                <div class="box_center">
                    <form action="<?php site_url(MODULE.'/'.C.'/'.M) ?>" method="post" class="jqtransform">
                        <table class="form_table pt15 pb15" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td class="td_right">所属分类：</td>
                                <td>
                                    <div class="select_border">
                                        <div class="select_containers ">
                                            <select name="documentcate_id" class="select">
												<option value="0" selected="selected">-请选择-</option>
												<?php if(!empty($documentcate)):
														foreach($documentcate as $v):
													?>
                                                <option value="<?php echo $v['id'];?>"><?php echo str_repeat('&nbsp;',($v['level']-1)*4),$v['name'];?></option>
												<?php 
														endforeach;
													endif;?>
                                                                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td_right">标题：</td>
                                <td><input type="text" name="name" class="input-text lh30" required /></td>
                            </tr>
                            <tr>
                                <td class="td_right">排序：</td>
                                <td><input type="text" name="sort" class="input-text lh30" value="10" pattern="[0-9]+" /></td>
                            </tr>
        
                            <tr>
                                <td class="td_right">添加时间：</td>
                                <td><input type="text" name="addtime" class="input-text lh30" value="<?php echo date('Y-m-d H:i:s')?>" /></td>
                            </tr>

                            <tr>
                                <td valign="top" class="td_right">内容：</td>
                                <td><textarea id="content" name="content"></textarea></td>
                            </tr>
                            
                            <tr>
                                <td class="td_right">&nbsp;</td>
                                <td><input type="submit" name="button2" class="btn btn82 btn_save2" value="保存">
                                    <input type="reset" name="button2" class="btn btn82 btn_res" value="重置"></td>
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
