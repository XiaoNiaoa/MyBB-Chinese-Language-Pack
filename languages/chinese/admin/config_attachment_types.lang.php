<?php
/**
 * MyBB 1.8 Chinese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['attachment_types'] = "附件类型";
$l['attachment_types_desc'] = "您可以在此创建和管理附件类型，这些类型定义了用户可以附加到帖子中的文件类型。注意：禁用某附件类型将使该类型的现有附件无法访问。";
$l['add_new_attachment_type'] = "添加新附件类型";
$l['add_attachment_type'] = "添加附件类型";
$l['add_attachment_type_desc'] = "添加新的附件类型将允许会员将此类文件附加到他们的帖子中。您可以控制扩展名、MIME类型、最大大小并为每种附件类型显示一个小图标。";
$l['edit_attachment_type'] = "编辑附件类型";
$l['edit_attachment_type_desc'] = "您可以控制此附件类型的扩展名、MIME类型、最大大小以及显示一个小的MIME类型图标。";

$l['extension'] = "扩展名";
$l['maximum_size'] = "最大大小";
$l['no_attachment_types'] = "目前您的论坛中没有附件类型。";

$l['name'] = "名称";
$l['name_desc'] = "输入附件类型的名称。";
$l['file_extension'] = "文件扩展名";
$l['file_extension_desc'] = "在此输入您希望允许上传的文件扩展名（不要在扩展名前加句点）（例如：txt）";
$l['mime_type'] = "MIME类型";
$l['mime_type_desc'] = "输入服务器在下载此类文件时发送的MIME类型（<a href=\"http://www.freeformatter.com/mime-types-list.html\">在此查看列表</a>）";
$l['maximum_file_size'] = "最大文件大小（千字节）";
$l['maximum_file_size_desc'] = "此附件类型上传的最大文件大小，以千字节为单位（1 MB = 1024 KB）";
$l['limit_intro'] = "请确保最大文件大小低于以下PHP限制中最小的一个：";
$l['limit_post_max_size'] = "最大帖子大小：{1}";
$l['limit_upload_max_filesize'] = "上传最大文件大小：{1}";
$l['attachment_icon'] = "附件图标";
$l['attachment_icon_desc'] = "如果您希望为此类型的附件显示一个小图标，请在此输入其路径。{theme} 将被查看者主题的图像目录替换，允许您指定每个主题的附件图标。";
$l['save_attachment_type'] = "保存附件类型";

$l['error_invalid_attachment_type'] = "您选择了无效的附件类型。";
$l['error_missing_mime_type'] = "您没有为此附件类型输入MIME类型";
$l['error_missing_extension'] = "您没有为此附件类型输入文件扩展名";

$l['success_attachment_type_created'] = "附件类型已成功创建。";
$l['success_attachment_type_updated'] = "附件类型已成功更新。";
$l['success_attachment_type_deleted'] = "附件类型已成功删除。";

$l['confirm_attachment_type_deletion'] = "您确定要删除此附件类型吗？";

$l['success_activated_attachment_type'] = '选中的附件类型已成功激活。';
$l['success_deactivated_attachment_type'] = '选中的附件类型已成功禁用。';

$l['enabled'] = "启用？";
$l['forcedownload'] = "强制下载";
$l['forcedownload_desc'] = "启用此项将始终强制将附件作为文件下载。";
$l['avatar_file'] = '头像文件';
$l['avatar_file_desc'] = '您是否允许将此附件类型用于头像？';

$l['available_to_groups'] = '对用户组可用';
$l['available_in_forums'] = '在版块中可用';
