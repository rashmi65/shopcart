create ckeditor.php

<link rel="stylesheet" href="<?php echo base_url(); ?>ckeditor/samples/sample.css">
<form id="news" name="news" method="post" role="form" >  
<?php echo form_open_multipart('dashboard/insert_slider');?>
<table width="958">
<tr>
<td width="250">Caption</td>
<td width="228"><input type="text" name="slider_caption" class="form-control uniform-input text hover" value="<?php echo set_value('slider_caption');?>"/></td>
<span style="color:#FF0000"><?php echo form_error('slider_caption');?></span>
</tr>
<tr>
<td>Description</td>
<td><textarea id="editor1" name="description" class="ckeditor" ></textarea></td>
<span style="color:#FF0000"><?php echo form_error('description');?></span>
</tr>
<tr>
<td>
<td><input type="submit" value="Submit" class="btn btn-info btn-sm"/></td>
<td><input type="reset" value="Reset" class="btn btn-info btn-sm"/></td>
</tr>
</table>
<?php echo form_close();?>
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js">  </script>
<script type="text/javascript">
CKEDITOR.replace( 'editor1', {
fullPage: true,
allowedContent: true,
extraPlugins: 'wysiwygarea'
});
</script>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
<link rel="stylesheet" href="<?php echo base_url(); ?>ckeditor/samples/sample.css">
<form id="news" name="news" method="post" role="form" >  
<?php echo form_open_multipart('dashboard/insert_slider');?>
<table width="958">
<tr>
<td width="250">Caption</td>
<td width="228"><input type="text" name="slider_caption" class="form-control uniform-input text hover" value="<?php echo set_value('slider_caption');?>"/></td>
<span style="color:#FF0000"><?php echo form_error('slider_caption');?></span>
</tr>
<tr>
<td>Description</td>
<td><textarea id="editor1" name="description" class="ckeditor" ><?php echo set_value('description');?></textarea></td>
<span style="color:#FF0000"><?php echo form_error('description');?></span>
</tr>
<tr>
<td>
<td><input type="submit" value="Submit" class="btn btn-info btn-sm"/></td>
<td><input type="reset" value="Reset" class="btn btn-info btn-sm"/></td>
</tr>
</table>
<?php echo form_close();?>
<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js">  </script>
<script type="text/javascript">
 
CKEDITOR.replace( 'editor1', {
fullPage: true,
allowedContent: true,
extraPlugins: 'wysiwygarea'
 
});
</script>