<?php
/***************************************************************************
 *
 *   Mods &amp; Downloads plugin (/inc/languages/english/mydownloads.php)
 *	 Author: Diogo Parrinha
 *   Copyright: © 2009-2010 Diogo Parrinha
 *   
 *   !!!!!!!!!!!TRANSLATION IS NOT READY YET!!!!!!!!!!!          95% done
 *
 *   Website: http://www.mybb-plugins.com
 *
 *   Mods &amp; Downloads adds a downloads system to MyBB.
 *
 ***************************************************************************/
 
/****************************************************************************
* You are NOT authorized to share/re-distribute this plugin with ANYONE without my express permission.
* You MUST NOT give credits to anyone besides me, Diogo Parrinha.
* You MUST NOT remove the license file or any conditions/rules that you may find in the included PHP files.
* The author is NOT responsible for any damaged caused by this plugin.
* 
* By downloading/installing this module you agree with the conditions stated above.
****************************************************************************/

$l['myalerts_setting_mydownloads_new_comment'] = 'Получать уведомление, когда кто-либо комментирует загруженный вами файл?';
$l['mydownloads'] = 'Моды &amp; Загрузки';
$l['mydownloads_active'] = '<strong>Активно</strong>';
$l['mydownloads_add'] = 'Добавить';
$l['mydownloads_add_previews'] = 'Добавить изображения';
$l['mydownloads_add_previews_desc'] = 'Для загрузки изображения, перетащите его в поле ниже.';
$l['mydownloads_all_categories'] = 'Все категории';
$l['mydownloads_already_rated'] = "Вы уже оценили эту загрузку.";
$l['mydownloads_asc'] = 'восх';
$l['mydownloads_being_updated'] = '<em>Обновляется</em>';
$l['mydownloads_being_updated2'] = "<em>(Обновляется)</em>";
$l['mydownloads_being_updated_error'] = 'Эта загрузка была обновлена. Вы не можете изменять её, покуда она находится на рассмотрении.';
$l['mydownloads_being_updated_notice'] = 'Эта загрузка была обновлена, и в данный момент она ожидает рассмотрения. Тем временем, вы можете скачать старую версию.';
$l['mydownloads_by_user'] = '';
$l['mydownloads_by_username'] = 'от <a href="{1}/{2}">{3}</a>';
$l['mydownloads_cancel'] = 'Отмена';
$l['mydownloads_cancel_upload'] = 'Отменить загрузку';
$l['mydownloads_cannot_rate_own'] = 'Вы не можете оценивать собственные загрузки.';
$l['mydownloads_cant_edit_comment'] = 'Вы не можете изменить комментарий, так как время на изменение закончилось.';
$l['mydownloads_categories'] = "Категории";
$l['mydownloads_categories_main'] = 'Главная страница';
$l['mydownloads_category'] = 'Категория';
$l['mydownloads_closed'] = "Страница загрузок временно закрыта.";
$l['mydownloads_collaborating'] = 'Мои совместные работы';
$l['mydownloads_collaborators'] = 'Соавторы';
$l['mydownloads_collaborators_updated'] = 'Список соавторов обновлен.';
$l['mydownloads_collaborator_username'] = 'Имя пользователя';
$l['mydownloads_comment'] = "Оставить комментарий";
$l['mydownloads_comment_banned'] = "Вы заблокированы и не можете оставлять комментарии.";
$l['mydownloads_confirm_delete'] = 'Confirm that you want to delete the selected comment.<br /><form action="{1}/mydownloads/comment_download.php" method="post" "><input type="hidden" name="my_post_key" value="{2}" /><input type="hidden" name="cid" value="{3}" /><input type="hidden" name="action" value="delete_comment" /><input type="submit" value="Delete" class="button" /></form>';
$l['mydownloads_cover'] = 'Обложка';
$l['mydownloads_cover_updated'] = 'Обложка обновлена.';
$l['mydownloads_date'] = 'Дата';
$l['mydownloads_default_license'] = "Автор не установил лицензию на эти файлы.";
$l['mydownloads_delete'] = 'Удалить';
$l['mydownloads_delete_confirm'] = "Вы уверены, что хотите удалить данный комментарий?";
$l['mydownloads_delete_download'] = 'Delete Download Submission';
$l['mydownloads_delete_download_breadcrumb'] = 'Удаляем файлы';
$l['mydownloads_delete_download_confirm'] = 'Are you sure you want to delete download "{1}"?';
$l['mydownloads_delete_preview_confirm'] = 'Are you sure you want to delete the selected image?';
$l['mydownloads_desc'] = 'описание';
$l['mydownloads_download'] = "Скачать";
$l['mydownloads_downloaded'] = "<strong>Файлы:</strong> {1}";
$l['mydownloads_downloads'] = 'Загрузки';
$l['mydownloads_downloads_number'] = "{1} файлы";
$l['mydownloads_download_category'] = 'Категория';
$l['mydownloads_download_changelog'] = 'Cписок изменений';
$l['mydownloads_download_collaborator'] = 'Соавтор';
$l['mydownloads_download_commented'] = "Вы успешно оставили комментарий.";
$l['mydownloads_download_commented_title'] = "Комментарий оставлен";
$l['mydownloads_download_comments'] = "Комментарии";
$l['mydownloads_download_comment_deleted'] = "Вы успешно удалили комментарий.";
$l['mydownloads_download_comment_deleted_title'] = "Комментарий удален";
$l['mydownloads_download_comment_edited'] = 'Комментарий изменен.';
$l['mydownloads_download_deleted'] = 'Вы удалили выбранный файл.';
$l['mydownloads_download_deleted_title'] = 'Файл удален';
$l['mydownloads_download_delete_comment'] = "Удалить";
$l['mydownloads_download_description'] = "Описание";
$l['mydownloads_download_edit_comment'] = "Изменить";
$l['mydownloads_download_image'] = "Скачать картинку";
$l['mydownloads_download_invited'] = 'Приглашен';
$l['mydownloads_download_name'] = "Имя";
$l['mydownloads_download_points'] = "Очки";
$l['mydownloads_download_preview'] = "Изображение";
$l['mydownloads_download_price'] = "Цена";
$l['mydownloads_download_purchased'] = "Вы успешно приобрели этот файл/файлы.";
$l['mydownloads_download_purchased_title'] = "Файлы куплены";
$l['mydownloads_download_rate'] = "Рейтинг";
$l['mydownloads_download_rated'] = "Вы успешно оценили загрузку.";
$l['mydownloads_download_rated_title'] = "Загрузка оценена";
$l['mydownloads_download_submitter'] = 'Заявитель';
$l['mydownloads_download_successfully_added'] = "You have successfully submitted a new download which is now waiting to be approved.";
$l['mydownloads_download_successfully_added_auto'] = "You have successfully submitted a new download which has been automatically approved.";
$l['mydownloads_download_successfully_added_title'] = 'Download submitted';
$l['mydownloads_download_successfully_added_title_auto'] = 'Download submitted and approved';
$l['mydownloads_download_successfully_edited'] = "You have successfully edited a download which is now waiting to be approved.";
$l['mydownloads_download_successfully_edited_auto'] = "You have successfully edited a download which has been automatically approved.";
$l['mydownloads_download_successfully_edited_title'] = 'Файл изменен';
$l['mydownloads_download_successfully_edited_title_auto'] = 'Файл изменен, подтверждение получено';
$l['mydownloads_download_url'] = 'Показать ссылку (ссылки) на скачивание';
$l['mydownloads_download_views'] = "Просмотры";
$l['mydownloads_edit'] = 'Изменить';
$l['mydownloads_editing_collaborators'] = 'Изменить список соавторов {1}';
$l['mydownloads_editing_download'] = 'Изменяем {1}';
$l['mydownloads_editing_invited'] = 'Editing invited users of {1}';
$l['mydownloads_edit_collaborators'] = 'Изменить список соавторов';
$l['mydownloads_edit_comment'] = "Изменить комментарий";
$l['mydownloads_edit_download'] = 'Изменить файл';
$l['mydownloads_edit_download_download_desc'] = 'Select the download file to upload. (Leave empty to not change this field)';
$l['mydownloads_edit_download_preview_desc'] = 'Select the cover image to upload. (Leave empty to not change this field)';
$l['mydownloads_edit_invited'] = 'Изменить список приглашенных пользователей';
$l['mydownloads_empty_reason'] = 'You must specify a reason for reporting the selected download.';
$l['mydownloads_enter_a_comment'] = 'Пожалуйста, введите комментарий.';
$l['mydownloads_error'] = 'Ошибка';
$l['mydownloads_error_attachsize'] = "The file you attached is too large. The maximum size for that type of file is {1} kilobytes.";
$l['mydownloads_error_attachtype'] = "The type of file that you attached is not allowed. Please remove the attachment or choose a different type.";
$l['mydownloads_error_invalidrating'] = "You have selected an invalid rating for this download.";
$l['mydownloads_error_uploadfailed'] = "The file upload failed. Please choose a valid file and try again. ";
$l['mydownloads_error_uploadfailed_detail'] = "Детали ошибки: ";
$l['mydownloads_error_uploadfailed_lost'] = "The attachment could not be found on the server.";
$l['mydownloads_error_uploadfailed_movefailed'] = "There was a problem moving the uploaded file to its destination.";
$l['mydownloads_error_uploadfailed_nothingtomove'] = "An invalid file was specified, so the uploaded file could not be moved to its destination.";
$l['mydownloads_error_uploadfailed_php1'] = "PHP returned: Uploaded file exceeded upload_max_filesize directive in php.ini.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadfailed_php2'] = "The uploaded file exceeded the maximum file size specified.";
$l['mydownloads_error_uploadfailed_php3'] = "The uploaded file was only partially uploaded.";
$l['mydownloads_error_uploadfailed_php4'] = "No file was uploaded.";
$l['mydownloads_error_uploadfailed_php6'] = "PHP returned: Missing a temporary folder.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadfailed_php7'] = "PHP returned: Failed to write the file to disk.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadfailed_phpx'] = "PHP returned error code: {1}.  Please contact your forum administrator with this error.";
$l['mydownloads_error_uploadsize'] = "The size of the uploaded file is too large.";
$l['mydownloads_exceeded'] = 'Лимит загрузок превышен. Максимальный: {1}.';
$l['mydownloads_filter_by_tags'] = 'Фильтровать результаты по тегам:';
$l['mydownloads_five_stars'] = "5 звезд из 5";
$l['mydownloads_flood_check'] = "You are trying to post a comment too quickly after posting a previous comment. Please wait {1} more second(s)."; // copied from MyBB :P
$l['mydownloads_forum'] = 'Форум';
$l['mydownloads_four_stars'] = "3 звезды из 5";
$l['mydownloads_go_to_all_downloads'] = 'Перейти в раздел "все загрузки"';
$l['mydownloads_guidelines'] = "These are the guidelines! BB Code is [b]allowed[/b].";
$l['mydownloads_header_reports'] = 'Есть {1} непрочитанных жалоб на файлы.';
$l['mydownloads_hidden'] = '<em>Скрытый</em>';
$l['mydownloads_hidden2'] = '<em>(Скрытый)</em>';
$l['mydownloads_history'] = 'История скачиваний';
$l['mydownloads_history_visible'] = 'История скачиваний показана';
$l['mydownloads_history_visible_desc'] = 'Снимите галочку, если вы хотите отключить историю версий.';
$l['mydownloads_in'] = 'в';
$l['mydownloads_invalid_banner'] = 'Недопустимый баннер. Допустимы только следующие форматы: bmp, gif, png, jpeg.';
$l['mydownloads_invalid_extension'] = 'Изображение может быть только в следующих форматах: jpeg, png or gif.';
$l['mydownloads_invalid_points'] = 'Вы ввели неверное число очков.';
$l['mydownloads_invalid_receiver_email'] = 'Вы ввели неверный почтовый адрес.';
$l['mydownloads_invalid_url'] = 'Данная ссылка неверна: ';
$l['mydownloads_invalid_user'] = 'Вы выбрали неправильного пользователя.';
$l['mydownloads_invited'] = 'Доступ пользователей';
$l['mydownloads_invited_updated'] = 'Invited users updated successfully.';
$l['mydownloads_invited_username'] = 'Имя пользователя';
$l['mydownloads_invite_only'] = "<em>Приглашать только</em>";
$l['mydownloads_invite_only2'] = "<em>(Приглашать только)</em>";
$l['mydownloads_last_updated'] = 'Последнее обновление';
$l['mydownloads_latest_submissions'] = 'Последние добавленные';
$l['mydownloads_license'] = 'Лицензия';
$l['mydownloads_log_in_register'] = "Вы должны на сайт, чтобы комментировать.";
$l['mydownloads_manage_previews'] = 'Управление изображениями';
$l['mydownloads_max_height'] = 'Your image\'s height is bigger than {1}px.';
$l['mydownloads_max_previews'] = 'You can upload a maximum of {1} images to each download.';
$l['mydownloads_max_previews_error'] = 'You cannot upload anymore images because you have already reached your limit for this download item.';
$l['mydownloads_max_res'] = 'Your images are limited to {1}px of width and {2}px of height.';
$l['mydownloads_max_width'] = 'Your images\'s width is bigger than {1}px.';
$l['mydownloads_md5'] = 'MD5';
$l['mydownloads_message'] = "Сообщение";
$l['mydownloads_most_downloaded'] = 'Самые скачиваемые';
$l['mydownloads_most_rated'] = 'С наивысшим рейтингом';
$l['mydownloads_most_viewed'] = 'По наибольшим числом просмотров';
$l['mydownloads_mysubmissions'] = 'Мои файлы';
$l['mydownloads_my_submissions'] = 'My Download Submissions <span class="smalltext">(only approved downloads are shown)</span>';
$l['mydownloads_my_submissions_collab'] = 'My Download Collaborations <span class="smalltext">(only approved downloads are shown)</span>';
$l['mydownloads_my_submissions_profile'] = 'Download Submissions:';
$l['mydownloads_na'] = "Неизвестно";
$l['mydownloads_new_comment'] = 'A new comment was posted by {1} to a download of yours.';
$l['mydownloads_not_enough_money'] = "You do not have enough points to purchase this download.";
$l['mydownloads_no_categories'] = "No categories have been found.";
$l['mydownloads_no_cid'] = "The category you have selected is not valid.";
$l['mydownloads_no_collaborations'] = 'No download collaborations found.';
$l['mydownloads_no_comid'] = "The comment you have selected is not valid.";
$l['mydownloads_no_description'] = "You haven't entered a description.";
$l['mydownloads_no_did'] = "The download you have selected is not valid.";
$l['mydownloads_no_dl_name'] = "You haven't entered a name for the download.";
$l['mydownloads_no_dl_visibility'] = 'You selected an invalid visibility value.';
$l['mydownloads_no_downloads'] = "Файлы не найдены.";
$l['mydownloads_no_download_file'] = "You haven't selected the download file to be uploaded.";
$l['mydownloads_no_hidden'] = "You haven't entered a setting for 'hidden'.";
$l['mydownloads_no_money'] = "No money";
$l['mydownloads_no_permissions'] = "You either don't have permission to view this submission or it was set to hidden for administrative reasons.<br/>If you are the author of this submission, you can contact an administrator for more details.";
$l['mydownloads_no_points_set'] = "No points";
$l['mydownloads_no_previews'] = 'No images available.';
$l['mydownloads_no_price_set'] = "Цена не указана";
$l['mydownloads_no_submissions'] = 'Файлы не найдены.';
$l['mydownloads_no_sub_categories'] = "Подкатегории не найдены.";
$l['mydownloads_no_version_set'] = 'Версия не указана.';
$l['mydownloads_number_downloads'] = "Загрузки";
$l['mydownloads_one_star'] = "1 звезда из 5";
$l['mydownloads_options'] = 'Опции';
$l['mydownloads_previews'] = 'Изображения';
$l['mydownloads_preview_deleted'] = 'Изображение успешно удалено.';
$l['mydownloads_preview_empty'] = 'Файл с изображением отсутствует.';
$l['mydownloads_preview_submitted'] = 'Изображение успешно отправлено.';
$l['mydownloads_processing'] = 'Выполняем...';
$l['mydownloads_public'] = "<em>Общий</em>";
$l['mydownloads_purchase'] = "Купить файл, используя {1}";
$l['mydownloads_purchase_image'] = "Купить картинку, используя {1}";
$l['mydownloads_purchase_url'] = 'Купить ссылку (ссылки) на скачивание, используя {1}';
$l['mydownloads_rate_banned'] = "Вы заблокированы и не можете оценивать.";
$l['mydownloads_ratings_update_error'] = 'Невозможно оценить:';
$l['mydownloads_rating_too_fast'] = 'You can only rate once each {1} seconds. Try again in {2} second(s).';
$l['mydownloads_remove'] = 'Удалить';
$l['mydownloads_remove_collaborator_confirm'] = 'Are you sure you want to remove the selected collaborator?';
$l['mydownloads_remove_invited_confirm'] = 'Are you sure you want to remove the selected invited user?';
$l['mydownloads_reported_message'] = 'Вы успешно отправили жалобу на файл.';
$l['mydownloads_reported_title'] = 'Жалоба отправлена';
$l['mydownloads_report_breacrumb'] = 'Отправляем жалобу ';
$l['mydownloads_report_download'] = 'Жалоба на файл';
$l['mydownloads_report_download_reason'] = 'Причина';
$l['mydownloads_report_download_reason_desc'] = 'Enter a reason for reporting this download.';
$l['mydownloads_require_preview'] = 'Необходима обложка.';
$l['mydownloads_search'] = 'Поиск файлов';
$l['mydownloads_search_results'] = 'Результаты поиска: ';
$l['mydownloads_select_category'] = 'Выберите категорию';
$l['mydownloads_set_banner'] = 'Установить баннер';
$l['mydownloads_set_cover'] = 'Установить обложку';
$l['mydownloads_sortby'] = 'Сортировать:';
$l['mydownloads_start'] = 'Начать';
$l['mydownloads_start_upload'] = 'Начать загрузку';
$l['mydownloads_stats'] = 'Статистика';
$l['mydownloads_stats_of'] = 'Статистика категории {1}';
$l['mydownloads_status'] = 'Статус';
$l['mydownloads_submissions'] = 'Загрузки';
$l['mydownloads_submit'] = 'Загрузить';
$l['mydownloads_submitter_desc'] = 'The user that has submitted this download.';
$l['mydownloads_submit_comment'] = "Загрузить";
$l['mydownloads_submit_date'] = 'Указать дату';
$l['mydownloads_submit_download'] = 'Загрузить файл';
$l['mydownloads_submit_download_bannerurl'] = 'Ссылка на баннер';
$l['mydownloads_submit_download_bannerurl_desc'] = 'You can specify a banner URL for your download. For best results use 1500x300 resolution as minimum or same aspect ratio. Accepted extensions: bmp, gif, png, jpeg.';
$l['mydownloads_submit_download_changelog'] = 'Список изменений';
$l['mydownloads_submit_download_changelog_desc'] = 'Укажите историю версий для вашего файла.';
$l['mydownloads_submit_download_description'] = 'Описание';
$l['mydownloads_submit_download_description_desc'] = 'Укажите описание для вашего файла.';
$l['mydownloads_submit_download_download'] = 'Скачать файл';
$l['mydownloads_submit_download_download_desc'] = 'Выберите файл для загрузки.';
$l['mydownloads_submit_download_email'] = 'PayPal Email';
$l['mydownloads_submit_download_email_desc'] = 'Enter your PayPal email for which payments will be sent. Leave blank if you want the payments to be sent to the Administrator. If you fill in this field but leave the price 0, the donate button will appear instead.';
$l['mydownloads_submit_download_in_category'] = 'Определяем файл в категорию "{1}"';
$l['mydownloads_submit_download_license'] = 'Лицензия';
$l['mydownloads_submit_download_license_desc'] = 'Enter a license for this download. Leave blank if you do not want to show a license.';
$l['mydownloads_submit_download_name'] = 'Имя';
$l['mydownloads_submit_download_name_desc'] = 'Имя загрузки.';
$l['mydownloads_submit_download_points'] = 'Очки';
$l['mydownloads_submit_download_points_desc'] = 'Enter the cost of this download in points. This is the amount of points users must pay to download the uploaded file. Everytime this download is purchased, you get the amount of points you enter here multiplied by the percentage the administrator has set in settings.';
$l['mydownloads_submit_download_points_desc_mp_not_installed'] = '<span style="color: #FF0000;"><strong>NewPoints feature is disabled. Leave blank.</strong></span>';
$l['mydownloads_submit_download_preview'] = 'Обложка';
$l['mydownloads_submit_download_preview_desc'] = 'Выберите изображение-обложку. Оно будет показываться рядом с вашим файлом в списке загрузок.';
$l['mydownloads_submit_download_price'] = 'Цена';
$l['mydownloads_submit_download_price_desc'] = 'Укажите сколько пользователь должен заплатить с помощью PayPal для того, чтобы скачать файл';
$l['mydownloads_submit_download_price_desc_paypal_deactivated'] = '<span style="color: #FF0000;"><strong>PayPal недоступен. Оставьте это поле пустым.</strong></span>';
$l['mydownloads_submit_download_short_description'] = 'Короткое описание';
$l['mydownloads_submit_download_short_description_desc'] = 'Maximum 150 letters. Enter a short description for this download. Will be shown when browsing and hovering over a download.';
$l['mydownloads_edit_download_short_description_desc'] = 'Maximum 150 letters. Enter a short description for this download. Will be shown when browsing and hovering over a download.';
$l['mydownloads_submit_download_tags'] = 'Теги';
$l['mydownloads_submit_download_tags_desc'] = 'Выберите теги, по которым можно будет найти ваши файлы.';
$l['mydownloads_submit_download_urls'] = 'Download URLs';
$l['mydownloads_submit_download_urls_desc'] = 'This is an optional field. You can enter download URLs rather than uploading a file. If this is not empty, the selected file will not be uploaded.';
$l['mydownloads_submit_download_version'] = 'Версия';
$l['mydownloads_submit_download_version_desc'] = 'Укажите версию. Оставьте это поле пустым, если не собираетесь указывать.';
$l['mydownloads_submit_download_visibility'] = 'Видимость';
$l['mydownloads_submit_preview'] = 'Отправить изображение';
$l['mydownloads_sub_categories'] = 'Подкатегории';
$l['mydownloads_sub_categories2'] = '{1} Подкатегории и {2} файлы';
$l['mydownloads_sub_categories_in_cat'] = 'Категории, чья родительская категория - "{1}"';
$l['mydownloads_success'] = 'Успех';
$l['mydownloads_switch_dragdrop'] = 'Переключиться на режим перетаскивания';
$l['mydownloads_switch_legacy'] = 'Переключиться на Legacy';
$l['mydownloads_tags'] = 'Теги';
$l['mydownloads_three_stars'] = "3 звезды из 5";
$l['mydownloads_total_rate'] = "Средний рейтинг";
$l['mydownloads_two_stars'] = "2 звезды из 5";
$l['mydownloads_unlisted'] = "<em>Unlisted</em>";
$l['mydownloads_unlisted2'] = "<em>(Unlisted)</em>";
$l['mydownloads_suspended'] = "<em>Suspended</em>";
$l['mydownloads_upload_problem_dl_already_exists'] = "A download file with the same name has already been uploaded";
$l['mydownloads_upload_problem_downloadfile'] = "The following problem has occurred when uploading the download file: ";
$l['mydownloads_upload_problem_previewfile'] = "The following problem has occurred when uploading the image: ";
$l['mydownloads_upload_problem_pr_already_exists'] = "A image with the same name has already been uploaded";
$l['mydownloads_url_download'] = "The author of this download has decided to enter download links instead of uploading a file.<br />Download links:<br />{1}";
$l['mydownloads_url_download_title'] = "Скачать файл";
$l['mydownloads_user_history'] = '{1}\'s История скачиваний';
$l['mydownloads_user_mysubmissions'] = '{1}\'s Download Submissions';
$l['mydownloads_user_submissions'] = '{1}\'s Download Submissions <span class="smalltext">(only approved downloads are shown)</span>';
$l['mydownloads_use_legacy'] = 'Используйте альтернативную версию.';
$l['mydownloads_version'] = 'Версия';
$l['mydownloads_viewed'] = "<br /><strong>Просмотров:</strong> {1}";
$l['mydownloads_view_history'] = 'История скачиваний';
$l['mydownloads_view_submissions'] = 'View Submissions';
$l['mydownloads_your_money'] = "У вас есть";
$l['mydownloads_your_rate'] = "Ваш рейтинг";
?>