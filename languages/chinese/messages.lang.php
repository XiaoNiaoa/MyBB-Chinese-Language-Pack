<?php
/**
 * MyBB 1.8 Chinese Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
 */

$l['click_no_wait'] = "如果您不想再等待,请点击此处. ";
$l['redirect_return_forum'] = "<br /><br />或者,<a href=\"{1}\">返回论坛</a>. ";
$l['redirect_emailsent'] = "您的电子邮件消息已成功发送. ";
$l['redirect_loggedin'] = "您已成功登录. <br />现在将返回到您之前所在的页面. ";
$l['update_confirm'] = "以下文件已附加，并将使用新选择的文件进行更新/替换.  {1} 您确定吗？";
$l['error_invalidpworusername'] = "您输入了无效的用户名/密码组合.  <br /><br />如果您忘记了密码，请<a href=\"member.php?action=lostpw\">获取一个新密码</a>. ";
$l['error_invalidpworusername1'] = "您输入了无效的电子邮件/密码组合.  <br /><br />如果您忘记了密码，请<a href=\"member.php?action=lostpw\">获取一个新密码</a>. ";
$l['error_invalidpworusername2'] = "您输入了无效的用户名/密码或电子邮件/密码组合.  <br /><br />如果您忘记了密码，请<a href=\"member.php?action=lostpw\">获取一个新密码</a>. ";
$l['error_incompletefields'] = "您似乎留下了一个或多个必填字段为空. 请返回并填写必填字段. ";
$l['error_alreadyuploaded'] = "此帖子已包含名为\"{1}\"的附件. 请重命名文件并重新上传. 或者，您可以点击\"更新附件\". ";
$l['error_alreadyuploaded_perm'] = "此帖子已包含同名的附件. 请移除现有文件或重命名文件并重新上传. ";
$l['error_updatefailed'] = "文件\"{1}\"尚未附加，无法更新. ";
$l['error_nomessage'] = "抱歉，我们无法继续，因为您没有输入有效的消息. 请返回并输入. ";
$l['error_invalidemail'] = "您没有输入有效的电子邮件地址. ";
$l['error_nomember'] = "您指定的会员无效或不存在. ";
$l['error_maxposts'] = "抱歉，您的每日发帖限制已超过. 请等到明天再发帖，或联系您的管理员. <br /><br />您一天最多可以发 {1} 篇帖子. ";
$l['error_nohostname'] = "未能找到您输入的 IP 对应的主机名. ";
$l['error_invalidthread'] = "指定的主题不存在. ";
$l['error_invalidpost'] = "指定的帖子不存在. ";
$l['error_invalidannouncement'] = "指定的公告不存在. ";
$l['error_invalidattachment'] = "指定的附件不存在. ";
$l['error_invalidforum'] = "无效的论坛";
$l['error_closedinvalidforum'] = "您不能在此论坛发帖，因为该论坛已关闭、是指向另一个网页的重定向，或者是一个分类. ";
$l['error_attachtype'] = "您附加的文件类型不允许. 请移除附件或选择其他类型. ";
$l['error_attachsize'] = "文件\"{1}\"太大. 该类型文件的最大大小为 {2} KB. ";
$l['error_uploadempty'] = "\"{1}\" 文件为空. ";
$l['error_uploadsize'] = "上传的文件太大. ";
$l['error_uploadfailed'] = "文件上传失败. 请选择一个有效的文件并重试. ";
$l['error_uploadfailed_detail'] = "错误详情: ";
$l['error_uploadfailed_php1'] = "PHP 返回：上传的文件超过了 php.ini 中的 upload_max_filesize 指令. 请将此错误告知您的论坛管理员. ";
$l['error_uploadfailed_php2'] = "上传的文件超过了指定的最大文件大小. ";
$l['error_uploadfailed_php3'] = "文件只有部分被上传. ";
$l['error_uploadfailed_php4'] = "没有文件被上传. ";
$l['error_uploadfailed_php6'] = "PHP 返回：缺少临时文件夹. 请将此错误告知您的论坛管理员. ";
$l['error_uploadfailed_php7'] = "PHP 返回：无法将文件写入磁盘. 请将此错误告知您的论坛管理员. ";
$l['error_uploadfailed_phpx'] = "PHP 返回错误代码：{1}. 请将此错误告知您的论坛管理员. ";
$l['error_uploadfailed_nothingtomove'] = "指定了无效文件，因此无法将上传的文件移动到其目标位置. ";
$l['error_uploadfailed_movefailed'] = "将上传的文件移动到其目标位置时出现问题. ";
$l['error_uploadfailed_lost'] = "在服务器上找不到该附件. ";
$l['error_emailmismatch'] = "您输入的电子邮件地址不匹配. 请返回重试. ";
$l['error_nopassword'] = "您没有输入有效的密码. ";
$l['error_usernametaken'] = "您选择的用户名已被注册. 如果您之前在这些论坛注册过，请<a href=\"member.php?action=login\">登录</a>. ";
$l['error_nousername'] = "您没有输入用户名. ";
$l['error_invalidusername'] = "您输入的用户名似乎无效. ";
$l['error_invalidpassword'] = "您输入的密码不正确. 如果您忘记了密码，请点击<a href=\"member.php?action=lostpw\">此处</a>. 否则，请返回重试. ";
$l['error_postflooding'] = "抱歉，我们无法处理您的帖子. 管理员规定您每 {1} 秒只能发帖一次. ";
$l['error_nopermission_guest_1'] = "您要么未登录，要么没有权限查看此页面. 这可能是因为以下原因之一：";
$l['error_nopermission_guest_2'] = "您未登录或未注册. 请登录并重试所需操作. ";
$l['error_nopermission_guest_3'] = "您没有权限访问此页面. 您是否试图访问管理页面或不应访问的资源？请查看论坛规则，确认您是否允许执行此操作. ";
$l['error_nopermission_guest_4'] = "您的账户可能已被管理员禁用，或者正在等待账户激活. ";
$l['error_nopermission_guest_5'] = "您直接访问了此页面，而不是使用适当的表单或链接. ";
$l['login'] = "登录";
$l['need_reg'] = "需要注册？";
$l['forgot_password'] = "忘记密码？";
$l['error_nopermission_user_1'] = "您没有权限访问此页面. 这可能是因为以下原因之一：";
$l['error_nopermission_user_ajax'] = "您没有权限访问此页面. ";
$l['error_nopermission_user_2'] = "您的账户已被暂停，或者您已被禁止访问此资源. ";
$l['error_nopermission_user_3'] = "您没有权限访问此页面. 您是否试图访问管理页面或不应访问的资源？请查看论坛规则，确认您是否允许执行此操作. ";
$l['error_nopermission_user_4'] = "您的账户可能仍在等待激活或审核. ";
$l['error_nopermission_user_5'] = "您直接访问了此页面，而不是使用适当的表单或链接. ";
$l['error_nopermission_user_resendactivation'] = "重新发送激活码";
$l['error_nopermission_user_username'] = "您当前以用户名 '{1}' 登录";
$l['logged_in_user'] = "已登录用户";
$l['error_too_many_images'] = "图片太多. ";
$l['error_too_many_images2'] = "抱歉，我们无法处理您的帖子，因为它包含太多图片. 请从您的帖子中移除一些图片以继续. ";
$l['error_too_many_images3'] = "<b>注意：</b>每篇帖子的最大图片数量为";
$l['error_attach_file'] = "附加文件时出错";
$l['please_correct_errors'] = "请在继续之前更正以下错误：";
$l['error_reachedattachquota'] = "抱歉，您无法附加此文件，因为您已达到附件配额 {1}";
$l['error_maxattachpost'] = "抱歉，您无法附加此文件，因为您已达到每篇帖子允许的最大附件数量 {1}";
$l['error_invaliduser'] = "指定的用户无效或不存在. ";
$l['error_invalidaction'] = "无效操作";
$l['error_messagelength'] = "抱歉，您的消息太长，无法发布. 请尝试缩短消息后重试. ";
$l['error_message_too_short'] = "抱歉，您的消息太短，无法发布. ";
$l['failed_login_wait'] = "您在允许的尝试次数内未能成功登录. 您现在必须等待 {1} 小时 {2} 分钟 {3} 秒才能再次尝试登录. ";
$l['failed_login_again'] = "<br />您还有 <strong>{1}</strong> 次登录尝试机会. ";
$l['error_max_emails_day'] = "您无法使用“发送主题给朋友”或“电子邮件用户”功能，因为在过去24小时内您已用完分配的发 {1} 条消息的配额. ";
$l['attachments_disabled'] = "您无法使用附件系统，因为它已被管理员禁用. ";
$l['error_attach_filename_length'] = "文件名 '{1}' 超过最大文件名长度 {2}. 请上传文件名较短的文件. ";

$l['emailsubject_lostpw'] = "{1} 的密码重置";
$l['emailsubject_passwordreset'] = "{1} 的新密码";
$l['emailsubject_subscription'] = "对 {1} 的新回复";
$l['emailsubject_randompassword'] = "您在 {1} 的密码";
$l['emailsubject_activateaccount'] = "{1} 的账户激活";
$l['emailsubject_forumsubscription'] = "{1} 中的新主题";
$l['emailsubject_reportpost'] = "在 {1} 被举报的帖子";
$l['emailsubject_reportprofile'] = "在 {1} 被举报的用户";
$l['emailsubject_reportreputation'] = "在 {1} 被举报的声望";
$l['emailsubject_reachedpmquota'] = "{1} 的私人消息配额已满";
$l['emailsubject_changeemail'] = "{1} 的电子邮件更改";
$l['emailsubject_newpm'] = "{1} 的新私人消息 - {2}";
$l['emailsubject_newjoinrequest'] = "{1} 的新加入请求";
$l['emailsubject_sendtofriend'] = "{1} 的有趣讨论";
$l['emailsubject_changepassword'] = "{1} 的密码更改";
$l['emailbit_viewthread'] = "...（访问主题阅读更多...）";

$l['email_lostpw'] = "{1},

要完成您在 {2} 重置账户密码的步骤，您需要在您的网页浏览器中访问以下 URL. 

{3}/member.php?action=resetpassword&uid={4}&code={5}

如果上述链接无法正常工作，请访问

{3}/member.php?action=resetpassword

您需要输入以下信息：
用户名: {1}
激活码: {5}

谢谢,
{2} 工作人员";

$l['email_lostpw1'] = "{1},

要完成您在 {2} 重置账户密码的步骤，您需要在您的网页浏览器中访问以下 URL. 

{3}/member.php?action=resetpassword&uid={4}&code={5}

如果上述链接无法正常工作，请访问

{3}/member.php?action=resetpassword

您需要输入以下信息：
您的电子邮件地址
激活码: {5}

谢谢,
{2} 工作人员";

$l['email_lostpw2'] = "{1},

要完成您在 {2} 重置账户密码的步骤，您需要在您的网页浏览器中访问以下 URL. 

{3}/member.php?action=resetpassword&uid={4}&code={5}

如果上述链接无法正常工作，请访问

{3}/member.php?action=resetpassword

您需要输入以下信息：
用户名: {1} (或您的电子邮件地址)
激活码: {5}

谢谢,
{2} 工作人员";

$l['email_reportpost'] = "{1} 来自 {2} 举报了以下帖子：

{3}
{4}/{5}

该用户举报此帖子的原因：
{6}

此消息已发送给此论坛的所有版主，如果没有版主，则发送给所有管理员和超级版主. 

请尽快查看此帖子. ";

$l['email_reportprofile'] = "{1} 来自 {2} 举报了以下用户：

{3}
{4}/{5}

该用户举报此用户的原因：
{6}

此消息已发送给此论坛的所有版主，如果没有版主，则发送给所有管理员和超级版主. 

请尽快查看此用户. ";

$l['email_reportreputation'] = "{1} 来自 {2} 举报了以下声望：

{3}
{4}/{5}

该用户举报此声望的原因：
{6}

此消息已发送给此论坛的所有版主，如果没有版主，则发送给所有管理员和超级版主. 

请尽快查看此声望. ";

$l['email_report_comment_extra'] = "{1}: {2}";

$l['email_passwordreset'] = "{1},

您在 {2} 的密码已被重置. 

您的新密码是: {3}

您将需要此密码登录论坛，登录后您应通过访问您的用户控制面板来更改它. 

谢谢,
{2} 工作人员";

$l['email_randompassword'] = "{1},

感谢您在 {2} 注册. 以下是您的用户名和随机生成的密码. 要登录 {2}，您需要这些信息. 

用户名: {3}
密码: {4}

建议您在登录后立即更改密码. 您可以通过进入用户 CP，然后点击左侧菜单的“更改密码”来完成此操作. 

谢谢,
{2} 工作人员";

$l['email_randompassword1'] = "{1},

感谢您在 {2} 注册. 以下是您的用户名和随机生成的密码. 要登录 {2}，您需要这些信息. 

您的电子邮件地址
密码: {4}

建议您在登录后立即更改密码. 您可以通过进入用户 CP，然后点击左侧菜单的“更改密码”来完成此操作. 

谢谢,
{2} 工作人员";

$l['email_randompassword2'] = "{1},

感谢您在 {2} 注册. 以下是您的用户名和随机生成的密码. 要登录 {2}，您需要这些信息. 

用户名: {3} (或您的电子邮件地址)
密码: {4}

建议您在登录后立即更改密码. 您可以通过进入用户 CP，然后点击左侧菜单的“更改密码”来完成此操作. 

谢谢,
{2} 工作人员";

$l['email_sendtofriend'] = "您好，

来自 {2} 的 {1} 认为您可能有兴趣阅读以下网页：

{3}

{1} 附带了以下消息：
------------------------------------------
{4}
------------------------------------------

谢谢,
{2} 工作人员
";

$l['email_forumsubscription'] = "{1},

{2} 刚刚在 {3} 开始了一个新主题. 这是您在 {4} 订阅的论坛. 

该主题标题为 {5}

以下是消息摘录：
--
{6}
--

要查看该主题，您可以访问以下 URL：
{7}/{8}

可能还有其他新主题和回复，但在您再次访问论坛之前，您不会再收到任何通知. 

谢谢,
{4} 工作人员

------------------------------------------
取消订阅信息：

如果您不想再收到此论坛新主题的通知，请在浏览器中访问以下 URL：
{7}/usercp.php?action=removesubscription&type=forum&fid={9}

------------------------------------------";

$l['email_activateaccount'] = "{1},

要完成在 {2} 的注册过程，您需要在您的网页浏览器中访问以下 URL. 

{3}/member.php?action=activate&uid={4}&code={5}

如果上述链接无法正常工作，请访问

{3}/member.php?action=activate

您需要输入以下信息：
用户名: {1}
激活码: {5}

谢谢,
{2} 工作人员";

$l['email_activateaccount1'] = "{1},

要完成在 {2} 的注册过程，您需要在您的网页浏览器中访问以下 URL. 

{3}/member.php?action=activate&uid={4}&code={5}

如果上述链接无法正常工作，请访问

{3}/member.php?action=activate

您需要输入以下信息：
您的电子邮件地址
激活码: {5}

谢谢,
{2} 工作人员";

$l['email_activateaccount2'] = "{1},

要完成在 {2} 的注册过程，您需要在您的网页浏览器中访问以下 URL. 

{3}/member.php?action=activate&uid={4}&code={5}

如果上述链接无法正常工作，请访问

{3}/member.php?action=activate

您需要输入以下信息：
用户名: {1} (或您的电子邮件地址)
激活码: {5}

谢谢,
{2} 工作人员";

$l['email_subscription'] = "{1},

{2} 刚刚回复了您在 {3} 订阅的主题. 该主题标题为 {4}. 

以下是消息摘录：
------------------------------------------
{5}
------------------------------------------

要查看该主题，您可以访问以下 URL：
{6}/{7}

可能还有其他对此主题的回复，但在您再次访问论坛之前，您不会再收到任何通知. 

谢谢,
{3} 工作人员

------------------------------------------
取消订阅信息：

如果您不想再收到此主题回复的通知，请在浏览器中访问以下 URL：
{6}/usercp.php?action=removesubscription&tid={8}

------------------------------------------";

$l['email_reachedpmquota'] = "{1},

这是来自 {2} 的自动电子邮件，通知您您的私人消息收件箱已满. 

可能有一个或多个用户试图向您发送私人消息，但因容量已满而未能成功. 

请删除您当前存储的一些私人消息，记得也要从“垃圾箱”中删除它们. 

谢谢,
{2} 工作人员
{3}";

$l['email_changeemail'] = "{1},

我们在 {2} 收到更改您电子邮件地址的请求（详情见下）. 

旧电子邮件地址: {3}
新电子邮件地址: {4}

如果这些更改正确，请通过访问您网页浏览器中的以下 URL 来完成在 {2} 的验证过程. 

{5}/member.php?action=activate&uid={8}&code={6}

如果上述链接无法正常工作，请访问

{5}/member.php?action=activate

您需要输入以下信息：
用户名: {7}
激活码: {6}

如果您选择不验证您的新电子邮件地址，您的个人资料将不会更新，并且仍将包含您现有的电子邮件地址. 

谢谢,
{2} 工作人员
{5}";

$l['email_changeemail_noactivation'] = "{1},

我们在 {2} 收到更改您电子邮件地址的请求（详情见下）. 

旧电子邮件地址: {3}
新电子邮件地址: {4}

此更改已自动处理. 如果您未请求此更改，请联系管理员. 

谢谢,
{2} 工作人员
{5}";

$l['email_changepassword'] = "{1},

您收到此电子邮件是因为您或有权访问您密码的某人最近更改了您的账户密码. 

用户名: {1}
电子邮件地址: {2}

如果您未请求此更改，请联系管理员. 

谢谢,
{3} 工作人员
{4}";

$l['email_newpm'] = "{1},

您在 {3} 收到来自 {2} 的新私人消息：

------------------------------------------
{5}
------------------------------------------

要查看、回复或转发此消息，您可以点击此链接：

{4}/private.php

请注意，在您访问 {3} 之前，您不会再收到任何新消息通知. 

您可以在您的账户选项页面禁用新消息通知：

{4}/usercp.php?action=options

谢谢,
{3} 工作人员
{4}";

$l['email_emailuser'] = "{1},

来自 {3} 的 {2} 向您发送了以下消息：
------------------------------------------
{5}
------------------------------------------

谢谢,
{3} 工作人员
{4}

------------------------------------------
不想接收其他会员的电子邮件？

如果您不希望其他会员能够向您发送电子邮件，请访问您的用户控制面板并启用“向其他会员隐藏您的电子邮件”选项：
{4}/usercp.php?action=options

------------------------------------------";

$l['email_groupleader_joinrequest'] = "{1},

{2} 请求在 {4} 加入 {3}（见下文）. 

原因: {5}

要接受或拒绝此请求，请访问

{6}/managegroup.php?gid={7}

谢谢,
{4} 工作人员";

$l['email_contact_subject'] = "联系: {1}";
$l['email_contact'] = "电子邮件: {1}
论坛资料: {2}
IP 地址: {3}
消息:
{4}";

$l['pmsubject_subscription'] = "对 {1} 的新回复";
$l['pm_subscription'] = "{1},

{2} 刚刚回复了您订阅的主题. 该主题标题为 {3}. 

以下是消息摘录：
------------------------------------------
{4}
------------------------------------------

要查看该主题，您可以访问以下 URL：
[url]{5}/{6}[/url]

可能还有其他对此主题的回复，但在您再次访问该主题之前，您不会再收到任何通知. 

------------------------------------------
取消订阅信息：

如果您不想再收到此主题回复的通知，请在浏览器中访问以下 URL：
[url]{5}/usercp.php?action=removesubscription&tid={7}[/url]

------------------------------------------";

$l['email_broken_task_subject'] = "MyBB 任务错误于 {1}";
$l['email_broken_task'] = "您在 {1} ({2}) 上运行的 MyBB 副本在任务系统上遇到错误. 

{3} 的任务文件丢失. 

此任务已禁用，直到问题解决为止. ";
