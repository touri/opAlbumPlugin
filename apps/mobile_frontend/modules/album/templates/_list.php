<div style="padding-bottom: 4px; margin-bottom: 4px; border-bottom: 1px solid #b3ceef;">
<center><?php op_include_pager_total($pager); ?></center>
</div>
<?php foreach ($pager->getResults() as $album): ?>
<?php echo link_to($album->Member->name, '@member_profile?id='.$album->Member->id) ?>
<span style="padding-left: 1px">
<?php echo $album->body; ?>
</span>
<div style="padding: 4px 0pt;">
<div><?php echo link_to(image_tag_sf_image($album->getCoverImage(), array('width' => '80', 'size' => '120x120')), 'album_show', $album) ?></div>
<?php echo link_to($album->title, 'album_show', $album) ?>
</div>
<small style="color: rgb(85, 85, 85);"><?php echo op_format_activity_time(strtotime($album->getCreatedAt())) ?></small>
<hr color="#b3ceef">
<?php endforeach; ?>
