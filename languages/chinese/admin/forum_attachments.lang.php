<?php
/**
 * MyBB 1.8 Chinese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

// 标签页
$l['attachments'] = "附件";
$l['stats'] = "统计";
$l['find_attachments'] = "查找附件";
$l['find_attachments_desc'] = "使用附件搜索系统，您可以搜索用户附加到论坛的具体文件。从下方输入一些搜索条件开始。所有字段均为可选，只有包含值的字段才会被纳入搜索条件.";
$l['find_orphans'] = "查找孤立附件";
$l['find_orphans_desc'] = "孤立附件是指由于某些原因在数据库或文件系统中丢失的附件。此工具将帮助您定位并删除它们.";
$l['attachment_stats'] = "附件统计";
$l['attachment_stats_desc'] = "下方是您论坛当前附件的总体统计信息.";

// 错误信息
$l['error_nothing_selected'] = "请选择一个或多个要删除的附件.";
$l['error_no_attachments'] = "您的论坛目前还没有任何附件。一旦有附件被发布，您就可以访问此部分.";
$l['error_not_all_removed'] = "仅部分孤立附件被成功删除，其他附件无法从上传目录中移除.";
$l['error_count'] = '无法移除 {1} 个附件.';
$l['error_invalid_username'] = "您输入的用户名无效.";
$l['error_invalid_forums'] = "您选择的一个或多个版块无效.";
$l['error_no_results'] = "未找到符合指定搜索条件的附件.";
$l['error_not_found'] = "上传目录中找不到该附件文件.";
$l['error_not_attached'] = "附件已上传超过24小时，但未附加到任何帖子.";
$l['error_does_not_exist'] = "此附件的主题或帖子已不存在.";

// 成功信息
$l['success_deleted'] = "所选附件已成功删除.";
$l['success_orphan_deleted'] = "所选孤立附件已成功删除.";
$l['success_count'] = '{1} 个附件已成功移除.';
$l['success_no_orphans'] = "您的论坛当前没有孤立附件.";

// 确认提示
$l['confirm_delete'] = "您确定要删除所选附件吗?";

// == 页面
// = 统计
$l['general_stats'] = "常规统计";
$l['stats_attachment_stats'] = "附件 - 附件统计";
$l['num_uploaded'] = "<strong>已上传附件数量</strong>";
$l['space_used'] = "<strong>附件占用空间</strong>";
$l['bandwidth_used'] = "<strong>估计带宽使用量</strong>";
$l['average_size'] = "<strong>平均附件大小</strong>";
$l['size'] = "大小";
$l['posted_by'] = "发布者";
$l['thread'] = "主题";
$l['downloads'] = "下载次数";
$l['date_uploaded'] = "上传日期";
$l['popular_attachments'] = "最受欢迎的前5个附件";
$l['largest_attachments'] = "最大的前5个附件";
$l['users_diskspace'] = "占用磁盘空间最多的前5个用户";
$l['username'] = "用户名";
$l['total_size'] = "总大小";

// = 孤立附件
$l['orphan_results'] = "孤立附件搜索 - 结果";
$l['orphan_attachments_search'] = "孤立附件搜索";
$l['reason_orphaned'] = "孤立原因";
$l['reason_not_in_table'] = "不在附件表中";
$l['reason_file_missing'] = "附件文件缺失";
$l['reason_thread_deleted'] = "主题已被删除";
$l['reason_post_never_made'] = "帖子从未发布";
$l['unknown'] = "未知";
$l['results'] = "结果";
$l['step1'] = "步骤 1";
$l['step2'] = "步骤 2";
$l['step1of2'] = "步骤 1/2 - 文件系统扫描";
$l['step2of2'] = "步骤 2/2 - 数据库扫描";
$l['step1of2_line1'] = "请稍候，正在扫描文件系统以查找孤立附件.";
$l['step2of2_line1'] = "请稍候，正在扫描数据库以查找孤立附件.";
$l['step_line2'] = "此过程完成后将自动跳转到下一步.";
$l['scanning'] = '扫描中&hellip;';

// = 附件 / 首页
$l['index_find_attachments'] = "附件 - 查找附件";
$l['find_where'] = "查找满足以下条件的附件&hellip;";
$l['name_contains'] = "文件名包含";
$l['name_contains_desc'] = "搜索文件名中包含指定内容的附件。例如，输入 .zip 可查找使用 .zip 扩展名的附件.";
$l['type_contains'] = "文件类型包含";
$l['forum_is'] = "版块为";
$l['username_is'] = "发布者用户名为";
$l['poster_is'] = "发布者为";
$l['poster_is_either'] = "用户或游客";
$l['poster_is_user'] = "仅用户";
$l['poster_is_guest'] = "仅游客";
$l['more_than'] = "大于";
$l['greater_than'] = "大于";
$l['is_exactly'] = "精确等于";
$l['less_than'] = "小于";
$l['date_posted_is'] = "发布时间为";
$l['days_ago'] = "天前";
$l['file_size_is'] = "文件大小为";
$l['kb'] = "KB";
$l['download_count_is'] = "下载次数为";
$l['display_options'] = "显示选项";
$l['filename'] = "文件名";
$l['filesize'] = "文件大小";
$l['download_count'] = "下载次数";
$l['post_username'] = "发布用户名";
$l['asc'] = "升序";
$l['desc'] = "降序";
$l['sort_results_by'] = "结果排序方式";
$l['results_per_page'] = "每页结果数";
$l['in'] = "在";

// 按钮
$l['button_delete_orphans'] = "删除选中的孤立附件";
$l['button_delete_attachments'] = "删除选中的附件";
$l['button_find_attachments'] = "查找附件";
