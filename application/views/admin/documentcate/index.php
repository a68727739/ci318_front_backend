<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<?php $this->load->view(MODULE . '/common/head')?>
</head>

<body>
<div class="container">
    <div id="here_location">当前位置：内容管理<span>&gt;</span>内容分类</div>
    <div id="table">
        <div class="box span10 oh">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="list_table">
                <tr>
                    <th>ID</th>
                    <th>分类名称</th>
                    <th>级别</th>
                    <th>排序</th>
                    <th>操作</th>
                </tr>
				<?php if(!empty($lists)):
					foreach($lists as $v): 
					?>
				<tr class="tr">
                    <td><?php echo $v['id']?></td>
                    <td><?php echo str_repeat('&nbsp;',($v['level']-1)*4),$v['name']?></td>
                    <td><?php echo str_repeat('&nbsp;',($v['level']-1)*4),$v['level']?>級</td>
					<td><?php echo $v['sort']?></td>
                    <td><a href="<?php echo site_url(MODULE.'/'.C.'/edit/'.$v['id'])?>">编辑</a> | <a onclick="return confirm('确定删除？')" href="<?php echo site_url(MODULE.'/'.C.'/del/'.$v['id'])?>">删除</a></td>
                </tr>
				<?php 
					endforeach;
					endif;
				?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
