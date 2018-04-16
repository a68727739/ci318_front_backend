<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="public/admin/css/common.css">
<link rel="stylesheet" href="public/admin/css/main.css">
<script type="text/javascript" src="public/admin/js/jquery.min.js"></script>
<script type="text/javascript" src="public/admin/js/colResizable-1.3.min.js"></script>
<script type="text/javascript" src="public/admin/js/common.js"></script>
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
                    <th>英文名称</th>
                    <th>链接路径</th>
                    <th>属性</th>
                    <th>菜单</th>
                    <th>排序</th>
                    <th>操作</th>
                </tr>
                                <tr class="tr">
                    <td>1</td>
                    <td><div style="padding-left:0em;">公司简介</div></td>
                    <td>1</td>
                    <td>gongsijianjie</td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/1">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/1">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>2</td>
                    <td><div style="padding-left:1em;">关于我们</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/2">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/2">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>3</td>
                    <td><div style="padding-left:1em;">经验理念</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/3">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/3">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>4</td>
                    <td><div style="padding-left:1em;">企业锋芒</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/4">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/4">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>5</td>
                    <td><div style="padding-left:1em;">公司文化</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/5">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/5">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>6</td>
                    <td><div style="padding-left:0em;">装修知识</div></td>
                    <td>1</td>
                    <td>zhuangxuzhishi</td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/6">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/6">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>7</td>
                    <td><div style="padding-left:1em;">设计指南</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/7">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/7">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>8</td>
                    <td><div style="padding-left:1em;">风水指南</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/8">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/8">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>9</td>
                    <td><div style="padding-left:0em;">案例展示</div></td>
                    <td>1</td>
                    <td>anlizhanshi</td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/9">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/9">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>10</td>
                    <td><div style="padding-left:1em;">家装案例</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/10">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/10">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>11</td>
                    <td><div style="padding-left:1em;">办公室案例</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/11">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/11">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>12</td>
                    <td><div style="padding-left:1em;">专卖店案例</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/12">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/12">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>13</td>
                    <td><div style="padding-left:0em;">公司服务</div></td>
                    <td>1</td>
                    <td>gongsifuwu</td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/13">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/13">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>32</td>
                    <td><div style="padding-left:1em;">服务项目</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>0</td>
                    <td><a href="admin/documentcate/edit/32">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/32">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>15</td>
                    <td><div style="padding-left:1em;">服务流程</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/15">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/15">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>16</td>
                    <td><div style="padding-left:0em;">环保保障</div></td>
                    <td>1</td>
                    <td>huanbaobaozhang</td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/16">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/16">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>17</td>
                    <td><div style="padding-left:1em;">环境质量保障</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/17">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/17">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>18</td>
                    <td><div style="padding-left:1em;">施工保障</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/18">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/18">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>19</td>
                    <td><div style="padding-left:1em;">施工标准</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/19">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/19">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>20</td>
                    <td><div style="padding-left:0em;">设计理念</div></td>
                    <td>1</td>
                    <td>shejililian</td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/20">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/20">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>21</td>
                    <td><div style="padding-left:1em;">五大风格</div></td>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/21">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/21">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>22</td>
                    <td><div style="padding-left:0em;">招贤纳士</div></td>
                    <td>1</td>
                    <td>zhaoxiannashi</td>
                    <td></td>
                    <td>列表页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/22">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/22">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>23</td>
                    <td><div style="padding-left:0em;">联系我们</div></td>
                    <td>1</td>
                    <td>lianxiwomen</td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/23">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/23">删除</a></td>
                </tr>
                                <tr class="tr">
                    <td>24</td>
                    <td><div style="padding-left:1em;">在线反馈</div></td>
                    <td>2</td>
                    <td>feedback</td>
                    <td></td>
                    <td>单页</td>
                    <td>是</td>
                    <td>1</td>
                    <td><a href="admin/documentcate/edit/24">编辑</a> | <a onclick="return confirm('确定删除？')" href="admin/documentcate/del/24">删除</a></td>
                </tr>
                            </table>
        </div>
    </div>
</div>
</body>
</html>