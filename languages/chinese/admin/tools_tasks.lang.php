<?php
/**
 * MyBB 1.8 Chinese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['task_manager'] = "计划任务管理";
$l['add_new_task'] = "添加新任务";
$l['add_new_task_desc'] = "在这里您可以创建新的计划任务，这些任务将在您的论坛上自动运行.";
$l['edit_task'] = "编辑任务";
$l['edit_task_desc'] = "在下方您可以编辑此计划任务的各种设置.";
$l['task_logs'] = "任务日志";
$l['view_task_logs'] = "查看任务日志";
$l['view_task_logs_desc'] = "当任务运行且启用日志记录时，任何结果或错误都会列在下方。超过30天的记录会自动删除.";
$l['scheduled_tasks'] = "计划任务";
$l['scheduled_tasks_desc'] = "在这里您可以管理在论坛上自动运行的任务。要立即运行某任务，请点击任务右侧的图标.";

$l['title'] = "标题";
$l['short_description'] = "简短描述";
$l['task_file'] = "任务文件";
$l['task_file_desc'] = "选择您希望此任务运行的文件.";
$l['time_minutes'] = "时间：分钟";
$l['time_minutes_desc'] = "输入此任务应运行的分钟数（0-59），用逗号分隔。若希望每分钟运行，请输入 '*'.";
$l['time_hours'] = "时间：小时";
$l['time_hours_desc'] = "输入此任务应运行的小时数（0-23），用逗号分隔。若希望每小时运行，请输入 '*'.";
$l['time_days_of_month'] = "时间：每月日期";
$l['time_days_of_month_desc'] = "输入此任务应运行的日期（1-31），用逗号分隔。若希望每天运行或指定星期，请输入 '*'.";
$l['every_weekday'] = "每个工作日";
$l['sunday'] = "星期日";
$l['monday'] = "星期一";
$l['tuesday'] = "星期二";
$l['wednesday'] = "星期三";
$l['thursday'] = "星期四";
$l['friday'] = "星期五";
$l['saturday'] = "星期六";
$l['time_weekdays'] = "时间：星期";
$l['time_weekdays_desc'] = "选择此任务应运行的星期. 按住CTRL可多选。若希望每个工作日运行或已在上方指定日期，请选择“每个工作日”.";
$l['every_month'] = "每个月";
$l['time_months'] = "时间：月份";
$l['time_months_desc'] = "选择此任务应运行的月份. 按住CTRL可多选。若希望每月运行，请选择“每个月”.";
$l['enabled'] = "任务已启用?";
$l['enable_logging'] = "启用日志记录?";
$l['save_task'] = "保存任务";
$l['task'] = "任务";
$l['date'] = "日期";
$l['data'] = "数据";
$l['no_task_logs'] = "当前没有任何计划任务的日志记录.";
$l['next_run'] = "下次运行";
$l['run_task_now'] = "立即运行此任务";
$l['disable_task'] = "禁用任务";
$l['run_task'] = "运行任务";
$l['enable_task'] = "启用任务";
$l['delete_task'] = "删除任务";

$l['error_invalid_task'] = "指定的任务不存在.";
$l['error_missing_title'] = "您没有为此计划任务输入标题";
$l['error_missing_description'] = "您没有为此计划任务输入描述";
$l['error_invalid_task_file'] = "您选择的任务文件不存在.";
$l['error_invalid_minute'] = "您输入的分钟数无效.";
$l['error_invalid_hour'] = "您输入的小时数无效.";
$l['error_invalid_day'] = "您输入的日期无效.";
$l['error_invalid_weekday'] = "您选择的星期无效.";
$l['error_invalid_month'] = "您选择的月份无效.";

$l['success_task_created'] = "任务已成功创建.";
$l['success_task_updated'] = "所选任务已成功更新.";
$l['success_task_deleted'] = "所选任务已成功删除.";
$l['success_task_enabled'] = "所选任务已成功启用.";
$l['success_task_disabled'] = "所选任务已成功禁用.";
$l['success_task_run'] = "所选任务已成功运行.";

$l['confirm_task_deletion'] = "您确定要删除此计划任务吗?";
$l['confirm_task_enable'] = "<strong>警告：</strong> 您即将启用一个仅应通过cron运行的任务（请参阅 <a href=\"https://docs.mybb.com/1.8/administration/task-manager\" target=\"_blank\" rel=\"noopener\">MyBB文档</a> 获取更多信息）。继续吗?";
$l['no_tasks'] = "您的论坛当前没有任何计划任务.";

