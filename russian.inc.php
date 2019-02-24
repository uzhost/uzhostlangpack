<?php

######################################################################################
#                                                                                    #
#                                  !!! ВНИМАНИЕ !!!                                  #
#                                                                                    #
#                      !!! НЕ ВНОСИТЕ ИЗМЕНЕНИЯ В ДАННЫЙ ФАЙЛ !!!                    #
#                                                                                    #
# Если вы хотите изменить какую-то языковую переменную, создайте в папке _rootlang   #
# файл russian.local.inc.php, скопируйте в него переменную и уже в нем вносите в     #
# нее изменения! В противном случае Ваши изменения будут утеряны после обновления!   #
#                                                                                    #
######################################################################################

$_lang['Warning'] = 'Внимание!';
$_lang['Error'] = 'Ошибка';

$_lang['Required'] = 'поля, отмеченные данным символом, обязательны к заполнению';

$_lang['Yes'] = 'да';
$_lang['No'] = 'нет';

$_lang['Pages'] = 'Страницы:';

$_lang['Prev'] = 'Назад';
$_lang['Next'] = 'Дальше';
$_lang['Change'] = 'Изменить';
$_lang['Send'] = 'Отправить';
$_lang['Save'] = 'Сохранить';
$_lang['Order'] = 'Заказать';
$_lang['Pay'] = 'Оплатить';
$_lang['Add'] = 'Добавить';

$_lang['Hosting'] = 'Хостинг';
$_lang['Domain'] = 'Домен';
$_lang['DomainOpt'] = 'Домены оптом';

$_lang['DomainNewMin'] = 'новый';
$_lang['DomainExistsMin'] = 'перенос';
$_lang['DomainWithoutMin'] = 'без домена';
$_lang['DomainRenewMin'] = 'продление';
$_lang['DomainWithoutRenewMin'] = 'без продления';

$_lang['DomainNew'] = 'Регистрация домена у нас';
$_lang['DomainExists'] = 'Домен уже зарегистрирован';
$_lang['DomainWithout'] = 'Без домена';
$_lang['DomainRenew'] = 'Продление домена';
$_lang['DomainWithoutRenew'] = 'Без продления домена';

$_lang['BillNotPayed'] = 'не оплачен';
$_lang['BillPayed'] = 'оплачен';
$_lang['BillPayedUslovno'] = 'условно оплачен';
$_lang['BillDeleted'] = 'удален';

$_lang['OrderStatusNeObrabotan'] = 'не обработан';
$_lang['OrderStatusObrabotan'] = 'обработан';
$_lang['OrderStatusSuspended'] = 'приостановлен';

$_lang['SortAsc'] = 'по возрастанию';
$_lang['SortDesc'] = 'по убыванию';

$_lang['TicketPriority0'] = 'низкая';
$_lang['TicketPriority1'] = 'средняя';
$_lang['TicketPriority2'] = 'высокая';

$_lang['TicketStatusOpen'] = 'открыт';
$_lang['TicketStatusClose'] = 'закрыт';

$_lang['Captcha'] = 'Защитный код';
$_lang['CaptchaNeVidno'] = 'Если изображение не видно, или Вы не можете разобрать символы:';
$_lang['CaptchaObnovit'] = 'обновить изображение';

$_lang['payKvitanciya'] = 'Квитанция для физических лиц';
$_lang['paySchet'] = 'Счет для юридических лиц';
$_lang['payPartner'] = 'Партнерский баланс';
$_lang['payBalance'] = 'Внутренний баланс';

$_lang['ErrorGetCurrentCurrency'] = 'Не удалось получить валюту сайта.';
$_lang['ErrorNoLogin'] = 'Не указан логин.';
$_lang['ErrorNonExistsLogin'] = 'Введено несуществующее имя пользователя.';
$_lang['ErrorNoPassword'] = 'Не указан пароль.';
$_lang['ErrorBadPassword'] = 'Указан неверный пароль.';
$_lang['ErrorPasswordNoConfirm'] = 'Не подтверждён пароль.';
$_lang['ErrorPasswordLength'] = 'Длина пароля не должна быть менее 6 символов.';
$_lang['ErrorPasswordConfirm'] = 'Неправильно подтверждён пароль.';
$_lang['ErrorBadLoginOrPassword'] = 'Неправильно введён логин или пароль.';
$_lang['ErrorWrongCaptcha'] = 'Неправильно указан защитный код.';
$_lang['ErrorBadId'] = 'Неверный идентификатор.';

$_lang['OrderType']['hosting'] = 'Хостинг';
$_lang['OrderType']['reseller'] = 'Реселлинг';
$_lang['OrderType']['vds'] = 'VPS/VDS';
$_lang['OrderType']['dedicated'] = 'Выделенный сервер';
$_lang['OrderType']['vpn'] = 'VPN';
$_lang['OrderType']['ssh'] = 'SSH';

$_lang['monthR'][1] = 'января';
$_lang['monthR'][2] = 'февраля';
$_lang['monthR'][3] = 'марта';
$_lang['monthR'][4] = 'апреля';
$_lang['monthR'][5] = 'мая';
$_lang['monthR'][6] = 'июня';
$_lang['monthR'][7] = 'июля';
$_lang['monthR'][8] = 'августа';
$_lang['monthR'][9] = 'сентября';
$_lang['monthR'][10] = 'октября';
$_lang['monthR'][11] = 'ноября';
$_lang['monthR'][12] = 'декабря';


#####################################################################################
##################### billing.php
#####################################################################################

$_lang['BillingTitle'] = 'Биллинговая панель';
$_lang['BillingLoginOrEmail'] = 'Ваш логин или email';
$_lang['BillingLogin'] = 'Ваш логин';
$_lang['BillingPassword'] = 'Ваш пароль';
$_lang['BillingEnter'] = 'Войти в биллинг';
$_lang['BillingForgotPassword'] = 'Забыли пароль?';

$_lang['BillingMenu'] = 'Меню';
$_lang['BillingMenuBills'] = 'Счета';
$_lang['BillingMenuOrders'] = 'Заказы';
$_lang['BillingMenuDomains'] = 'Домены';
$_lang['BillingMenuProfile'] = 'Профайл';
$_lang['BillingMenuTickets'] = 'Тикеты';
$_lang['BillingMenuPartner'] = 'Партнер';
$_lang['BillingMenuCatalog'] = 'Каталог';
$_lang['BillingMenuWhois'] = 'Whois';
$_lang['BillingMenuLogout'] = 'Выйти';
$_lang['BillingMenuOrder'] = 'Заказать';

$_lang['BillingMenuBalance'] = 'Ваш баланс';
$_lang['BillingMenuAddFunds'] = 'пополнить';


#####################################################################################
##################### billing.php :: profile
#####################################################################################

$_lang['ProfileTitle'] = 'Профайл';
$_lang['ProfileChangeSuccess'] = 'Профайл успешно изменен.';
$_lang['ProfileNeedFromReg'] = 'Заказ успешно оформлен.<BR>Для дальнейшей работы Вам необходимо заполнить профайл.';
$_lang['ProfileFieldsForAllDomains'] = 'Для регистрации доменов (кроме российских) все поля, за исключением паспортных данных, обязательны к заполнению!';
$_lang['ProfileFieldsForRuDomain'] = 'Для регистрации российских доменов, все поля, включая паспортные данные, обязательны к заполнению!';
$_lang['ProfileOfOrg'] = 'Профайл организации';
$_lang['ProfileOfPrivatePerson'] = 'Профайл частного лица';
$_lang['ProfileContact'] = 'Частное лицо';
$_lang['ProfileSurname'] = 'Фамилия';
$_lang['ProfileName'] = 'Имя';
$_lang['ProfileOtchestvo'] = 'Отчество';
$_lang['ProfileOrgData'] = 'Данные организации';
$_lang['ProfileOrg'] = 'Организация';
$_lang['ProfileOrgComment'] = 'Полное наименование организации на русском языке в соответствии с учредительными документами.<BR>Пример: Общество с ограниченной ответственностью `Рога и Копыта`';
$_lang['ProfilePassportData'] = 'Паспортные данные';
$_lang['ProfilePassportSeriya'] = 'Серия и номер';
$_lang['ProfilePassportSeriyaComment'] = 'Знак номера перед номером паспорта не ставится.<BR>Пример, Россия: 34 02 651241; Пример, Украина: НС 223344';
$_lang['ProfilePassportVidan'] = 'Кем выдан';
$_lang['ProfilePassportVidanComment'] = 'Полное наименование органа, выдавшего паспорт.<BR>Пример: 48 о/м г.Москвы';
$_lang['ProfilePassportVidanData'] = 'Дата выдачи';
$_lang['ProfileBirthDate'] = 'Дата рождения';
$_lang['ProfileInn'] = 'ИНН';
$_lang['ProfileInnComment'] = 'Идентификационный номер налогоплательщика (ИНН).<BR>Пример: 789012345678';
$_lang['ProfileOrgEng'] = 'Организация (англ.)';
$_lang['ProfileOrgEngComment'] = 'Полное наименование организации латинскими буквами.<BR>Пример: `ROGA I KOPYTA`, LTD.';
$_lang['ProfileYuridAddress'] = 'Юридический адрес';
$_lang['ProfileYuridAddressComment'] = 'Юридический адрес организации в соответствии с учредительными документами.<BR>Пример: 101000, Москва, ул.Пупкина, 1, стр. 2';
$_lang['ProfileInnComment2'] = 'Идентификационный номер налогоплательщика (ИНН), присвоенный организации.<BR>Пример: 7701107259';
$_lang['ProfileOgrn'] = 'ОГРН';
$_lang['ProfileOgrnComment'] = 'Основной государственный регистрационный номер юридического лица (для Российских организаций). Для юридических лиц других стран - сведения о документе, удостоверяющем регистрацию в соответствии с правилами страны (серия и номер документа).';
$_lang['ProfileOgrnBy'] = 'Кем выдан ОГРН';
$_lang['ProfileOgrnByComment'] = 'Кем выдан ОГРН (для Российских организаций) или другой документ о регистрации (для юридических лиц других стран).';
$_lang['ProfileKpp'] = 'КПП';
$_lang['ProfileKppComment'] = 'КПП организации. Обязательное поле для Российских организаций.<BR>Пример: 632946014';
$_lang['ProfileBankRekviz'] = 'Банковские реквизиты';
$_lang['ProfileBank'] = 'Банк';
$_lang['ProfileBik'] = 'БИК (МФО)';
$_lang['ProfileSchet'] = 'Расчётный счет';
$_lang['ProfilePochtAddress'] = 'Почтовый адрес';
$_lang['ProfileCountry'] = 'Страна';
$_lang['ProfileOblast'] = 'Область';
$_lang['ProfileOblastComment'] = 'Пример: Черкасская';
$_lang['ProfileIndex'] = 'Индекс';
$_lang['ProfileIndexComment'] = 'Пример: 189343';
$_lang['ProfileCity'] = 'Город';
$_lang['ProfileCityComment'] = 'Пример: Москва';
$_lang['ProfileAddress'] = 'Адрес';
$_lang['ProfileAddressComment'] = 'Пример: ул. Саратовская, д. 5, кв. 34; ул. Крымская, д. 172 (частный дом); ул. Сумская, д. 2, офис 4';
$_lang['ProfileContactInfo'] = 'Контактная информация';
$_lang['ProfilePhone'] = 'Телефон';
$_lang['ProfilePhoneComment'] = 'Телефон с международным кодом; международный код, код города и местный номер разделяются пробелами. Скобки и дефисы не допускаются.<BR>Пример: +7 495 8102233';
$_lang['ProfileFax'] = 'Факс';
$_lang['ProfileFaxComment'] = 'Факс с международным кодом; международный код, код города и местный номер разделяются пробелами. Скобки и дефисы не допускаются.<BR>Пример: +7 495 8102233';
$_lang['ProfileEmail'] = 'Email';
$_lang['ProfileIcq'] = 'Icq';
$_lang['ProfileDopInfo'] = 'Дополнительная информация';
$_lang['ProfileRipn'] = 'RIPN';
$_lang['ProfileRipe'] = 'RIPE';
$_lang['ProfileUanic'] = 'UANIC';
$_lang['ProfileChangePassword'] = 'Изменение пароля';
$_lang['ProfileNewPassword'] = 'Новый пароль';
$_lang['ProfileUserSettings'] = 'Настройки пользователя';
$_lang['ProfileCurrency'] = 'Валюта сайта';
$_lang['ProfileDefaultCurrency'] = 'Валюта по умолчанию';
$_lang['ProfileNewSubscribe'] = 'Подписка на новости';

$_lang['ProfileErrorBadEmail'] = 'Указан неправильный Email адрес.';
$_lang['ProfileErrorYouCanWorkWithoutProfile'] = 'Внимание! Вы не можете работать с биллингом пока не заполните Ваш профайл.';
$_lang['ProfileErrorFields'] = 'Ошибки в полях';


#####################################################################################
##################### billing.php :: orders
#####################################################################################

$_lang['OrdersTitle'] = 'Заказы';
$_lang['OrdersDeleteSuccess'] = 'Заказ и все счета, относящиеся к нему, успешно удалены.';
$_lang['OrdersErrorCantDelete'] = 'Вы не можете удалить данный заказ.';
$_lang['OrdersAddonsForOrder'] = 'Активные дополнительные услуги';
$_lang['OrdersNoAddons'] = 'дополнительные услуги не заказаны';
$_lang['OrdersAddonsOrder'] = 'Заказать дополнительные услуги';
$_lang['OrdersNoAvailAddons'] = 'Нет доступных дополнительных услуг.';
$_lang['OrdersDate'] = 'Дата';
$_lang['OrdersDomain'] = 'Домен';
$_lang['OrdersTarif'] = 'Тариф';
$_lang['OrdersEnd'] = 'Оплачен до';
$_lang['OrdersLeftDays'] = 'Осталось дней';
$_lang['OrdersDeleteAlert'] = 'Будет удален заказ, а так же все счета, относящиеся к нему. Вы уверены, что хотите удалить заказ?';
$_lang['OrdersDeleteOrder'] = 'Удалить заказ';
$_lang['OrdersRenewOrder'] = 'Продлить заказ';
$_lang['OrdersDownloadFile'] = 'Скачать прикрепленный файл';
$_lang['OrdersAddonOrder'] = 'заказать';
$_lang['OrdersChangeTarif'] = 'Сменить тариф';
$_lang['OrdersTotalOrders'] = 'Всего заказов';
$_lang['OrdersOrdersOnPage'] = 'заказов на странице';

$_lang['OrdersErrorNoFiles'] = 'К данному заказу не прикреплены никакие файлы.';
$_lang['OrdersErrorNoOrder'] = 'Заказ не найден.';


#####################################################################################
##################### billing.php :: domains
#####################################################################################

$_lang['DomainsTitle'] = 'Домены';
$_lang['DomainsChangeDNSSuccess'] = 'DNS-сервера успешно изменены.';
$_lang['DomainsDNSFor'] = 'DNS-сервера для';
$_lang['DomainsNS1'] = 'NameServer 1';
$_lang['DomainsNS2'] = 'NameServer 2';
$_lang['DomainsNS3'] = 'NameServer 3';
$_lang['DomainsNS4'] = 'NameServer 4';
$_lang['DomainsDeleteSuccess'] = 'Домен и все счета, относящиеся к нему, успешно удалены.';
$_lang['DomainsDate'] = 'Дата';
$_lang['DomainsDomain'] = 'Домен';
$_lang['DomainsEnd'] = 'Оплачен до';
$_lang['DomainsLeftDays'] = 'Осталось дней';
$_lang['DomainsChangeDNS'] = 'Изменить DNS-сервера';
$_lang['DomainsDeleteAlert'] = 'Будет удален домен, а так же все счета, относящиеся к нему. Вы уверены, что хотите удалить домен?';
$_lang['DomainsDeleteDomain'] = 'Удалить домен';
$_lang['DomainsRenewDomain'] = 'Продлить домен';
$_lang['DomainsDomainsTotal'] = 'Всего доменов';
$_lang['DomainsOnPage'] = 'доменов на странице';

$_lang['DomainsErrorChangeDNS'] = 'Не удалось изменить DNS-сервера.';
$_lang['DomainsErrorMin2DNS'] = 'Должно быть указано как минимум два DNS-сервера.';
$_lang['DomainsErrorCantGetDNS'] = 'Не удалось получить DNS-сервера.';
$_lang['DomainsErrorNoLoginForReg'] = 'Не произведены настройки для';
$_lang['DomainsErrorZoneNotSupported'] = 'Доменная зона не поддерживается регистратором.';
$_lang['DomainsErrorNoRegistrator'] = 'Не указано через какого регистратора регистрировался домен.';
$_lang['DomainsErrorNoUanic'] = 'Не заполнено поле UANIC и не указан Nic-handle по умолчанию для';
$_lang['DomainsErrorautoregDisable'] = 'Авторегистрация доменов для доменной зоны отключена.';
$_lang['DomainsErrorZoneNotFound'] = 'Не найдена доменная зона.';
$_lang['DomainsErrorDomainOrdersNotFound'] = 'Не найден заказ на домен';
$_lang['DomainsErrorUserNotFound'] = 'Пользователь не найден.';
$_lang['DomainsErrorCantGetValue'] = 'Не удалось получить значение';


#####################################################################################
##################### billing.php :: bills
#####################################################################################

$_lang['BillsTitle'] = 'Счета';
$_lang['BillsDeleteSuccess'] = 'Счет успешно удален.';
$_lang['BillsNeOplachenoSchetov'] = 'У Вас не оплачено счетов';
$_lang['BillsGoto'] = 'Перейдите в раздел';
$_lang['BillGotoFor'] = 'для их оплаты';
$_lang['BillsDate'] = 'Дата';
$_lang['BillsBillNo'] = '№';
$_lang['BillsTarif'] = 'Тариф';
$_lang['BillsDomain'] = 'Домен';
$_lang['BillsCost'] = 'Цена';
$_lang['BillsSumma'] = 'Сумма';
$_lang['BillsStatus'] = 'Статус';
$_lang['BillsPay'] = 'Оплатить';
$_lang['BillsChangeTarif'] = 'смена тарифа';
$_lang['BillsOrderedAddons'] = 'Заказанные доп. услуги';
$_lang['BilldOrderAddons'] = 'Заказ доп. услуг';
$_lang['BillsPayBill'] = 'Оплатить счет';
$_lang['BillsDeleteBillAlert'] = 'Вы уверены, что хотите удалить счет?';
$_lang['BillsDeleteBill'] = 'Удалить счет';
$_lang['BillsBillByAdmin'] = 'Счет выставлен администратором';
$_lang['BillsAddFunds'] = 'Пополнение внутреннего баланса';
$_lang['BillsTotalBills'] = 'Всего счетов';
$_lang['BillsBillsPerPage'] = 'счетов на странице';


#####################################################################################
##################### billing.php :: pay
#####################################################################################

$_lang['PayTitle'] = 'Оплата счета №';
$_lang['PayGoto'] = 'Перейти к';
$_lang['PayGotoFor'] = 'заполнению профайла';
$_lang['PayNullBill'] = 'Нулевой счет';
$_lang['PayBillPaySuccess'] = 'Счет успешно оплачен.';
$_lang['PayOrderCreateSuccess'] = 'Заказ успешно оформлен.';
$_lang['PayForTarifChange'] = 'Для смены тарифного плана';
$_lang['PayNeedBillPay'] = 'Вам необходимо оплатить счёт.';
$_lang['PayForPayGoto'] = 'Для оплаты счета необходимо перейти на страницу мерчанта. Для этого нажмите кнопку `Оплатить` ниже:';
$_lang['PaySokraschenieRubl'] = 'руб.';
$_lang['PayBillCreateEasyPaySuccess'] = 'Счет на оплату в системе EasyPay успешно выставлен на Ваш кошелек';
$_lang['PayBillStatus'] = 'Статус счета';
$_lang['PayCheckBillStatus'] = 'Проверить статус счета';
$_lang['PayGotoEasyPay'] = 'Необходимо перейти на сайт <A class=rootlink href=http://www.easypay.by/ target=_blank>www.easypay.by</a> и оплатить выставленный счет.<BR><B>После оплаты нажмите на кнопку `Проверить статус счета`.</b>';
$_lang['PayAlsoYouCan'] = 'Так же Вы можете';
$_lang['PaySelectAnotherPayMethod'] = 'выбрать другой способ оплаты';
$_lang['PayPurses'] = 'Кошельки';
$_lang['PayToPay'] = 'к оплате';
$_lang['PayPurse'] = 'Кошелек';
$_lang['PayPayByHandsAlert'] = 'Внимание! Платеж обрабатывается в ручном режиме!';
$_lang['PayAccount'] = 'Аккаунт';
$_lang['PayBill'] = 'Счет';
$_lang['PayInputEasyPayPurse'] = 'Укажите Ваш кошелек в системе EasyPay';
$_lang['PayCreateBillForSumm'] = 'Выставить счет на';
$_lang['PayMinBillSummEasyPay'] = 'Минимальная сумма для оплаты через EasyPay - 1 BYN.';
$_lang['PayGetKvitansiya'] = 'Получить квитанцию';
$_lang['PayGetSchetFaktura'] = 'Получить счет для юридических лиц';
$_lang['PayNaSchetu'] = 'На счету';

$_lang['PayErrorNoOrgOrPhoneInProfile'] = 'Вы не можете получить счет для юридических лиц, т.к. в Вашем профайле не заполнено поле Организация и/или Телефон.';
$_lang['PayErrorNoProfileWithPassport'] = 'Внимание! Вы не можете оплатить данный счет, пока не заполните Ваш профайл полностью, включая паспортные данные.';
$_lang['PayErrorNoProfile'] = 'Внимание! Вы не можете оплатить данный счет, пока не заполните Ваш профайл всеми данными, за исключением паспортных данных.';
$_lang['PayErrorNoMoneyOnPartner'] = 'Недостаточно средств на Вашем партнерском счету.';
$_lang['PayErrorPartnerOff'] = 'Извините, партнерская программа в данный момент отключена.';
$_lang['PayErrorNoMoneyOnBalance'] = 'Недостаточно средств на Вашем внутреннем балансе.';
$_lang['PayErrorPurseNeed'] = 'необходимо указать Ваш кошелек в системе EasyPay (8 цифр)';
$_lang['PayErrorBillCreateEasyPayAlready'] = 'Вам уже выставлен счет на оплату в системе EasyPay';


#####################################################################################
##################### billing.php :: renew & renewdomain
#####################################################################################

$_lang['RenewTitle'] = 'Продление заказа';
$_lang['RenewTitleDomain'] = 'Продление домена';
$_lang['RenewDomain'] = 'Домен';
$_lang['RenewNaSrok'] = 'На срок';
$_lang['RenewYear'] = 'год';
$_lang['RenewTarif'] = 'Тарифный план';
$_lang['RenewAddons'] = 'Доп. услуги';
$_lang['RenewRenew'] = 'Продлить';

$_lang['RenewErrorNoSrok'] = 'Не указан срок продления.';


#####################################################################################
##################### billing.php :: partner
#####################################################################################

$_lang['PartnerTitle'] = 'Партнерская программа';
$_lang['PartnerMoneyOut'] = 'Вывод средств с партнерского баланса:';
$_lang['PartnerMoneyOutSuccess'] = 'Заявка на вывод успешно отправлена администрации. Ожидайте перевода средств.';
$_lang['PartnerPartnerSchet'] = 'Ваш партнерский баланс';
$_lang['PartnerPartnerLink'] = 'Ваша партнерская ссылка';
$_lang['PartnerZakazatVivod'] = 'Заказать вывод средств';
$_lang['PartnerSumma'] = 'Сумма';
$_lang['PartnerSposobVivoda'] = 'Способ вывода';
$_lang['PartnerPurse'] = 'Номер счета/кошелька';
$_lang['PartnerZakazatVivodButton'] = 'Заказать вывод';
$_lang['PartnerOurBanners'] = 'Наши баннеры';

$_lang['PartnerErrorMinOut'] = 'Сумма вывода не может быть меньше чем';
$_lang['PartnerErrorNoMoneyOnPartner'] = 'Недостаточно средств на партнерском счету.';
$_lang['PartnerErrorNoPayMethod'] = 'Не указан способ вывода.';
$_lang['PartnerNoPurse'] = 'Не указан номер счета/кошелька.';
$_lang['PartnerErrorPartnerOff'] = 'Извините, партнерская программа в данный момент отключена.';

#####################################################################################
##################### billing.php :: tickets
#####################################################################################

$_lang['TicketsTitle'] = 'Тикеты';
$_lang['TicketsDeleteSuccess'] = 'Тикет успешно удален.';
$_lang['TicketsGotoTicketsList'] = 'перейти к списку тикетов';
$_lang['TicketsCloseSuccess'] = 'Тикет успешно закрыт.';
$_lang['TicketsGoBackToTicket'] = 'вернуться в тикет';
$_lang['TicketsNewSuccess'] = 'Тикет успешно добавлен.';
$_lang['TicketsGotoNewTicket'] = 'перейти в открытый тикет';
$_lang['TicketsReplySuccess'] = 'Сообщение успешно добавлено.';
$_lang['TicketsTicketTypeMsg'] = 'Сообщение';
$_lang['TicketsTicketTypeReply'] = 'Ответ';
$_lang['TicketsPriority'] = 'Важность';
$_lang['TicketsStatus'] = 'Статус';
$_lang['TicketsTicket'] = 'Тикет';
$_lang['TicketsTicketView'] = 'Просмотр тикета';
$_lang['TicketsDate'] = 'Дата';
$_lang['TicketsAddMessage'] = 'Добавить сообщение';
$_lang['TicketsStatusOpen'] = 'открытые';
$_lang['TicketsStatusAll'] = 'все';
$_lang['TicketsStatusClosed'] = 'закрытые';
$_lang['TicketsYourTickets'] = 'Ваши тикеты';
$_lang['TicketsSubject'] = 'Тема';
$_lang['TicketsTicketReplys'] = 'Ответов';
$_lang['TicketsDeleteAlert'] = 'Вы уверены, что хотите удалить тикет?';
$_lang['TicketsDelete'] = 'Удалить тикет';
$_lang['TicketsCloseAlert'] = 'Вы уверены, что хотите закрыть тикет?';
$_lang['TicketsClose'] = 'Закрыть тикет';
$_lang['TicketsTotalTickets'] = 'Всего тикетов';
$_lang['TicketsShow'] = 'Показать';
$_lang['TicketsNewTicket'] = 'Новый тикет';
$_lang['TicketsAddTicket'] = 'Добавить тикет';

$_lang['TicketsErrorSubject'] = 'Не указана тема тикета.';
$_lang['TicketsErrorPriority'] = 'Не указана важность тикета.';
$_lang['TicketsErrorMessage'] = 'Не указано сообщение тикета.';
$_lang['TicketsErrorNoTicket'] = 'Тикет не найден. Возможно он был удален.';


#####################################################################################
##################### billing.php :: changetarif
#####################################################################################

$_lang['ChangeTitle'] = 'Смена тарифного плана';
$_lang['ChangeChangeTarifSuccess'] = 'Тарифный план успешно изменен.';
$_lang['ChangeErrorChange'] = 'Не удалось сменить тарифный план на сервере.';
$_lang['ChangeDomain'] = 'Домен';
$_lang['ChangeTarif'] = 'Тарифный план';
$_lang['ChangeNewTarif'] = 'Новый тарифный план';

$_lang['ChangeErrorNoNewTarif'] = 'Не выбран новый тарифный план.';
$_lang['ChangeErrorNoAccessTarif'] = 'Вы не можете перейти на данный тарифный план.';
$_lang['ChangeErrorNoOrder'] = 'Заказ не найден.';


#####################################################################################
##################### billing.php :: catalog
#####################################################################################

$_lang['CatTitle'] = 'Каталог сайтов';
$_lang['CatSiteDeleteSuccess'] = 'Сайт успешно удален из каталога.';
$_lang['CatSiteIP'] = 'IP-адрес сайта';
$_lang['CatIPDenied'] = 'не разрешен для добавления в каталог';
$_lang['CatNewSiteSuccess'] = 'Сайт успешно добавлен в каталог.';
$_lang['CatSiteEditSuccess'] = 'Информацие о сайте успешно изменена.';
$_lang['CatAdding'] = 'Добавление';
$_lang['CatEditing'] = 'Редактирование';
$_lang['CatSaita'] = 'сайта';
$_lang['CatSiteName'] = 'Название';
$_lang['CatSiteDomain'] = 'Домен';
$_lang['CatWithoutHttp'] = 'без http';
$_lang['CatSiteOpisanie'] = 'Описание';
$_lang['CatYourSites'] = 'Ваши сайты в каталоге';
$_lang['CatChange'] = 'Изменить';
$_lang['CatDeleteAlert'] = 'Вы уверены, что хотите удалить сайт из каталога?';
$_lang['CatDelete'] = 'Удалить';
$_lang['CatTotalSites'] = 'Всего сайтов';
$_lang['CatAddSite'] = 'Добавить сайт в каталог';

$_lang['CatErrorSite'] = 'Не указано название сайта.';
$_lang['CatErrorDomain'] = 'Не указан домен сайта.';
$_lang['CatErrorDomainSymbol'] = 'Запрещенные сиволы в домене сайта.';
$_lang['CatErrorOpisanie'] = 'Не указано описание сайта.';
$_lang['CatErrorIP'] = 'Не удается получить ip-адрес домена.';


#####################################################################################
##################### billing.php :: addfunds
#####################################################################################

$_lang['FundsTitle'] = 'Пополнение внутреннего баланса';
$_lang['FundsMinSumm'] = 'Минимальная сумма пополнения';
$_lang['FundsSumm'] = 'Сумма пополнения';
$_lang['FundsGotoPay'] = 'Перейти к оплате счета';

#####################################################################################
##################### billing.php :: catalogsregform
#####################################################################################

$_lang['CatalogTitle'] = 'Регистрация сайта в каталогах';
$_lang['CatalogSendSuccess'] = 'Ваша заявка успешно отправлена. С Вами свяжется администрация.';

$_lang['CatalogInfo'] = 'Для регистрации Вашего сайта в каталогах и поисковиках, пожалуйста, заполните форму ниже.<br>Знак <b>*</b> обозначает поля, обязательные для заполнения.';

$_lang['CatalogCanInput'] = 'можно ввести';
$_lang['CatalogSymbols'] = 'символов';

$_lang['CatalogMainTematika'] = 'Основная тематика сайта';
$_lang['CatalogDopTematika'] = 'Дополнительные тематики сайта';
$_lang['CatalogDopTematikaComment'] = 'Обязательно выберите все те рубрики, которые подходят для данного сайта, можно выбрать несколько, удерживая <b>ctrl</b>';
$_lang['CatalogURL'] = 'URL Страницы';
$_lang['CatalogURLComment'] = 'Проверьте, что ввели правильный URL';
$_lang['CatalogFullSiteName'] = 'Название сайта полное';
$_lang['CatalogFullSiteNameComment'] = 'Не используйте слова, засоряющие поисковики (халява, crack, porno и т.п.), т.к. в этом случае Ваш сайт не будет прорегистрирован.';
$_lang['CatalogMediumSiteName'] = 'Название сайта среднее';
$_lang['CatalogMediumSiteNameComment'] = 'Это название необходимо для тех каталогов, которые принимают короткое название длиной не более 70 символов';
$_lang['CatalogSmallSiteName'] = 'Название сайта краткое';
$_lang['CatalogSmallSiteNameComment'] = 'Это название необходимо для тех каталогов, которые принимают короткое название длиной не более 50 символов';
$_lang['CatalogFullDescr'] = 'Описание сайта полное';
$_lang['CatalogFullDescrComment'] = 'Пожалуйста, давайте лаконичное и емкое описание, но ключевые моменты постарайтесь расположить вначале.<br>Не используйте слова, засоряющие поисковики (crack, porno, warez и т.п.), т.к. в этом случае Ваш сайт не будет прорегистрирова.';
$_lang['CatalogMediumDescr'] = 'Описание сайта среднее';
$_lang['CatalogMediumDescrComment'] = 'Это описание необходимо для тех каталогов, которые принимают короткое описание длиной не более 250 символов';
$_lang['CatalogSmallDescr'] = 'Описание сайта краткое';
$_lang['CatalogSmallDescrComment'] = 'Это описание необходимо для тех каталогов, которые принимают короткое описание длиной не более 150 символов';
$_lang['CatalogKeyWords'] = 'Ключевые слова';
$_lang['CatalogViaComma'] = 'через запятую';
$_lang['CatalogName'] = 'Ваше Имя';
$_lang['CatalogEmail'] = 'Email ресурса';
$_lang['CatalogEmailComment'] = 'на него будут приходить подтверждения регистрации и возможен спам, поэтому рекомендуем <a class=rootlink href="http://passport.yandex.ru/passport?mode=register&msg=mail&retpath=http://mail.yandex.ru">зарегистрировать</a> отдельный адрес на yandex.ru вида vashdomenRu@yandex.ru (используйте только латинские символы и цифры, без точек, тире и почеркиваний), а уже в настройках этого ящика можно настроить пересылку на Ваш нормальный адрес, если ящик будет завален спамом - Вы всегда сможете его отключить, но указание существующего ящика обязательно, так как приходящая в него информация Вам будет необходима!';
$_lang['CatalogPassword'] = 'Пароль для каталогов';
$_lang['CatalogPasswordComment'] = '(Латинскими буквами) оптимально 8 символов';
$_lang['CatalogBannerUrl'] = 'URL баннера сайта (88x31)';
$_lang['CatalogBannerUrlComment'] = 'если есть';
$_lang['CatalogUrlForLinks'] = 'URL страницы, где Вы будете размещать обратные ссылки каталогов';
$_lang['CatalogUrlForLinksComment'] = 'если не планируете размещать - укажите в этом поле URL регистрируемой страницы';
$_lang['CaalogRegion'] = 'Регион сайта';
$_lang['CaalogRegionComment'] = 'Необходимо выбрать максимально точно, страну или регион в России';
$_lang['CatalogCountry'] = 'Страна';
$_lang['CatalogCountryComment'] = 'к которой больше всего относится сайт';
$_lang['CatalogCity'] = 'Город';
$_lang['CatalogCityComment'] = 'к которому больше всего относится сайт';
$_lang['CatalogPhone'] = 'Телефон';
$_lang['CatalogFax'] = 'Факс';
$_lang['CatalogComments'] = 'Комментарии';
$_lang['CataloCommentsComment'] = 'Способ оплаты, дата, сумма платежа и т.п.<br>RootPanel номер заказа этой услуги (если есть).<br> Иными словами, информация для возможности проверки платежа.';
$_lang['CatalogCleanFields'] = 'Очистить Все Поля';

$_lang['CatalogTem01'] = 'Авто Мото';
$_lang['CatalogTem02'] = 'Администрации';
$_lang['CatalogTem03'] = 'Банки';
$_lang['CatalogTem04'] = 'Безопасность';
$_lang['CatalogTem05'] = 'Бизнес и Финансы';
$_lang['CatalogTem06'] = 'Города Регионы';
$_lang['CatalogTem07'] = 'Дети';
$_lang['CatalogTem08'] = 'Дизайн';
$_lang['CatalogTem09'] = 'Домашние Странички';
$_lang['CatalogTem10'] = 'Железо';
$_lang['CatalogTem11'] = 'Животные';
$_lang['CatalogTem12'] = 'Законодательство';
$_lang['CatalogTem13'] = 'Здоровье';
$_lang['CatalogTem14'] = 'Знакомства';
$_lang['CatalogTem15'] = 'Игры';
$_lang['CatalogTem16'] = 'Интернет';
$_lang['CatalogTem17'] = 'Искусство';
$_lang['CatalogTem18'] = 'История';
$_lang['CatalogTem19'] = 'Кино';
$_lang['CatalogTem20'] = 'Классификаторы';
$_lang['CatalogTem21'] = 'Компании';
$_lang['CatalogTem22'] = 'Компьютеры';
$_lang['CatalogTem23'] = 'Литература';
$_lang['CatalogTem24'] = 'Медицина';
$_lang['CatalogTem25'] = 'Мода';
$_lang['CatalogTem26'] = 'Музыка';
$_lang['CatalogTem27'] = 'Наука';
$_lang['CatalogTem28'] = 'Недвижимость';
$_lang['CatalogTem29'] = 'Образование';
$_lang['CatalogTem30'] = 'Политика';
$_lang['CatalogTem31'] = 'Порталы';
$_lang['CatalogTem32'] = 'Природа';
$_lang['CatalogTem33'] = 'Провайдеры';
$_lang['CatalogTem34'] = 'Программы';
$_lang['CatalogTem35'] = 'Продукты питания';
$_lang['CatalogTem36'] = 'Прочее';
$_lang['CatalogTem37'] = 'Путешествия';
$_lang['CatalogTem38'] = 'Работа';
$_lang['CatalogTem39'] = 'Радио';
$_lang['CatalogTem40'] = 'Развлечения';
$_lang['CatalogTem41'] = 'Разное';
$_lang['CatalogTem42'] = 'Реклама';
$_lang['CatalogTem43'] = 'Религия';
$_lang['CatalogTem44'] = 'СМИ Периодика';
$_lang['CatalogTem45'] = 'Связь';
$_lang['CatalogTem46'] = 'Сервисы';
$_lang['CatalogTem47'] = 'Спорт';
$_lang['CatalogTem48'] = 'Строительство';
$_lang['CatalogTem49'] = 'Театр';
$_lang['CatalogTem50'] = 'Телевидение';
$_lang['CatalogTem51'] = 'Техника';
$_lang['CatalogTem52'] = 'Технологии';
$_lang['CatalogTem53'] = 'Товары и Услуги';
$_lang['CatalogTem54'] = 'Транспорт';
$_lang['CatalogTem55'] = 'Туризм';
$_lang['CatalogTem56'] = 'Увлечения и Хобби';
$_lang['CatalogTem57'] = 'Фармацевтика';
$_lang['CatalogTem58'] = 'Халява в Интернете';
$_lang['CatalogTem59'] = 'Экспертиза';
$_lang['CatalogTem60'] = 'Электроника';
$_lang['CatalogTem61'] = 'Юниксоидам';
$_lang['CatalogTem62'] = 'Юридические Услуги';
$_lang['CatalogTem63'] = 'Эротика';

$_lang['CatalogReg01'] = 'Алтайский край';
$_lang['CatalogReg02'] = 'Амурская область';
$_lang['CatalogReg03'] = 'Архангельская область';
$_lang['CatalogReg04'] = 'Астраханская область';
$_lang['CatalogReg05'] = 'Башкортостан';
$_lang['CatalogReg06'] = 'Белгородская область';
$_lang['CatalogReg07'] = 'Брянская область';
$_lang['CatalogReg08'] = 'Бурятия';
$_lang['CatalogReg09'] = 'Владимирская область';
$_lang['CatalogReg10'] = 'Волгоградская область';
$_lang['CatalogReg11'] = 'Вологодская область';
$_lang['CatalogReg12'] = 'Воронежская область';
$_lang['CatalogReg13'] = 'Дагестан';
$_lang['CatalogReg14'] = 'Ивановская область';
$_lang['CatalogReg15'] = 'Иркутская Область';
$_lang['CatalogReg16'] = 'Кабардино-Балкария';
$_lang['CatalogReg17'] = 'Калининградская область';
$_lang['CatalogReg18'] = 'Калмыкия';
$_lang['CatalogReg19'] = 'Калужская область';
$_lang['CatalogReg20'] = 'Карелия';
$_lang['CatalogReg21'] = 'Кемеровская область';
$_lang['CatalogReg22'] = 'Кировская область';
$_lang['CatalogReg23'] = 'Коми';
$_lang['CatalogReg24'] = 'Костромская область';
$_lang['CatalogReg25'] = 'Краснодарский край';
$_lang['CatalogReg26'] = 'Красноярский край';
$_lang['CatalogReg27'] = 'Курганская область';
$_lang['CatalogReg28'] = 'Курская область';
$_lang['CatalogReg29'] = 'Ленинградская область';
$_lang['CatalogReg30'] = 'Липецкая область';
$_lang['CatalogReg31'] = 'Марий-Эл';
$_lang['CatalogReg32'] = 'Москва';
$_lang['CatalogReg33'] = 'Московская область';
$_lang['CatalogReg34'] = 'Мордовия';
$_lang['CatalogReg35'] = 'Мурманская область';
$_lang['CatalogReg36'] = 'Нижегородская область';
$_lang['CatalogReg37'] = 'Новгородская область';
$_lang['CatalogReg38'] = 'Новосибирская область';
$_lang['CatalogReg39'] = 'Омская область';
$_lang['CatalogReg40'] = 'Орловская область';
$_lang['CatalogReg41'] = 'Оренбургская область';
$_lang['CatalogReg42'] = 'Пензенская область';
$_lang['CatalogReg43'] = 'Пермская область';
$_lang['CatalogReg44'] = 'Камчатская область';
$_lang['CatalogReg45'] = 'Приморский край';
$_lang['CatalogReg46'] = 'Псковская область';
$_lang['CatalogReg47'] = 'Ростовская область';
$_lang['CatalogReg48'] = 'Рязанская область';
$_lang['CatalogReg49'] = 'Самарская область';
$_lang['CatalogReg50'] = 'Санкт-Петербург';
$_lang['CatalogReg51'] = 'Саратовская область';
$_lang['CatalogReg52'] = 'Сахалинская область';
$_lang['CatalogReg53'] = 'Свердловская область';
$_lang['CatalogReg54'] = 'Смоленская область';
$_lang['CatalogReg55'] = 'Ставропольский край';
$_lang['CatalogReg56'] = 'Тамбовская область';
$_lang['CatalogReg57'] = 'Татарстан';
$_lang['CatalogReg58'] = 'Тверская область';
$_lang['CatalogReg59'] = 'Томская область';
$_lang['CatalogReg60'] = 'Тува';
$_lang['CatalogReg61'] = 'Тульская область';
$_lang['CatalogReg62'] = 'Тюменская область';
$_lang['CatalogReg63'] = 'Удмуртия';
$_lang['CatalogReg64'] = 'Ульяновская область';
$_lang['CatalogReg65'] = 'Хабаровский край';
$_lang['CatalogReg66'] = 'Ханты-Мансийский АО';
$_lang['CatalogReg67'] = 'Челябинская область';
$_lang['CatalogReg68'] = 'Читинская область';
$_lang['CatalogReg69'] = 'Чувашия';
$_lang['CatalogReg70'] = 'Якутия (Саха)';
$_lang['CatalogReg71'] = 'Ярославская область';
$_lang['CatalogReg72'] = 'Азербайджан';
$_lang['CatalogReg73'] = 'Армения';
$_lang['CatalogReg74'] = 'Беларусь';
$_lang['CatalogReg75'] = 'Казахстан';
$_lang['CatalogReg76'] = 'Кыргызская Республика';
$_lang['CatalogReg77'] = 'Латвия';
$_lang['CatalogReg78'] = 'Литва';
$_lang['CatalogReg79'] = 'Молдова';
$_lang['CatalogReg80'] = 'Таджикистан';
$_lang['CatalogReg81'] = 'Туркменистан';
$_lang['CatalogReg82'] = 'Узбекистан';
$_lang['CatalogReg83'] = 'Эстония';
$_lang['CatalogReg84'] = 'Украина';
$_lang['CatalogReg85'] = 'Грузия';
$_lang['CatalogReg86'] = 'Дальнее Зарубежье';

#####################################################################################
##################### billing.php :: feedback
#####################################################################################

$_lang['FeedTitle'] = 'Обратная связь';
$_lang['FeedSendSuccess'] = 'Сообщение успешно отправлено.';
$_lang['FeedContactViaICQ'] = 'Связаться через ICQ';
$_lang['FeedContactPhones'] = 'Контактные телефоны';
$_lang['FeedName'] = 'ФИО';
$_lang['FeedEmail'] = 'Email';
$_lang['FeedICQ'] = 'ICQ';
$_lang['FeedOtdel'] = 'Отдел';
$_lang['FeedManager'] = 'Менеджер';
$_lang['FeedSupport'] = 'Тех. поддержка';
$_lang['FeedSubject'] = 'Тема';
$_lang['FeedMessage'] = 'Сообщение';


$_lang['FeedErrorSupportOnlyViaTickets'] = 'Поддержка зарегистрированных пользователей осуществляется только через систему тикетов!';
$_lang['FeedErrorNoName'] = 'Вы не указали Ваше имя.';
$_lang['FeedErrorBadEmail'] = 'Указан неправильный Email адрес.';
$_lang['FeedErrorNoOtdel'] = 'Вы не указали отдел с которым хотите связаться.';
$_lang['FeedErrorNoSubject'] = 'Вы не указали тему сообщения.';
$_lang['FeedErrorNoMessage'] = 'Вы не ввели Ваше сообщение.';


#####################################################################################
##################### billing.php :: forgotpass
#####################################################################################

$_lang['ForgotTitle'] = 'Восстановление пароля';
$_lang['ForgotSuccess'] = 'Пароль успешно изменен. Теперь Вы можете';
$_lang['ForgotEnterToBilling'] = 'войти в биллинг';
$_lang['ForgotEnterNewPassword'] = 'Введите новый пароль';
$_lang['ForgotReEnterNewPassword'] = 'Подтвердите новый пароль';
$_lang['ForgotPrefixDlya'] = 'для';
$_lang['ForgotInfoSended'] = 'На Ваш email отправлена информация по восстановлению пароля.';
$_lang['ForgorInputYourNameOrEmail'] = 'Введите Ваш логин или Email';


$_lang['ForgotErrorNameOrEmail'] = 'Вы не указали Ваш логин или Email.';
$_lang['ForgotErrorNoUserWithNameOrEmail'] = 'Не найден пользователь с таким логином или Email.';

#####################################################################################
##################### billing.php :: news
#####################################################################################

$_lang['NewsTitle'] = 'Новости';
$_lang['NewsSeeAllNews'] = 'Просмотреть все новости...';

$_lang['NewsErrorNotFound'] = 'Новость не найдена.';


#####################################################################################
##################### billing.php :: order
#####################################################################################

$_lang['OrderTitle'] = 'Оформление заказа';
$_lang['OrderFreeDomainInZone'] = 'Бесплатный домен на год в зоне';
$_lang['OrderComment'] = 'Комментарий';
$_lang['OrderStep'] = 'Шаг';
$_lang['OrderStepFrom'] = 'из';

$_lang['OrderSelectUserType'] = 'Выбор типа клиента';
$_lang['OrderRegedUser'] = 'Зарегистрированный клиент';
$_lang['OrderNewClient'] = 'Новый клиент';
$_lang['OrderEnterLoginAndPassword'] = 'Введите Ваши логин и пароль';
$_lang['OrderLogin'] = 'Логин в системе';
$_lang['OrderLoginComment'] = 'от 3 до 13 символов a-z,0-9';
$_lang['OrderPassword'] = 'Пароль';
$_lang['OrderPasswordComment'] = 'не менее 6 символов';
$_lang['OrderRegData'] = 'Регистрационные данные';
$_lang['OrderRePassword'] = 'Повтор пароля';
$_lang['OrderEmail'] = 'Ваш email';
$_lang['OrderUserType'] = 'Тип клиента';
$_lang['OrderUserPrivatePerson'] = 'Частное лицо';
$_lang['OrderUserOrg'] = 'Организация';
$_lang['OrderAboutUsFrom'] = 'Откуда Вы о нас узнали?';
$_lang['OrderRules'] = 'Правила пользования';
$_lang['OrderDogovorOferta'] = 'Договор-оферта';

$_lang['OrderPrefixS'] = 'С';	
	$_lang['OrderRules2'] = 'правилами пользования';
$_lang['OrderSUsloviyami'] = 'С условиями';
	$_lang['OrderDogovorOferta2'] = 'договора-оферты';
$_lang['OrderObyazVipolnyat'] = 'ознакомлен, обязуюсь выполнять.';

$_lang['OrderParamsOfOrder'] = 'Параметры заказа';
$_lang['OrderTarif'] = 'Тарифный план';
$_lang['OrderRazovoZaUstanovku'] = 'разово';
$_lang['OrderSokraschenieMonth'] = 'мес.';
$_lang['OrderDomain'] = 'Доменное имя';
$_lang['OrderDomainNew'] = 'регистрация доменного имени у нас';
$_lang['OrderDomainExists'] = 'доменное имя уже зарегистрировано';
$_lang['OrderWithoutDomain'] = 'без доменного имени';
$_lang['OrderDomainComment'] = 'например, example.com';
$_lang['OrderResultOfCheck'] = 'Результат проверки';
$_lang['OrderDomainSmallOneWord'] = 'домен';
$_lang['OrderDomainStatus'] = 'статус домена';
$_lang['OrderDomainStatusErrorNotCorrect'] = 'некорректный домен';
$_lang['OrderDomainStatusErrorLength'] = 'домен должен быть от {minWidth} до {maxWidth} символов';
$_lang['OrderRegIn'] = 'регистрация в';
$_lang['OrderNotSupported'] = 'не поддерживается';
$_lang['OrderDomainStatusErrorOtherUser'] = 'домен заказан другим пользователем';
$_lang['OrderDomainStatusNotFree'] = 'домен занят';
$_lang['OrderDomainStatusFree'] = 'домен свободен';
$_lang['OrderInputOtherDomains'] = 'ввести другие доменные имена';
$_lang['OrderDNS'] = 'DNS-сервера';
$_lang['OrderDNSOne'] = 'одинаковые для всех доменов';
$_lang['OrderDNSEach'] = 'разные для всех доменов';
$_lang['OrderAvailZones'] = 'Доступные доменные зоны';
$_lang['OrderDomains'] = 'Доменные имена';
$_lang['OrderDomainsComment'] = 'Каждый домен необходимо вводить с новой строки.';
$_lang['OrderDomainsCheck'] = 'проверить доменные имена';
$_lang['OrderDomainsCheckAlert'] = 'Сначала необходимо проверить введенные доменные имена!';

$_lang['OrderDomainRegistrator'] = 'Регистратор доменного имени';
$_lang['OrderSrokZakaza'] = 'Срок заказа';
$_lang['OrderSrokSmall'] = 'срок';
$_lang['OrderCostSmall'] = 'цена';
$_lang['OrderDiscountSmall'] = 'скидка';
$_lang['OrderTotalSmall'] = 'итого';
$_lang['OrderAkciyaDomain'] = 'Акция! Домен в подарок!';
$_lang['OrderPriZakaze'] = 'При заказе тарифного плана';
$_lang['OrderNaSrok'] = 'на срок';
$_lang['OrderPoluchaeteVPodarok'] = 'получаете бесплатный домен на один год в одной из следующих зон';
$_lang['OrderAddons'] = 'Дополнительные услуги';
$_lang['OrderRazovo'] = 'разово';
$_lang['OrderFree'] = 'бесплатно';
$_lang['OrderServerPlace'] = 'Месторасположение сервера';
$_lang['OrderYear'] = 'год';
$_lang['OrderNS1'] = 'NS1';
$_lang['OrderNS1Comment'] = 'первичный (primary) DNS-сервер';
$_lang['OrderNS2'] = 'NS2';
$_lang['OrderNS2Comment'] = 'вторичный (secondary) DNS-сервер';
$_lang['OrderNS3'] = 'NS3';
$_lang['OrderNS4'] = 'NS4';
$_lang['OrderDomainRegistratorSmallOneWord'] = 'регистратор';

$_lang['OrderYourOrder'] = 'Ваш заказ';
$_lang['OrderUsluga'] = 'Наименование услуги';
$_lang['OrderSumma'] = 'Сумма';
$_lang['OrderPrefixNa'] = 'на';
$_lang['OrderSokraschenieGod'] = 'г.';
$_lang['OrderTotal'] = 'Итого';
$_lang['OrderDopolnitelno'] = 'Дополнительно';
$_lang['OrderPayMethod'] = 'Способ оплаты';
$_lang['OrderButtonOrder'] = 'Заказать';

$_lang['OrderErrorLoginBegin'] = 'Логин должен начинаться с a-z';
$_lang['OrderErrorLoginSymbols'] = 'Логин должен состоять из символов a-z,0-9';
$_lang['OrderErrorLoginLength'] = 'Длина логина должна быть от 3 до 13 символов.';
$_lang['OrderErrorWrongEmail'] = 'Указан неправильный Email адрес.';
$_lang['OrderErrorNoOrg'] = 'Не указано являетесь вы Частным лицом или Организацией.';
$_lang['OrderErrorNoRules'] = 'Вы не согласились с условиями предоставления услуг.';
$_lang['OrderErrorLoginExists'] = 'Пользователь с таким логином уже зарегистрирован.';
$_lang['OrderErrorAlreadyReged'] = 'Вы уже зарегистрированы.';

$_lang['OrderErrorNoTarif'] = 'Не выбран тарифный план.';
$_lang['OrderErrorNoDomainReg'] = 'Не указано нужно ли регистрировать доменное имя.';
$_lang['OrderErrorNoDomain'] = 'Не указано доменное имя.';
$_lang['OrderErrorDomainLength'] = 'Доменное имя должно быть не короче {minWidth} символов и не длиннее {maxWidth}.';
$_lang['OrderErrorDomainRegistered'] = 'Доменное имя уже зарегистрировано.';
$_lang['OrderErrorTarifForDomainOrderByAnotherUser'] = 'Тарифный план для указанного доменного имени уже заказан другим пользователем.';
$_lang['OrderErrorDomainOrderByAnotherUser'] = 'Указанное доменное имя уже заказано другим пользователем.';
$_lang['OrderErrorNoFreeDomains'] = 'Не указано ни одного свободного доменного имени.';
$_lang['OrderErrorNoDnsType'] = 'Не указан тип DNS-серверов.';

$_lang['OrderErrorNoSrokZakaza'] = 'Не выбран срок заказа.';
$_lang['OrderErrorNoPrymaryNS'] = 'Не указан первичный DNS-сервер.';
$_lang['OrderErrorNoSecondaryNS'] = 'Не указан вторичный DNS-сервер.';
$_lang['OrderErrorNoOneOfNS'] = 'Не указан первичный или вторичный ДНС-сервер для одного из доменов.';

$_lang['OrderErrorNetSrokovZakaza'] = 'Доступные сроки заказа отсутствуют. Укажите другой тарифный план.';


#####################################################################################
##################### billing.php :: clients
#####################################################################################

$_lang['SitesTitle'] = 'Сайты наших клиентов';
$_lang['SitesCatalogDisabled'] = 'Каталог сайтов отключен.';


#####################################################################################
##################### billing.php :: whois
#####################################################################################

$_lang['WhoisTitle'] = 'Проверка домена';
$_lang['WhoisDomainName'] = 'Доменное имя';
$_lang['WhoisSelectZones'] = 'выберите зоны';
$_lang['WhoisSelectZone'] = 'выберите зону';
$_lang['WhoisCheckButton'] = 'Проверить';
$_lang['WhoisCheckResult'] = 'Результат проверки';
$_lang['WhoisOrderHostAndDomain'] = 'заказать хостинг и домен';
$_lang['WhoisOrderDomain'] = 'заказать домен';
$_lang['WhoisOrderHost'] = 'заказать хостинг';
$_lang['WhoisAvailError'] = 'ошибка';
$_lang['WhoisAvailFree'] = 'свободен';
$_lang['WhoisAvailNotFree'] = 'занят';
$_lang['WhoisDomainNotActive'] = 'доменная зона не активна';
$_lang['WhoisWhois'] = 'whois';
$_lang['WhoisFreeDomainsInOtherZones'] = 'Свободные домены в других доменных зонах';
$_lang['WhoisNoFreeDomainsInOtherZones'] = 'нет свободных доменов в других доменных зонах';
$_lang['WhoisAboutDomainLength'] = 'Даже если одно- или двух-символьное доменное имя свободно, в большинстве случаев это не значит, что его можно зарегистрировать. В частности это касается популярных доменных зон.';
$_lang['WhoisDomainInfo'] = 'Информация о домене';

$_lang['WhoisErrorDomain'] = 'Вы не указали доменное имя.';
$_lang['WhoisErrorZone'] = 'Вы не указали доменную зону.';

#####################################################################################
##################### Countrys
#####################################################################################

$_lang['Country'] = array();
$_lang['Country']['RU'] = 'Россия';
$_lang['Country']['UA'] = 'Украина';
$_lang['Country']['AZ'] = 'Азербайджан';
$_lang['Country']['AM'] = 'Армения';
$_lang['Country']['BY'] = 'Беларусь';
$_lang['Country']['GE'] = 'Грузия';
$_lang['Country']['KZ'] = 'Казахстан';
$_lang['Country']['KG'] = 'Киргизия';
$_lang['Country']['LV'] = 'Латвия';
$_lang['Country']['LT'] = 'Литва';
$_lang['Country']['MD'] = 'Молдова';
$_lang['Country']['TJ'] = 'Таджикистан';
$_lang['Country']['TM'] = 'Туркмения';
$_lang['Country']['UZ'] = 'Узбекистан';
$_lang['Country']['EE'] = 'Эстония';
$_lang['Country']['AU'] = 'Австралия';
$_lang['Country']['AT'] = 'Австрия';
$_lang['Country']['AL'] = 'Албания';
$_lang['Country']['DZ'] = 'Алжир';
$_lang['Country']['AS'] = 'Американское Самоа';
$_lang['Country']['AI'] = 'Ангилья';
$_lang['Country']['GB'] = 'Англия';
$_lang['Country']['AO'] = 'Ангола';
$_lang['Country']['AD'] = 'Андорра';
$_lang['Country']['AQ'] = 'Антарктида';
$_lang['Country']['AG'] = 'Антигуа и Барбадос';
$_lang['Country']['AR'] = 'Аргентина';
$_lang['Country']['AW'] = 'Аруба';
$_lang['Country']['AF'] = 'Афганистан';
$_lang['Country']['BS'] = 'Багамы';
$_lang['Country']['BD'] = 'Бангладеш';
$_lang['Country']['BB'] = 'Барбадос';
$_lang['Country']['BH'] = 'Бахрейн';
$_lang['Country']['BZ'] = 'Белиз';
$_lang['Country']['BE'] = 'Бельгия';
$_lang['Country']['BJ'] = 'Бенин';
$_lang['Country']['BM'] = 'Бермуды';
$_lang['Country']['BG'] = 'Болгария';
$_lang['Country']['BO'] = 'Боливия';
$_lang['Country']['BA'] = 'Босния и Герцеговина';
$_lang['Country']['BW'] = 'Ботсвана';
$_lang['Country']['BR'] = 'Бразилия';
$_lang['Country']['IO'] = 'Британская территория в Индийском океане';
$_lang['Country']['BN'] = 'Бруней-Даруссалам';
$_lang['Country']['BF'] = 'Буркина-Фасо';
$_lang['Country']['BI'] = 'Бурунди';
$_lang['Country']['BT'] = 'Бутан';
$_lang['Country']['VU'] = 'Вануату';
$_lang['Country']['HU'] = 'Венгрия';
$_lang['Country']['VE'] = 'Венесуэла';
$_lang['Country']['VG'] = 'Виргинские Острова, Британские';
$_lang['Country']['VI'] = 'Виргинские острова, США';
$_lang['Country']['VN'] = 'Вьетнам';
$_lang['Country']['GA'] = 'Габон';
$_lang['Country']['HT'] = 'Гаити';
$_lang['Country']['GY'] = 'Гайана';
$_lang['Country']['GM'] = 'Гамбия';
$_lang['Country']['GH'] = 'Гана';
$_lang['Country']['GP'] = 'Гваделупа';
$_lang['Country']['GT'] = 'Гватемала';
$_lang['Country']['GN'] = 'Гвинея';
$_lang['Country']['GW'] = 'Гвинея-Бисау';
$_lang['Country']['DE'] = 'Германия';
$_lang['Country']['GI'] = 'Гибралтар';
$_lang['Country']['HN'] = 'Гондурас';
$_lang['Country']['HK'] = 'Гонконг';
$_lang['Country']['GD'] = 'Гренада';
$_lang['Country']['GL'] = 'Гренландия';
$_lang['Country']['GR'] = 'Греция';
$_lang['Country']['GU'] = 'Гуам';
$_lang['Country']['DK'] = 'Дания';
$_lang['Country']['DJ'] = 'Джибути';
$_lang['Country']['DM'] = 'Доминика';
$_lang['Country']['DO'] = 'Доминиканская Республика';
$_lang['Country']['EG'] = 'Египет';
$_lang['Country']['ZM'] = 'Замбия';
$_lang['Country']['EH'] = 'Западная Сахара';
$_lang['Country']['ZW'] = 'Зимбабве';
$_lang['Country']['IL'] = 'Израиль';
$_lang['Country']['IN'] = 'Индия';
$_lang['Country']['ID'] = 'Индонезия';
$_lang['Country']['JO'] = 'Иордания';
$_lang['Country']['IQ'] = 'Ирак';
$_lang['Country']['IR'] = 'Иран';
$_lang['Country']['IE'] = 'Ирландия';
$_lang['Country']['IS'] = 'Исландия';
$_lang['Country']['ES'] = 'Испания';
$_lang['Country']['IT'] = 'Италия';
$_lang['Country']['YE'] = 'Йемен';
$_lang['Country']['CV'] = 'Кабо-Верде';
$_lang['Country']['KH'] = 'Камбоджа';
$_lang['Country']['CM'] = 'Камерун';
$_lang['Country']['CA'] = 'Канада';
$_lang['Country']['QA'] = 'Катар';
$_lang['Country']['KE'] = 'Кения';
$_lang['Country']['CY'] = 'Кипр';
$_lang['Country']['KI'] = 'Кирибати';
$_lang['Country']['CN'] = 'Китай';
$_lang['Country']['CC'] = 'Кокосовые (Килинг) острова';
$_lang['Country']['CO'] = 'Колумбия';
$_lang['Country']['KM'] = 'Коморы';
$_lang['Country']['CG'] = 'Конго, Республика';
$_lang['Country']['CD'] = 'Конго, Демократическая республика';
$_lang['Country']['KP'] = 'Корея, народно-демократическая республика';
$_lang['Country']['KR'] = 'Корея, республика';
$_lang['Country']['CR'] = 'Коста-Рика';
$_lang['Country']['CI'] = 'Кот д`Ивуар';
$_lang['Country']['CU'] = 'Куба';
$_lang['Country']['KW'] = 'Кувейт';
$_lang['Country']['LA'] = 'Лаосская Народно-Демократическая Республика';
$_lang['Country']['LS'] = 'Лесото';
$_lang['Country']['LR'] = 'Либерия';
$_lang['Country']['LB'] = 'Ливан';
$_lang['Country']['LY'] = 'Ливийская Арабская Джамахирия';
$_lang['Country']['LI'] = 'Лихтенштейн';
$_lang['Country']['LU'] = 'Люксембург';
$_lang['Country']['MU'] = 'Маврикий';
$_lang['Country']['MR'] = 'Мавритания';
$_lang['Country']['MG'] = 'Мадагаскар';
$_lang['Country']['YT'] = 'Майотта';
$_lang['Country']['MO'] = 'Макао';
$_lang['Country']['MK'] = 'Македония';
$_lang['Country']['MW'] = 'Малави';
$_lang['Country']['MY'] = 'Малайзия';
$_lang['Country']['ML'] = 'Мали';
$_lang['Country']['UM'] = 'Малые Тихоокеанские Отдаленные острова США';
$_lang['Country']['MV'] = 'Мальдивы';
$_lang['Country']['MT'] = 'Мальта';
$_lang['Country']['MA'] = 'Марокко';
$_lang['Country']['MQ'] = 'Мартиника';
$_lang['Country']['MH'] = 'Маршалловы Острова';
$_lang['Country']['MX'] = 'Мексика';
$_lang['Country']['FM'] = 'Микронезия';
$_lang['Country']['MZ'] = 'Мозамбик';
$_lang['Country']['MC'] = 'Монако';
$_lang['Country']['MN'] = 'Монголия';
$_lang['Country']['MS'] = 'Монтсеррат';
$_lang['Country']['MM'] = 'Мьянма';
$_lang['Country']['NA'] = 'Намибия';
$_lang['Country']['NR'] = 'Науру';
$_lang['Country']['NP'] = 'Непал';
$_lang['Country']['NE'] = 'Нигер';
$_lang['Country']['NG'] = 'Нигерия';
$_lang['Country']['AN'] = 'Нидерландские Антилы';
$_lang['Country']['NL'] = 'Нидерланды';
$_lang['Country']['NI'] = 'Никарагуа';
$_lang['Country']['NU'] = 'Ниуэ';
$_lang['Country']['NZ'] = 'Новая Зеландия';
$_lang['Country']['NC'] = 'Новая Каледония';
$_lang['Country']['NO'] = 'Норвегия';
$_lang['Country']['AE'] = 'Объединенные Арабские Эмираты';
$_lang['Country']['OM'] = 'Оман';
$_lang['Country']['KY'] = 'Острова Кайман';
$_lang['Country']['CK'] = 'Острова Кука';
$_lang['Country']['TC'] = 'Острова Теркс и Кайкос';
$_lang['Country']['BV'] = 'Остров Буве';
$_lang['Country']['NF'] = 'Остров Норфолк';
$_lang['Country']['CX'] = 'Остров Рождества';
$_lang['Country']['HM'] = 'Остров Херд и острова Макдональд';
$_lang['Country']['PK'] = 'Пакистан';
$_lang['Country']['PW'] = 'Палау';
$_lang['Country']['PS'] = 'Палестинская территория, оккупированная';
$_lang['Country']['PA'] = 'Панама';
$_lang['Country']['VA'] = 'Папский Престол (Государство-город Ватикан)';
$_lang['Country']['PG'] = 'Папуа-Новая Гвинея';
$_lang['Country']['PY'] = 'Парагвай';
$_lang['Country']['PE'] = 'Перу';
$_lang['Country']['PN'] = 'Питкерн';
$_lang['Country']['PL'] = 'Польша';
$_lang['Country']['PT'] = 'Португалия';
$_lang['Country']['PR'] = 'Пуэрто-Рико';
$_lang['Country']['RE'] = 'Реюньон';
$_lang['Country']['RW'] = 'Руанда';
$_lang['Country']['RO'] = 'Румыния';
$_lang['Country']['WS'] = 'Самоа';
$_lang['Country']['SM'] = 'Сан-Марино';
$_lang['Country']['ST'] = 'Сан-Томе и Принсипи';
$_lang['Country']['SA'] = 'Саудовская Аравия';
$_lang['Country']['SZ'] = 'Свазиленд';
$_lang['Country']['SH'] = 'Святая Елена';
$_lang['Country']['MP'] = 'Северные Марианские острова';
$_lang['Country']['SC'] = 'Сейшелы';
$_lang['Country']['SN'] = 'Сенегал';
$_lang['Country']['VC'] = 'Сент-Винсент и Гренадины';
$_lang['Country']['KN'] = 'Сент-Китс и Невис';
$_lang['Country']['LC'] = 'Сент-Люсия';
$_lang['Country']['PM'] = 'Сент-Пьер и Микелон';
$_lang['Country']['CS'] = 'Сербия';
$_lang['Country']['SG'] = 'Сингапур';
$_lang['Country']['SY'] = 'Сирийская Арабская Республика';
$_lang['Country']['SK'] = 'Словакия';
$_lang['Country']['SI'] = 'Словения';
$_lang['Country']['US'] = 'Соединенные Штаты';
$_lang['Country']['SB'] = 'Соломоновы острова';
$_lang['Country']['SO'] = 'Сомали';
$_lang['Country']['SD'] = 'Судан';
$_lang['Country']['SR'] = 'Суринам';
$_lang['Country']['SL'] = 'Сьерра-Леоне';
$_lang['Country']['TH'] = 'Таиланд';
$_lang['Country']['TW'] = 'Тайвань (Китай)';
$_lang['Country']['TZ'] = 'Танзания';
$_lang['Country']['TL'] = 'Тимор-Лесте';
$_lang['Country']['TG'] = 'Того';
$_lang['Country']['TK'] = 'Токелау';
$_lang['Country']['TO'] = 'Тонга';
$_lang['Country']['TT'] = 'Тринидад и Тобаго';
$_lang['Country']['TV'] = 'Тувалу';
$_lang['Country']['TN'] = 'Тунис';
$_lang['Country']['TR'] = 'Турция';
$_lang['Country']['UG'] = 'Уганда';
$_lang['Country']['WF'] = 'Уоллис и Футуна';
$_lang['Country']['UY'] = 'Уругвай';
$_lang['Country']['FO'] = 'Фарерские острова';
$_lang['Country']['FJ'] = 'Фиджи';
$_lang['Country']['PH'] = 'Филиппины';
$_lang['Country']['FI'] = 'Финляндия';
$_lang['Country']['FK'] = 'Фолклендские острова (Мальвинские)';
$_lang['Country']['FR'] = 'Франция';
$_lang['Country']['GF'] = 'Французская Гвиана';
$_lang['Country']['PF'] = 'Французская Полинезия';
$_lang['Country']['TF'] = 'Французские Южные территории';
$_lang['Country']['HR'] = 'Хорватия';
$_lang['Country']['CF'] = 'Центрально-Африканская Республика';
$_lang['Country']['TD'] = 'Чад';
$_lang['Country']['ME'] = 'Черногория';
$_lang['Country']['CZ'] = 'Чешская Республика';
$_lang['Country']['CL'] = 'Чили';
$_lang['Country']['CH'] = 'Швейцария';
$_lang['Country']['SE'] = 'Швеция';
$_lang['Country']['SJ'] = 'Шпицберген и Ян Майен';
$_lang['Country']['LK'] = 'Шри-Ланка';
$_lang['Country']['EC'] = 'Эквадор';
$_lang['Country']['GQ'] = 'Экваториальная Гвинея';
$_lang['Country']['AX'] = 'Эландские острова';
$_lang['Country']['SV'] = 'Эль-Сальвадор';
$_lang['Country']['ER'] = 'Эритрея';
$_lang['Country']['ET'] = 'Эфиопия';
$_lang['Country']['ZA'] = 'Южная Африка';
$_lang['Country']['GS'] = 'Южная Джорджия и Южные Сандвичевы острова';
$_lang['Country']['JM'] = 'Ямайка';
$_lang['Country']['JP'] = 'Япония';

#####################################################################################
##################### v1.6.0
#####################################################################################

$_lang['PaySokraschenieGrivna'] = 'грн.';
$_lang['PayPortmoneCheckBill'] = 'Если Вы уже оплатили счет через Portmone, нажмите на кнопку `Проверить статус счета`.</b>';
$_lang['PayErrorBadSumm'] = 'Неправильная сумма платежа';
$_lang['DomainsErrorRegistratorNotFound'] = 'Не найден регистратор';
$_lang['OrderAddonsOs'] = 'Операционная система';
$_lang['OrderAddonsPanel'] = 'Панель управления';
$_lang['ProfileCodeWord'] = 'Кодовое слово';
$_lang['ProfileCodeWordComment'] = 'Используется для аутентификации клиента при обращении в службу поддержки.<BR>Можно указать только один раз - после этого поле не доступно для просмотра и редактирования.';

#####################################################################################
##################### v1.6.1
#####################################################################################

$_lang['OrderZoneSmall'] = 'доменная зона';
$_lang['OrderFrom'] = 'от';
$_lang['ZonesTotal'] = 'Всего доменных зон';
$_lang['OrderCheckDomainInSelectedZones'] = 'Проверить домен в отмеченных зонах';
$_lang['OrderFreeDomainsInFavoriteZones'] = 'Свободные домены в популярных зонах';
$_lang['OrderFreeDomainsInSelectedZones'] = 'Свободные домены в выбранных зонах';
$_lang['OrderSmallOrder'] = 'заказать';
$_lang['OrdersPrintDogovor'] = 'Распечатать договор';
$_lang['ProfileEdrpou'] = 'ЄДРПОУ';
$_lang['ProfileEdrpouComment'] = 'Код в Государственном реестре предприятий и организаций (только для Украины).<BR>Пример: 23542312';

#####################################################################################
##################### v1.6.2
#####################################################################################

$_lang['Language'] = 'Язык';
$_lang['BillingMenuMail'] = 'Почта';
$_lang['MailLogsTitle'] = 'Архив почты';                                                                                                              
$_lang['MailLogsDate'] = 'Дата';
$_lang['MailLogsSubject'] = 'Тема';
$_lang['MailLogsDeleteAlert'] = 'Вы уверены, что хотите удалить сообщение?';
$_lang['MailLogsDelete'] = 'Удалить сообщение';
$_lang['MailLogsTotalMail'] = 'Всего сообщений';
$_lang['MailLogsOnPage'] = 'сообщений на странице';
$_lang['MailLogsDeleteSuccess'] = 'Сообщение успешно удалено.';
$_lang['MailLogsErrorNoMail'] = 'Сообщение не найдено. Возможно оно было удалено.';
$_lang['MailLogsView'] = 'Сообщение';

#####################################################################################
##################### v1.6.3
#####################################################################################

$_lang['TicketsClosedBySupport'] = 'Тикет закрыт службой поддержки.';
$_lang['PayGotoSMSCoin'] = 'Внимание! К сумме оплаты будет добавлен тариф Вашего сотового оператора.<BR>Если на странице мерчанта нет Вашей страны или оператора, значит сумма оплаты слишком большая.';
$_lang['TicketsDisabled'] = 'Система тикетов отключена.';
$_lang['ProfileEmail2'] = 'Альтернативный Email';
$_lang['ProfileErrorBadEmail2'] = 'Указан неправильный альтернативный Email адрес.';

#####################################################################################
##################### v1.6.4
#####################################################################################

$_lang['SettinsTitle'] = 'Настройки';
$_lang['BillingMenuSettings'] = 'Настройки';
$_lang['ProfileUserType'] = 'Тип профайла';
$_lang['ProfileOfPrivatePredprinimatel'] = 'Профайл индивидуального предпринимателя';
$_lang['OrderUserPrivatePredprinimatel'] = 'Индивидуальный предприниматель';
$_lang['OrderDomainOwner'] = 'Владелец доменного имени';
$_lang['OrderDomainOwnerSmallOneWord'] = 'владелец';
$_lang['ProfileYourProfiles'] = 'Ваши профайлы';
$_lang['Select'] = 'Выбрать';
$_lang['ProfileCreateNewProfile'] = 'Создать новый профайл';

$_lang['CalcTitle'] = 'Калькулятор тарифов';
$_lang['CalcNePodhodid'] = 'Не подходит?';
$_lang['CalcAgain'] = 'посчитать ещё';
$_lang['CalcDomainInOtherZone'] = 'или домен в другой зоне';
$_lang['CalcCalc'] = 'Рассчитать стоимость';

$_lang['FundsCouponCode'] = 'Код купона';
$_lang['FundsCouponPay'] = 'Пополнить с помощью купона';
$_lang['FundsCouponSuccess'] = 'Внутренний баланс успешно пополнен на';
$_lang['FundsErrorCoupon'] = 'Вы не можете использовать данный купон.';

$_lang['OrderPromoCode'] = 'Промо-код (скидка)';
$_lang['OrderSkidkaByPromo'] = 'Скидка по промо-коду';

$_lang['Oblast']['UA'][1] = 'АР Крым';
$_lang['Oblast']['UA'][2] = 'Винницкая обл.';
$_lang['Oblast']['UA'][3] = 'Волынская обл.';
$_lang['Oblast']['UA'][4] = 'Днепропетровская обл.';
$_lang['Oblast']['UA'][5] = 'Донецкая обл.';
$_lang['Oblast']['UA'][6] = 'Житомирская обл.';
$_lang['Oblast']['UA'][7] = 'Закарпатская обл.';
$_lang['Oblast']['UA'][8] = 'Запорожская обл.';
$_lang['Oblast']['UA'][9] = 'Ивано-Франковская обл.';
$_lang['Oblast']['UA'][10] = 'Киевская обл.';
$_lang['Oblast']['UA'][11] = 'Кировоградская обл.';
$_lang['Oblast']['UA'][12] = 'Луганская обл.';
$_lang['Oblast']['UA'][13] = 'Львовская обл.';
$_lang['Oblast']['UA'][14] = 'Николаевская обл.';
$_lang['Oblast']['UA'][15] = 'Одесская обл.';
$_lang['Oblast']['UA'][16] = 'Полтавская обл.';
$_lang['Oblast']['UA'][17] = 'Ровенская обл.';
$_lang['Oblast']['UA'][18] = 'Сумская обл.';
$_lang['Oblast']['UA'][19] = 'Тернопольская обл.';
$_lang['Oblast']['UA'][20] = 'Харьковская обл.';
$_lang['Oblast']['UA'][21] = 'Херсонская обл.';
$_lang['Oblast']['UA'][22] = 'Хмельницкая обл.';
$_lang['Oblast']['UA'][23] = 'Черкасская обл.';
$_lang['Oblast']['UA'][24] = 'Черниговская обл.';
$_lang['Oblast']['UA'][25] = 'Черновицкая обл.';

$_lang['Oblast']['RU'][1] = 'Адыгея';
$_lang['Oblast']['RU'][2] = 'Алтай';
$_lang['Oblast']['RU'][3] = 'Башкортостан';
$_lang['Oblast']['RU'][4] = 'Бурятия';
$_lang['Oblast']['RU'][5] = 'Дагестан';
$_lang['Oblast']['RU'][6] = 'Ингушетия';
$_lang['Oblast']['RU'][7] = 'Кабардино-Балкария';
$_lang['Oblast']['RU'][8] = 'Калмыкия';
$_lang['Oblast']['RU'][9] = 'Карачаево-Черкессия';
$_lang['Oblast']['RU'][10] = 'Карелия';
$_lang['Oblast']['RU'][11] = 'Коми';
$_lang['Oblast']['RU'][12] = 'Марий Эл';
$_lang['Oblast']['RU'][13] = 'Мордовия';
$_lang['Oblast']['RU'][14] = 'Саха';
$_lang['Oblast']['RU'][15] = 'Северная Осетия-Алания';
$_lang['Oblast']['RU'][16] = 'Татарстан';
$_lang['Oblast']['RU'][17] = 'Тыва';
$_lang['Oblast']['RU'][18] = 'Удмуртия';
$_lang['Oblast']['RU'][19] = 'Хакасия';
$_lang['Oblast']['RU'][20] = 'Чечня';
$_lang['Oblast']['RU'][21] = 'Чувашия';
$_lang['Oblast']['RU'][22] = 'Алтайский край';
$_lang['Oblast']['RU'][23] = 'Забайкальский край';
$_lang['Oblast']['RU'][24] = 'Камчатский край';
$_lang['Oblast']['RU'][25] = 'Краснодарский край';
$_lang['Oblast']['RU'][26] = 'Красноярский край';
$_lang['Oblast']['RU'][27] = 'Пермский край';
$_lang['Oblast']['RU'][28] = 'Приморский край';
$_lang['Oblast']['RU'][29] = 'Ставропольский край';
$_lang['Oblast']['RU'][30] = 'Хабаровский край';
$_lang['Oblast']['RU'][31] = 'Ненецкий АО';
$_lang['Oblast']['RU'][32] = 'Ханты-Мансийский АО';
$_lang['Oblast']['RU'][33] = 'Чукотский АО';
$_lang['Oblast']['RU'][34] = 'Ямало-Ненецкий АО';
$_lang['Oblast']['RU'][35] = 'Амурская обл.';
$_lang['Oblast']['RU'][36] = 'Архангельская обл.';
$_lang['Oblast']['RU'][37] = 'Астраханская обл.';
$_lang['Oblast']['RU'][38] = 'Белгородская обл.';
$_lang['Oblast']['RU'][39] = 'Брянская обл.';
$_lang['Oblast']['RU'][40] = 'Владимирская обл.';
$_lang['Oblast']['RU'][41] = 'Волгоградская обл.';
$_lang['Oblast']['RU'][42] = 'Вологодская обл.';
$_lang['Oblast']['RU'][43] = 'Воронежская обл.';
$_lang['Oblast']['RU'][44] = 'Еврейская автономная обл.';
$_lang['Oblast']['RU'][45] = 'Ивановская обл.';
$_lang['Oblast']['RU'][46] = 'Иркутская обл.';
$_lang['Oblast']['RU'][47] = 'Калининградская обл.';
$_lang['Oblast']['RU'][48] = 'Калужская обл.';
$_lang['Oblast']['RU'][49] = 'Кемеровская обл.';
$_lang['Oblast']['RU'][50] = 'Кировская обл.';
$_lang['Oblast']['RU'][51] = 'Костромская обл.';
$_lang['Oblast']['RU'][52] = 'Курганская обл.';
$_lang['Oblast']['RU'][53] = 'Курская обл.';
$_lang['Oblast']['RU'][54] = 'Ленинградская обл.';
$_lang['Oblast']['RU'][55] = 'Липецкая обл.';
$_lang['Oblast']['RU'][56] = 'Магаданская обл.';
$_lang['Oblast']['RU'][57] = 'Москва';
$_lang['Oblast']['RU'][58] = 'Московская обл.';
$_lang['Oblast']['RU'][59] = 'Мурманская обл.';
$_lang['Oblast']['RU'][60] = 'Нижегородская обл.';
$_lang['Oblast']['RU'][61] = 'Новгородская обл.';
$_lang['Oblast']['RU'][62] = 'Новосибирская обл.';
$_lang['Oblast']['RU'][63] = 'Омская обл.';
$_lang['Oblast']['RU'][64] = 'Оренбургская обл.';
$_lang['Oblast']['RU'][65] = 'Орловская обл.';
$_lang['Oblast']['RU'][66] = 'Пензенская обл.';
$_lang['Oblast']['RU'][67] = 'Псковская обл.';
$_lang['Oblast']['RU'][68] = 'Ростовская обл.';
$_lang['Oblast']['RU'][69] = 'Рязанская обл.';
$_lang['Oblast']['RU'][70] = 'Самарская обл.';
$_lang['Oblast']['RU'][71] = 'Саратовская обл.';
$_lang['Oblast']['RU'][72] = 'Сахалинская обл.';
$_lang['Oblast']['RU'][73] = 'Свердловская обл.';
$_lang['Oblast']['RU'][74] = 'Смоленская обл.';
$_lang['Oblast']['RU'][75] = 'Тамбовская обл.';
$_lang['Oblast']['RU'][76] = 'Тверская обл.';
$_lang['Oblast']['RU'][77] = 'Томская обл.';
$_lang['Oblast']['RU'][78] = 'Тульская обл.';
$_lang['Oblast']['RU'][79] = 'Тюменская обл.';
$_lang['Oblast']['RU'][80] = 'Ульяновская обл.';
$_lang['Oblast']['RU'][81] = 'Челябинская обл.';
$_lang['Oblast']['RU'][82] = 'Ярославская обл.';

$_lang['Oblast']['BY'][1] = 'Брестская обл.';
$_lang['Oblast']['BY'][2] = 'Витебская обл.';
$_lang['Oblast']['BY'][3] = 'Гомельская обл.';
$_lang['Oblast']['BY'][4] = 'Гродненская обл.';
$_lang['Oblast']['BY'][5] = 'Минская обл.';
$_lang['Oblast']['BY'][6] = 'Минск (город)';
$_lang['Oblast']['BY'][7] = 'Могилевская обл.';

$_lang['Oblast']['KZ'][1] = 'Акмолинская обл.';
$_lang['Oblast']['KZ'][2] = 'Актюбинская обл.';
$_lang['Oblast']['KZ'][3] = 'Алматинская обл.';
$_lang['Oblast']['KZ'][4] = 'Атырауская обл.';
$_lang['Oblast']['KZ'][5] = 'Восточно-Казахстанская обл.';
$_lang['Oblast']['KZ'][6] = 'Жамбылская область';
$_lang['Oblast']['KZ'][7] = 'Западно-Казахстанская обл.';
$_lang['Oblast']['KZ'][8] = 'Карагандинская обл.';
$_lang['Oblast']['KZ'][9] = 'Костанайская обл.';
$_lang['Oblast']['KZ'][10] = 'Кызылординская обл.';
$_lang['Oblast']['KZ'][11] = 'Мангистауская обл.';
$_lang['Oblast']['KZ'][12] = 'Павлодарская обл.';
$_lang['Oblast']['KZ'][13] = 'Северо-Казахстанская обл.';
$_lang['Oblast']['KZ'][14] = 'Южно-Казахстанская обл.';

$_lang['Oblast']['TJ'][1] = 'Душанбе';
$_lang['Oblast']['TJ'][2] = 'Горно-Бадахшанская АО';
$_lang['Oblast']['TJ'][3] = 'Согдийская обл.';
$_lang['Oblast']['TJ'][4] = 'Хатлонская обл.';

$_lang['Oblast']['JP'][1] = 'Aichi';
$_lang['Oblast']['JP'][2] = 'Akita';
$_lang['Oblast']['JP'][3] = 'Aomori';
$_lang['Oblast']['JP'][4] = 'Chiba';
$_lang['Oblast']['JP'][5] = 'Ehime';
$_lang['Oblast']['JP'][6] = 'Fukui';
$_lang['Oblast']['JP'][7] = 'Fukuoka';
$_lang['Oblast']['JP'][8] = 'Fukushima';
$_lang['Oblast']['JP'][9] = 'Gifu';
$_lang['Oblast']['JP'][10] = 'Gunma';
$_lang['Oblast']['JP'][11] = 'Hiroshima';
$_lang['Oblast']['JP'][12] = 'Hokkaido';
$_lang['Oblast']['JP'][13] = 'Hyogo';
$_lang['Oblast']['JP'][14] = 'Ibaraki';
$_lang['Oblast']['JP'][15] = 'Ishikawa';
$_lang['Oblast']['JP'][16] = 'Iwate';
$_lang['Oblast']['JP'][17] = 'Kagawa';
$_lang['Oblast']['JP'][18] = 'Kagoshima';
$_lang['Oblast']['JP'][19] = 'Kanagawa';
$_lang['Oblast']['JP'][20] = 'Kochi';
$_lang['Oblast']['JP'][21] = 'Kumamoto';
$_lang['Oblast']['JP'][22] = 'Kyoto';
$_lang['Oblast']['JP'][23] = 'Mie';
$_lang['Oblast']['JP'][24] = 'Miyagi';
$_lang['Oblast']['JP'][25] = 'Miyazaki';
$_lang['Oblast']['JP'][26] = 'Nagano';
$_lang['Oblast']['JP'][27] = 'Nagasaki';
$_lang['Oblast']['JP'][28] = 'Nara';
$_lang['Oblast']['JP'][29] = 'Niigata';
$_lang['Oblast']['JP'][30] = 'Oita';
$_lang['Oblast']['JP'][31] = 'Okayama';
$_lang['Oblast']['JP'][32] = 'Okinawa';
$_lang['Oblast']['JP'][33] = 'Osaka';
$_lang['Oblast']['JP'][34] = 'Saga';
$_lang['Oblast']['JP'][35] = 'Shiga';
$_lang['Oblast']['JP'][36] = 'Shimane';
$_lang['Oblast']['JP'][37] = 'Saitama';
$_lang['Oblast']['JP'][38] = 'Shizuoka';
$_lang['Oblast']['JP'][39] = 'Tochigi';
$_lang['Oblast']['JP'][40] = 'Tokushima';
$_lang['Oblast']['JP'][41] = 'Tokyo';
$_lang['Oblast']['JP'][42] = 'Tottori';
$_lang['Oblast']['JP'][43] = 'Toyama';
$_lang['Oblast']['JP'][44] = 'Wakayama';
$_lang['Oblast']['JP'][45] = 'Yamagata';
$_lang['Oblast']['JP'][46] = 'Yamaguchi';
$_lang['Oblast']['JP'][47] = 'Yamanashi';

$_lang['OrderServerName'] = 'Название сервера (hostname)';
$_lang['OrderAdminPassword'] = 'Пароль для управления сервером';
$_lang['OrderErrorServerName'] = 'Не указано название сервера.';
$_lang['OrderErrorAdminPassword'] = 'Не указан пароль для управления сервером.';
$_lang['ProfileICQ'] = 'ICQ';
$_lang['ProfileWMZ'] = 'WMZ кошелек';
$_lang['ProfileWMR'] = 'WMR кошелек';

#####################################################################################
##################### v1.6.5
#####################################################################################

$_lang['OrderRootPassword'] = 'Пароль для входа на сервер (root)';
$_lang['OrderErrorRootPassword'] = 'Не указан пароль для входа на сервер.';
$_lang['OrderRemark'] = 'Комментарий к заказу';
$_lang['TicketsClosedByCron'] = 'Тикет закрыт автоматически в связи с окончанием срока жизни.';
$_lang['ProfileImage'] = 'Изображение №';
$_lang['ProfileErrorCantUpload'] = 'Не удалось загрузить изображение';
$_lang['ProfileErrorYouCanWorkWithoutCheckedProfile'] = 'Внимание! Вы не можете работать с биллингом пока администрация не проверит Ваш профайл. Уведомление о необходимости проверки отправлено администрации и будет обработано в ближайшее время. Приносим свои извинения за доставленные неудобства.';
$_lang['PayErrorNoProfileCheck'] = 'Внимание! Вы не можете оплатить данный счет, пока администрация не проверит Ваш профайл. Уведомление о необходимости проверки отправлено администрации и будет обработано в ближайшее время. Приносим свои извинения за доставленные неудобства.';
$_lang['OrderErrorEmailExists'] = 'Пользователь с таким Email уже зарегистрирован.';
$_lang['OnlineBillNotFound'] = 'Счет не найден.';
$_lang['OnlineErrorData'] = 'Неправильные входные параметры.';
$_lang['OnlineApproved'] = 'Оплата успешно принята.';
$_lang['OnlineDeclined'] = 'Оплата отклонена.';

#####################################################################################
##################### v1.6.6
#####################################################################################

$_lang['OrderPartnerTitle'] = 'Регистрация клиента';
$_lang['ZonesReg'] = 'регистрация';
$_lang['ZonesRenew'] = 'продление';
$_lang['ZonesRegCost0'] = 'при заказе только домена';
$_lang['ZonesRenewCost0'] = 'при продлении только домена';
$_lang['ZonesRegCost1'] = 'если у вас нет заказов на тарифные планы';
$_lang['ZonesReg2Cost0'] = 'при заказе вместе с тарифным планом';
$_lang['ZonesRenew2Cost0'] = 'при продлении вместе с тарифным планом';
$_lang['ZonesReg2Cost1'] = 'если у вас есть заказы на тарифные планы';
$_lang['ZonesHostReseller'] = 'для реселлеров хостинга';
$_lang['ZonesReseller'] = 'для реселлеров доменов';
$_lang['OrderErrorNoOwnNS'] = 'Биллинг временно не поддерживает работу с собственными NS-серверами.';
$_lang['OrderErrorNoThirdNS'] = 'Неправильно указан третий DNS-сервер.';
$_lang['OrderErrorNoFourNS'] = 'Неправильно указан четвертый DNS-сервер.';
$_lang['ProfilePassportFiles'] = 'Скан документов';
$_lang['ProfilePassportFilesComment'] = 'Необходимо загружать все изображения сразу, т.к. после загрузки эта функция станет недоступной. Разрешено загружать изображения в формате JPG, GIF, PNG, PDF. Будьте внимательны, т.к. удалить загруженное изображение нельзя.';
$_lang['ProfilePassportFilesUser'] = 'Необходимо загрузить копию паспорта (страницы с Ф.И.О., данными органа, выдавшего документ, и отметкой о постоянной регистрации (прописке)).';
$_lang['ProfilePassportFilesIP'] = 'Необходимо загрузить копию паспорта (страницы с Ф.И.О., данными органа, выдавшего документ, и отметкой о постоянной регистрации (прописке)), свидетельство о государственной регистрации и свидетельство о постановке на учет в налоговом органе (ИНН/ЄДРПОУ).';
$_lang['ProfilePassportFilesOrg'] = 'Необходимо загрузить свидетельство о государственной регистрации, свидетельство о постановке на учет в налоговом органе (ИНН) и приказ о назначении единоличного исполнительного органа (Генерального директора, Директора, Председателя правления).';
$_lang['ProfileDirector'] = 'Директор';
$_lang['DomainsChangeDNSSendSuccess'] = 'Запрос на изменение DNS-серверов успешно отправлен администрации и будет выполнен в ближайшее время.';
$_lang['DomainsErrorDNSTimeout'] = 'Запрещено так часто изменять DNS-сервера. Попробуйте позже.';

#####################################################################################
##################### v1.6.7
#####################################################################################

$_lang['OrderItem'] = 'Товар';
$_lang['OrderErrorNoItem'] = 'Не выбран товар';
$_lang['BillingMenuShop'] = 'Товары';
$_lang['ShopTitle'] = 'Товары';
$_lang['ShopTotalOrders'] = 'Всего товаров';
$_lang['ShopOrdersOnPage'] = 'товаров на странице';
$_lang['RenewTitleShop'] = 'Продление заказа на товар';
$_lang['RenewShop'] = 'Товар';
$_lang['FaqTitle'] = 'Часто Задаваемые Вопросы';

#####################################################################################
##################### v1.6.8
#####################################################################################

$_lang['ShopDownloadDist'] = 'Скачать дистрибутив';
$_lang['ProfileSocStrahNumber'] = 'Номер соц. страхования';
$_lang['OrderTestPeriod'] = 'Тестовый период';
$_lang['OrderTestPeriodOrder'] = 'заказать тестовый период';
$_lang['PayOrderTestCreateSuccess'] = 'Тестовый доступ успешно открыт. Если до окончания тестового периода Вы не оплатите данный счет, аккаунт будет автоматически удален на сервере.';
$_lang['PayOrderTestCreateLater'] = 'Тестовый доступ будет открыт в ближайшее время. Данные для доступа будут отправлены на Ваш email.';
$_lang['ProfileNeedForTestPeriod'] = 'Для получения тестового доступа, необходимо заполнить профайл.';
$_lang['AuthorizationKey'] = 'Authorization Key';

$_lang['FakturaHost']['hosting'] = 'Хостинг по тарифному плану';
$_lang['FakturaHost']['reseller'] = 'Реселлинг по тарифному плану';
$_lang['FakturaHost']['vds'] = 'VPS/VDS по тарифному плану';
$_lang['FakturaHost']['dedicated'] = 'Выделенный сервер по тарифному плану';
$_lang['FakturaHost']['vpn'] = 'VPN по тарифному плану';
$_lang['FakturaHost']['ssh'] = 'SSH по тарифному плану';
$_lang['FakturaDomain'] = 'Делегирование доменного имени';
$_lang['FakturaAddon'] = 'Дополнительные услуги для заказа ID';
$_lang['FakturaChangeTarif'] = 'Смена тарифного плана для заказа ID';
$_lang['FakturaAddFunds'] = 'Пополнение внутреннего баланса для аккаунта ID';
$_lang['FakturaShop'] = 'Товар';
$_lang['FakturaSokraschenieShtuka'] = 'шт.';
$_lang['FakturaBezNds'] = 'Без НДС';
$_lang['FakturaSNds'] = 'НДС';
$_lang['FakturaVTomChisleNds'] = 'в том числе НДС';
$_lang['FakturaGoda'] = 'года';
$_lang['PayErrorNoNameOrPhoneInProfile'] = 'Вы не можете получить счет для юридических лиц, т.к. в Вашем профайле не заполнены поля ФИО и/или Телефон.';
$_lang['PPOTHER'] = 'ЧП';
$_lang['PPRU'] = 'ИП';
$_lang['PPUA'] = 'ФЛП';

$_lang['ProfileAutoRenew'] = 'Автопродление заказов';
$_lang['ProfileAutoRenewNo'] = 'отключено';
$_lang['ProfileAutoRenewYes'] = 'включено';

$_lang['PagesBegin'] = 'Первая страница';
$_lang['PagesPrev'] = 'Предыдущая страница';
$_lang['PagesNext'] = 'Следующая страница';
$_lang['PagesEnd'] = 'Последняя страница';
$_lang['PagesNum'] = 'Страница №';

$_lang['OrderTitleType']['hosting'] = 'Хостинг';
$_lang['OrderTitleType']['reseller'] = 'Реселлинг';
$_lang['OrderTitleType']['vds'] = 'VPS/VDS';
$_lang['OrderTitleType']['dedicated'] = 'Выделенные сервера';
$_lang['OrderTitleType']['vpn'] = 'VPN';
$_lang['OrderTitleType']['ssh'] = 'SSH';
$_lang['OrderTitleTypeDomain'] = 'Домены';
$_lang['OrderTitleTypeDomainOpt'] = 'Домены оптом';
$_lang['OrderTitleTypeShop'] = 'Товары';

#####################################################################################
##################### v1.6.9
#####################################################################################

$_lang['ProfileRegNumberPP'] = 'Рег. номер ЧП';
$_lang['ProfileRegNumberPPComment'] = 'Регистрационный номер частного предпринимателя.';

#####################################################################################
##################### v1.7.0
#####################################################################################

$_lang['CalcSelect'] = 'Укажите, что вы хотите посчитать';
$_lang['CalcGotoOrder'] = 'Перейти к оформлению заказа.';

$_lang['TicketStatusWait'] = 'в ожидании';
$_lang['TicketsStatusWait'] = 'в ожидании';
$_lang['TicketsDepartment'] = 'Отдел';

$_lang['TarifsTitle'] = 'Тарифные планы';
$_lang['TarifsCost'] = 'Цена';
$_lang['TarifsCostSetup'] = 'Разово';

#####################################################################################
##################### v1.7.1
#####################################################################################

$_lang['tarifsCurrency'] = 'Валюта';
$_lang['FeedDolzhnost'] = 'Должность';
$_lang['FeedCompany'] = 'Компания';
$_lang['FeedTestimonial'] = 'Отзыв';
$_lang['FeedTestimonialSuccess'] = 'Отзыв успешно добавлен.';
$_lang['NewsTotalNews'] = 'Всего новостей';
$_lang['NewsOnPage'] = 'новостей на странице';
$_lang['TestimonialsTitle'] = 'Отзывы клиентов';
$_lang['TestimonialsDisabled'] = 'Отзывы отключены';
$_lang['TestimonialsTotalTestimonials'] = 'Всего отзывов';
$_lang['TestimonialsOnPage'] = 'отзывов на странице';
$_lang['TestimonialsDeleted'] = 'Отзыв успешно удалён.';
$_lang['TestimonialsAddMessage'] = 'Добавление отзыва';

#####################################################################################
##################### v1.7.2
#####################################################################################

$_lang['OrdersRestart'] = 'Перезагрузить';
$_lang['OrdersRestartAlert'] = 'Вы уверены, что хотите выполнить перезагрузку?';
$_lang['OrdersReinstall'] = 'Переустановить';
$_lang['OrdersReinstallAlert'] = 'Вы уверены, что хотите выполнить переустановку? Вся информация будет утеряна!';
$_lang['OrdersRestartSuccess'] = 'Перезагрузка успешно запущена.';
$_lang['OrdersRestartError'] = 'Не удалось выполнить перезагрузку. Ожидайте пока это сделает администрация.';
$_lang['OrdersErrorCantRestart'] = 'Вы не можете выполнить перезагрузку для данного заказа.';
$_lang['OrdersReinstallSuccess'] = 'Переустановка успешно запущена.';
$_lang['OrdersReinstallError'] = 'Не удалось выполнить переустановку. Ожидайте пока это сделает администрация.';
$_lang['OrdersErrorCantReinstall'] = 'Вы не можете выполнить переустановку для данного заказа.';
$_lang['OrderUseDefaultNS'] = 'Использовать DNS-сервера компании';
$_lang['OrderFillOwnNS'] = 'Указать DNS-сервера';
$_lang['checkDNSNoZoneError'] = 'Не найдена доменная зона для домена';
$_lang['checkDNSCantRunScriptError'] = 'Не удалось выполнить команду проверки DNS.';
$_lang['checkDNSNoZoneAtServerError'] = 'Доменная зона отсутствует на одном из указанных DNS-серверов.';
$_lang['checkDNSNoScriptInZoneError'] = 'В настройках доменной зоны не указан скрипт для проверки DNS.';
$_lang['OrderCert'] = 'Сертификат';
$_lang['OrderCertOrder'] = 'Заказать сертификат';
$_lang['WhoisCheckAll'] = 'отметить все';
$_lang['WhoisUnCheckAll'] = 'убрать все';
$_lang['WhoisCheckFavorite'] = 'отметить популярные';
$_lang['OrdersGotoAccount'] = 'Войти в аккаунт';
$_lang['OrdersChangePassword'] = 'Изменить пароль';
$_lang['OrdersChangePasswordTitle'] = 'Изменение пароля';
$_lang['OrdersChangePasswordSuccess'] = 'Пароль успешно изменён.';
$_lang['OrdersChangePasswordError'] = 'Не удалось изменить пароль.';
$_lang['BillsGetFaktura'] = 'Получить счет-фактуру';
$_lang['OrderSlotsCount'] = 'Количество слотов';
$_lang['OrderForSlot'] = 'за слот';

#####################################################################################
##################### v1.7.3
#####################################################################################

$_lang['ProfilePhoneCountryCodeComment'] = 'Международный код страны<BR>Пример, для России: +7<BR>Пример, для Украины: +380';
$_lang['ProfilePhoneCodeComment'] = 'Код города<BR>Пример, для Москвы: 495<BR>Пример, для Киева: 44';
$_lang['ProfilePhoneNumberComment'] = 'Номер телефона<BR>Пример: 8102233';
$_lang['ProfileFaxNumberComment'] = 'Номер факса<BR>Пример: 8102233';
$_lang['OrderErrorNoSlots'] = 'Не указано количество слотов.';
$_lang['OrderErrorMinSlots'] = 'Минимальное количество слотов не может быть меньше чем';
$_lang['OrderErrorMaxSlots'] = 'Максимальное количество слотов не может быть больше чем';
$_lang['ProfileMobile'] = 'Мобильный телефон';
$_lang['ProfileMobileCodeComment'] = 'Код оператора<BR>Пример, для МТС, Россия: 916<BR>Пример, для Lifecell, Украина: 93';
$_lang['SettingsSMS'] = 'Настройки SMS-уведомлений';
$_lang['SettingsSMSComment'] = 'Необходимо отметить уведомления, которые вы хотите получать на мобильный телефон.';
$_lang['SettingsSMSBillRemind'] = 'уведомления о неоплаченных счетах';
$_lang['SettingsSMSOrderRemind'] = 'уведомления об окончании оплаченного периода';
$_lang['SettingsSMSOrderDomainRemind'] = 'уведомления об окончании оплаченного периода (домены)';
$_lang['SettingsSMSOrderShopRemind'] = 'уведомления об окончании оплаченного периода (товары)';
$_lang['SettingsSMSTicketNew'] = 'уведомления о новых тикетах от администрации';
$_lang['TicketsSendSMS'] = 'уведомлять об ответах с помощью SMS';
$_lang['TicketPrioritySMS0'] = 'low';
$_lang['TicketPrioritySMS1'] = 'middle';
$_lang['TicketPrioritySMS2'] = 'high';
$_lang['OrderErrorField'] = 'Ошибка в поле';

#####################################################################################
##################### v1.7.4
#####################################################################################

$_lang['DomainsControlDNS'] = 'Управление DNS-записями';
$_lang['DomainsDNSRecordsFor'] = 'DNS-записи для';
$_lang['DomainsErrorCantGetDNSRecords'] = 'Не удалось получить DNS-записи.';
$_lang['DomainsDeleteDomainRecord'] = 'Удалить DNS-запись';
$_lang['DomainRecordDeleteAlert'] = 'Вы уверены, что хотите удалить DNS-запись?';
$_lang['DomainsDNSRecordsUpdateSuccess'] = 'DNS-записи успешно обновлены.';
$_lang['DomainsDNSRecordsCreateSuccess'] = 'DNS-запись успешно добавлена.';
$_lang['DomainsDNSRecordsDeleteSuccess'] = 'DNS-запись успешно удалена.';
$_lang['DomainsErrorCantCreateZone'] = 'Не удалось создать DNS-зону для домена на сервере.';
$_lang['DomainsUtils'] = 'Доп. возможности';
$_lang['DomainsMassNS'] = 'Пакетная смена DNS-серверов';
$_lang['DomainsErrorMassNoDomains'] = 'Не указано ни одного доменного имени.';
$_lang['DomainsErrorInactive'] = 'Домен не активен.';
$_lang['OrderSSHLogin'] = 'SSH логин';
$_lang['OrderSSHPassword'] = 'SSH пароль';
$_lang['OrderErrorSSHLogin'] = 'Не указан SSH логин.';
$_lang['OrderErrorSSHPassword'] = 'Не указан SSH пароль.';
$_lang['OrderErrorSSHLoginSymbols'] = 'Недопустимые символы в поле SSH логин. Разрешены только латинские буквы и цифры.';
$_lang['OrderErrorSSHPasswordSymbols'] = 'Недопустимые символы в поле SSH пароль. Разрешены только латинские буквы, цифры, а так же подчеркивание и дефис.';
$_lang['OrderReferalLogin'] = 'Логин Вашего друга';
$_lang['OrderLisenseName'] = 'Имя лицензии';
$_lang['OrderLisenseIP'] = 'IP лицензии';
$_lang['OrderErrorNoLicenseName'] = 'Не указано имя лицензии.';
$_lang['OrderErrorNoLicenseIP'] = 'Не указан IP лицензии.';
$_lang['ShopChangeLicenseName'] = 'Изменить имя лицензии';
$_lang['ShopChangeLicenseIP'] = 'Изменить IP лицензии';
$_lang['ShopChangeLicense'] = 'Изменение лицензии';
$_lang['ShopChangeLicenseSuccess'] = 'Лицензия успешно изменена.';
$_lang['ShopChangeLicenseError'] = 'Ошибка при попытке изменить лицензию.';
$_lang['ShopChangeLicenseIPAlert'] = 'Внимание! Смена IP-адреса лицензии невозможна чаще одного раза в месяц.';
$_lang['OrderErrorDomainFreeLimit'] = 'Превышен лимит на количество регистрируемых бесплатных доменов в день';

#####################################################################################
##################### v1.7.5
#####################################################################################

$_lang['ProfileFieldsForPPUADomain'] = 'Для регистрации доменов .pp.ua поле Мобильный телефон обязательно к заполнению! На него будет отправлен код активации домена.';
$_lang['DomainsChangeContact'] = 'Изменить контакты';
$_lang['DomainsChangeContactFor'] = 'Изменение контактов для';
$_lang['DomainsChangeContactSelectProfile'] = 'Укажите профайл, данными из которого необходимо обновить контакты для доменного имени';
$_lang['DomainsWarningUkrnames'] = 'Обратите внимание, для украинских доменов изменить информацию о владельце невозможно. Информация о владельце домена (admin-c) для украинских доменов изменяется на сайте http://hostmaster.net.ua/';
$_lang['DomainsChangeContactSuccess'] = 'Контакты для доменного имени успешно изменены.';
$_lang['DomainsChangeContactError'] = 'Не удалось изменить контакты для доменного имени.';
$_lang['DomainsErrorRegistratorUnknown'] = 'Неизвестный тип регистратора';
$_lang['DomainsErrorProfileNotCheckedByAdmin'] = 'Профайл не проверен администрацией.';
$_lang['DomainsErrorProfileNotFilled'] = 'Профайл не заполнен всеми нужными данными.';
$_lang['DomainsErrorRegistratorInactive'] = 'Регистратор не активен.';
$_lang['DomainsChangeProfileTypeError'] = 'Тип профайла не должен отличаться от типа профайла на который изначально регистрировался домен.';
$_lang['DomainsWarningUpdateRUSU'] = 'Обратите внимание, если домен регистрировался на организацию, то Наименование организации, ИНН и Юридический адрес изменены не будут. Если домен регистрировался на физическое лицо, то не будут изменены ФИО, Паспорт и Дата рождения.';
$_lang['ProfileEunic'] = 'EUNIC';
$_lang['OrdersLogin'] = 'логин';
$_lang['OrdersPassword'] = 'пароль';

#####################################################################################
##################### v1.7.6
#####################################################################################

$_lang['OrderErrorSSHLoginExists'] = 'Указанный Вами SSH логин уже используется.';
$_lang['ProfileDpnic'] = 'DPNIC';
$_lang['CatSiteImage'] = 'Изображение';
$_lang['CatSiteImageMaxSize'] = 'максимальный размер';
$_lang['CatSiteImageWrongType'] = 'разрешены только jpg, gif и png изображения.';
$_lang['CatSiteImageCantMove'] = 'Ошибка загрузки изображения: невозможно переместить файл.';
$_lang['CatSiteImageWrongSize'] = 'максимальный размер изображения:';
$_lang['FaqOglavlenie'] = 'Вернуться к содержанию';

#####################################################################################
##################### v1.7.7
#####################################################################################

$_lang['FundsLoginOrId'] = 'Логин или ID клиента';
$_lang['FundErrorNoLoginOrId'] = 'Не указан логин или ID клиента.';
$_lang['FundErrorNoUser'] = 'Клиент не найден.';
$_lang['CatSiteErrorNoImage'] = 'Необходимо обязательно загрузить изображение.';
$_lang['CatSiteImageWrongTochnSize'] = 'допустимый размер изображения:';
$_lang['payTaulinkKZDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов Таулинк, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';
$_lang['BillsSelectedBills'] = 'Отмеченные счета';
$_lang['BillsBillsAttach'] = 'Объединить';
$_lang['BillsBillsUnAttach'] = 'К данному счету прикреплены другие счета. Вы можете отменить объединение, нажав на данную ссылку. Не рекомендуется это делать, если Вы оплатили счет, но его статус Не оплачен.';
$_lang['BillsBillsAttachTo'] = 'Данный счет прикреплен к счету № ';
$_lang['BillsBillsIsMainAttach'] = 'К данному счету прикреплены другие счета';

#####################################################################################
##################### v1.7.8
#####################################################################################

$_lang['BillsBillByAttach'] = 'Объединенный счет';
$_lang['OrdersChangeServer'] = 'сменить сервер';
$_lang['OrdersServer'] = 'сервер';
$_lang['BillsChangeServer'] = 'смена сервера';
$_lang['ChangeServerTitle'] = 'Смена сервера';
$_lang['ChangeServerChangeServerSuccess'] = 'Сервер успешно изменен.';
$_lang['ChangeServerErrorChange'] = 'Не удалось сменить сервер для заказа.';
$_lang['ChangeServer'] = 'Сервер';
$_lang['ChangeNewServer'] = 'Новый сервер';
$_lang['ChangeErrorNoNewServer'] = 'Не выбран новый сервер.';
$_lang['ChangeErrorNoAccessServer'] = 'Вы не можете перейти на данный сервер.';
$_lang['ChangeServerDoplata'] = 'доплата';
$_lang['ChangeServerDoplataWithout'] = 'без доплаты';
$_lang['ChangeServerBackMoney'] = 'возврат';
$_lang['PayForServerChange'] = 'Для смены сервера';
$_lang['ChangeErrorLimit'] = 'Приносим свои извинения, но Вы уже использовали допустимое количество смен сервера.';
$_lang['ProfileApi'] = 'Настройки API';
$_lang['ProfileApiKey'] = 'API Key';
$_lang['ProfileErrorApiKey'] = 'В целях безопасности длина API Key не может быть меньше 10.';
$_lang['OrderPrivacy'] = 'Privacy Protection';
$_lang['OrderPrivacyOrder'] = 'Заказать скрытие данных в WHOIS';
$_lang['OrderrOnlyForPerson'] = 'только для физ. лиц и ЧП/ИП';
$_lang['DomainsChangePrivacy'] = 'Изменить Privacy Protection';
$_lang['DomainsPrivacyFor'] = 'Настройка Privacy Protection для';
$_lang['DomainPrivacyEnable'] = 'включить';
$_lang['DomainPrivacyDisable'] = 'выключить';
$_lang['DomainPrivacyProfileError'] = 'Данная функция не доступна, если домен был зарегистрирован на профайл с типом Организация.';
$_lang['OrdersPrivacyChangeError'] = 'Не удалось выполнить настройку Privacy Protection. Ожидайте пока это сделает администрация.';
$_lang['DomainPrivacyChangeSuccess'] = 'Настройка Privacy Protection успешно выполнена.';
$_lang['DomainPrivacyChangeNoPrivacy'] = 'Не указано, необходимо включить или выключить Privacy Protection.';
$_lang['OrderGeneratePassword'] = 'сгенерировать пароль';
$_lang['OrdersStatusTest'] = 'Тестовый период';
$_lang['OrdersStatusObrab'] = 'в обработке';

#####################################################################################
##################### v1.7.9
#####################################################################################

$_lang['OrderErrorOwnNS1'] = 'Не указан IP для собственного NS1 регистрируемого домена.';
$_lang['OrderErrorOwnNS2'] = 'Не указан IP для собственного NS2 регистрируемого домена.';
$_lang['OrderErrorOwnNS3'] = 'Не указан IP для собственного NS3 регистрируемого домена.';
$_lang['OrderErrorOwnNS4'] = 'Не указан IP для собственного NS4 регистрируемого домена.';
$_lang['OrderErrorOwnNSIP'] = 'IP адрес для DNS-сервера необходимо указывать только в том случае, если вы хотите использовать собственные DNS-сервера регистрируемого домена. Например, если для домена reg.me, Вы хотите использовать ns1.reg.me, ns2.reg.me и т.п.';
$_lang['OrderErrorNoOwnNSForOptAndOne'] = 'Невозможно использовать собственные ДНС-сервера одного из регистрируемых доменов, при регистраци доменов оптом с использованием одинаковых ДНС-серверов.';
$_lang['OrderErrorOwnNSOpt'] = 'Не указан IP для одного из собственных DNS-серверов регистрируемого домена.';
$_lang['OrderIP'] = 'IP';
$_lang['DomainsIP'] = 'IP';
$_lang['OrderDomainStatusErrorSymbols'] = 'домен может содержать только a-z, 0-9, а-я и символ дефиса';
$_lang['OrderDomainStatusErrorSymbolsNoIDN'] = 'домен может содержать только a-z, 0-9 и символ дефиса';
$_lang['OrderDomainStatusErrorSymbolsOnlyIDN'] = 'домен может содержать только а-я, 0-9 и символ дефиса';
$_lang['OrderErrorDomainSymbols'] = 'Доменное имя может содержать только a-z, 0-9, а-я и символ дефиса, при чем не должно начинаться с дефиса или заканчиваться на него.';
$_lang['OrderErrorDomainSymbolsNoIDN'] = 'Доменное имя может содержать только a-z, 0-9 и символ дефиса, при чем не должно начинаться с дефиса или заканчиваться на него.';
$_lang['OrderErrorDomainSymbolsOnlyIDN'] = 'Доменное имя может содержать только а-я, 0-9 и символ дефиса, при чем не должно начинаться с дефиса или заканчиваться на него.';
$_lang['OrderDomainTM'] = 'Номер свидетельства ТМ (торговая марка)';
$_lang['OrderErrorNoLicense'] = 'Не указан номер свидетельства ТМ.';

#####################################################################################
##################### v1.8.0
#####################################################################################

$_lang['OrderCostsVariants'] = 'либо укажите другой вариант цены';
$_lang['OrderErrorCostsVariant'] = 'Вы не можете использовать цену другого тарифного плана.';

#####################################################################################
##################### v1.8.1
#####################################################################################

$_lang['DomainTransferMin'] = 'трансфер';
$_lang['DomainTransfer'] = 'Трансфер домена к нам';
$_lang['OrderDomainTransfer'] = 'трансфер доменного имени к нам';
$_lang['OrderErrorDomainNotRegistered'] = 'Доменное имя не зарегистрировано.';
$_lang['OrderDomainTransferAuth'] = 'Код трансфера (AUTH-CODE)';
$_lang['OrderErrorDomainNoTransferSupport'] = 'Для данной доменной зоны трансфер не поддерживается.';
$_lang['OrderErrorNoTransferAuth'] = 'Не указан код трансфера для доменного имени.';
$_lang['PartnerReferalsLevel1'] = 'Рефералы';
$_lang['PartnerReferalsLevel2'] = 'Рефералы (уровень 2)';
$_lang['PartnerStats'] = 'статистика';
$_lang['PartnerReferalId'] = 'ID реферала';
$_lang['PartnerReferalDate'] = 'Дата';
$_lang['PartnerReferalSumIn'] = 'Платеж';
$_lang['PartnerReferalSumPartner'] = 'Вознаграждение';
$_lang['PartnerErrorNoStats'] = 'Статистика отсутствует.';
$_lang['PartnerReferalsLevel2Min'] = 'уровень 2';
$_lang['PartnerSendMoney'] = 'Перевод средств';
$_lang['PartnerSendUser'] = 'Логин клиента';
$_lang['PartnerSendMoneyButton'] = 'Перевести';
$_lang['PartnerErrorNoUserLogin'] = 'Не указан логин клиента, которому необходимо перевести средства.';
$_lang['PartnerErrorNoUserFound'] = 'Клиент, которому необходимо перевести средства, не найден.';
$_lang['PartnerMoneySend'] = 'Перевод партнерских средств';
$_lang['PartnerMoneySendSuccess'] = 'Партнерские средства успешно переведены.';
$_lang['PartnerErrorSendMoneyOff'] = 'Извините, перевод партнерских средств в данный момент отключен.';
$_lang['PartnerErrorNoSendItself'] = 'Вы не можете осуществить перевод самому себе.';
$_lang['OrderSkidkaByPromo'] = 'полученная cкидка по промо-коду';
$_lang['PayWebMoneyRisks'] = 'Уведомление о рисках';
$_lang['PayWebMoneyAlert'] = 'Предлагаемые товары и услуги предоставляются не по заказу лица либо предприятия, эксплуатирующего систему WebMoney Transfer. Мы являемся независимым предприятием, оказывающим услуги, и самостоятельно принимаем решения о ценах и предложениях. Предприятия, эксплуатирующие систему WebMoney Transfer, не получают комиссионных вознаграждений или иных вознаграждений за участие в предоставлении услуг и не несут никакой ответственности за нашу деятельность.<BR><BR>Аттестация, произведенная со стороны WebMoney Transfer, лишь подтверждает наши реквизиты для связи и удостоверяет личность. Она осуществляется по нашему желанию и не означает, что мы каким-либо образом связаны с продажами операторов системы WebMoney.';
$_lang['DomainsDomainSearch'] = 'Найти';

#####################################################################################
##################### v1.8.2
#####################################################################################

$_lang['PayQIWIPhone'] = 'ID кошелька (номер телефона)';
$_lang['ProfileEpnic'] = 'EPNIC';
$_lang['SettingsSMSBillNew'] = 'уведомления о новых счетах от администрации';
$_lang['PayLiqpayCard'] = 'с карты';
$_lang['PayLiqpayPhone'] = 'с телефона';
$_lang['PayLiqpayNalichnie'] = 'наличными';
$_lang['SettingsSMSOrderSuspend'] = 'уведомления об остановке аккаунтов';
$_lang['ShopDownloadFile'] = 'Скачать файл';
$_lang['ErrorNoMoreActiveLink'] = 'У данной ссылки истек срок жизни.';
$_lang['ErrorNoMoreDownloadCnt'] = 'Вы израсходовали разрешенное количество скачиваний для данной ссылки.';

#####################################################################################
##################### v1.8.3
#####################################################################################

$_lang['PayRussianCard'] = 'кредитной картой Российского Банка';
$_lang['ErrorUserBanned'] = 'Аккаунт заблокирован. Обратитесь к администрации.';
$_lang['OrderPurposeOfUse'] = 'Цели использования';
$_lang['OrderErrorPurposeOfUse'] = 'Не указаны цели использования.';
$_lang['ShopDownloadLinkDays'] = 'Срок жизни ссылки, дней (осталось/всего)';
$_lang['ShopDownloadLinkCount'] = 'Количество загрузок (загружено/всего)';
$_lang['ShopDownloadLinkConfirm'] = 'Вы уверены, что хотите загрузить файл?';
$_lang['DomainsPush'] = 'Передать домен';
$_lang['DomainsPushDomain'] = 'Передача домена';
$_lang['DomainsPushUserLogin'] = 'Логин нового владельца';
$_lang['ErrorPushCant'] = 'Передача доменного имени не возможна.';
$_lang['Push'] = 'Передать';
$_lang['DomainsPushSuccess'] = 'Передача домена успешно выполнена.';

#####################################################################################
##################### v1.8.4
#####################################################################################

$_lang['payNetCardComment'] = 'Для оплаты счета введите номер Вашей карты в поле ниже.<BR><BR><B>Внимание!</B> Если номинал карты меньше суммы счета, средства будут зачислены на внутренний баланс. Если номинал карты больше суммы счета, остаток средств будет зачислен на внутренний баланс.';
$_lang['payNetCardNumber'] = 'Номер карты';
$_lang['payNetCardToBalanceSuccess'] = 'Номинал карты меньше суммы счета. Средства успешно зачислены на внутренний баланс.';
$_lang['payNetCardLeftToBalanceSuccess'] = 'Номинал карты больше суммы счета. Остаток средств успешно зачислен на внутренний баланс.';

#####################################################################################
##################### v1.8.5
#####################################################################################

$_lang['TicketsRating'] = 'Оценка';
$_lang['TicketsErrorNoParams'] = 'Отсутствуют входящие параметры.';
$_lang['PayMoneyuaSelect'] = 'Выберите способ оплаты';
$_lang['OrderPersonalInfo'] = 'Соглашение о персональных данных';
$_lang['OrderPersonalInfo2'] = 'соглашением о персональных данных';
$_lang['OrderPretenziyNeImeyu'] = ' ознакомлен, возражений и претензий не имею.';
$_lang['OrderErrorNoPersonalInfo'] = 'Вы не подтвердили, что ознакомлены с соглашением о персональных данных.';
$_lang['VerificationTitle'] = 'Подтверждение регистрации';
$_lang['VerificationComment'] = 'Мы не предоставляем услуги анонимным пользователям. Поэтому нам необходимо проверить ваш телефон. Проверка проводится в автоматическом режиме.';
$_lang['VerificationComment2'] = 'Проверьте/укажите номер Вашего мобильного телефона и нажмите на кнопку `Получить код`.';
$_lang['VerificationGetCode'] = 'Получить код';
$_lang['ErrorSendVerificationSMS'] = 'Ошибка отправки SMS. Попробуйте позже.';
$_lang['VerificationComment3'] = 'Для продолжения регистрации введите код из SMS, пришедшего на Ваш мобильный телефон.';
$_lang['VerificationCode'] = 'Код';
$_lang['VerificationComment4'] = 'Если по каким либо причинам Вы не получили код, нажмите на кнопку ниже.';
$_lang['VerificationNewCode'] = 'Получить новый код';
$_lang['ErrorVerificationCode'] = 'Указан неправильный код.';
$_lang['SettinsChangeSuccess'] = 'Настройки успешно изменены.';
$_lang['VerificationPass'] = 'номер подтвержден';
$_lang['VerificationInfo'] = 'Мы не предоставляем услуги анонимным пользователям. После регистрации Вам необходимо будет подтвердить номер вашего телефона. Проверка проводится в автоматическом режиме.';
$_lang['SettingsErrorYouCanWorkWithoutSettings'] = 'Внимание! Вы не можете работать с биллингом пока не заполните необходимые данные в настройках.';
$_lang['SettingsErrorFields'] = 'Ошибки в полях';
$_lang['OrderErrorMobileExists'] = 'Номер мобильного телефона уже указан другим клиентом.';
$_lang['PayOnpaySelect'] = 'Выберите способ оплаты';

#####################################################################################
##################### v1.8.7
#####################################################################################

$_lang['PartnerErrorNoMinActiveReferals'] = 'У Вас недостаточно активных рефералов первого уровня.';

#####################################################################################
##################### v1.8.8
#####################################################################################

$_lang['ErrorAPIcode1'] = 'Ошибка подключения к БД';
$_lang['ErrorAPIcode2'] = 'Ошибка сохранения данных в БД';
$_lang['ErrorAPIcode3'] = 'Не указан логин пользователя';
$_lang['ErrorAPIcode4'] = 'Пользователь не найден';
$_lang['ErrorAPIcode5'] = 'Доступ к API отключен';
$_lang['ErrorAPIcode6'] = 'Не указан пароль или ключ API';
$_lang['ErrorAPIcode7'] = 'Указан неправильный пароль или ключ API';
$_lang['ErrorAPIcode8'] = 'Неизвестная команда';
$_lang['ErrorAPIcode9'] = 'Запрещено использовать пароль и ключ API в одном запросе';
$_lang['ErrorAPIcode10'] = 'Профайл не найден';
$_lang['ErrorAPIcode11'] = 'Ошибки в полях профайла';
$_lang['ErrorAPIcode12'] = 'Не указано ни одно из полей профайла для изменения';
$_lang['ErrorAPIcode13'] = 'Не указано доменное имя';
$_lang['ErrorAPIcode14'] = 'Не указана доменная зона';
$_lang['ErrorAPIcode15'] = 'Доменная зона указана неверно, либо она не активна';
$_lang['ErrorAPIcode16'] = 'Длина доменного имени должна быть от/до символов';
$_lang['ErrorAPIcode17'] = 'Доменное имя может содержать только a-z0-9а-я и символ дефиса, при чем не должно начинаться с дефиса или заканчиваться на него';
$_lang['ErrorAPIcode18'] = 'Доменное имя занято';
$_lang['ErrorAPIcode19'] = 'Доменное имя уже заказано другим пользователем биллинговой системы';
$_lang['ErrorAPIcode20'] = 'Превышен лимит на количество регистрируемых бесплатных доменных имен в день';
$_lang['ErrorAPIcode21'] = 'Не указан срок регистрации доменного имени';
$_lang['ErrorAPIcode22'] = 'Допустимый срок регистрации доменного имени, г.';
$_lang['ErrorAPIcode23'] = 'Возможность использования DNS-серверов по умолчанию отключена для доменной зоны';
$_lang['ErrorAPIcode24'] = 'Не указан или указан неверно первичный DNS-сервер';
$_lang['ErrorAPIcode25'] = 'Не указан или указан неверно вторичный DNS-сервер';
$_lang['ErrorAPIcode26'] = 'Указан неверно третий DNS-сервер';
$_lang['ErrorAPIcode27'] = 'Указан неверно четвертый DNS-сервер';
$_lang['ErrorAPIcode28'] = 'API не поддерживает работу с собственными DNS-серверами для данной доменной зоны';
$_lang['ErrorAPIcode29'] = 'Ошибка проверки DNS-серверов';
$_lang['ErrorAPIcode30'] = 'Заявка принята, но по техническим причинам будет обработана в ручном режиме';
$_lang['ErrorAPIcode31'] = 'Недостаточно средств на внутреннем балансе';
$_lang['ErrorAPIcode32'] = 'Заказ на доменное имя не найден';
$_lang['ErrorAPIcode33'] = 'Доменная зона для заказа не найдена';
$_lang['ErrorAPIcode34'] = 'Не указан срок продления доменного имени';
$_lang['ErrorAPIcode35'] = 'Допустимый срок продления доменного имени, г.';
$_lang['ErrorAPIcode36'] = 'Операция не возможна, т.к. для заказа есть неоплаченные счета';
$_lang['ErrorAPIcode37'] = 'Операция не возможна, т.к. заказ не обработан';
$_lang['ErrorAPIcode38'] = 'Продление не возможно ранее чем за X дней до окончания оплаченного периода';
$_lang['ErrorAPIcode39'] = 'Тип профайла не должен отличаться от типа профайла на который изначально регистрировался домен';
$_lang['ErrorAPIcode40'] = 'Операция не возможна, т.к. заказ просрочен';
$_lang['ErrorAPIcode41'] = 'Операция не поддерживается для данной доменной зоны';
$_lang['ErrorAPIcode42'] = 'Не указан ISO-код страны';
$_lang['ErrorAPIcode43'] = 'Список областей для страны не задан';
$_lang['ErrorAPIcode44'] = 'Для доменной зоны отсутствует возможность выбора регистратора';
$_lang['ErrorAPIcode45'] = 'Не указан IP-адрес для собственного NS1';
$_lang['ErrorAPIcode46'] = 'Указан IP-адрес для NS1, который не является собственным DNS-сервером домена';
$_lang['ErrorAPIcode47'] = 'Не указан IP-адрес для собственного NS2';
$_lang['ErrorAPIcode48'] = 'Указан IP-адрес для NS2, который не является собственным DNS-сервером домена';
$_lang['ErrorAPIcode49'] = 'Не указан IP-адрес для собственного NS3';
$_lang['ErrorAPIcode50'] = 'Указан IP-адрес для NS3, который не является собственным DNS-сервером домена';
$_lang['ErrorAPIcode51'] = 'Не указан IP-адрес для собственного NS4';
$_lang['ErrorAPIcode52'] = 'Указан IP-адрес для NS4, который не является собственным DNS-сервером домена';
$_lang['ErrorAPIcode53'] = 'Ошибка получения DNS-серверов';

$_lang['DomainDeleteReasonExpired'] = 'истек срок регистрации и домен не продлен';
$_lang['DomainDeleteReasonRegistratorCancel'] = 'регистрация отменена регистратором';
$_lang['DomainDeleteReasonTransferRequestApprove'] = 'выполнен трансфер к другому регистратору';
$_lang['DomainDeleteReasonTransferReject'] = 'трансфер не подтвержден';
$_lang['ShopDeleteReasonExpired'] = 'истек срок заказа и товар не продлен';

$_lang['OrdersOrderIPsCount'] = 'IP-адресов';
$_lang['OrderErrorServerName'] = 'Недопустимые символы в поле Название сервера. Разрешены только латинские буквы, цифры, а так же дефис.';
$_lang['payQiwiKZDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов QIWI, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';
$_lang['BillsChangeSlots'] = 'изменение количества слотов';
$_lang['OrdersChangeSlots'] = 'изменить количество слотов';
$_lang['OrdersSlots'] = 'слоты';
$_lang['PayForSlotsChange'] = 'Для изменения количества слотов';
$_lang['ChangeSlotsTitle'] = 'Изменение количества слотов';
$_lang['ChangeSlotsChangeSuccess'] = 'Количество слотов успешно изменено.';
$_lang['ChangeSlotsErrorChange'] = 'Не удалось изменить количество слотов для заказа.';
$_lang['ChangeSlots'] = 'Количество слотов';
$_lang['ChangeNewSlots'] = 'Новое количество слотов';

#####################################################################################
##################### v1.8.9
#####################################################################################

$_lang['TicketsAttachFiles'] = 'Прикрепить файлы';
$_lang['TicketsFileNumber'] = 'Файл №';
$_lang['TicketsFileAttachSuccess'] = 'успешно загружен';
$_lang['TicketsFileAttachError'] = 'Ошибка загрузки';
$_lang['TicketsFileAttachFileExists'] = 'файл уже существует';

$_lang['OrderErrorAddonsCntWrong'] = 'Максимальное количество дополнительной услуги';

$_lang['FakturaNewServer'] = 'Смена сервера для заказа ID';
$_lang['FakturaNewSlots'] = 'Смена количества слотов для заказа ID';
$_lang['FakturaPrefixSrok'] = 'период';

#####################################################################################
##################### v1.9.0
#####################################################################################

$_lang['DomainDeleteReasonRegistratorCancel2'] = 'домен удален из реестра';
$_lang['OrderLocalContact'] = 'Локальный контакт';
$_lang['OrderLocalContactHelp'] = 'Домен будет зарегистрирован с использованием контактов регистратора. Ваши персональные данные отображены в WHOIS не будут.';
$_lang['OrderLocalContactOrder'] = 'Заказать локальный контакт';
$_lang['ErrorUpdContactWithLocalContact'] = 'Смена контактов запрещена. Пожалуйста, обратитесь в службу поддержки.';
$_lang['PayInterkassaSelect'] = 'Выберите способ оплаты';

#####################################################################################
##################### v1.9.1
#####################################################################################

$_lang['ButtonFillProfile'] = 'Заполнить профайл';
$_lang['ProfileOgrnDate'] = 'Дата выдачи ОГРН';
$_lang['ProfileOgrnDateComment'] = 'Когда выдан ОГРН (для Российских организаций) или другой документ о регистрации (для юридических лиц других стран).';
$_lang['ProfileRegData'] = 'Регистрационные данные';
$_lang['ProfileOkpo'] = 'ОКПО';
$_lang['ProfilePassportIdnum'] = 'Идентификационный номер';
$_lang['ProfilePassportIdnumComment'] = '';
$_lang['ProfileSkype'] = 'Skype';

#####################################################################################
##################### v1.9.2
#####################################################################################

$_lang['payEasySoftDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов EasyPay, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';
$_lang['BillingMenuId'] = 'Ваш ID';

#####################################################################################
##################### v1.9.4
#####################################################################################

$_lang['OrdersServerInfo'] = 'Данные сервера';
$_lang['OrdersServerInfoServerName'] = 'Имя сервера';
$_lang['OrdersServerInfoServerIp'] = 'IP адрес сервера';
$_lang['OrdersServerInfoServerAddonIps'] = 'Дополнительные IP адреса';
$_lang['OrdersServerInfoSitesIp'] = 'IP сайтов';
$_lang['OrdersServerInfoDNSNum'] = 'NS';

$_lang['FundsMinSummError'] = 'Недопустимая сумма пополнения.';

$_lang['ProfileGender'] = 'Пол';
$_lang['ProfileGenderMale'] = 'Мужской';
$_lang['ProfileGenderFemale'] = 'Женский';

$_lang['OrderDopOrderParams'] = 'Дополнительные параметры заказа';

$_lang['OrderErrorNeedAuthForSSLOrder'] = 'Для заказа SSL-сертификатов необходимо предварительно выполнить вход в биллинговую систему.';
$_lang['OrderErrorSSLNoCheckAdminContact'] = 'Административный контакт не заполнен всеми необходимым данными.';
$_lang['OrderErrorSSLNoCheckTechContact'] = 'Технический контакт не заполнен всеми необходимым данными.';
$_lang['OrderErrorSSLNoCheckOrgContact'] = 'Контакт организации не заполнен всеми необходимым данными.';

$_lang['OrderSSLCSR'] = 'Запрос на подпись сертификата (CSR код)';
$_lang['OrderSSLCSRComment'] = 'Пожалуйста, убедитесь, что код содержит верхний и нижний колонтитулы `BEGIN` и `END`.';
$_lang['OrderSSLAdminContact'] = 'Административный Контакт + Обратный звонок';
$_lang['OrderSSLAdminContactComment'] = 'Административный контакт является основным контактом для обратной связи, в случае необходимости в разрешении любых вопросов связанных с заказом. Данный контакт будет также использован как контактное лицо для звонков, которые производятся для всех сертификатов с бизнес или расширенной проверкой. Для сертификатов с проверкой домена обратные звонки производиться не будут.';
$_lang['OrderSSLTechContact'] = 'Технический контакт';
$_lang['OrderSSLTechContactComment'] = 'Техническое контактое лицо получит сертификат для установки на веб-сервер, а так же в дальнейшем будет получать уведомления о необходимости продления сертификата.';
$_lang['OrderSSLOrgContact'] = 'Информация о компании';
$_lang['OrderSSLOrgContactComment'] = 'Информация о Вашей компании будет отображаться в вашем сертификате. Пожалуйста, убедитесь, что эта информация соответствует информации из CSR и документам которые вы будете отправлать для проверки.';
$_lang['OrderSSLServersCount'] = 'Количество лицензированных серверов';
$_lang['OrderSSLServersCountComment'] = 'Сколько серверов вы хотите защитить?';
$_lang['OrderSSLServersCountUnlimited'] = 'Неограниченно';
$_lang['OrderSSLAddonDomains'] = 'Защитить дополнительные домены';
$_lang['OrderSSLAddonDomainsComment'] = 'Для защиты дополнительных доменов, укажите дополнительные домены, которые будут добавленны в ваш сертификат. Все домены должны быть зарегистрированы на одну и ту же организацию. Пример:<BR><BR>- yourdomain.com<BR>- mail.yourdomain.com<BR>- any.yourdomain.com<BR>- yourdomain.local<BR>- yourotherdomain.ru';
$_lang['OrderSSLWebServer'] = 'Тип веб-сервера';
$_lang['OrderSSLWebServerComment'] = 'Выберите серверную платформу из списка. Выберите `Другой`, если Ваше серверное программное обеспечение отсутствует в списке.';
$_lang['OrderSSLWebServerOther'] = 'Другой';
$_lang['OrderSSLApproverEmail'] = 'Email для подтверждения запроса (DCV)';
$_lang['OrderSSLApproverEmailComment'] = 'Пожалуйста, выберите Email Администратора. Это необходимо для подтверждения запроса на сертификат. Вы должны убедиться, что Email создан и доступен, прежде чем выбрать его, в противном случае Вы не сможете получить проверочное сообщение. Только адреса электронной почты из списка могут быть использованы!';
$_lang['OrderSSLOrderType'] = 'Тип заказа';
$_lang['OrderSSLOrderTypeComment'] = 'Если у вас есть действующий сертификат той же марки и с тем же доменом, который истекает, выберите: `Продление`. Мы добавим оставшееся время существующего сертификата к новому сертификату, с округлением до ближайшего целого месяца.';
$_lang['OrderSSLOrderTypeNew'] = 'Новый';
$_lang['OrderSSLOrderTypeRenewal'] = 'Продление';
$_lang['OrderSSLAgreement'] = 'Соглашение пользователя';
$_lang['OrderSSLAgreementAgree'] = 'Принимаю условия соглашения';

$_lang['payHutkiGroshDetails'] = 'Необходимо произвести оплату на произвольную сумму через систему Расчет, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор абонента (номер лицевого счета):</B>';

$_lang['pay2clickDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов 2click, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';

$_lang['ProfileSecurity'] = 'Безопасность';
$_lang['ProfileSecurityAllowedIPs'] = 'Ограничение по IP';
$_lang['ProfileSecurityAllowedIPsComment'] = '<B>Ограничение доступа к биллингу по IP.</B><BR>Каждый ip или диапазон ip указывается в новой строке. Диапазон ip указывается через дефис. Если ничего не указано - ограничений по доступу к биллингу нет!<BR><BR><B>Пример:</B><BR>192.15.3.2<BR>10.10.1.1<BR>192.168.0.1-192.168.0.10<BR><BR><B>Будьте осторожны!</B> Если Вы укажете IP-адреса и не укажете свой IP, то не сможете попасть в биллинг. Ваш IP:';
$_lang['ProfileSecurityAllowedApiIPs'] = 'Ограничение по IP';
$_lang['ProfileSecurityAllowedApiIPsComment'] = '<B>Ограничение доступа к API по IP.</B><BR>Каждый ip или диапазон ip указывается в новой строке. Диапазон ip указывается через дефис. Если ничего не указано - ограничений по доступу к API нет!<BR><BR><B>Пример:</B><BR>192.15.3.2<BR>10.10.1.1<BR>192.168.0.1-192.168.0.10';
$_lang['ErrorBadIP'] = 'Ваш IP адрес отсутствует в списке доступа.';

$_lang['ErrorAPIcode54'] = 'Доступ запрещен. IP отсутствует в списке разрешенных';
$_lang['ErrorAPIcode55'] = 'Для данной доменной зоны трансфер не поддерживается';
$_lang['ErrorAPIcode56'] = 'Доменное имя не зарегистрировано';
$_lang['ErrorAPIcode57'] = 'API не поддерживает работу с собственными DNS-серверами при трансфере';
$_lang['ErrorAPIcode58'] = 'Не указан AUTH-CODE доменного имени';


#####################################################################################
##################### v1.9.5
#####################################################################################

$_lang['OrderDomainSrok'] = 'Срок регистрации, лет';


#####################################################################################
##################### v1.9.6
#####################################################################################

$_lang['ZonesTransfer'] = 'трансфер';
$_lang['ZonesTransferCost0'] = 'при трансфере только домена';
$_lang['ZonesTransfer2Cost0'] = 'при трансфере вместе с заказом тарифного плана';

$_lang['ProfilePassportOib'] = 'Company or Personal ID (OIB)';
$_lang['ProfilePassportOibComment'] = '';

$_lang['regFields']['srvlocfor'] = 'Месторасположение сервера для';
$_lang['regFields']['srvlocStreet'] = 'Месторасположение сервера (адрес)';
$_lang['regFields']['srvlocCity'] = 'Месторасположение сервера (город)';
$_lang['regFields']['srvlocSp'] = 'Месторасположение сервера (область/штат)';
$_lang['DomainsChangeSrvLocSuccess'] = 'Месторасположение успешно изменено.';
$_lang['DomainsErrorChangeSrvLoc'] = 'Не удалось изменить месторасположение.';

$_lang['DomainsChildNS'] = 'Управление дочерними NS';
$_lang['DomainsChildNSFor'] = 'Управление дочерними NS для домена';
$_lang['DomainsNS'] = 'NameServer';
$_lang['DomainsChildNSCreate'] = 'создать';
$_lang['DomainsChildNSUpdate'] = 'изменить';
$_lang['DomainsChildNSDelete'] = 'удалить';
$_lang['DomainsChildNSOldIP'] = 'Текущий IP';
$_lang['DomainsChildNSNewIP'] = 'Новый IP';
$_lang['ErrorDomainsChildNSNoNs'] = 'Не указано имя дочернего NS';
$_lang['ErrorDomainsChildNSNoNewIP'] = 'Не указан новый IP';
$_lang['ErrorDomainsChildNSNoOldIP'] = 'Не указан текущий IP';
$_lang['DomainsChildNSSuccess'] = 'Операция успешно выполнена.';

$_lang['OrderUseServerNS'] = 'Использовать DNS-сервера от хостинг-аккаунта';

#####################################################################################
##################### v1.9.7
#####################################################################################

$_lang['BillingMenuCurrency'] = 'Курсы валют';
$_lang['BillingMenuSpecialCosts'] = 'Спец. цены'; 
$_lang['SpecialCostsTitle'] = 'Ваши специальные цены';
$_lang['OrderErrorAddonsNoRequired'] = 'Необходимо заказать дополнительную услугу из группы';
$_lang['BillingMenuSMSSend'] = 'Отправить SMS';
$_lang['SMSSendTitle'] = 'Отправить SMS';
$_lang['SMSSendToNumbers'] = 'Список номеров (кому)';
$_lang['SMSSendFrom'] = 'Отправитель (от кого)';
$_lang['SMSSendMessage'] = 'Сообщение';
$_lang['SMSSendSymbols'] = 'символов';
$_lang['SMSSendParts'] = 'частей';
$_lang['SMSSendTranslit'] = 'Перевести в транслит';
$_lang['ErrorSMSSendNoMobiles'] = 'Не указан номер телефона получателя.';
$_lang['ErrorSMSSendNoText'] = 'Не указан текст сообщения.';
$_lang['SMSSendLeftSMS'] = 'Остаток sms';
$_lang['SMSSendConfirm'] = 'Подтверждение отправки';
$_lang['SMSSendNumber'] = 'номер';
$_lang['SMSSendCost'] = 'стоимость';
$_lang['SMSSendPacketSMS'] = 'пакетных SMS';
$_lang['SMSSendResult'] = 'Результат отправки';
$_lang['SMSSendResultSmall'] = 'результат';
$_lang['SMSSendResultSended'] = 'отправлено';
$_lang['SMSSendResultNoPacketForSMSOut'] = 'ошибка изменения остатка sms в пакете';

$_lang['DomainsChangeProfileIdError'] = 'Запрещено использовать данные указанного профайла. Используйте профайл к которому привязан домен.';
$_lang['ErrorAPIcode59'] = 'ID профайла не должен отличаться от ID профайла на который изначально регистрировался домен';

#####################################################################################
##################### v1.9.8
#####################################################################################

$_lang['OrdersStart'] = 'Включить';
$_lang['OrdersStartAlert'] = 'Вы уверены, что хотите включить сервер?';
$_lang['OrdersStartSuccess'] = 'Сервер успешно включен.';
$_lang['OrdersStartError'] = 'Не удалось включить сервер. Ожидайте пока это сделает администрация.';
$_lang['OrdersErrorCantStart'] = 'Вы не можете включить сервер для данного заказа.';
$_lang['OrdersStop'] = 'Выключить';
$_lang['OrdersStopAlert'] = 'Вы уверены, что хотите выключить сервер?';
$_lang['OrdersStopSuccess'] = 'Сервер успешно выключен.';
$_lang['OrdersStopError'] = 'Не удалось выключить сервер. Ожидайте пока это сделает администрация.';
$_lang['OrdersErrorCantStop'] = 'Вы не можете выключить сервер для данного заказа.';
$_lang['OrdersStartIPMI'] = 'Включить IPMI';
$_lang['OrdersStartIPMIAlert'] = 'Вы уверены, что хотите включить IPMI?';
$_lang['OrdersStartIPMISuccess'] = 'IPMI успешно включен.';
$_lang['OrdersStartIPMIError'] = 'Не удалось включить IPMI. Ожидайте пока это сделает администрация.';
$_lang['OrdersErrorCantStartIPMI'] = 'Вы не можете включить IPMI для данного заказа.';
$_lang['OrdersStopIPMI'] = 'Отключить IPMI';
$_lang['OrdersStopIPMIAlert'] = 'Вы уверены, что хотите выключить IPMI?';
$_lang['OrdersStopIPMISuccess'] = 'IPMI успешно выключен.';
$_lang['OrdersStopIPMIError'] = 'Не удалось выключить IPMI. Ожидайте пока это сделает администрация.';
$_lang['OrdersErrorCantStopIPMI'] = 'Вы не можете выключить IPMI для данного заказа.';

$_lang['ShopSiteEditor'] = 'Редактор сайта';
$_lang['ShopPublicSettings'] = 'Параметры публикации';
$_lang['ShopPWBwwwUrl'] = 'WWW-адрес сайта';
$_lang['ShopPWBftpServer'] = 'FTP сервер';
$_lang['ShopPWBftpLogin'] = 'FTP логин';
$_lang['ShopPWBftpPassword'] = 'FTP пароль';
$_lang['ShopPWBftpFolder'] = 'FTP папка';
$_lang['ShopChangePublicSettingsSuccess'] = 'Параметры публикации успешно изменены.';

$_lang['BillingServerId'] = 'ID сервера';
$_lang['OrdersChangeToken'] = 'Создать новый токен';
$_lang['OrdersNewToken'] = 'Новый токен';
$_lang['OrdersChangeTokenSuccess'] = 'Новый токен успешно создан.';

$_lang['payQiwiTermDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов QIWI, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';

#####################################################################################
##################### v1.9.9
#####################################################################################

$_lang['OrderErrorDomainReserved'] = 'Доменное имя зарезервировано.';
$_lang['OrderDomainStatusErrorReserved'] = 'домен зарезервирован';
$_lang['ErrorAPIcode60'] = 'Ошибка проверки доступности доменного имени';
$_lang['OrderErrorDomainNeedUserReg'] = 'Для заказа доменного имени в указанной доменной зоне, необходимо предварительно <a class=rootlink href=billing.php?do=order&type=partner>зарегистрироваться</a> в биллинговой системе.';
$_lang['OrderDomainStatusErrorOptForZoneNoSupport'] = 'заказ оптом для данной зоны не поддерживается';
$_lang['OrderErrorCantCreateContact'] = 'Не удалось создать контакт для профайла у регистратора.';
$_lang['OrderConfirmCode'] = 'Код подтверждения из SMS';
$_lang['OrderErrorNoConfirmCode'] = 'Не указан код подтверждения';
$_lang['OrderErrorCantCheckContactConfirmCode'] = 'Не удалось проверить код подтверждения у регистратора.';
$_lang['OrderErrorBadContactConfirmCode'] = 'Указан неправильный код подтверждения.';
$_lang['BillingMenuAllOrders'] = 'Все заказы';
$_lang['BillingMenuCurrentPage'] = 'Вы находитесь';
$_lang['BillingMenuBilling'] = 'Биллинг';

#####################################################################################
##################### v2.0.0
#####################################################################################

$_lang['BillingMenuBonuses'] = 'Бонусы';
$_lang['BonusesTitle'] = 'Бонусы';
$_lang['BonusesErrorNoActivePartners'] = 'Нет доступных бонус-партнеров.';
$_lang['BonusesSelectPartner'] = 'Для получения промо-кода на скидку, выберите партнера из списка';
$_lang['BonusesGetCode'] = 'Получить промо-код';
$_lang['BonusesErrorNoPartner'] = 'Не выбран партнер.';
$_lang['BonusesErrorNoCodeForUser'] = 'Нет доступных промо-кодов для данного партнера.';
$_lang['BonusesYourBonusCodeFor'] = 'Ваш промо-код для';

$_lang['ProfileShowLastIPPopup'] = 'Отображать последний IP';
$_lang['ProfileShowLastIPPopupComment'] = 'Если включено, после аутентификации будет отображена информация о последнем входе в биллинг.';

$_lang['UserLastEnterInfo'] = 'Информация о последнем входе';
$_lang['UserLastEnter'] = 'Ваш последний вход был осуществлен';
$_lang['UserLastEnterAt'] = 'в';
$_lang['UserLastEnterFromIP'] = 'с IP-адреса';

$_lang['BillsInPaymentCurrencyPayed'] = 'оплачено';
$_lang['BillsInPaymentCurrency'] = 'сумма в валюте платежной системы';

#####################################################################################
##################### v2.0.1
#####################################################################################

$_lang['OrderShopDeliveryAddressField'] = 'Адрес доставки';
$_lang['OrderShopUploadFileField'] = 'Прикрепить файл';
$_lang['ErrorNoShopDeliveryAddressField'] = 'Не указан адрес доставки.';
$_lang['ErrorNoShopUploadFileField'] = 'Не указан файл для загрузки.';
$_lang['ErrorCantUploadShopUploadFile'] = 'Не удалось загрузить файл.';
$_lang['ErrorAccessDenied'] = 'Доступ запрещен.';

#####################################################################################
##################### v2.0.2
#####################################################################################

$_lang['DomainsPrivacyTitle'] = 'Управление Privacy Protection';
$_lang['DomainsChildNSTitle'] = 'Управление дочерними NS';
$_lang['DomainsNSTitle'] = 'Управление DNS-серверами';
$_lang['DomainsDNSRecordsTitle'] = 'Управление DNS-записями';
$_lang['DomainsChangeContactTitle'] = 'Изменение контактов';
$_lang['DomainsPushDomainTitle'] = 'Передача домена';
$_lang['BillsGetFakturaAct'] = 'Получить акт выполненных работ';
$_lang['OrdersAddonsTitle'] = 'Управление дополнительными услугами';
$_lang['DomainsSelectedDomains'] = 'Отмеченные домены';
$_lang['DomainsDomainsRenew'] = 'Продлить';
$_lang['SMSSendSMS'] = 'sms';
$_lang['TicketsAttachedFiles'] = 'Прикрепленные файлы';
$_lang['DomainsApiDocTitle'] = 'Описание ROOTPANEL.NET API системы регистрации доменов';
$_lang['TarifsApiDocTitle'] = 'Описание ROOTPANEL.NET API системы управления хостингом и серверами';
$_lang['OrderId'] = 'ID';
$_lang['OrderDeleteReasonExpired'] = 'истек срок заказа и заказ не продлен';
$_lang['ClientDeleteReasonExpired'] = 'аккаунт пользователя просрочен';
$_lang['ErrorVerificationSMSCount'] = 'Превышено допустимое количество отправляемых SMS.';

#####################################################################################
##################### v2.0.3
#####################################################################################

$_lang['DomainsErrorNoOperationSupportForRegistrator'] = 'Операция не поддерживается для регистратора';
$_lang['RenewErrorCantDeleteAddonBecauseCheckMinusParamError'] = 'Вы не можете отказаться от дополнительной услуги';
$_lang['RenewErrorCantDeleteAddonBecauseCheckMinusParamError2'] = 'Текущее использование данной характеристики превышает ее остаток после отказа.';
$_lang['BillingMenuLoyalty'] = 'Ваша скидка по программе лояльности';
$_lang['OrderTitleTypeAddon'] = 'Доп. услуги';
$_lang['OrderAddonCancelLink'] = 'Отказаться';
$_lang['OrderAddonCancelLinkConfirm'] = 'Вы уверены, что хотите отказаться от дополнительных услуг?';
$_lang['OrderErrorNoAddonForOrder'] = 'Дополнительная услуга отсутствует в заказе.';
$_lang['OrderErrorNoAddon'] = 'Дополнительная услуга не найдена.';
$_lang['OrderErrorNoAddonCancelAllowed'] = 'Отказ от дополнительной услуги запрещен.';
$_lang['OrderAddonCancelSuccess'] = 'Отказ от дополнительных услуг успешно выполнен.';
$_lang['BillsCancelingAddons'] = 'Удаляемые доп. услуги';
$_lang['BillsCancelAddons'] = 'Отказ от доп. услуг';
$_lang['FakturaAddonDelete'] = 'Отказ от дополнительных услуг для заказа ID';
$_lang['FakturaDomainPrivacy'] = 'Privacy Protection для доменного имени';

#####################################################################################
##################### v2.0.4
#####################################################################################

$_lang['PayBillAlreadyPayed'] = 'Счет оплачен.';
$_lang['ShopItemsErrorNotFound'] = 'Товар не найден.';
$_lang['ShopItemsSeeAllItems'] = 'К списку товаров';
$_lang['ShopItemsCost'] = 'Цена';
$_lang['ShopItemsDescription'] = 'Описание';
$_lang['ShopItemsDetails'] = 'Подробнее';

#####################################################################################
##################### v2.0.5
#####################################################################################

$_lang['tarifParamsValues']['extraquota'] = 'Диск, Mb';
$_lang['tarifParamsValues']['extradomains'] = 'Домены, шт.';
$_lang['tarifParamsValues']['extrawwwdomains'] = 'WWW-домены, шт.';
$_lang['tarifParamsValues']['extradatabases'] = 'Базы данных, шт.';
$_lang['tarifParamsValues']['extraftpaccounts'] = 'FTP-аккаунты, шт';
$_lang['tarifParamsValues']['extraemailaccounts'] = 'Почтовые ящики, шт.';
$_lang['tarifParamsValues']['extracpu'] = 'CPU, шт.';
$_lang['tarifParamsValues']['extracpufreq'] = 'CPU, MHz';
$_lang['tarifParamsValues']['extraram'] = 'Память, Mb';
$_lang['tarifParamsValues']['extraproc'] = 'Процессы, шт.';
$_lang['tarifParamsValuesComments']['extraquota'] = 'Дополнительное дисковое пространство';
$_lang['tarifParamsValuesComments']['extradomains'] = 'Дополнительные доменные имена';
$_lang['tarifParamsValuesComments']['extrawwwdomains'] = 'Дополнительные WWW-домены';
$_lang['tarifParamsValuesComments']['extradatabases'] = 'Дополнительные базы данных';
$_lang['tarifParamsValuesComments']['extraftpaccounts'] = 'Дополнительные FTP-аккаунты';
$_lang['tarifParamsValuesComments']['extraemailaccounts'] = 'Дополнительные почтовые ящики';
$_lang['tarifParamsValuesComments']['extracpu'] = 'Дополнительные процессоры';
$_lang['tarifParamsValuesComments']['extracpufreq'] = 'Дополнительная частота процессора';
$_lang['tarifParamsValuesComments']['extraram'] = 'Дополнительная память';
$_lang['tarifParamsValuesComments']['extraproc'] = 'Дополнительные процессы';

$_lang['ErrorAPIHcode1'] = 'Ошибка подключения к БД';
$_lang['ErrorAPIHcode2'] = 'Ошибка сохранения данных в БД';
$_lang['ErrorAPIHcode3'] = 'Не указан логин пользователя';
$_lang['ErrorAPIHcode4'] = 'Пользователь не найден';
$_lang['ErrorAPIHcode5'] = 'Доступ к API отключен';
$_lang['ErrorAPIHcode6'] = 'Не указан пароль или ключ API';
$_lang['ErrorAPIHcode7'] = 'Указан неправильный пароль или ключ API';
$_lang['ErrorAPIHcode8'] = 'Неизвестная команда';
$_lang['ErrorAPIHcode9'] = 'Запрещено использовать пароль и ключ API в одном запросе';
$_lang['ErrorAPIHcode10'] = 'Тарифные планы отсутствуют';
$_lang['ErrorAPIHcode11'] = 'Не указан идентификатор тарифного плана';
$_lang['ErrorAPIHcode12'] = 'Тарифный план не найден';
$_lang['ErrorAPIHcode13'] = 'Не указано доменное имя';
$_lang['ErrorAPIHcode14'] = 'Тарифный план для указанного доменного имени уже заказан';
$_lang['ErrorAPIHcode15'] = 'Не указан срок заказа';
$_lang['ErrorAPIHcode16'] = 'Указан недопустимый срок заказа';
$_lang['ErrorAPIHcode17'] = 'Указана недопустимая дополнительная услуга';
$_lang['ErrorAPIHcode18'] = 'Не указан идентификатор заказа';
$_lang['ErrorAPIHcode19'] = 'Заказ не найден';
$_lang['ErrorAPIHcode20'] = 'Для заказа есть неоплаченные счета';
$_lang['ErrorAPIHcode21'] = 'Заказ уже приостановлен';
$_lang['ErrorAPIHcode22'] = 'Заказ уже запущен';
$_lang['ErrorAPIHcode23'] = 'Заказ просрочен';
$_lang['ErrorAPIHcode24'] = 'Тип тарифного плана указан неверно';
$_lang['ErrorAPIHcode25'] = 'Операция не поддерживается для заказов данного типа';
$_lang['ErrorAPIHcode26'] = 'Заказы отсутствуют';
$_lang['ErrorAPIHcode30'] = 'Заявка принята, но по техническим причинам будет обработана в ручном режиме';
$_lang['ErrorAPIHcode31'] = 'Недостаточно среств на внутреннем балансе';
$_lang['ErrorAPIHcode54'] = 'Доступ запрещен. IP отсутствует в списке разрешенных';

$_lang['BillsErrorNoRenew'] = 'Невозможно продлить домены';

#####################################################################################
##################### v2.0.6
#####################################################################################

$_lang['PayErrorProfileInRegistrarStopList'] = 'Оплата заказа запрещена. Пожалуйста, обратитесь в службу поддержки.';
$_lang['OrderParamsOfOrderOneWord'] = 'параметры';
$_lang['OrderSokraschenieDay'] = 'дн.';

$_lang['BillingPanel'] = 'Биллинг панель';
$_lang['BillingWelcome'] = 'Добро пожаловать';

$_lang['BillingMainMenuAbout'] = 'О компании';
$_lang['BillingMainMenuNews'] = 'Новости';
$_lang['BillingMainMenuUslugi'] = 'Наши услуги';
$_lang['BillingMainMenuZones'] = 'Домены';
$_lang['BillingMainMenuShopItems'] = 'Товары';
$_lang['BillingMainMenuSites'] = 'Клиенты';
$_lang['BillingMainMenuTestimonials'] = 'Отзывы';
$_lang['BillingMainMenuFaq'] = 'FAQ';
$_lang['BillingMainMenuRegister'] = 'Регистрация';
$_lang['BillingMainMenuLogin'] = 'Вход';
$_lang['BillingMainMenuFeedback'] = 'Контакты';

$_lang['DomainsDomainControl'] = 'Управление доменом';
$_lang['OrdersOrderControl'] = 'Управление заказом';
$_lang['ShopOrderControl'] = 'Управление заказом';
$_lang['FeedTitle2'] = 'Написать нам';
$_lang['BillingLoginTitle'] = 'Вход в кабинет';
$_lang['TarifsNoDescription'] = 'Описание отсутствует';

$_lang['OrderDomainsOwner'] = 'Владелец доменных имен';
$_lang['OrderPrivacyOrderIfPossible'] = 'Заказать скрытие данных в WHOIS, если это позволяет доменная зона';

$_lang['FakturaDomainZone'] = 'Делегирование доменного имени в зоне';

#####################################################################################
##################### v2.0.7
#####################################################################################

$_lang['payIboxDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов iBox, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';
$_lang['FeedbackDisabled'] = 'Обратная связь отключена';
$_lang['DomainPrivacyCurrentStatusPayedAndEnabled'] = 'услуга активна, скрытие данных включено';
$_lang['DomainPrivacyCurrentStatusPayedAndDisabled'] = 'услуга активна, скрытие данных выключено';
$_lang['DomainPrivacyCurrentStatusDisabled'] = 'услуга не активна';

#####################################################################################
##################### v2.0.8
#####################################################################################

$_lang['HistoryDate'] = 'Дата/время';
$_lang['HistoryOperation'] = 'Действие';
$_lang['HistoryInfo'] = 'Информация';
$_lang['HistoryTotalRecords'] = 'Всего записей';
$_lang['HistoryRecordsOnPage'] = 'записей на странице';
$_lang['HistoryTitle'] = 'История входов в аккаунт';

$_lang['regFields']['domainDescription'] = 'Описание домена';

$_lang['DomainsPushConfirmEmailSent'] = 'Требуется подтверждение передачи домена. На Ваш email отправлено сообщение с инструкцией.';
$_lang['DomainsPushErrorBadConfirmCode'] = 'Передача домена не возможна, т.к. введен неверный код подтверждения.';

$_lang['BillingMainMenuDomainShop'] = 'Магазин доменов';
$_lang['FakturaDomainSale'] = 'Публикация в магазине доменного имени';
$_lang['DomainsSale'] = 'Домен в продаже';
$_lang['DomainsSaleDomain'] = 'Продажа домена';
$_lang['ErrorBadTemplate'] = 'Не удалось получить шаблон Email сообщения.';

$_lang['DomainShopTitle'] = 'Магазин доменов';
$_lang['DomainShopGroupPriority'] = 'Приоритетные домены';
$_lang['DomainShopGroupNormal'] = 'Домены';
$_lang['DomainShopCurrency'] = 'Валюта';
$_lang['DomainShopCost'] = 'Цена';

$_lang['DomainShopBuyTitle'] = 'Покупка домена';
$_lang['DomainShopBuyDomainCost'] = 'Стоимость домена';
$_lang['DomainShopBuyBuyerName'] = 'Ваше имя';
$_lang['DomainShopBuyBuyerEmail'] = 'Ваш email';
$_lang['DomainShopBuyBuyerComment'] = 'Ваш комментарий';
$_lang['DomainShopBuySendRequest'] = 'Отправить запрос продавцу';
$_lang['DomainShopBuyRequestSendedSuccess'] = 'Запрос продавцу домена успешно отправлен. Ожидайте пока продавец свяжется с Вами.';
$_lang['DomainShopBuyErrorBuyerEmail'] = 'Не указан Email покупателя.';
$_lang['DomainShopBuyErrorBuyerName'] = 'Не указано имя покупателя.';

$_lang['DomainSalePublicate'] = 'Публикация в магазине доменов';
$_lang['DomainSalePublicateFor'] = 'Публикация в магазине доменов для';
$_lang['DomainSaleCost'] = 'цена';
$_lang['DomainSalePublicateNewCost'] = 'новая цена';
$_lang['DomainSaleErrorCost'] = 'Стоимость домена не может быть меньше нуля.';
$_lang['DomainSaleDeleteSuccess'] = 'Публикация домена успешно отменена.';
$_lang['DomainSaleUpdateSuccess'] = 'Параметры публикации домена успешно изменены.';
$_lang['DomainSalePubSuccess'] = 'Публикация домена успешно выполнена.';
$_lang['DomainSaleCurrentStatusPublicated'] = 'домен опубликован';
$_lang['DomainSaleCurrentStatusNoPublicated'] = 'домен не опубликован';
$_lang['DomainSaleDelete'] = 'отменить';
$_lang['DomainSaleUpdate'] = 'изменить';
$_lang['DomainSalePub'] = 'опубликовать';

$_lang['TicketsHaveNewTickets'] = 'У Вас есть новые тикеты или непрочитанные ответы в старых тикетах.';

$_lang['Buy'] = 'Купить';
$_lang['Read'] = 'Прочитать';
$_lang['Go'] = 'Перейти';
$_lang['Generate'] = 'Сгенерировать';

$_lang['payPortmanatAccount'] = 'через аккаунт';
$_lang['payPortmanatCode'] = 'с помощью кода';
$_lang['payPortmanatCodeComment'] = '<B>Внимание!</B> Если номинал кода меньше суммы счета, средства будут зачислены на внутренний баланс. Если номинал кода больше суммы счета, остаток средств будет зачислен на внутренний баланс.';

$_lang['payBlockchainPleaseSend'] = 'Необходимо отправить';
$_lang['payBlockchainPleaseSendToAddress'] = 'на адрес';

$_lang['ErrorNoMobileInSettings'] = 'Необходимо указать в настройках номер мобильного телефона.';

$_lang['OrdersOnlineCSRGenerator'] = 'сгенерировать CSR';

$_lang['UtilsCSRGeneratorTitle'] = 'Online CSR генератор';
$_lang['UtilsCSRGeneratorWarning'] = 'Добавьте *. перед Common Name для генерации CSR для Wildcard<BR>Пример: https://*.domain.com';
$_lang['UtilsCSRGeneratorCommonName'] = 'Common Name';
$_lang['UtilsCSRGeneratorOrganization'] = 'Организация (на английском)';
$_lang['UtilsCSRGeneratorDepartment'] = 'Департамент (пр.: IT Dept)';
$_lang['UtilsCSRGeneratorCity'] = 'Город (пр.: New York)';
$_lang['UtilsCSRGeneratorState'] = 'Штат (пр.: Alabama/None)';
$_lang['UtilsCSRGeneratorEmail'] = 'Email';
$_lang['UtilsCSRGeneratorCountry'] = 'Страна';
$_lang['UtilsCSRGeneratorCsrCode'] = 'Ваш CSR для';
$_lang['UtilsCSRGeneratorCsrKey'] = 'Ваш Private Key';
$_lang['UtilsCSRGeneratorResultWarning'] = 'Пожалуйста, сохраните данные в безопасном месте!';
$_lang['UtilsCSRGeneratorErrorNoCommonName'] = 'Не указан Common Name.';
$_lang['UtilsCSRGeneratorErrorNoOrganization'] = 'Не указана Организация.';
$_lang['UtilsCSRGeneratorErrorNoDepartment'] = 'Не указан Департамент.';
$_lang['UtilsCSRGeneratorErrorNoCity'] = 'Не указан Город.';
$_lang['UtilsCSRGeneratorErrorNoState'] = 'Не указан Штат.';
$_lang['UtilsCSRGeneratorErrorNoEmail'] = 'Не указан Email.';
$_lang['UtilsCSRGeneratorErrorNoCountry'] = 'Не указана Страна.';

#####################################################################################
##################### v2.0.9
#####################################################################################

$_lang['FQDN'] = 'FQDN';

$_lang['ErrorAPIcode61'] = 'Не указан номер свидетельства ТМ';

$_lang['BillsBillNumSmall'] = 'счет №';
$_lang['BillsTarifUnknown'] = 'UNKNOWN';
$_lang['BillsRenewAddons'] = 'Продление доп. услуг';
$_lang['BillsPayFor'] = 'Оплата за услуги';
$_lang['BillsPayStatus'] = 'Оплата';
$_lang['BillsDeleteError'] = 'Ошибка удаления счета.';

$_lang['DomainsDeleteError'] = 'Ошибка удаления домена.';

$_lang['OrdersOrder'] = 'Заказ';
$_lang['OrdersDeleteError'] = 'Ошибка удаления заказа.';

$_lang['OrderPromoCodeSmall'] = 'промо-код';

$_lang['ShopItemsDeleteSuccess'] = 'Заказ на товар и все счета, относящиеся к нему, успешно удалены.';
$_lang['ShopItemsDeleteError'] = 'Ошибка удаления заказа на товар.';

$_lang['TicketsClosedByUser'] = 'Тикет закрыт клиентом.';

#####################################################################################
##################### v2.1.0
#####################################################################################

$_lang['Delete'] = 'Удалить';

$_lang['WarningAddFundsNeedAuth'] = 'Для зачисления средств на счет необходимо войти в биллинг.';

$_lang['ErrorBalanceDisabled'] = 'Внутренний баланс отключен. Пожалуйста, обратитесь в службу поддержки.';
$_lang['ErrorPaySystemNotFoundOrInactive'] = 'Платежная система не найдена или не активна. Пожалуйста, обратитесь в службу поддержки.';
$_lang['ErrorCheckCode'] = 'Ошибка проверки кода.';
$_lang['ErrorCodeUsed'] = 'Код уже был использован ранее.';
$_lang['ErrorBillCreate'] = 'Ошибка создания счета.';

$_lang['PayCoupon'] = 'Купон';
$_lang['payFcSistemaDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов ФК Система, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';

$_lang['OrdersStatusTestSuspended'] = 'Тестовый период (приостановлен)';

$_lang['OrderErrorEmailInBlackList'] = 'Регистрация для указанного Email адреса или почтового домена запрещена.';
$_lang['OrderErrorMobileInBlackList'] = 'Регистрация для указанного номера мобильного телефона или оператора мобильной связи запрещена.';
$_lang['OrderErrorCountryInBlackList'] = 'Регистрация для указанного региона запрещена.';

$_lang['SettingsNewRePassword'] = 'Подтвердите новый пароль';
$_lang['SettingsDefaultLanguage'] = 'Язык по умолчанию';
$_lang['SettingsErrorEmailInBlackList'] = 'Использование указанного Email адреса или почтового домена запрещено.';
$_lang['SettingsErrorEmail2InBlackList'] = 'Использование указанного альтернативного Email адреса или почтового домена запрещено.';
$_lang['SettingsErrorMobileInBlackList'] = 'Использование указанного номера мобильного телефона или оператора мобильной связи запрещено.';
$_lang['SettingsErrorCountryInBlackList'] = 'Использование указанного региона запрещено.';
$_lang['SettingsErrorNewPasswordNoConfirm'] = 'Не подтверждён новый пароль.';
$_lang['SettingsErrorNewPasswordLength'] = 'Длина нового пароля не должна быть менее 6 символов.';
$_lang['SettingsErrorNewPasswordConfirm'] = 'Неправильно подтверждён новый пароль.';
$_lang['SettingsErrorEmail2Exists'] = 'Указанный альтернативный Email уже используется другим пользователем.';
$_lang['SettingsErrorBadJabber'] = 'Указан неправильный Jabber ID.';
$_lang['SettingsErrorJabberExists'] = 'Jabber ID уже указан другим клиентом.';

$_lang['ProfileJabber'] = 'Jabber ID';

#####################################################################################
##################### v2.1.1
#####################################################################################

$_lang['ButtonFillSettings'] = 'Перейти к настройкам';
$_lang['SettingsLogin'] = 'Логин для входа в биллинг';
$_lang['OrderErrorLoginRegularExp'] = 'Использование указанного логина запрещено.';
$_lang['SettingsLoginNeedChange'] = 'Логин (необходимо придумать новый логин для входа в биллинг)';
$_lang['payYandexPC'] = 'со счета Яндекс.Денег';
$_lang['payYandexAC'] = 'с банковской карты';
$_lang['TicketsName'] = 'Ваше имя';
$_lang['TicketsEmail'] = 'Ваш email';
$_lang['TicketsErrorNoName'] = 'Вы не указали Ваше имя.';
$_lang['FeedTitleForm'] = 'Форма обратной связи';
$_lang['OrderShopErrorNetSrokovZakaza'] = 'Доступные сроки заказа отсутствуют. Выберите другой товар.';
$_lang['ChangeServerForOrderTitle'] = 'Смена сервера для заказа';
$_lang['ChangeSlotsForOrderTitle'] = 'Изменение количества слотов для заказа';
$_lang['ChangeTarifForOrderTitle'] = 'Смена тарифного плана для заказа';
$_lang['DeleteAlert'] = 'Вы уверены, что хотите выполнить удаление?';
$_lang['payKassa24kzDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов Касса24, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';
$_lang['ProfileMobileCountryCode'] = 'Мобильный телефон (код страны)';

#####################################################################################
##################### v2.1.2
#####################################################################################

$_lang['DomainsMassRenew'] = 'Пакетное продление';
$_lang['DomainsMassRenewBillCreated'] = 'Выставлен счет за продление домена.';
$_lang['DomainsMassRenewNoRenew'] = 'Продление домена невозможно.';
$_lang['DomainsMassRenewResult'] = 'Результат продления';
$_lang['DomainsMassRenewGotoBills'] = 'Перейти к оплате счетов';
$_lang['UnsubscribeTitle'] = 'Отмена подписки на рассылку';
$_lang['UnsubscribeSuccessFor'] = 'Успешно отменена подписка на рассылку для';
$_lang['UnsubscribeErrorNoUser'] = 'Пользователь не найден.';
$_lang['UnsubscribeErrorNoSubscribe'] = 'Вы не подписаны на рассылку.';
$_lang['payUniTermDetails'] = 'Необходимо произвести оплату на произвольную сумму через один из терминалов, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в терминале:</b>';

#####################################################################################
##################### v2.1.3
#####################################################################################

$_lang['HistoryIP'] = 'IP';
$_lang['ErrorSendEmail'] = 'Ошибка отправки Email сообщения. Попробуйте позже.';

$_lang['SettingsSendEmail'] = 'Отправка Email сообщений';
$_lang['SettingsSendEmailOrders'] = 'Информация о счетах/заказах';
$_lang['SettingsSendEmailTickets'] = 'Информация о тикетах';
$_lang['SettingsSendEmailOther'] = 'Другая информация (рассылки)';
$_lang['SettingsSendEmailAll'] = 'Основной и альтернативный Email';
$_lang['SettingsSendEmailEmail'] = 'Основной Email';
$_lang['SettingsSendEmailEmail2'] = 'Альтернативный Email';
$_lang['SettingsSendEmailDisabled'] = 'Не отправлять';
$_lang['OrdersServerInfoPort'] = 'Порт';
$_lang['OrdersConnectToServer'] = 'Подключиться к серверу';

$_lang['payAzercellComment'] = 'Для оплаты счета введите номер предоплаченной карты в поле ниже.<BR><BR><B>Внимание!</B> Если номинал карты меньше суммы счета, средства будут зачислены на внутренний баланс. Если номинал карты больше суммы счета, остаток средств будет зачислен на внутренний баланс.';
$_lang['payAzercellNumber'] = 'Номер карты';
$_lang['payAzercellSuccess'] = 'Номер карты принят. Ожидайте, платеж будет обработан в ближайшее время.';

$_lang['TicketsFileAttachFileBadName'] = 'недопустимое имя файла';

$_lang['BillingErrorCheckToken'] = 'Не удалось выполнить проверку токена.';

#####################################################################################
##################### v2.1.4
#####################################################################################

$_lang['OrdersDogovorVLice'] = 'в лице';
$_lang['OrdersDogovorBIK'] = 'БИК';
$_lang['OrdersDogovorMFO'] = 'МФО';
$_lang['OrdersDogovorRaschetSchet'] = 'Р/с';
$_lang['OrdersDogovorPhone'] = 'Тел.';

$_lang['PayGotoBank'] = 'Перейти на сайт банка';
$_lang['PayGotoSite'] = 'Перейти на сайт';

$_lang['payMbankuzDetails'] = 'Необходимо произвести оплату на произвольную сумму через MBANK, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в MBANK:</b>';
$_lang['payUpayuzDetails'] = 'Необходимо произвести оплату на произвольную сумму через UPAY, а затем оплатить счет с помощью внутреннего баланса.<BR><BR><B>Идентификатор для использования в UPAY:</b>';

$_lang['OrderErrorTarifNotFound'] = 'Тарифный план не найден.';
$_lang['OrderUseThirdPartyNS'] = 'Использовать сервис';

$_lang['ServicesErrorCantGetValue'] = 'Отсутствует значение для';
$_lang['ServicesErrorBadValue'] = 'Неверное значение для';
$_lang['ServicesErrorCommandNoSupport'] = 'Сервис-действие не поддерживается';
$_lang['ServicesErrorCommandUnknown'] = 'Неизвестное сервис-действие';

$_lang['DomainsDNSRecordsProxyEnable'] = 'включить http-прокси';

$_lang['PaySummToPay'] = 'Сумма к оплате';
$_lang['BillPayedCredit'] = 'отсрочка платежа';
$_lang['PayCreditDaysAgree'] = 'Оплату гарантирую в течение';
$_lang['PayCreditDaysAgreeConfirm'] = 'Подтвердите, пожалуйста, что сможете оплатить счет в течение';
$_lang['PayBillPaySuccessCreditFor'] = 'Оплата счета успешно отсрочена. Напоминаем, что Вы обязаны оплатить счет в течение';

$_lang['SettingsSMSBillCreditRemind'] = 'уведомления о необходимости оплаты счетов с отсрочкой платежа';

$_lang['ErrorTechWorksEnabled'] = 'Извините, но в данный момент проводятся технические работы. Попробуйте обновить страницу позже.';

$_lang['OrdersManageLicenseBindsErrorMaxBinds'] = 'Добавление новой привязки невозможно, т.к. лицензия уже содержит максимально возможное количество привязок.';
$_lang['OrdersErrorNoFilesNuFullSrcSupport'] = 'Извините, но возможность загрузки полного открытого кода временно недоступна. Если Вам нужен архив, пожалуйста, обратитесь в службу поддержки, предварительно обновив свою лицензию до последней версии.';
$_lang['OrderType']['rtpllic'] = 'Биллинг RootPanel';
$_lang['FakturaHost']['rtpllic'] = 'Биллинг RootPanel';
$_lang['OrderTitleType']['rtpllic'] = 'Биллинг RootPanel';
$_lang['OrdersBindCountDomain'] = 'еще доменов';
$_lang['OrdersBindCountIP'] = 'еще ip';
$_lang['OrdersDownloadDist'] = 'Скачать биллинг v';
$_lang['OrdersDownloadDistForPHP'] = 'для php';
$_lang['OrdersDownloadLicenseFile'] = 'Скачать файл лицензии для v';
$_lang['OrdersUpdateDistVersion'] = 'Обновить биллинг до v';
$_lang['OrdersManageLicense'] = 'Управление лицензией';
$_lang['OrdersManageLicenseBinds'] = 'Управление привязкой лицензии';
$_lang['OrdersManageLicenseBindsActive'] = 'Активные привязки';
$_lang['OrdersManageLicenseBindsNew'] = 'Добавить привязку';
$_lang['OrdersManageLicenseBindsDomain'] = 'Домен';
$_lang['OrdersManageLicenseBindsIP'] = 'IP-адрес';
$_lang['OrdersManageLicenseBindsErrorNo'] = 'Не указан';
$_lang['OrdersManageLicenseBindsErrorBad'] = 'Указан некорректный';
$_lang['OrdersManageLicenseBindsErrorNoLeftBinds'] = 'В лицензии отсутствуют оплаченные привязки.';
$_lang['OrdersManageLicenseBindsErrorNoDeleteMainBind'] = 'Удаление основной привязки запрещено.';
$_lang['OrdersManageLicenseBindsUpdateAlert'] = 'Изменение привязок равноценно добавлению новых (количество доступных привязок будет уменьшено на 1). Изменить?';
$_lang['OrdersManageLicenseBindsDeleteAlert'] = 'Вы уверены, что хотите удалить привязку?';
$_lang['OrdersDownloadErrorBindTo'] = 'Невозможно скачать файл лицензии, т.к. лицензия не имеет активных привязок.';

#####################################################################################
##################### v2.1.6
#####################################################################################

$_lang['OrderUseRegistrarNS'] = 'Использовать DNS-сервера регистратора';
$_lang['DomainsErrorZoneNoDNSHostingSupportOrCreated'] = 'Для доменной зоны не активировано создание DNS-зоны у регистратора, либо DNS-зона уже создана.';
$_lang['DomainsErrorZoneNoDNSHostingSupportOrNotCreated'] = 'Для доменной зоны не активировано создание DNS-зоны у регистратора, либо DNS-зона еще не создана.';

$_lang['BillingMenuBelGIE'] = 'Регистрация БелГИЭ';
$_lang['BillingMenuBelGIEAnketa'] = 'Анкета';
$_lang['BillingMenuBelGIEDomains'] = 'Мои домены';
$_lang['payHutkiGroshDetails2'] = '<B>Номер счета для использования в терминале:</B>';

$_lang['ErrorAPIHcode38'] = 'Продление не возможно ранее чем за X дней до окончания оплаченного периода';
$_lang['ProfileFieldsForReqMobileDomain'] = 'Для регистрации указанного домена поле Мобильный телефон обязательно к заполнению!';

$_lang['ChangeTarifRequired'] = 'Ваш тарифный план устарел и более не поддерживается. Пожалуйста, выберите новый тарифный план.';
$_lang['OrderRenewRequired'] = 'Оплаченный период для Вашего заказа истек. Пожалуйста, продлите заказ.';
$_lang['OrderLicenseBindRequired'] = 'Ваша лицензия не имеет активных привязок. Пожалуйста, выполните привязку.';
$_lang['OrdersManageLicenseBindsWarning'] = 'Внимание! Привязка лицензии к домену не подразумевает работу биллинга на любых его поддоменах.';

#####################################################################################
##################### v2.1.7
#####################################################################################

$_lang['RenewAdditionalCost'] = 'дополнительный платеж';
$_lang['OrdersServerInfoServer'] = 'Сервер';
$_lang['OrdersErrorBadToken'] = 'Неправильный токен.';
$_lang['OrderErrorDomainNoWithoutTarif'] = 'Домен доступен к заказу только вместе с тарифными планами.';
$_lang['EmailVerificationPass'] = 'email подтвержден';
$_lang['EmailVerificationSuccess'] = 'Регистрация успешно подтверждена.';
$_lang['EmailVerificationSent'] = 'Внимание! На Ваш email отправлена ссылка для подтверждения регистрации. Пожалуйста, подтвердите регистрацию!';

#####################################################################################
##################### v2.1.8
#####################################################################################

$_lang['EmailVerificationInfo'] = 'На Ваш email будет отправлена ссылка для подтверждения регистрации. Пожалуйста, указывайте реальный email адрес!';
$_lang['EmailVerificationSentWarning'] = 'Если Вы не получили ссылку для подтверждения регистрации, пожалуйста, обратитесь в службу поддержки.';
$_lang['FeedTestimonialSuccessAfterCheck'] = 'Отзыв успешно добавлен и будет опубликован после проверки.';
$_lang['TestimonialsAddTestimonial'] = 'Добавить отзыв';
$_lang['OrdersNewTokenTitle'] = 'Создание нового токена';
$_lang['Create'] = 'Создать';
$_lang['ErrorNoGroup'] = 'Не указана группа.';
$_lang['OrdersGetGroupsError'] = 'Не удалось получить список групп.';
$_lang['Group'] = 'Группа';
$_lang['OrderDiscount'] = 'Скидка';
$_lang['OrderRecalc'] = 'Пересчитать';
$_lang['OrderNacenka'] = 'Наценка';
$_lang['OrderNacenkaSmall'] = 'наценка';
$_lang['OrdersDeleteBans'] = 'Удалить все баны';
$_lang['OrdersDeleteBansSuccess'] = 'Все баны успешно удалены.';
$_lang['OrdersDeleteBansError'] = 'Не удалось удалить все баны. Ожидайте пока это сделает администрация.';
$_lang['OrdersDeletePassword'] = 'Удалить пароль с сервера';
$_lang['OrdersDeletePasswordSuccess'] = 'Пароль успешно удален.';
$_lang['OrdersDeletePasswordError'] = 'Не удалось удалить пароль. Ожидайте пока это сделает администрация.';
$_lang['OrderLoyaltySmall'] = 'лояльность';
$_lang['ShopChangeLicenseKey'] = 'Получить ключ лицензии';
$_lang['ShopChangeLicenseKeyAlert'] = 'Внимание! Получение нового ключа лицензии невозможно чаще одного раза в месяц.';
$_lang['OrderLisenseKey'] = 'Ключ лицензии';
$_lang['OrderLisenseGetNewKey'] = 'Получить новый ключ лицензии';
$_lang['FakturaNewNodes'] = 'Смена количества узлов для товара ID';
$_lang['OrdersNodes'] = 'узлы';
$_lang['BillsChangeNodes'] = 'изменение количества узлов';
$_lang['OrdersChangeNodes'] = 'Изменить количество узлов';
$_lang['PayForNodesChange'] = 'Для изменения количества узлов';
$_lang['OrderNodesCount'] = 'Количество узлов';
$_lang['OrderForNode'] = 'за узел';
$_lang['OrderErrorNoNodes'] = 'Не указано количество узлов.';
$_lang['OrderErrorMinNodes'] = 'Минимальное количество узлов не может быть меньше чем';
$_lang['OrderErrorMaxNodes'] = 'Максимальное количество узлов не может быть больше чем';
$_lang['ChangeNodesTitle'] = 'Изменение количества узлов';
$_lang['ChangeNewNodes'] = 'Новое количество узлов';
$_lang['ChangeNodesChangeSuccess'] = 'Количество узлов успешно изменено.';
$_lang['ChangeNodesErrorChange'] = 'Не удалось изменить количество узлов.';
$_lang['ChangeNodesAlert'] = 'Внимание! Изменение количества узлов невозможно чаще одного раза в месяц.';
$_lang['SettingsTelegram'] = 'Telegram';
$_lang['SettingsTelegramButtonAdd'] = 'Добавить Telegram';
$_lang['SettingsTelegramAddInfo'] = 'Добавьте нашего бота {bot_name} в друзья, нажмите кнопку /start, отправьте боту код {bot_code} и нажмите кнопку `Добавить Telegram` еще раз или просто обновите страницу.';
$_lang['SettingsTelegramAdded'] = 'Ваш Telegram успешно добавлен в аккаунт.';
$_lang['SettingsTelegramDeleted'] = 'Ваш Telegram успешно удален из аккаунта.';
$_lang['All'] = 'Все';

$_lang['ServicesErrorServiceNotFound'] = 'Сервис не найден';

#####################################################################################
##################### v2.1.9
#####################################################################################

$_lang['BillingMenuProfiles'] = 'Профайлы';
$_lang['ProfilesTitle'] = 'Профайлы';
$_lang['ProfilesControl'] = 'Управление профайлом';
$_lang['ProfilesEditProfile'] = 'Изменить данные профайла';
$_lang['ProfilesAdditional'] = 'Дополнительно';

$_lang['TotalRecords'] = 'Всего записей';
$_lang['RecordsOnPage'] = 'записей на странице';
$_lang['Search'] = 'Найти';

#####################################################################################
##################### v2.2.0
#####################################################################################

$_lang['StarrysUslugiSiteSupport'] = 'Услуги по обслуживанию сайта';
$_lang['StarrysUslugiDomain'] = 'Делегирование доменного имени';

$_lang['OrdersAccessInfo'] = 'Данные для доступа';
$_lang['OrdersAccessLogin'] = 'Логин';
$_lang['OrdersAccessPassword'] = 'Пароль';

?>
