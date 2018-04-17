<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE.'/common/head');?>
</head>

<body>
<div class="container">
    <div id="here_location"><form action="admin/document/index" method="get">内容分类：<select class="select" name="documentcate_id"><option value="0">-所有分类-</option></select>关键词：<input name="name" type="text" class="input-text lh25" value="" /><input class="btn btn82 btn_search" type="submit" value="搜索" /></form>当前位置：内容管理<span>&gt;</span>内容列表</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th width="90">&nbsp;</th>
                    <th>标题</th>
                   
                    <th width="140">所属分类</th>
                    <th width="50">排序</th>
                   
                    <th width="140">添加时间</th>
                    <th width="80">操作</th>
                </tr>
                                <form id="document_form" action="admin/document/del" method="post">
								<?php 
									if(!empty($lists)):
										foreach($lists as $v):
									?>
                                <tr class="tr">
                    <td class="td_center"><input type="checkbox" name="id[<?php echo $v['id']?>]" value="1" /></td>
                    <td><?php echo $v['name']?></td>
                   
                    <td>&nbsp;</td>
                    <td><?php echo $v['sort']?></td>
                    
                    <td><?php echo date('Y-m-d H:i:s',$v['addtime'])?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$v['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$v['id'])?>">删除</a></td>
				</tr>
				<?php 
						endforeach;
					endif;
					?> 
                                <tr class="tr">
                	<td class="td_center"><input type="button" name="select_all" class="btn btn82 btn_checked" value="全选" /></td>
                    <td colspan="9"><input type="submit" name="delete_all" class="btn btn82 btn_del" value="删除" onclick="return confirm('确定删除?');" /></td>
                </tr>
                </form>
                            </table>
            <div class="pagination"></div>
        </div>
    </div>
</div>
</body>
</html>
