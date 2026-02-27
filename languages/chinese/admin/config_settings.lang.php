<?php
/**
 * MyBB 1.8 Chinese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['board_settings'] = "论坛设置";
$l['change_settings'] = "修改设置";
$l['change_settings_desc'] = "本节允许您管理论坛的所有各类设置。要开始，请在下方选择一个设置组来管理相关设置.";
$l['add_new_setting'] = "添加新设置";
$l['add_new_setting_desc'] = "本节允许您为论坛添加一个新的设置项.";
$l['modify_existing_settings'] = "修改现有设置";
$l['modify_existing_settings_desc'] = "本节允许您修改论坛中已存在的设置项.";
$l['add_new_setting_group'] = "添加新设置组";
$l['add_new_setting_group_desc'] = "本节允许您创建设置组，用于对单个设置项进行分类.";
$l['edit_setting_group'] = "编辑设置组";
$l['edit_setting_group_desc'] = "本节允许您编辑已存在的设置组.";

$l['title'] = "标题";
$l['description'] = "描述";
$l['group'] = "组";
$l['display_order'] = "显示顺序";
$l['name'] = "标识符";
$l['name_desc'] = "此唯一标识符用于在设置数组中引用此设置项（在脚本、翻译和模板中使用）.";
$l['group_name_desc'] = "此唯一标识符用于翻译系统.";
$l['text'] = "文本框";
$l['numeric_text'] = "数字文本框";
$l['textarea'] = "多行文本区域";
$l['yesno'] = "是 / 否 选择";
$l['onoff'] = "开 / 关 选择";
$l['select'] = "下拉选择框";
$l['radio'] = "单选按钮";
$l['checkbox'] = "复选框";
$l['language_selection_box'] = "语言选择框";
$l['forum_selection_box'] = "版块选择框";
$l['forum_selection_single'] = "单版块选择框";
$l['group_selection_box'] = "用户组选择框";
$l['group_selection_single'] = "单用户组选择框";
$l['adminlanguage'] = "管理面板语言选择框";
$l['cpstyle'] = "控制面板风格选择框";
$l['prefix_selection_box'] = "前缀选择框";
$l['php'] = "PHP代码求值";
$l['type'] = "类型";
$l['extra'] = "额外内容";
$l['extra_desc'] = "如果此设置为下拉框、单选或复选框，请输入键值对列表（键=项目），每项占一行。如果为PHP类型，请输入需要求值的PHP代码.";
$l['value'] = "值";
$l['insert_new_setting'] = "插入新设置";
$l['edit_setting'] = "编辑设置";
$l['delete_setting'] = "删除设置";
$l['setting_configuration'] = "设置配置";
$l['update_setting'] = "更新设置";
$l['save_settings'] = "保存设置";
$l['setting_groups'] = "设置组";
$l['bbsettings'] = "设置";
$l['insert_new_setting_group'] = "插入新设置组";
$l['setting_group_setting'] = "设置组 / 设置项";
$l['order'] = "顺序";
$l['delete_setting_group'] = "删除设置组";
$l['save_display_orders'] = "保存显示顺序";
$l['update_setting_group'] = "更新设置组";
$l['modify_setting'] = "修改设置";
$l['search'] = "搜索";
$l['plugin_settings'] = "插件设置";

$l['show_all_settings'] = "显示所有设置";
$l['settings_search'] = "搜索设置项";

$l['confirm_setting_group_deletion'] = "您确定要删除此设置组吗?";
$l['confirm_setting_deletion'] = "您确定要删除此设置项吗?";

$l['error_format_dimension'] = "定义的 {1} 格式无效.";
$l['error_field_minnamelength'] = "最小用户名长度不能大于最大用户名长度";
$l['error_field_minpasswordlength'] = "最小密码长度不能大于最大密码长度";
$l['error_field_minpasswordlength_complex'] = "使用复杂密码时最小密码长度不能小于3";
$l['error_field_postmaxavatarsize'] = "最大头像尺寸";
$l['error_field_useravatardims'] = "默认头像尺寸";
$l['error_field_maxavatardims'] = "最大头像尺寸";
$l['error_field_memberlistmaxavatarsize'] = "成员列表最大头像显示尺寸";
$l['error_missing_title'] = "您没有为此设置项输入标题";
$l['error_missing_group_title'] = "您没有为此设置组输入标题";
$l['error_invalid_gid'] = "您没有选择一个有效的设置组来放置此设置项";
$l['error_invalid_gid2'] = "您访问的链接指向一个无效的设置组。请确认其存在.";
$l['error_missing_name'] = "您没有为此设置项输入标识符";
$l['error_missing_group_name'] = "您没有为此设置组输入标识符";
$l['error_invalid_type'] = "您没有为此设置项选择有效的类型";
$l['error_invalid_sid'] = "指定的设置项不存在";
$l['error_duplicate_name'] = "指定的标识符已被 \"{1}\" 设置项使用 — 标识符必须唯一";
$l['error_duplicate_group_name'] = "指定的标识符已被 \"{1}\" 设置组使用 — 标识符必须唯一";
$l['error_no_settings_found'] = "未找到符合指定搜索词的任何设置项.";
$l['error_cannot_edit_default'] = "默认设置和设置组不可编辑或删除.";
$l['error_cannot_edit_php'] = "此为特殊类型的设置，无法编辑.";
$l['error_ajax_search'] = "搜索设置项时发生问题:";
$l['error_ajax_unknown'] = "搜索设置项时发生未知错误.";
$l['error_chmod_settings_file'] = "设置文件 \"./inc/settings.php\" 不可写。请将其权限设置为 666.<br />有关CHMOD的更多信息，请参阅 <a href=\"https://docs.mybb.com/1.8/administration/security/file-permissions\" target=\"_blank\" rel=\"noopener\">MyBB文档</a>.";
$l['error_admin_email_settings_empty'] = '<div class="smalltext" style="font-weight: normal;">请注意，<strong>管理员邮箱</strong> 未被保存，因为该设置不能为空，且必须是一个有效的邮箱地址。</div>';

$l['success_setting_added'] = "设置项已成功创建.";
$l['success_setting_updated'] = "设置项已成功更新.";
$l['success_setting_deleted'] = "所选设置项已成功删除.";
$l['success_settings_updated'] = "设置已成功更新.";
$l['success_settings_updated_hiddencaptchaimage'] = '<div class="smalltext" style="font-weight: normal;">请注意，由于与注册表单中的 <strong>{2}</strong> 字段冲突，<strong>隐藏CAPTCHA字段</strong> 设置已被还原为 <strong>{1}</strong>。</div>';
$l['success_settings_updated_username_method_conflict'] = '<div class="smalltext" style="font-weight: normal;">请注意，由于当前允许同一邮箱多次注册，<b>允许的登录方式</b> 设置未被更新。</div>';
$l['success_settings_updated_username_method'] = '<div class="smalltext" style="font-weight: normal;">请注意，由于当前已有多个用户使用相同邮箱地址，<b>允许的登录方式</b> 设置未被更新。</div>';
$l['success_settings_updated_allowmultipleemails'] = '<div class="smalltext" style="font-weight: normal;">请注意，由于 <b>允许的登录方式</b> 设置允许用户通过邮箱登录，<b>允许同一邮箱多次注册?</b> 设置无法启用。</div>';
$l['success_settings_updated_captchaimage'] = '<div class="smalltext" style="font-weight: normal;">请注意，由于缺少公钥/私钥，<strong>注册与发帖CAPTCHA图片</strong> 设置已被还原为 <strong>MyBB默认验证码</strong>。</div>';
$l['success_settings_updated_minsearchword'] = '<div class="smalltext" style="font-weight: normal;">请注意，<strong>最小搜索词长度</strong> 设置已调整为与数据库系统配置相匹配。</div>';
$l['success_display_orders_updated'] = "设置项显示顺序已成功更新.";
$l['success_setting_group_added'] = "设置组已成功创建.";
$l['success_setting_group_updated'] = "设置组已成功更新.";
$l['success_setting_group_deleted'] = "所选设置组已成功删除.";
$l['success_duplicate_settings_deleted'] = "所有重复的设置组已成功删除.";

$l['searching'] = '搜索中&hellip;';
$l['search_error'] = '获取搜索结果时发生错误:';
$l['search_done'] = '完成!';

