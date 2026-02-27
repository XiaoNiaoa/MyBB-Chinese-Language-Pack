<?php
/**
 * MyBB 1.8 Chinese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['system_health'] = "系统健康";
$l['system_health_desc'] = "在这里您可以查看系统的健康信息.";
$l['utf8_conversion'] = "UTF-8 转换";
$l['utf8_conversion_desc'] = "您当前正在将一个数据库表转换为UTF-8格式. 请注意，根据论坛规模和该表的大小，此过程可能需要数小时. 完成后您将被返回到UTF-8转换主页面.";
$l['utf8_conversion_desc2'] = "此工具会检查数据库表是否为UTF-8格式，并在必要时允许您进行转换.";

$l['convert_all'] = "全部转换";
$l['converting_to_utf8'] = "MyBB 正在将表 \"{1}\" 从 {2} 编码转换为UTF-8语言编码.";
$l['convert_to_utf8'] = "您即将将表 \"{1}\" 从 {2} 编码转换为UTF-8语言编码.";
$l['convert_all_to_utf'] = "您即将将所有表从 {1} 编码转换为UTF-8语言编码.";
$l['convert_all_to_utf8mb4'] = "您即将将所有表从 {1} 编码转换为4字节UTF-8 Unicode语言编码.";
$l['converting_to_utf8mb4'] = "MyBB 正在将表 \"{1}\" 从 {2} 编码转换为4字节UTF-8 Unicode语言编码.";
$l['please_wait'] = "请稍候&hellip;";
$l['converting_table'] = "正在转换表: {1}";
$l['convert_table'] = "转换表";
$l['convert_tables'] = "转换所有表";
$l['convert_database_table'] = "转换数据库表";
$l['convert_database_tables'] = "转换所有数据库表";
$l['table'] = "表";
$l['status_utf8'] = "UTF-8 状态";
$l['status_utf8mb4'] = "4字节UTF-8支持<br />(需要MySQL 5.5.3或更高版本)";
$l['not_available'] = "不可用";
$l['all_tables'] = "所有表";
$l['convert_now'] = "立即转换";
$l['totals'] = "总数";
$l['attachments'] = "附件";
$l['total_database_size'] = "数据库总大小";
$l['attachment_space_used'] = "附件占用空间";
$l['total_cache_size'] = "缓存总大小";
$l['estimated_attachment_bandwidth_usage'] = "估计附件带宽使用量";
$l['max_upload_post_size'] = "最大上传/POST大小";
$l['average_attachment_size'] = "平均附件大小";
$l['stats'] = "统计";
$l['task'] = "任务";
$l['run_time'] = "运行时间";
$l['next_3_tasks'] = "接下来3个任务";
$l['no_tasks'] = "当前没有正在运行的任务.";
$l['backup_time'] = "备份时间";
$l['no_backups'] = "当前尚未创建任何备份.";
$l['existing_db_backups'] = "现有数据库备份";
$l['writable'] = "可写";
$l['not_writable'] = "不可写";
$l['please_chmod_777'] = "请将权限设置为777.";
$l['chmod_info'] = "请将以下文件/目录的CHMOD权限设置为指定值. 有关CHMOD的更多信息，请参阅";
$l['file'] = "文件";
$l['location'] = "位置";
$l['settings_file'] = "设置文件";
$l['config_file'] = "配置文件";
$l['file_upload_dir'] = "文件上传目录";
$l['avatar_upload_dir'] = "头像上传目录";
$l['language_files'] = "语言文件";
$l['backup_dir'] = "备份目录";
$l['cache_dir'] = "缓存目录";
$l['themes_dir'] = "主题目录";
$l['chmod_files_and_dirs'] = "CHMOD 文件与目录";

$l['notice_process_long_time'] = "此过程可能需要数小时，具体取决于您的论坛规模和该表的大小. <strong>强烈建议在此之前创建数据库备份，因为此过程无法撤销.</strong>";
$l['notice_mb4_warning'] = "4字节UTF-8支持需要MySQL 5.5.3或更高版本. 在其他版本的MySQL服务器上您将无法导入数据库.";

$l['check_templates'] = "检查模板";
$l['check_templates_desc'] = "检查所有已安装模板是否存在已知安全问题.";
$l['check_templates_title'] = "检查模板安全";
$l['check_templates_info'] = "此过程将检查您的模板是否存在可能影响论坛及服务器的安全问题. 如果安装了多个主题，此过程可能需要一些时间.
<br /><br />要开始检查，请点击下方的“继续”按钮.";
$l['check_templates_info_desc'] = "以下模板匹配已知安全问题. 请仔细审查它们.";
$l['full_edit'] = "完整编辑";

$l['error_chmod'] = "所需的文件和目录中未设置正确的CHMOD权限.";
$l['error_invalid_table'] = "指定的表不存在.";
$l['error_db_encoding_not_set'] = "您的MyBB当前配置尚未启用此工具. 请参阅 <a href=\"https://docs.mybb.com/1.8/administration/utf-8-setup/\">MyBB文档</a> 获取更多设置信息.";
$l['error_not_supported'] = "您当前的数据库引擎不支持UTF-8转换工具.";
$l['error_invalid_input'] = "检查模板时出现问题. 请重试或联系MyBB官方支持.";
$l['error_master_templates_altered'] = "主模板已被修改. 请联系MyBB官方寻求如何修改这些模板的支持.";
$l['error_utf8mb4_version'] = "您的MySQL版本不支持4字节UTF-8编码.";

$l['warning_multiple_encodings'] = "建议不要在数据库中使用不同的编码，这可能会导致意外行为或MySQL错误.";
$l['warning_utf8mb4_config'] = "要获得完整的4字节UTF-8支持，您需要将 inc/config.php 中的 <i>\$config['database']['encoding'] = 'utf8';</i> 修改为 <i>\$config['database']['encoding'] = 'utf8mb4';</i>.";

$l['success_templates_checked'] = "模板检查成功 — 未发现安全问题!";
$l['success_all_tables_already_converted'] = "所有表已转换或已处于UTF-8格式.";
$l['success_table_converted'] = "所选表 \"{1}\" 已成功转换为UTF-8.";
$l['success_chmod'] = "所有所需的文件和目录均已设置正确的CHMOD权限.";
