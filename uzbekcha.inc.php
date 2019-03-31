<?php

######################################################################################
#                                                                                    #
#                                  !!! ВНИМАНИЕ !!!                                  #
#                                                                                    #
#                      !!! НЕ ВНОСИТЕ ИЗМЕНЕНИЯ В ДАННЫЙ ФАЙЛ !!!                    #
#                                                                                    #
# Если вы хотите изменить какую-то языковую переменную, создайте в папке _rootlang   #
# файл uzbek.local.inc.php, скопируйте в него переменную и уже в нем вносите в     #
# нее изменения! В противном случае Ваши изменения будут утеряны после обновления!   #
#                                                                                    #
######################################################################################

$_lang['Warning'] = 'Diqqat!';
$_lang['Error'] = 'Xatolik';

$_lang['Required'] = 'Ushbu belgi bilan belgilangan maydonlarni to\'ldirish majburiy';

$_lang['Yes'] = 'ha';
$_lang['No'] = 'yo\'q';

$_lang['Pages'] = 'Sahifalar:';

$_lang['Prev'] = 'Ortga';
$_lang['Next'] = 'Keyingi';
$_lang['Change'] = 'O\'zgartirish';
$_lang['Send'] = 'Jo\'natish';
$_lang['Save'] = 'Saqlash';
$_lang['Order'] = 'Buyurtma berish';
$_lang['Pay'] = 'To\'lash';
$_lang['Add'] = 'Qo\'shish';

$_lang['Hosting'] = 'Hosting';
$_lang['Domain'] = 'Domen';
$_lang['DomainOpt'] = 'Ulgurji domenlar';

$_lang['DomainNewMin'] = 'yangi';
$_lang['DomainExistsMin'] = 'mavjud';
$_lang['DomainWithoutMin'] = 'domensiz';
$_lang['DomainRenewMin'] = 'uzaytirish';
$_lang['DomainWithoutRenewMin'] = 'uzaytirishsiz';
$_lang['DomainNew'] = 'Bizdan domen olish';
$_lang['DomainExists'] = 'Domen allaqachon mavjud';
$_lang['DomainWithout'] = 'Domensiz';
$_lang['DomainRenew'] = 'Domen muddatini uzaytirish';
$_lang['DomainWithoutRenew'] = 'Domen muddatini uzaytirmasdan';

$_lang['BillNotPayed'] = 'to\'lanmagan';
$_lang['BillPayed'] = 'to\'langan';
$_lang['BillPayedUslovno'] = 'shartli to\'langan';
$_lang['BillDeleted'] = 'o\'chirilgan';

$_lang['OrderStatusNeObrabotan'] = 'tasdiqlangaman';
$_lang['OrderStatusObrabotan'] = 'tekshirilgan';
$_lang['OrderStatusSuspended'] = 'bekor qilingan';

$_lang['SortAsc'] = 'o\'sish tartibida';
$_lang['SortDesc'] = 'kamayish tartibida';

$_lang['TicketPriority0'] = 'shoshilinch emas';
$_lang['TicketPriority1'] = 'oddiy';
$_lang['TicketPriority2'] = 'tezkor';
$_lang['TicketStatusOpen'] = 'ochiq';
$_lang['TicketStatusClose'] = 'yopiq';

$_lang['Captcha'] = 'Maxfiy kod';
$_lang['CaptchaNeVidno'] = 'Rasm yoki belgilarni ko\'rmasangiz:';
$_lang['CaptchaObnovit'] = 'rasmni yangilang';
$_lang['payKvitanciya'] = 'Receipt for physical entities';
$_lang['paySchet'] = 'Invoice for legal entities';
$_lang['payPartner'] = 'Partnyor hisobi';
$_lang['payBalance'] = 'Ichki hisob';

$_lang['ErrorGetCurrentCurrency'] = 'Sayt valyutasini tanlab bo\'lmadi.';
$_lang['ErrorNoLogin'] = 'Login ko\'rsatilmagan.';
$_lang['ErrorNonExistsLogin'] = 'Bunday login mavjud emas.';
$_lang['ErrorNoPassword'] = 'Parol ko\'rsatilmagan.';
$_lang['ErrorBadPassword'] = 'Noto\'gri parol.';
$_lang['ErrorPasswordNoConfirm'] = 'Parol tasdiqlanmadi.';
$_lang['ErrorPasswordLength'] = 'Parol eng kamida 6 belgi bo\'lishi kerak.';
$_lang['ErrorPasswordConfirm'] = 'Parol mos emas. Parolni takroran kiriting.';
$_lang['ErrorBadLoginOrPassword'] = 'Sizning login yoki parolingizda xatolik mavjud.';
$_lang['ErrorWrongCaptcha'] = 'Noto\'gri maxfiy kod.';
$_lang['ErrorBadId'] = 'Noto\'gri ID.';

$_lang['OrderType']['hosting'] = 'Hosting';
$_lang['OrderType']['reseller'] = 'Reselling';
$_lang['OrderType']['vds'] = 'VPS/VDS';
$_lang['OrderType']['dedicated'] = 'Alohida server';
$_lang['OrderType']['vpn'] = 'VPN';
$_lang['OrderType']['ssh'] = 'SSH';
$_lang['OrderType']['rtpllic'] = 'RootPanel billingi';

$_lang['monthR']['1'] = 'Yanvar';
$_lang['monthR']['2'] = 'Fevral';
$_lang['monthR']['3'] = 'Mart';
$_lang['monthR']['4'] = 'April';
$_lang['monthR']['5'] = 'May';
$_lang['monthR']['6'] = 'Iyun';
$_lang['monthR']['7'] = 'Iyul';
$_lang['monthR']['8'] = 'Avgust';
$_lang['monthR']['9'] = 'Sentabr';
$_lang['monthR']['10'] = 'Oktabr';
$_lang['monthR']['11'] = 'Noyabr';
$_lang['monthR']['12'] = 'Dekabr';

#####################################################################################
##################### billing.php
#####################################################################################

$_lang['BillingTitle'] = 'Shaxsiy kabinet';
$_lang['BillingLogin'] = 'Loginingiz/Emailingiz';
$_lang['BillingPassword'] = 'Parolingiz';
$_lang['BillingEnter'] = 'Kabinetga kirish';
$_lang['BillingForgotPassword'] = 'Parolni unutdingizmi?';

$_lang['BillingMenu'] = 'Menyu';
$_lang['BillingMenuBills'] = 'Hisob';
$_lang['BillingMenuOrders'] = 'Buyurtma';
$_lang['BillingMenuDomains'] = 'Domen';
$_lang['BillingMenuProfile'] = 'Profil';
$_lang['BillingMenuTickets'] = 'Tiket';
$_lang['BillingMenuPartner'] = 'Hamkor';
$_lang['BillingMenuCatalog'] = 'Katalog';
$_lang['BillingMenuWhois'] = 'Whois';
$_lang['BillingMenuLogout'] = 'Chiqish';
$_lang['BillingMenuOrder'] = 'Buyurtma berish';

$_lang['BillingMenuBalance'] = 'Balansingiz';
$_lang['BillingMenuAddFunds'] = 'hisobni to\'ldirish';

#####################################################################################
##################### billing.php :: profile
#####################################################################################

$_lang['ProfileTitle'] = 'Profil';
$_lang['ProfileChangeSuccess'] = 'Profil muvaffaqiyatli yangilandi.';
$_lang['ProfileNeedFromReg'] = 'Buyurtmani davom ettirish uchun <BR>profilingiz ma\'lumotlarini to\'ldiring.';
$_lang['ProfileFieldsForAllDomains'] = 'Domen (.uz va .ru domendan tashqari) ro\'yhatga olish uchun , passport ma\'lumotlaridan boshqa barcha maydonlarni to\'ldirish majburiy!';
$_lang['ProfileFieldsForRuDomain'] = '.Uz va .Ru domenlari uchun passport ma\'lumotlarini ham to\'ldirish majburiy!';
$_lang['ProfileOfOrg'] = 'Yuridik shaxs';
$_lang['ProfileOfPrivatePerson'] = 'Jismoniy shaxs';
$_lang['ProfileContact'] = 'Jismoniy shaxs';
$_lang['ProfileSurname'] = 'Familiya';
$_lang['ProfileName'] = 'Ism';
$_lang['ProfileOtchestvo'] = 'Otasining ismi';
$_lang['ProfileOrgData'] = 'Yuridik shaxs ma\'lumotlari';
$_lang['ProfileOrg'] = 'Yuridik shaxs';
$_lang['ProfileOrgComment'] = 'Yuridik shaxsning to\'liq nomi (rus tilida).<BR>Masalan: Limited Lability Company "Horns and Hooves"';
$_lang['ProfilePassportData'] = 'Passport ma\'lumoti';
$_lang['ProfilePassportSeriya'] = 'Seriyasi va raqami';
$_lang['ProfilePassportSeriyaComment'] = '№ belgisini ishlatmang.<BR>Namuna, Rossiya: 34 02 651241; Namuna, O\'zbekiston: AA 1112233';
$_lang['ProfilePassportVidan'] = 'Bergan tashkilot';
$_lang['ProfilePassportVidanComment'] = 'Passport bergan tashkilot to\'liq nomi.<BR>Masalan: Toshkent shahar, Chilonzor tuman IIB';
$_lang['ProfilePassportVidanData'] = 'Berilgan vaqti';
$_lang['ProfileBirthDate'] = 'Tug\'ilgan sana';
$_lang['ProfileInn'] = 'STIR';
$_lang['ProfileInnComment'] = 'Soliq to\'lovchi identifikatsion raqami (STIR).<BR>Masalan: 111222333';
$_lang['ProfileOrgEng'] = 'Yuridik shaxs (eng.)';
$_lang['ProfileOrgEngComment'] = 'Yuridik shaxsning to\'liq nomi.<BR>Masalan: "ROGA I KOPYTA", LTD.';
$_lang['ProfileYuridAddress'] = 'Yuridik manzili';
$_lang['ProfileYuridAddressComment'] = 'Nizomda ko\'rsatilgan yuridik shaxs manzili.<BR>Masalan: 101000, Toshkent, Parlament ko\'chasi 1-uy, 2-xonadon';
$_lang['ProfileInnComment2'] = 'Yuridik shaxs soliq to\'lovchi identifikatsiya raqami (STIR).<BR>Masalan: 100111222';
$_lang['ProfileOgrn'] = 'Company code';
$_lang['ProfileOgrnComment'] = 'For Russian companies - main state registration number for legal entities (OGRN). For businesses from other countries - information about the main registration document in accordance with the law of your country (series and number).';
$_lang['ProfileOgrnBy'] = 'Company code issued by';
$_lang['ProfileOgrnByComment'] = 'Fully title of the state body issuing the company code.';
$_lang['ProfileKpp'] = 'Registration code (KPP)';
$_lang['ProfileKppComment'] = 'Company registration code (KPP).  Mandatory for Russian businesses.<BR>Example: 632946014';
$_lang['ProfileBankRekviz'] = 'Bank info';
$_lang['ProfileBank'] = 'Bank';
$_lang['ProfileBik'] = 'BIN';
$_lang['ProfileSchet'] = 'Account';
$_lang['ProfilePochtAddress'] = 'Pochta manzili';
$_lang['ProfileCountry'] = 'Davlat';
$_lang['ProfileOblast'] = 'Tuman';
$_lang['ProfileOblastComment'] = 'Masalan: Cherkassy';
$_lang['ProfileIndex'] = 'Indeks';
$_lang['ProfileIndexComment'] = 'Masalan: 100343';
$_lang['ProfileCity'] = 'Shahar';
$_lang['ProfileCityComment'] = 'Masalan: Moscow';
$_lang['ProfileAddress'] = 'Manzil';
$_lang['ProfileAddressComment'] = 'Masalan: str. Saratov, building. 5, apt. 34; Crimea str., house 172 (private); Sumskaya str., house 2, office 4';
$_lang['ProfileContactInfo'] = 'Aloqa ma\'lumotlari';
$_lang['ProfilePhone'] = 'Telefon raqam';
$_lang['ProfilePhoneComment'] = 'Phone with international code; international code, city code and local number are separated with spaces. No parentheses and hyphens are allowed.<BR>Example: +7 495 8102233';
$_lang['ProfileFax'] = 'Faks';
$_lang['ProfileFaxComment'] = 'Phone with international code; international code, city code and local number are separated with spaces. No parentheses and hyphens are allowed.<BR>Example: +7 495 8102233';
$_lang['ProfileEmail'] = 'Email';
$_lang['ProfileIcq'] = 'Icq';
$_lang['ProfileDopInfo'] = 'Qo\'shimcha ma\'lumot';
$_lang['ProfileRipn'] = 'RIPN';
$_lang['ProfileRipe'] = 'RIPE';
$_lang['ProfileUanic'] = 'UANIC';

$_lang['ProfileChangePassword'] = 'Parolni o\'zgartirish';
$_lang['ProfileNewPassword'] = 'Yangi parol';
$_lang['ProfileUserSettings'] = 'Foydalanuvchi sozlamalari';
$_lang['ProfileCurrency'] = 'Sayt valyutasi';
$_lang['ProfileDefaultCurrency'] = 'Valyuta';
$_lang['ProfileNewSubscribe'] = 'Yangiliklarga a\'zo bo\'ling!';

$_lang['ProfileErrorBadEmail'] = 'Noto\'g\'ri email.';
$_lang['ProfileErrorYouCanWorkWithoutProfile'] = 'Diqqat! Profil ma\'lumotlari to\'ldirilmaguncha shaxsiy kabinetdan foydalana olmaysiz.';
$_lang['ProfileErrorFields'] = 'Ushbu maydonlarda xatolik mavjud';

#####################################################################################
##################### billing.php :: orders
#####################################################################################

$_lang['OrdersTitle'] = 'Buyurtmalar';
$_lang['OrdersDeleteSuccess'] = 'Buyurtma va unga bog\'liq hisoblar muvaffaqiyatli o\'chirildi.';
$_lang['OrdersErrorCantDelete'] = 'Ushbu buyurtmani bekor qilib bo\'lmaydi.';
$_lang['OrdersAddonsForOrder'] = 'Faol qo\'shimcha xizmatlar';
$_lang['OrdersNoAddons'] = 'qo\'shimcha xizmatlar buyurtma qilinmagan';
$_lang['OrdersAddonsOrder'] = 'Qo\'shimcha xizmatlarga buyurtma berish';
$_lang['OrdersNoAvailAddons'] = 'Mos qo\'shimcha xizmatlar mavjud emas.';
$_lang['OrdersDate'] = 'Sana';
$_lang['OrdersDomain'] = 'Domen';
$_lang['OrdersTarif'] = 'Tarif';
$_lang['OrdersEnd'] = 'Amal qilish muddati';
$_lang['OrdersLeftDays'] = 'Qolgan muddat';
$_lang['OrdersDeleteAlert'] = 'Buyurtma unga bog\'liq barcha hisoblar bilan birga o\'chiriladi. Rostdan ham buyurtmani bekor qilmoqchimisiz?';
$_lang['OrdersDeleteOrder'] = 'Buyurtmani bekor qilish';
$_lang['OrdersRenewOrder'] = 'Muddatini uzaytirish';
$_lang['OrdersDownloadFile'] = 'Ilovani yuklab olish';
$_lang['OrdersAddonOrder'] = 'buyurtma qilish';
$_lang['OrdersChangeTarif'] = 'Tarifni almashtirish';
$_lang['OrdersTotalOrders'] = 'Jami buyurtmalar';
$_lang['OrdersOrdersOnPage'] = 'Sahifadagi buyurtmalar';

$_lang['OrdersErrorNoFiles'] = 'Ushbu buyurtmada ilovalar yo\'q.';
$_lang['OrdersErrorNoOrder'] = 'Buyurtma topilmadi.';

#####################################################################################
##################### billing.php :: domains
#####################################################################################

$_lang['DomainsTitle'] = 'Domenlar';
$_lang['DomainsChangeDNSSuccess'] = 'DNS-server muvaffaqiyatli o\'zgartirildi.';
$_lang['DomainsDNSFor'] = 'DNS-serverlar';
$_lang['DomainsNS1'] = 'DNS 1';
$_lang['DomainsNS2'] = 'DNS 2';
$_lang['DomainsNS3'] = 'DNS 3';
$_lang['DomainsNS4'] = 'DNS 4';
$_lang['DomainsDeleteSuccess'] = 'Domen va unga bog\'liq barcha hisoblar o\'chirildi.';
$_lang['DomainsDate'] = 'Sana';
$_lang['DomainsDomain'] = 'Domen';
$_lang['DomainsEnd'] = 'Amal qilish muddati';
$_lang['DomainsLeftDays'] = 'Qolgan vaqti';
$_lang['DomainsChangeDNS'] = 'DNS-serverni o\'zgartirish';
$_lang['DomainsDeleteAlert'] = 'Domen unga bog\'liq barcha hisoblar bilan birga o\'chiriladi. Rostdan ham domenni o\'chirmoqchimisiz?';
$_lang['DomainsDeleteDomain'] = 'Domenni o\'chirish';
$_lang['DomainsRenewDomain'] = 'Domen muddatini uzaytirish';
$_lang['DomainsDomainsTotal'] = 'Barcha domenlar';
$_lang['DomainsOnPage'] = 'Sahifadagi domenlar';

$_lang['DomainsErrorChangeDNS'] = 'DNS-serverni o\'zgartirib bo\'lmadi.';
$_lang['DomainsErrorMin2DNS'] = 'Kamida ikkita DNS-server ko\'rsatilishi shart.';
$_lang['DomainsErrorCantGetDNS'] = 'DNS-serverni tekshirib bo\'lmadi.';
$_lang['DomainsErrorNoLoginForReg'] = 'Sozlamalar sozlanmagan';
$_lang['DomainsErrorZoneNotSupported'] = 'Registrator bu domenni qo\'llamaydi.';
$_lang['DomainsErrorNoRegistrator'] = 'Domen registrator tanlanmadi.';
$_lang['DomainsErrorNoUanic'] = 'UANIC maydoni to\'ldirilmagan va odatiy Nic-handle ko\'rsatilmagan';
$_lang['DomainsErrorautoregDisable'] = 'Ushbu domen hududi uchun avto ro\'yhatga olish o\'chirilgan.';
$_lang['DomainsErrorZoneNotFound'] = 'Domen hududi topilmadi.';
$_lang['DomainsErrorDomainOrdersNotFound'] = 'Domenga buyurtma topilmadi';
$_lang['DomainsErrorUserNotFound'] = 'Foydalanuvchi topilmadi.';
$_lang['DomainsErrorCantGetValue'] = 'Qiymat aniqlanmadi';

#####################################################################################
##################### billing.php :: bills
#####################################################################################

$_lang['BillsTitle'] = 'Hisoblar';
$_lang['BillsDeleteSuccess'] = 'Hisob o\'chirildi.';
$_lang['BillsNeOplachenoSchetov'] = 'To\'langan hisoblar mavjud emas';
$_lang['BillsGoto'] = 'To\'lash uchun';
$_lang['BillGotoFor'] = 'hisobga o\'ting';
$_lang['BillsDate'] = 'Sana';
$_lang['BillsBillNo'] = '№';
$_lang['BillsTarif'] = 'Tarif';
$_lang['BillsDomain'] = 'Domen';
$_lang['BillsCost'] = 'Narxi';
$_lang['BillsSumma'] = 'Amount';
$_lang['BillsStatus'] = 'Holati';
$_lang['BillsPay'] = 'To\'lash';
$_lang['BillsChangeTarif'] = 'tarifni o\'zgartirish';
$_lang['BillsOrderedAddons'] = 'Qo\'shimcha xizmatlar';
$_lang['BilldOrderAddons'] = 'Qo\'shimcha xizmatlar qo\'shish';
$_lang['BillsPayBill'] = 'Hisobni to\'lash';
$_lang['BillsDeleteBillAlert'] = 'Hisobni o\'chirishga ishonchingiz komilmi?';
$_lang['BillsDeleteBill'] = 'Hisobni o\'chirish';
$_lang['BillsBillByAdmin'] = 'Hisob ma\'muriyat tomonidan qo\'yilgan';
$_lang['BillsAddFunds'] = 'Ichki balansni to\'ldirish';
$_lang['BillsTotalBills'] = 'Jami hisoblar';
$_lang['BillsBillsPerPage'] = 'Sahifadagi hisoblar';


#####################################################################################
##################### billing.php :: pay
#####################################################################################

$_lang['PayTitle'] = 'Pay invoice №';
$_lang['PayGoto'] = 'Go to';
$_lang['PayGotoFor'] = 'profil ma\'lumotlarini to\'ldiring';
$_lang['PayNullBill'] = 'Nol hisob';
$_lang['PayBillPaySuccess'] = 'Hisob muvaffaqiyatli to\'landi.';
$_lang['PayOrderCreateSuccess'] = 'Buyurtma ro\'yhatga olindi.';
$_lang['PayForTarifChange'] = 'Tarifni o\'zgartirish uchun';
$_lang['PayNeedBillPay'] = 'Siz hisobni to\'lashingiz kerak.';
$_lang['PayForPayGoto'] = 'To pay the invoice you will need to visit merchant website. To do so, please press "Pay" button below:';
$_lang['PaySokraschenieRubl'] = 'rub.';
$_lang['PayBillCreateEasyPaySuccess'] = 'Invoice for the EasyPay system has been successfully sent to your wallet';
$_lang['PayBillStatus'] = 'Invoice status';
$_lang['PayCheckBillStatus'] = 'Check invoice status';
$_lang['PayGotoEasyPay'] = 'You will have to go to <A class=rootlink href=http://www.easypay.by/ target=_blank>www.easypay.by</a> and pay the invoice.<BR><B>After payment click the "Check invoice status" button.</b>';
$_lang['PayAlsoYouCan'] = 'You can also';
$_lang['PaySelectAnotherPayMethod'] = 'choose a different payment method';
$_lang['PayPurses'] = 'Wallets';
$_lang['PayToPay'] = 'to pay';
$_lang['PayPurse'] = 'Wallet';
$_lang['PayPayByHandsAlert'] = 'Warning! Payment is processed manually!';
$_lang['PayAccount'] = 'Account';
$_lang['PayBill'] = 'Invoice';
$_lang['PayInputEasyPayPurse'] = 'Please specify your EasyPay wallet below';
$_lang['PayCreateBillForSumm'] = 'Create invoice for amount';
$_lang['PayMinBillSummEasyPay'] = 'Minimum amount to pay via EasyPay is - 1 BYN.';
$_lang['PayGetKvitansiya'] = 'Get receipt';
$_lang['PayGetSchetFaktura'] = 'Get invoice for legal entities';
$_lang['PayNaSchetu'] = 'Your balance';

$_lang['PayErrorNoOrgOrPhoneInProfile'] = 'You cannot get an invoice for legal entities because your profile is missing the Organization and/or Phone information.';
$_lang['PayErrorNoProfileWithPassport'] = 'Warning! You cannot pay the invoice until you completely fill out your profile, including your passport info.';
$_lang['PayErrorNoProfile'] = 'Warning! You cannot pay the invoice until you fill out your profile, excluding your passport information.';
$_lang['PayErrorNoMoneyOnPartner'] = 'Insufficient funds on your partner account.';
$_lang['PayErrorPartnerOff'] = 'We are sorry, partner program is currently disabled.';
$_lang['PayErrorNoMoneyOnBalance'] = 'Insufficient funds on your internal account.';
$_lang['PayErrorPurseNeed'] = 'specify your EasyPay wallet (8 digits)';
$_lang['PayErrorBillCreateEasyPayAlready'] = 'An EasyPay invoice has been sent to you already';


#####################################################################################
##################### billing.php :: renew & renewdomain
#####################################################################################

$_lang['RenewTitle'] = 'Muddatini uzaytirish';
$_lang['RenewTitleDomain'] = 'Domen muddatini uzaytirish';
$_lang['RenewDomain'] = 'Domen';
$_lang['RenewNaSrok'] = 'Muddati';
$_lang['RenewYear'] = 'yil';
$_lang['RenewTarif'] = 'Tarif';
$_lang['RenewAddons'] = 'Qo\'shimcha xizmatlar';
$_lang['RenewRenew'] = 'Muddatini uzaytirish';

$_lang['RenewErrorNoSrok'] = 'Uzaytirish muddati ko\'rsatilmadi.';


#####################################################################################
##################### billing.php :: partner
#####################################################################################

$_lang['PartnerTitle'] = 'Hamkorlik dasturi';
$_lang['PartnerMoneyOut'] = 'Claim money from partner account:';
$_lang['PartnerMoneyOutSuccess'] = 'Your payment request has been successfully sent to administration. Please wait for the transfer.';
$_lang['PartnerPartnerSchet'] = 'Hamkorlik dasturidagi hisobingiz holati';
$_lang['PartnerPartnerLink'] = 'Do\'stlaringizni taklif etish uchun havola';
$_lang['PartnerZakazatVivod'] = 'Claim payout';
$_lang['PartnerSumma'] = 'Miqdori';
$_lang['PartnerSposobVivoda'] = 'To\'lov tizimi';
$_lang['PartnerPurse'] = 'Account/Wallet number';
$_lang['PartnerZakazatVivodButton'] = 'Claim payment';
$_lang['PartnerOurBanners'] = 'Reklama bannerlari';
$_lang['PartnerErrorMinOut'] = 'Payout amount cannot be less than';
$_lang['PartnerErrorNoMoneyOnPartner'] = 'Insufficient funds on partner account.';
$_lang['PartnerErrorNoPayMethod'] = 'Payment method not specified.';
$_lang['PartnerNoPurse'] = 'Account/Wallet number not specified.';
$_lang['PartnerErrorPartnerOff'] = 'We are sorry, partner program is currently disabled.';

#####################################################################################
##################### billing.php :: tickets
#####################################################################################

$_lang['TicketsTitle'] = 'Murojaatlar';
$_lang['TicketsDeleteSuccess'] = 'Murojaat o\'chirildi.';
$_lang['TicketsGotoTicketsList'] = 'murojaatlar ro\'yhati';
$_lang['TicketsCloseSuccess'] = 'Murojaat yopildi.';
$_lang['TicketsGoBackToTicket'] = 'murojaatga qaytish';
$_lang['TicketsNewSuccess'] = 'Murojaat yaratildi.';
$_lang['TicketsGotoNewTicket'] = 'Murojaat yaratish';
$_lang['TicketsReplySuccess'] = 'Xabar qo\'shildi.';
$_lang['TicketsTicketTypeMsg'] = 'Xabar';
$_lang['TicketsTicketTypeReply'] = 'Javob';
$_lang['TicketsPriority'] = 'Ahamiyati';
$_lang['TicketsStatus'] = 'Holati';
$_lang['TicketsTicket'] = 'Murojaat';
$_lang['TicketsTicketView'] = 'Murojaatni ko\'rish';
$_lang['TicketsDate'] = 'Vaqti';
$_lang['TicketsAddMessage'] = 'Xabar qo\'shish';
$_lang['TicketsStatusOpen'] = 'faol';
$_lang['TicketsStatusAll'] = 'barchasi';
$_lang['TicketsStatusClosed'] = 'yopiq';
$_lang['TicketsYourTickets'] = 'Murojaatlaringiz';
$_lang['TicketsSubject'] = 'Mavzu';
$_lang['TicketsTicketReplys'] = 'Javoblar';
$_lang['TicketsDeleteAlert'] = 'Are you sure you want to delete ticket?';
$_lang['TicketsDelete'] = 'Murojaatni o\'chirish';
$_lang['TicketsCloseAlert'] = 'Are you sure you want to close ticket?';
$_lang['TicketsClose'] = 'Murojaatni yopish';
$_lang['TicketsTotalTickets'] = 'Barcha murojaatlar';
$_lang['TicketsShow'] = 'Ko\'rish';
$_lang['TicketsNewTicket'] = 'Yangi murojaat';
$_lang['TicketsAddTicket'] = 'Murojaat yaratish';
$_lang['TicketsErrorSubject'] = 'Murojaat mavzusi ko\'rsatilmadi.';
$_lang['TicketsErrorPriority'] = 'Murojaat ahamiyatlik darajasi belgilanmadi.';
$_lang['TicketsErrorMessage'] = 'Murojaat matni topilmadi.';
$_lang['TicketsErrorNoTicket'] = 'Murojaat topilmadi. Ehtimol, ushbu murojaat o\'chirilgandir.';

#####################################################################################
##################### billing.php :: changetarif
#####################################################################################

$_lang['ChangeTitle'] = 'Tarifni o\'zgartirish';
$_lang['ChangeChangeTarifSuccess'] = 'Tarif muvaffaqiyatli o\'zgartirildi.';
$_lang['ChangeErrorChange'] = 'Serverda tarifni o\'zgartirib bo\'lmadi.';
$_lang['ChangeDomain'] = 'Domem';
$_lang['ChangeTarif'] = 'Tarif';
$_lang['ChangeNewTarif'] = 'Yangi tarif';

$_lang['ChangeErrorNoNewTarif'] = 'Tarif tanlanmagan.';
$_lang['ChangeErrorNoAccessTarif'] = 'Ushbu tarifga o\'tish mumkin emas.';
$_lang['ChangeErrorNoOrder'] = 'Buyurtma topilmadi.';

#####################################################################################
##################### billing.php :: catalog
#####################################################################################

$_lang['CatTitle'] = 'Site catalogue';
$_lang['CatSiteDeleteSuccess'] = 'Site deleted from catalogue successfully.';
$_lang['CatSiteIP'] = 'Site IP-address';
$_lang['CatIPDenied'] = 'cannot be added to the catalogue (denied)';
$_lang['CatNewSiteSuccess'] = 'Site successfully added to the catalogue.';
$_lang['CatSiteEditSuccess'] = 'Site information successfully updated.';
$_lang['CatAdding'] = 'Add';
$_lang['CatEditing'] = 'Edit';
$_lang['CatSaita'] = 'site';
$_lang['CatSiteName'] = 'Name';
$_lang['CatSiteDomain'] = 'Domain';
$_lang['CatWithoutHttp'] = 'without http';
$_lang['CatSiteOpisanie'] = 'Description';
$_lang['CatYourSites'] = 'Your sites in catalogue';
$_lang['CatChange'] = 'Change';
$_lang['CatDeleteAlert'] = 'Are you sure you want to delete site from catalogue?';
$_lang['CatDelete'] = 'Delete';
$_lang['CatTotalSites'] = 'Total sites';
$_lang['CatAddSite'] = 'Add site to catalogue';

$_lang['CatErrorSite'] = 'Site name not specified.';
$_lang['CatErrorDomain'] = 'Site domain not specified.';
$_lang['CatErrorDomainSymbol'] = 'Prohibited symbols in domain name.';
$_lang['CatErrorOpisanie'] = 'Site description not provided.';
$_lang['CatErrorIP'] = 'Unable to obtain site IP-address';

#####################################################################################
##################### billing.php :: addfunds
#####################################################################################

$_lang['FundsTitle'] = 'Hisobni to\'ldirish';
$_lang['FundsMinSumm'] = 'Eng kamida';
$_lang['FundsSumm'] = 'Hisobni to\'ldirish';
$_lang['FundsGotoPay'] = 'Hisobni to\'lash';

#####################################################################################
##################### billing.php :: catalogsregform
#####################################################################################

$_lang['CatalogTitle'] = 'Mijozlar saytlari';
$_lang['CatalogSendSuccess'] = 'Your request has been successfully submitted. Administration will contact you shortly.';

$_lang['CatalogInfo'] = 'To register your site in catalogs and search engines, please fill out the form below.<br>The <b>*</b> sign indicates mandatory fields.';

$_lang['CatalogCanInput'] = 'can input';
$_lang['CatalogSymbols'] = 'symbols';

$_lang['CatalogMainTematika'] = 'Site is mainly related to';
$_lang['CatalogDopTematika'] = 'In addition site is related to';
$_lang['CatalogDopTematikaComment'] = 'Please select all categories that apply; you can select several categories by pressing down <b>ctrl</b>';
$_lang['CatalogURL'] = 'Page URL';
$_lang['CatalogURLComment'] = 'Please make sure URL is correct';
$_lang['CatalogFullSiteName'] = 'Full name of your site';
$_lang['CatalogFullSiteNameComment'] = 'Please do not use words that litter up the search engines (free, crack, porn etc), otherwise your site will not be registered.';
$_lang['CatalogMediumSiteName'] = 'Average site name';
$_lang['CatalogMediumSiteNameComment'] = 'This name is required for those catalogs that take short names of up to 70 characters';
$_lang['CatalogSmallSiteName'] = 'Short title of your site';
$_lang['CatalogSmallSiteNameComment'] = 'This name is required for those catalogs that take short names of up to 50 characters';
$_lang['CatalogFullDescr'] = 'Site full description';
$_lang['CatalogFullDescrComment'] = 'Please describe your site in a short, yet informative manner; list the most important things first.<br> Do not use words that litter up the search engines (crack, free, port etc), or otherwise your site will not be registered.';
$_lang['CatalogMediumDescr'] = 'Site average description';
$_lang['CatalogMediumDescrComment'] = 'This description is required for those catalogs that take short description of up to 250 characters';
$_lang['CatalogSmallDescr'] = 'Site description short';
$_lang['CatalogSmallDescrComment'] = 'This description is required for those catalogs that take short description of up to 150 characters';
$_lang['CatalogKeyWords'] = 'Keywords';
$_lang['CatalogViaComma'] = 'use comma to separate keywords';
$_lang['CatalogName'] = 'Your name';
$_lang['CatalogEmail'] = 'Email of your website';
$_lang['CatalogEmailComment'] = 'it will be used for registrations; spam is also possible, therefore we recommend <a class=rootlink href=\'http://passport.yandex.ru/passport?mode=register&msg=mail&retpath=http://mail.yandex.ru\'>to register</a> your email with yandex.ru, for example YourDomain@yandex.ru (use only Latin characters and digits, no dots, hyphens and undescores), and then go to settings of this inbox and set up email forwarding if necessary. If your inbox gets filled up with spam, you will be able to disable it any time; however having a valid email address is mandatory since you will need the information we will send you!';
$_lang['CatalogPassword'] = 'Catalogue password';
$_lang['CatalogPasswordComment'] = '(Latin characters) optimal length is 8 characters';
$_lang['CatalogBannerUrl'] = 'Site banner URL (88x31)';
$_lang['CatalogBannerUrlComment'] = 'if any';
$_lang['CatalogUrlForLinks'] = 'URL of pages where backlinks from catalogues are going to be placed';
$_lang['CatalogUrlForLinksComment'] = 'if you are not going to place any - specify the URL of the page you are going to register';
$_lang['CaalogRegion'] = 'Site region';
$_lang['CaalogRegionComment'] = 'You will have to specify with maximum accuracy the country or region of Russia';
$_lang['CatalogCountry'] = 'Country';
$_lang['CatalogCountryComment'] = 'which the site is closest to';
$_lang['CatalogCity'] = 'City';
$_lang['CatalogCityComment'] = 'which the site pertains to most';
$_lang['CatalogPhone'] = 'Phone';
$_lang['CatalogFax'] = 'Fax';
$_lang['CatalogComments'] = 'Comments';
$_lang['CataloCommentsComment'] = 'Payment method, date, payment amount etc.<br>RootPanel order number (if any).<br> In other words, information needed to verify your payment.';
$_lang['CatalogCleanFields'] = 'Clear all fields';

$_lang['CatalogTem01'] = 'Avto/Moto';
$_lang['CatalogTem02'] = 'Administration';
$_lang['CatalogTem03'] = 'Banklar';
$_lang['CatalogTem04'] = 'Xavfsizlik';
$_lang['CatalogTem05'] = 'Biznes va tijorat';
$_lang['CatalogTem06'] = 'Shahar va hududlar';
$_lang['CatalogTem07'] = 'Bolalar';
$_lang['CatalogTem08'] = 'Dizayn';
$_lang['CatalogTem09'] = 'Bosh sahifa';
$_lang['CatalogTem10'] = 'Qurilmalar';
$_lang['CatalogTem11'] = 'Jonivorlar';
$_lang['CatalogTem12'] = 'Legislation';
$_lang['CatalogTem13'] = 'Sog\'liq';
$_lang['CatalogTem14'] = 'Tanishuv';
$_lang['CatalogTem15'] = 'O\'yinlar';
$_lang['CatalogTem16'] = 'Internet';
$_lang['CatalogTem17'] = 'San\'at';
$_lang['CatalogTem18'] = 'Tarix';
$_lang['CatalogTem19'] = 'Kino';
$_lang['CatalogTem20'] = 'Classifiers';
$_lang['CatalogTem21'] = 'Korxonalar';
$_lang['CatalogTem22'] = 'Kompyuterlar';
$_lang['CatalogTem23'] = 'Adabiyot';
$_lang['CatalogTem24'] = 'Tibbiyot';
$_lang['CatalogTem25'] = 'Moda';
$_lang['CatalogTem26'] = 'Musiqa';
$_lang['CatalogTem27'] = 'Ilm-fan';
$_lang['CatalogTem28'] = 'Ko\'chmas mulk';
$_lang['CatalogTem29'] = 'Ta\'lim';
$_lang['CatalogTem30'] = 'Siyosat';
$_lang['CatalogTem31'] = 'Portal';
$_lang['CatalogTem32'] = 'Tabiat';
$_lang['CatalogTem33'] = 'Providers';
$_lang['CatalogTem34'] = 'Dasturlar';
$_lang['CatalogTem35'] = 'Oziq-ovqat';
$_lang['CatalogTem36'] = 'boshqa';
$_lang['CatalogTem37'] = 'Sayohat';
$_lang['CatalogTem38'] = 'Employment';
$_lang['CatalogTem39'] = 'Radio';
$_lang['CatalogTem40'] = 'Ko\'ngilochar';
$_lang['CatalogTem41'] = 'Misc';
$_lang['CatalogTem42'] = 'Reklama';
$_lang['CatalogTem43'] = 'Din';
$_lang['CatalogTem44'] = 'OAV';
$_lang['CatalogTem45'] = 'Telecommunications';
$_lang['CatalogTem46'] = 'Xizmatlar';
$_lang['CatalogTem47'] = 'Sport';
$_lang['CatalogTem48'] = 'Construction';
$_lang['CatalogTem49'] = 'Theatre';
$_lang['CatalogTem50'] = 'TV';
$_lang['CatalogTem51'] = 'Engineering';
$_lang['CatalogTem52'] = 'Texnologiya';
$_lang['CatalogTem53'] = 'Goods and services';
$_lang['CatalogTem54'] = 'Transport';
$_lang['CatalogTem55'] = 'Turizm';
$_lang['CatalogTem56'] = 'Hobbies & Leisure';
$_lang['CatalogTem57'] = 'Pharmacology';
$_lang['CatalogTem58'] = 'Free study';
$_lang['CatalogTem59'] = 'Expertise';
$_lang['CatalogTem60'] = 'Electronic equipment';
$_lang['CatalogTem61'] = 'Unix systems';
$_lang['CatalogTem62'] = 'Legal services';
$_lang['CatalogTem63'] = 'Erotics';

$_lang['CatalogReg01'] = 'Altai Krai';
$_lang['CatalogReg02'] = 'Amur oblast';
$_lang['CatalogReg03'] = 'Arkhangelsk oblast';
$_lang['CatalogReg04'] = 'Astrakhan oblast';
$_lang['CatalogReg05'] = 'Bashkortostan';
$_lang['CatalogReg06'] = 'Belgorod oblast';
$_lang['CatalogReg07'] = 'Bryansk oblast';
$_lang['CatalogReg08'] = 'Buryatiya';
$_lang['CatalogReg09'] = 'Vladimir oblast';
$_lang['CatalogReg10'] = 'Volgograd oblast';
$_lang['CatalogReg11'] = 'Vologda oblast';
$_lang['CatalogReg12'] = 'Voronezh oblast';
$_lang['CatalogReg13'] = 'Dagestan';
$_lang['CatalogReg14'] = 'Ivanov oblast';
$_lang['CatalogReg15'] = 'Irkutsk oblast';
$_lang['CatalogReg16'] = 'Kabardino-Balkariya';
$_lang['CatalogReg17'] = 'Kaliningrad oblast';
$_lang['CatalogReg18'] = 'Kalmykia';
$_lang['CatalogReg19'] = 'Kaluga oblast';
$_lang['CatalogReg20'] = 'Karelia';
$_lang['CatalogReg21'] = 'Kemerovo oblast';
$_lang['CatalogReg22'] = 'Kirov oblast';
$_lang['CatalogReg23'] = 'Komi';
$_lang['CatalogReg24'] = 'Kostroma oblast';
$_lang['CatalogReg25'] = 'Krasnodar krai';
$_lang['CatalogReg26'] = 'Krasnoyarsk krai';
$_lang['CatalogReg27'] = 'Kurgan oblast';
$_lang['CatalogReg28'] = 'Kursk oblast';
$_lang['CatalogReg29'] = 'Leningrad oblast';
$_lang['CatalogReg30'] = 'Lipetsk oblast';
$_lang['CatalogReg31'] = 'Mari-El';
$_lang['CatalogReg32'] = 'Moscow';
$_lang['CatalogReg33'] = 'Moscow oblast';
$_lang['CatalogReg34'] = 'Mordovia';
$_lang['CatalogReg35'] = 'Murmansk oblast';
$_lang['CatalogReg36'] = 'Nizhniy Novgorod oblast';
$_lang['CatalogReg37'] = 'Novgorod oblast';
$_lang['CatalogReg38'] = 'Novosibirsk oblast';
$_lang['CatalogReg39'] = 'Omsk oblast';
$_lang['CatalogReg40'] = 'Orel oblast';
$_lang['CatalogReg41'] = 'Orenburg oblast';
$_lang['CatalogReg42'] = 'Penza oblast';
$_lang['CatalogReg43'] = 'Perm oblast';
$_lang['CatalogReg44'] = 'Kamchatka oblast';
$_lang['CatalogReg45'] = 'Primorskiy krai';
$_lang['CatalogReg46'] = 'Pskov oblast';
$_lang['CatalogReg47'] = 'Rostov oblast';
$_lang['CatalogReg48'] = 'Ryazan oblast';
$_lang['CatalogReg49'] = 'Samara oblast';
$_lang['CatalogReg50'] = 'Saint-Petersburg';
$_lang['CatalogReg51'] = 'Saratov oblast';
$_lang['CatalogReg52'] = 'Sakhalin oblast';
$_lang['CatalogReg53'] = 'Sverdlov oblast';
$_lang['CatalogReg54'] = 'Smolensk oblast';
$_lang['CatalogReg55'] = 'Stavropolskiy krai';
$_lang['CatalogReg56'] = 'Tambov oblast';
$_lang['CatalogReg57'] = 'Tatarstan';
$_lang['CatalogReg58'] = 'Tver oblast';
$_lang['CatalogReg59'] = 'Tomsk oblast';
$_lang['CatalogReg60'] = 'Tuva';
$_lang['CatalogReg61'] = 'Tula oblast';
$_lang['CatalogReg62'] = 'Tyumen oblast';
$_lang['CatalogReg63'] = 'Udmurtia';
$_lang['CatalogReg64'] = 'Ulyanovsk oblast';
$_lang['CatalogReg65'] = 'Khabarovsk krai';
$_lang['CatalogReg66'] = 'Khanty-Mansiysk Autonomy';
$_lang['CatalogReg67'] = 'Chelyabinsk oblast';
$_lang['CatalogReg68'] = 'Chita oblast';
$_lang['CatalogReg69'] = 'Chuvashia';
$_lang['CatalogReg70'] = 'Yakutia (Sakha)';
$_lang['CatalogReg71'] = 'Yaroslavl oblast';
$_lang['CatalogReg72'] = 'Azerbaidzhan';
$_lang['CatalogReg73'] = 'Armenia';
$_lang['CatalogReg74'] = 'Belarus';
$_lang['CatalogReg75'] = 'Kazakhstan';
$_lang['CatalogReg76'] = 'Kyrgyzstan Republic';
$_lang['CatalogReg77'] = 'Latvia';
$_lang['CatalogReg78'] = 'Lithuania';
$_lang['CatalogReg79'] = 'Moldova';
$_lang['CatalogReg80'] = 'Tadzhikistan';
$_lang['CatalogReg81'] = 'Turkmenistan';
$_lang['CatalogReg82'] = 'Uzbekistan';
$_lang['CatalogReg83'] = 'Estonia';
$_lang['CatalogReg84'] = 'Ukraine';
$_lang['CatalogReg85'] = 'Georgia';
$_lang['CatalogReg86'] = 'Non-CIS countries';

#####################################################################################
##################### billing.php :: feedback
#####################################################################################

$_lang['FeedTitle'] = 'Aloqa';
$_lang['FeedSendSuccess'] = 'Xabar muvaffaqiyatli jo\'natildi.';
$_lang['FeedContactViaICQ'] = 'Contact via ICQ';
$_lang['FeedContactPhones'] = 'Phone numbers';
$_lang['FeedName'] = 'Name';
$_lang['FeedEmail'] = 'Email';
$_lang['FeedICQ'] = 'ICQ';
$_lang['FeedOtdel'] = 'Department';
$_lang['FeedManager'] = 'Manager';
$_lang['FeedSupport'] = 'Tech support';
$_lang['FeedSubject'] = 'Subject';
$_lang['FeedMessage'] = 'Message';

$_lang['FeedErrorSupportOnlyViaTickets'] = 'Customer support is done via a ticket system!';
$_lang['FeedErrorNoName'] = 'Please specify your name.';
$_lang['FeedErrorBadEmail'] = 'Invalid email address specified.';
$_lang['FeedErrorNoOtdel'] = 'Please specify department you would like to contact.';
$_lang['FeedErrorNoSubject'] = 'Please specify the subject.';
$_lang['FeedErrorNoMessage'] = 'Please enter your message.';

#####################################################################################
##################### billing.php :: forgotpass
#####################################################################################

$_lang['ForgotTitle'] = 'Parolni tiklash';
$_lang['ForgotSuccess'] = 'Parol muvaffaqiyatli yangilandi. Endi Siz';
$_lang['ForgotEnterToBilling'] = 'shaxsiy kabinetga kirishingiz mumkin';
$_lang['ForgotEnterNewPassword'] = 'Yangi parolni kiriting';
$_lang['ForgotReEnterNewPassword'] = 'Yangi parolni takrorlang';
$_lang['ForgotPrefixDlya'] = 'for';
$_lang['ForgotInfoSended'] = 'We have emailed you the information explaining how to restore your password.';
$_lang['ForgorInputYourNameOrEmail'] = 'Please enter your login or email address';

$_lang['ForgotErrorNameOrEmail'] = 'Please specify your login or email address.';
$_lang['ForgotErrorNoUserWithNameOrEmail'] = 'No user with such login or email found in the system.';

#####################################################################################
##################### billing.php :: news
#####################################################################################

$_lang['NewsTitle'] = 'Yangiliklar';
$_lang['NewsSeeAllNews'] = 'Barcha yangiliklarni ko\'rish...';
$_lang['NewsErrorNotFound'] = 'Yangiliklar mavjud emas.';

#####################################################################################
##################### billing.php :: order
#####################################################################################

$_lang['OrderTitle'] = 'Buyurtma berish';
$_lang['OrderFreeDomainInZone'] = 'Bir yil muddatga tekin domen';
$_lang['OrderComment'] = 'Izoh';
$_lang['OrderStep'] = 'Qadam';
$_lang['OrderStepFrom'] = '/';
$_lang['OrderSelectUserType'] = 'Mijoz turini tanlang';
$_lang['OrderRegedUser'] = 'Allaqachon ro\'yhatdan o\'tgan';
$_lang['OrderNewClient'] = 'Yangi mijoz';
$_lang['OrderEnterLoginAndPassword'] = 'Login va parolingizni kiriting';
$_lang['OrderLogin'] = 'Tizimga kirish';
$_lang['OrderLoginComment'] = '3 tadan 13 tagacha belgi, a-z,0-9';
$_lang['OrderPassword'] = 'Parol';
$_lang['OrderPasswordComment'] = 'kamida 6 ta belgi';
$_lang['OrderRegData'] = 'Registration info';
$_lang['OrderRePassword'] = 'Parolni tasdiqlash';
$_lang['OrderEmail'] = 'Email';
$_lang['OrderUserType'] = 'Mijoz turi';
$_lang['OrderUserPrivatePerson'] = 'Jismoniy shaxs';
$_lang['OrderUserOrg'] = 'Yuridik shaxs';
$_lang['OrderAboutUsFrom'] = 'Biz haqimizda qayerda bildingiz?';
$_lang['OrderRules'] = 'Foydalanish shartlari';
$_lang['OrderDogovorOferta'] = 'Ommaviy oferta';

$_lang['OrderPrefixS'] = 'I accept';
	$_lang['OrderRules2'] = 'your terms';
$_lang['OrderSUsloviyami'] = 'I accept';
	$_lang['OrderDogovorOferta2'] = 'your offer';
$_lang['OrderObyazVipolnyat'] = 'and shall abide by the terms of service.';

$_lang['OrderParamsOfOrder'] = 'Order parameters';
$_lang['OrderTarif'] = 'Tarif';
$_lang['OrderRazovoZaUstanovku'] = 'bir martalik';
$_lang['OrderSokraschenieMonth'] = 'oy';
$_lang['OrderDomain'] = 'Domen nomi';
$_lang['OrderDomainNew'] = 'domen ro\'yhatdan o\'tkazish';
$_lang['OrderDomainExists'] = 'domen allaqachon olingan';
$_lang['OrderWithoutDomain'] = 'domensiz';
$_lang['OrderDomainComment'] = 'masalan, example.com';
$_lang['OrderResultOfCheck'] = 'Bandligini tekshirish';
$_lang['OrderDomainSmallOneWord'] = 'domen';
$_lang['OrderDomainStatus'] = 'domen holati';
$_lang['OrderDomainStatusErrorNotCorrect'] = 'domen nomida xatolik';
$_lang['OrderDomainStatusErrorLength'] = 'domen nomi {minWidth} ta belgidan {maxWidth} gacha bo\'lishi kerak';
$_lang['OrderRegIn'] = 'registration in';
$_lang['OrderNotSupported'] = 'not supported';
$_lang['OrderDomainStatusErrorOtherUser'] = 'domain ordered by another user';
$_lang['OrderDomainStatusNotFree'] = 'domain taken';
$_lang['OrderDomainStatusFree'] = 'domain is free';
$_lang['OrderInputOtherDomains'] = 'enter different domain names';
$_lang['OrderDNS'] = 'DNS-server';
$_lang['OrderDNSOne'] = 'same for all domains';
$_lang['OrderDNSEach'] = 'different for all domains';
$_lang['OrderAvailZones'] = 'Available domain zones';
$_lang['OrderDomains'] = 'Domain names';
$_lang['OrderDomainsComment'] = 'Every domain should be entered with a new line.';
$_lang['OrderDomainsCheck'] = 'check domain availability';
$_lang['OrderDomainsCheckAlert'] = 'Please check availability of domains selected!';
$_lang['OrderDomainRegistrator'] = 'Domain name registrar';
$_lang['OrderSrokZakaza'] = 'Term of order';
$_lang['OrderSrokSmall'] = 'muddati';
$_lang['OrderCostSmall'] = 'narx';
$_lang['OrderDiscountSmall'] = 'chegirma';
$_lang['OrderTotalSmall'] = 'total';
$_lang['OrderAkciyaDomain'] = 'Special offer! Domain gratis!';
$_lang['OrderPriZakaze'] = 'Choose the following plan';
$_lang['OrderNaSrok'] = 'for';
$_lang['OrderPoluchaeteVPodarok'] = 'and get a free domain in one of the following zones';
$_lang['OrderAddons'] = 'Additional services';
$_lang['OrderRazovo'] = 'one-time';
$_lang['OrderFree'] = 'free';
$_lang['OrderServerPlace'] = 'Server location';
$_lang['OrderYear'] = 'year';
$_lang['OrderNS1'] = 'NS1';
$_lang['OrderNS1Comment'] = 'birinchi DNS-server';
$_lang['OrderNS2'] = 'NS2';
$_lang['OrderNS2Comment'] = 'ikkinchi DNS-server';
$_lang['OrderNS3'] = 'NS3';
$_lang['OrderNS4'] = 'NS4';
$_lang['OrderDomainRegistratorSmallOneWord'] = 'registrar';
$_lang['OrderYourOrder'] = 'Your order';
$_lang['OrderUsluga'] = 'Service';
$_lang['OrderSumma'] = 'Amount';
$_lang['OrderPrefixNa'] = 'as of';
$_lang['OrderSokraschenieGod'] = 'yil';
$_lang['OrderTotal'] = 'Total';
$_lang['OrderDopolnitelno'] = 'Additional';
$_lang['OrderPayMethod'] = 'To\'lov usuli';
$_lang['OrderButtonOrder'] = 'Order';
$_lang['OrderErrorLoginBegin'] = 'Login should start with a-z';
$_lang['OrderErrorLoginSymbols'] = 'Login should contain the following characters a-z,0-9';
$_lang['OrderErrorLoginLength'] = 'Login must be from 3 to 13 characters.';
$_lang['OrderErrorWrongEmail'] = 'Invalid email address specified.';
$_lang['OrderErrorNoOrg'] = 'Please specify if you are physical or legal entity.';
$_lang['OrderErrorNoRules'] = 'Please accept our terms of service first.';
$_lang['OrderErrorLoginExists'] = 'Login already taken.';
$_lang['OrderErrorAlreadyReged'] = 'You are already registered.';
$_lang['OrderErrorNoTarif'] = 'Please select your plan.';
$_lang['OrderErrorNoDomainReg'] = 'Please specify if you would like to get a domain name registered.';
$_lang['OrderErrorNoDomain'] = 'Domain name not specified.';
$_lang['OrderErrorDomainLength'] = 'Domain name should be from {minWidth} to {maxWidth}.';
$_lang['OrderErrorDomainRegistered'] = 'Domain name is already registered.';
$_lang['OrderErrorTarifForDomainOrderByAnotherUser'] = 'The selected plan for this domain has already been taken by another user.';
$_lang['OrderErrorDomainOrderByAnotherUser'] = 'The selected domain has been taken by another user.';
$_lang['OrderErrorNoFreeDomains'] = 'Please specify at least one free domain name.';
$_lang['OrderErrorNoDnsType'] = 'Please specify the type of DNS-servers.';
$_lang['OrderErrorNoSrokZakaza'] = 'Please specify the term of order.';
$_lang['OrderErrorNoPrymaryNS'] = 'Please specify your primary DNS-server.';
$_lang['OrderErrorNoSecondaryNS'] = 'Please specify your secondary DNS-server.';
$_lang['OrderErrorNoOneOfNS'] = 'None of the domains contains either a primary or a secondary DNS server.';
$_lang['OrderErrorNetSrokovZakaza'] = 'Available terms of order missing. Please select a different plan.';

#####################################################################################
##################### billing.php :: clients
#####################################################################################

$_lang['SitesTitle'] = 'Mijozlarimiz';
$_lang['SitesCatalogDisabled'] = 'Mijozlar sayti bo\'limi yopiq.';

#####################################################################################
##################### billing.php :: whois
#####################################################################################

$_lang['WhoisTitle'] = 'Domen bandligini tekshirish';
$_lang['WhoisDomainName'] = 'Domen nomi';
$_lang['WhoisSelectZones'] = 'domen hududlarini tanlang';
$_lang['WhoisSelectZone'] = 'domen hududini tanlang';
$_lang['WhoisCheckButton'] = 'Tekshirish';
$_lang['WhoisCheckResult'] = 'Availability check';
$_lang['WhoisOrderHostAndDomain'] = 'hosting va domen buyurtma qilish';
$_lang['WhoisOrderDomain'] = 'domen buyurtma qilish';
$_lang['WhoisOrderHost'] = 'hosting buyurtma qilish';
$_lang['WhoisAvailError'] = 'xatolik';
$_lang['WhoisAvailFree'] = 'bo\'sh';
$_lang['WhoisAvailNotFree'] = 'band';
$_lang['WhoisDomainNotActive'] = 'domen hududi faol emas';
$_lang['WhoisWhois'] = 'whois';
$_lang['WhoisFreeDomainsInOtherZones'] = 'Boshqa zonalardagi bo\'sh domenlar';
$_lang['WhoisNoFreeDomainsInOtherZones'] = 'boshqa zonalarda bo\'sh domen topilmadi';
$_lang['WhoisAboutDomainLength'] = 'Bir yoki ikki belgilik domenlarning bo\'shligi, doim ham uning ro\'yhatdan o\'tkazish imkoniyatini anglatmaydi. Premium Domenlar ham shular jumlasidan';
$_lang['WhoisDomainInfo'] = 'Domen haqida ma\'lumot';
$_lang['WhoisErrorDomain'] = 'Domen nomini kiriting.';
$_lang['WhoisErrorZone'] = 'Domen zonasini tanlang.';

#####################################################################################
##################### Countries
#####################################################################################

$_lang['Country'] = array();
$_lang['Country']['AF'] = 'Afghanistan';
$_lang['Country']['AX'] = 'Aland Island';
$_lang['Country']['AL'] = 'Albania';
$_lang['Country']['DZ'] = 'Algeria';
$_lang['Country']['AS'] = 'American Samoa';
$_lang['Country']['AD'] = 'Andorra';
$_lang['Country']['AO'] = 'Angola';
$_lang['Country']['AI'] = 'Anguilla';
$_lang['Country']['AQ'] = 'Antarctics';
$_lang['Country']['AG'] = 'Antigue & Barbados';
$_lang['Country']['AR'] = 'Argentina';
$_lang['Country']['AM'] = 'Armenia';
$_lang['Country']['AW'] = 'Aruba';
$_lang['Country']['AU'] = 'Australia';
$_lang['Country']['AT'] = 'Austria';
$_lang['Country']['AZ'] = 'Azerbaijan';
$_lang['Country']['BS'] = 'Bagamas';
$_lang['Country']['BH'] = 'Bahrein';
$_lang['Country']['BD'] = 'Bangladesh';
$_lang['Country']['BB'] = 'Barbados';
$_lang['Country']['BY'] = 'Belarus';
$_lang['Country']['BE'] = 'Belgium';
$_lang['Country']['BZ'] = 'Belize';
$_lang['Country']['BJ'] = 'Benin';
$_lang['Country']['BM'] = 'Bermudas';
$_lang['Country']['BT'] = 'Bhutan';
$_lang['Country']['BO'] = 'Bolivia';
$_lang['Country']['BA'] = 'Bosnia & Herzegovina';
$_lang['Country']['BW'] = 'Botswana';
$_lang['Country']['BV'] = 'Bouvet Island';
$_lang['Country']['BR'] = 'Brazil';
$_lang['Country']['IO'] = 'British Indian Ocean Territory';
$_lang['Country']['VG'] = 'British Virgin Island';
$_lang['Country']['BN'] = 'Brunei-Darussalam';
$_lang['Country']['BG'] = 'Bulgaria';
$_lang['Country']['BF'] = 'Burkina-Faso';
$_lang['Country']['BI'] = 'Burundi';
$_lang['Country']['KH'] = 'Cambodia';
$_lang['Country']['CM'] = 'Cameroon';
$_lang['Country']['CA'] = 'Canada';
$_lang['Country']['CV'] = 'Cape Verde';
$_lang['Country']['KY'] = 'Cayman Islands';
$_lang['Country']['CF'] = 'Central African Republic';
$_lang['Country']['TD'] = 'Chad';
$_lang['Country']['CL'] = 'Chile';
$_lang['Country']['CN'] = 'China';
$_lang['Country']['CX'] = 'Christmas Island';
$_lang['Country']['CC'] = 'Cocos (Keeling) Islands';
$_lang['Country']['CO'] = 'Columbia';
$_lang['Country']['KM'] = 'Comoros';
$_lang['Country']['CG'] = 'Congo, Republic';
$_lang['Country']['CD'] = 'Congo, Democratic Republic';
$_lang['Country']['CK'] = 'Cook Islands';
$_lang['Country']['CR'] = 'Costa-Rica';
$_lang['Country']['CI'] = 'CГґte d\'Ivoire';
$_lang['Country']['HR'] = 'Croatia';
$_lang['Country']['CU'] = 'Cuba';
$_lang['Country']['CY'] = 'Cyprus';
$_lang['Country']['CZ'] = 'Czech Republic';
$_lang['Country']['DK'] = 'Denmark';
$_lang['Country']['DJ'] = 'Djibouti';
$_lang['Country']['DM'] = 'Dominica';
$_lang['Country']['DO'] = 'Dominican Republic';
$_lang['Country']['EC'] = 'Ecuador';
$_lang['Country']['EG'] = 'Egypt';
$_lang['Country']['SV'] = 'El Salvador';
$_lang['Country']['GQ'] = 'Equatorial Guinea';
$_lang['Country']['ER'] = 'Eritrea';
$_lang['Country']['EE'] = 'Estonia';
$_lang['Country']['ET'] = 'Ethiopia';
$_lang['Country']['FK'] = 'Falkland Islands (Malvinas)';
$_lang['Country']['FO'] = 'Faroe islands';
$_lang['Country']['FJ'] = 'Fiji';
$_lang['Country']['FI'] = 'Finland';
$_lang['Country']['FR'] = 'France';
$_lang['Country']['GF'] = 'French Guiana';
$_lang['Country']['PF'] = 'French Polynesia';
$_lang['Country']['TF'] = 'French Southern Territories';
$_lang['Country']['GA'] = 'Gabon';
$_lang['Country']['GM'] = 'Gambia';
$_lang['Country']['GE'] = 'Georgia';
$_lang['Country']['DE'] = 'Germany';
$_lang['Country']['GH'] = 'Ghana';
$_lang['Country']['GI'] = 'Gibraltar';
$_lang['Country']['GR'] = 'Greece';
$_lang['Country']['GL'] = 'Greenland';
$_lang['Country']['GD'] = 'Grenada';
$_lang['Country']['GP'] = 'Guadelupe';
$_lang['Country']['GU'] = 'Guam';
$_lang['Country']['GT'] = 'Guatemala';
$_lang['Country']['GN'] = 'Guinea';
$_lang['Country']['GW'] = 'Guinea-Bissau';
$_lang['Country']['GY'] = 'Guyana';
$_lang['Country']['HT'] = 'Haiti';
$_lang['Country']['HM'] = 'Heard Island and McDonald Islands';
$_lang['Country']['VA'] = 'Holy See (Vatican City State)';
$_lang['Country']['HN'] = 'Honduras';
$_lang['Country']['HK'] = 'Hong-Kong';
$_lang['Country']['HU'] = 'Hungary';
$_lang['Country']['IS'] = 'Iceland';
$_lang['Country']['IN'] = 'India';
$_lang['Country']['ID'] = 'Indonesia';
$_lang['Country']['IR'] = 'Iran';
$_lang['Country']['IQ'] = 'Iraq';
$_lang['Country']['IE'] = 'Ireland';
$_lang['Country']['IL'] = 'Israel';
$_lang['Country']['IT'] = 'Italy';
$_lang['Country']['JM'] = 'Jamaica';
$_lang['Country']['JP'] = 'Japan';
$_lang['Country']['JO'] = 'Jordan';
$_lang['Country']['KZ'] = 'Kazakhstan';
$_lang['Country']['KE'] = 'Kenya';
$_lang['Country']['KI'] = 'Kiribati';
$_lang['Country']['KP'] = 'Korea, People\'s Democratic Republic';
$_lang['Country']['KR'] = 'Korea, Republic';
$_lang['Country']['KW'] = 'Kuwait';
$_lang['Country']['KG'] = 'Kyrgyzstan';
$_lang['Country']['LA'] = 'Lao People\'s Democratic Republic';
$_lang['Country']['LV'] = 'Latvia';
$_lang['Country']['LB'] = 'Lebanon';
$_lang['Country']['LS'] = 'Lesotho';
$_lang['Country']['LR'] = 'Liberia';
$_lang['Country']['LY'] = 'Libya';
$_lang['Country']['LI'] = 'Liechtenstein';
$_lang['Country']['LT'] = 'Lithuania';
$_lang['Country']['LU'] = 'Luxembourg';
$_lang['Country']['MO'] = 'Macao';
$_lang['Country']['MK'] = 'Macedonia';
$_lang['Country']['MG'] = 'Madagascar';
$_lang['Country']['MW'] = 'Malawi';
$_lang['Country']['MY'] = 'Malaysia';
$_lang['Country']['MV'] = 'Maldives';
$_lang['Country']['ML'] = 'Mali';
$_lang['Country']['MT'] = 'Malta';
$_lang['Country']['MH'] = 'Marshall Islands';
$_lang['Country']['MQ'] = 'Martinique';
$_lang['Country']['MR'] = 'Mauritania';
$_lang['Country']['MU'] = 'Mauritius';
$_lang['Country']['YT'] = 'Mayotte';
$_lang['Country']['MX'] = 'Mexico';
$_lang['Country']['FM'] = 'Micronesia';
$_lang['Country']['MD'] = 'Moldova';
$_lang['Country']['MC'] = 'Monaco';
$_lang['Country']['MN'] = 'Mongolia';
$_lang['Country']['ME'] = 'Montenegro';
$_lang['Country']['MS'] = 'Montserrat';
$_lang['Country']['MA'] = 'Morocco';
$_lang['Country']['MZ'] = 'Mozambique';
$_lang['Country']['MM'] = 'Myanmar';
$_lang['Country']['NA'] = 'Namibia';
$_lang['Country']['NR'] = 'Nauru';
$_lang['Country']['NP'] = 'Nepal';
$_lang['Country']['NL'] = 'Netherlands';
$_lang['Country']['AN'] = 'Netherlands Antilles';
$_lang['Country']['NC'] = 'New Caledonia';
$_lang['Country']['NZ'] = 'New Zealand';
$_lang['Country']['NI'] = 'Nicaragua';
$_lang['Country']['NE'] = 'Niger';
$_lang['Country']['NG'] = 'Nigeria';
$_lang['Country']['NU'] = 'Niue';
$_lang['Country']['NF'] = 'Norfolk Island';
$_lang['Country']['MP'] = 'Northern Mariana Islands';
$_lang['Country']['NO'] = 'Norway';
$_lang['Country']['OM'] = 'Oman';
$_lang['Country']['PK'] = 'Pakistan';
$_lang['Country']['PW'] = 'Palau';
$_lang['Country']['PS'] = 'Palestinian Territory, Occupied';
$_lang['Country']['PA'] = 'Panama';
$_lang['Country']['PG'] = 'Papua New Guinea';
$_lang['Country']['PY'] = 'Paraguay';
$_lang['Country']['PE'] = 'Peru';
$_lang['Country']['PH'] = 'Philippines';
$_lang['Country']['PN'] = 'Pitcairn';
$_lang['Country']['PL'] = 'Poland';
$_lang['Country']['PT'] = 'Portugal';
$_lang['Country']['PR'] = 'Puerto Rico';
$_lang['Country']['QA'] = 'Qatar';
$_lang['Country']['RE'] = 'Reunion';
$_lang['Country']['RO'] = 'Romania';
$_lang['Country']['RU'] = 'Russia';
$_lang['Country']['RW'] = 'Rwanda';
$_lang['Country']['SH'] = 'St. Helena';
$_lang['Country']['KN'] = 'Saint Kitts and Nevis';
$_lang['Country']['LC'] = 'Saint Lucia';
$_lang['Country']['PM'] = 'Saint Pierre and Miquelon';
$_lang['Country']['VC'] = 'Saint Vincent and the Grenadines';
$_lang['Country']['WS'] = 'Samoa';
$_lang['Country']['SM'] = 'San Marino';
$_lang['Country']['ST'] = 'Sao Tome and Principe';
$_lang['Country']['SA'] = 'Saudi Arabia';
$_lang['Country']['SN'] = 'Senegal';
$_lang['Country']['CS'] = 'Serbia';
$_lang['Country']['SC'] = 'Seychelles';
$_lang['Country']['SL'] = 'Sierra Leone';
$_lang['Country']['SG'] = 'Singapore';
$_lang['Country']['SK'] = 'Slovakia';
$_lang['Country']['SI'] = 'Slovenia';
$_lang['Country']['SB'] = 'Solomon Islands';
$_lang['Country']['SO'] = 'Somalia';
$_lang['Country']['ZA'] = 'South Africa';
$_lang['Country']['GS'] = 'South Georgia and the South Sandwich Islands';
$_lang['Country']['ES'] = 'Spain';
$_lang['Country']['LK'] = 'Sri Lanka';
$_lang['Country']['SD'] = 'Sudan';
$_lang['Country']['SR'] = 'Surinam';
$_lang['Country']['SJ'] = 'Svalbard and Jan Mayen';
$_lang['Country']['SZ'] = 'Swaziland';
$_lang['Country']['SE'] = 'Sweden';
$_lang['Country']['CH'] = 'Switzerland';
$_lang['Country']['SY'] = 'Syrian Arab Republic';
$_lang['Country']['TW'] = 'Taiwan (China)';
$_lang['Country']['TJ'] = 'Tajikistan';
$_lang['Country']['TZ'] = 'Tanzania';
$_lang['Country']['TH'] = 'Tailand';
$_lang['Country']['TL'] = 'Timor-Leste';
$_lang['Country']['TG'] = 'Togo';
$_lang['Country']['TK'] = 'Tokelau';
$_lang['Country']['TO'] = 'Tonga';
$_lang['Country']['TT'] = 'Trinidad & Tobago';
$_lang['Country']['TN'] = 'Tunisia';
$_lang['Country']['TR'] = 'Turkey';
$_lang['Country']['TM'] = 'Turkmenistan';
$_lang['Country']['TC'] = 'Turks and Caicos Islands';
$_lang['Country']['TV'] = 'Tuvalu';
$_lang['Country']['UG'] = 'Uganda';
$_lang['Country']['UA'] = 'Ukraine';
$_lang['Country']['AE'] = 'United Arab Emirates';
$_lang['Country']['GB'] = 'United Kingdom';
$_lang['Country']['US'] = 'United States';
$_lang['Country']['UM'] = 'United States Minor Outlying Islands';
$_lang['Country']['UY'] = 'Uruguay';
$_lang['Country']['UZ'] = 'Uzbekistan';
$_lang['Country']['VU'] = 'Vanuatu';
$_lang['Country']['VE'] = 'Venezuela';
$_lang['Country']['VN'] = 'Vietnam';
$_lang['Country']['VI'] = 'Virgin Islands, USA';
$_lang['Country']['WF'] = 'Wallis and Futuna';
$_lang['Country']['EH'] = 'West Sahara';
$_lang['Country']['YE'] = 'Yemen';
$_lang['Country']['ZM'] = 'Zambia';
$_lang['Country']['ZW'] = 'Zimbabwe';

#####################################################################################
##################### v1.6.0
#####################################################################################

$_lang['PaySokraschenieGrivna'] = 'UAH';
$_lang['PayPortmoneCheckBill'] = 'If you have paid the invoice via Portmone, press the "Check payment status" button.';
$_lang['PayErrorBadSumm'] = 'To\'lov miqdorida xatolik';

$_lang['DomainsErrorRegistratorNotFound'] = 'Registrator topilmadi';

$_lang['OrderAddonsOs'] = 'Operating system';
$_lang['OrderAddonsPanel'] = 'Boshqaruv paneli';

$_lang['ProfileCodeWord'] = 'Shaxsiy maxfiy so\'z';
$_lang['ProfileCodeWordComment'] = 'Yordam markazi tomonidan mijozni aniqlash uchun foydalaniladi. <BR>Faqat bir marta o\'rnatiladi - keyin ko\'rib ham, o\'zgartirib ham bo\'lmaydi. Ishonchli joyda saqlang!';

#####################################################################################
##################### v1.6.1
#####################################################################################

$_lang['OrderZoneSmall'] = 'domain zone';
$_lang['OrderFrom'] = 'from';

$_lang['ZonesTotal'] = 'Total domain zones';

$_lang['OrderCheckDomainInSelectedZones'] = 'Tanlangan zonalarda tekshirish';
$_lang['OrderFreeDomainsInFavoriteZones'] = 'Mashhur zonalardagi bo\'sh domenlar';
$_lang['OrderFreeDomainsInSelectedZones'] = 'Tanlangan zonalardagi bo\'sh domenlar';
$_lang['OrderSmallOrder'] = 'buyurtma berish';
$_lang['OrdersPrintDogovor'] = 'Shartnomani chop etish';
$_lang['ProfileEdrpou'] = 'EDRPOU';
$_lang['ProfileEdrpouComment'] = 'Kompaniyalarning davlat reyestridagi kodi (faqat Ukraina uchun).<BR>Masalan: 23542312';

#####################################################################################
##################### v1.6.2
#####################################################################################

$_lang['Language'] = 'Til';
$_lang['BillingMenuMail'] = 'Pochta';
$_lang['MailLogsTitle'] = 'Mail archive';
$_lang['MailLogsDate'] = 'Date';
$_lang['MailLogsSubject'] = 'Subject';
$_lang['MailLogsDeleteAlert'] = 'Are you sure you want to delete message?';
$_lang['MailLogsDelete'] = 'Delete message';
$_lang['MailLogsTotalMail'] = 'Total messages';
$_lang['MailLogsOnPage'] = 'messages on page';
$_lang['MailLogsDeleteSuccess'] = 'Message deleted successfully.';
$_lang['MailLogsErrorNoMail'] = 'Message not found. It might have been deleted.';
$_lang['MailLogsView'] = 'Message';

#####################################################################################
##################### v1.6.3
#####################################################################################

$_lang['TicketsClosedBySupport'] = 'Ticket closed by customer support.';
$_lang['PayGotoSMSCoin'] = 'Warning! Tariff of your operator will be added to your subtotal.<BR>If your merchant page does not have your country or operator, it means amount of payment is too big.';
$_lang['TicketsDisabled'] = 'Ticket system disabled.';

$_lang['ProfileEmail2'] = 'Alternative email';
$_lang['ProfileErrorBadEmail2'] = 'Invalid alternative email address specified.';

#####################################################################################
##################### v1.6.4
#####################################################################################

$_lang['SettinsTitle'] = 'Sozlamalar';
$_lang['BillingMenuSettings'] = 'Sozlamalar';
$_lang['ProfileUserType'] = 'Profil turi';
$_lang['ProfileOfPrivatePredprinimatel'] = 'Private Entrepreneur Profile';
$_lang['OrderUserPrivatePredprinimatel'] = 'Private Entrepreneur';
$_lang['OrderDomainOwner'] = 'Domain name owner';
$_lang['OrderDomainOwnerSmallOneWord'] = 'owner';
$_lang['ProfileYourProfiles'] = 'Your profiles';
$_lang['Select'] = 'Select';
$_lang['ProfileCreateNewProfile'] = 'Create new profile';

$_lang['CalcTitle'] = 'Plan calculator';
$_lang['CalcNePodhodid'] = 'Not what you want?';
$_lang['CalcAgain'] = 'count again';
$_lang['CalcDomainInOtherZone'] = 'or domain in a different zone';
$_lang['CalcCalc'] = 'Calculate price';

$_lang['FundsCouponCode'] = 'Coupon code';
$_lang['FundsCouponPay'] = 'Redeem coupon';
$_lang['FundsCouponSuccess'] = 'Internal account successfully topped up by';
$_lang['FundsErrorCoupon'] = 'You may not use this coupon.';

$_lang['OrderPromoCode'] = 'Promo code (discount)';
$_lang['OrderSkidkaByPromo'] = 'discount received from promo code';
$_lang['OrderServerName'] = 'Server name (hostname)';
$_lang['OrderAdminPassword'] = 'Password to manage your server';
$_lang['OrderErrorServerName'] = 'Invalid characters in Server name field. Only Latin characters, digits and hyphens are allowed.';
$_lang['OrderErrorAdminPassword'] = 'Password to manage server missing.';

$_lang['ProfileICQ'] = 'ICQ';
$_lang['ProfileWMZ'] = 'WMZ wallet';
$_lang['ProfileWMR'] = 'WMR wallet';

#####################################################################################
##################### v1.6.5
#####################################################################################

$_lang['OrderRootPassword'] = 'Root password';
$_lang['OrderErrorRootPassword'] = 'Root password not specified.';
$_lang['OrderRemark'] = 'Order comment';
$_lang['TicketsClosedByCron'] = 'Ticket automatically closed due to time out.';
$_lang['ProfileImage'] = 'Image #';
$_lang['ProfileErrorCantUpload'] = 'Failed to upload image';
$_lang['ProfileErrorYouCanWorkWithoutCheckedProfile'] = 'Warning! You cannot work with billing until your profile is verified by admin. Admin has been notified to run verification and will process this request as soon as possible. Please accept our apologies for the caused inconveniences.';
$_lang['PayErrorNoProfileCheck'] = 'Warning! You cannot pay the invoice until your profile is verified by admin. Admin has been notified to run verification and will process this request as soon as possible. Please accept our apologies for the caused inconveniences.';
$_lang['OrderErrorEmailExists'] = 'User with this email address is already registered.';
$_lang['OnlineBillNotFound'] = 'Invoice not found.';
$_lang['OnlineErrorData'] = 'Incorrect input data.';
$_lang['OnlineApproved'] = 'Payment successfully accepted.';
$_lang['OnlineDeclined'] = 'Payment declined.';

#####################################################################################
##################### v1.6.6
#####################################################################################

$_lang['OrderPartnerTitle'] = 'Customer registration';
$_lang['ZonesReg'] = 'registration';
$_lang['ZonesRenew'] = 'renewal';
$_lang['ZonesRegCost0'] = 'if you order domain only';
$_lang['ZonesRenewCost0'] = 'if you only renew domain';
$_lang['ZonesRegCost1'] = 'if you have not ordered any plans';
$_lang['ZonesReg2Cost0'] = 'if ordered together with a plan';
$_lang['ZonesRenew2Cost0'] = 'if renewed together with a plan';
$_lang['ZonesReg2Cost1'] = 'if you have ordered any plans';
$_lang['ZonesHostReseller'] = 'for hosting resellers';
$_lang['ZonesReseller'] = 'for domain resellers';
$_lang['OrderErrorNoOwnNS'] = 'Billing is temporarily not working with own NS-servers.';
$_lang['OrderErrorNoThirdNS'] = 'Third DNS-server specified incorrectly.';
$_lang['OrderErrorNoFourNS'] = 'Fourth DNS-server specified incorrectly.';

$_lang['ProfilePassportFiles'] = 'Document scans';
$_lang['ProfilePassportFilesComment'] = 'Please upload all your scans together, since this function will become unavailable after upload. You can only upload images with the following extensions JPG, GIF, PNG, PDF. Please be attentive since you will not be able to delete the uploaded images.';
$_lang['ProfilePassportFilesUser'] = 'Please upload a scan of your passport (pages containing your first and last name, name of the issuing body and information about your permanent registration (residence permit)).';
$_lang['ProfilePassportFilesIP'] = 'Please upload a scan of your passport (pages containing your first and last name, name of the issuing body and information about your permanent registration (residence permit)), state registration certificate and tax payer registration certificate (INN/EDRPOU).';
$_lang['ProfilePassportFilesOrg'] = 'Please upload a scan of state registration certificate and tax payer registration certificate (INN) and an order assigning a governing body (CEO, Director, Chairman of the board).';
$_lang['ProfileDirector'] = 'Director';

$_lang['DomainsChangeDNSSendSuccess'] = 'Your request to change DNS-servers has been successfully sent to admin and will be processed as soon as possible.';
$_lang['DomainsErrorDNSTimeout'] = 'You cannot change DNS-servers this often. Please try again later.';

#####################################################################################
##################### v1.6.7
#####################################################################################

$_lang['OrderItem'] = 'Product/Service';
$_lang['OrderErrorNoItem'] = 'Product/Service not selected';
$_lang['BillingMenuShop'] = 'Products/Services';
$_lang['ShopTitle'] = 'Products/Services';
$_lang['ShopTotalOrders'] = 'Total products/services';
$_lang['ShopOrdersOnPage'] = 'products/services on page';
$_lang['RenewTitleShop'] = 'Renew order on product/service';
$_lang['RenewShop'] = 'Product/Service';
$_lang['FaqTitle'] = 'Frequently Asked Questions';

#####################################################################################
##################### v1.6.8
#####################################################################################

$_lang['ShopDownloadDist'] = 'Download installation package';
$_lang['ProfileSocStrahNumber'] = 'Social security number';
$_lang['OrderTestPeriod'] = 'Trial period';
$_lang['OrderTestPeriodOrder'] = 'request trial period';
$_lang['PayOrderTestCreateSuccess'] = 'Test access has been successfully opened. This this invoice is not paid by the end of the trial period, account will be automatically deleted on server.';
$_lang['PayOrderTestCreateLater'] = 'Test access will be opened as soon as possible for you. Your credentials will be sent to you via email.';
$_lang['ProfileNeedForTestPeriod'] = 'Please fill out profile to get test access.';
$_lang['AuthorizationKey'] = 'Authorization Key';
$_lang['FakturaHost']['hosting'] = 'Hosting as per plan';
$_lang['FakturaHost']['reseller'] = 'Reselling as per plan';
$_lang['FakturaHost']['vds'] = 'VPS/VDS as per plan';
$_lang['FakturaHost']['dedicated'] = 'Dedicated server as per plan';
$_lang['FakturaHost']['vpn'] = 'VPN as per plan';
$_lang['FakturaHost']['ssh'] = 'SSH as per plan';
$_lang['FakturaHost']['rtpllic'] = 'RootPanel Billing';
$_lang['FakturaDomain'] = 'Domain name delegation';
$_lang['FakturaAddon'] = 'Addons for order ID';
$_lang['FakturaChangeTarif'] = 'Change of plan for order ID';
$_lang['FakturaAddFunds'] = 'Top-up internal account for account ID';
$_lang['FakturaShop'] = 'Product/service';
$_lang['FakturaSokraschenieShtuka'] = 'pc.';
$_lang['FakturaBezNds'] = 'VAT excl.';
$_lang['FakturaSNds'] = 'VAT';
$_lang['FakturaVTomChisleNds'] = 'incl. VAT';
$_lang['FakturaGoda'] = 'year';
$_lang['PayErrorNoNameOrPhoneInProfile'] = 'You cannot get an invoice for legal entities because your profile is missing names and/or Phone.';
$_lang['PPOTHER'] = 'PE';
$_lang['PPRU'] = 'IE';
$_lang['PPUA'] = 'PEE';
$_lang['ProfileAutoRenew'] = 'Auto-renewal of orders';
$_lang['ProfileAutoRenewNo'] = 'off';
$_lang['ProfileAutoRenewYes'] = 'on';
$_lang['PagesBegin'] = 'First page';
$_lang['PagesPrev'] = 'Previous page';
$_lang['PagesNext'] = 'Next page';
$_lang['PagesEnd'] = 'Last page';
$_lang['PagesNum'] = 'Page #';
$_lang['OrderTitleType']['hosting'] = 'Hosting';
$_lang['OrderTitleType']['reseller'] = 'Reselling';
$_lang['OrderTitleType']['vds'] = 'VPS/VDS';
$_lang['OrderTitleType']['dedicated'] = 'Dedicated servers';
$_lang['OrderTitleType']['vpn'] = 'VPN';
$_lang['OrderTitleType']['ssh'] = 'SSH';
$_lang['OrderTitleType']['rtpllic'] = 'RootPanel Billing';
$_lang['OrderTitleTypeDomain'] = 'Domains';
$_lang['OrderTitleTypeDomainOpt'] = 'Bulk domains';
$_lang['OrderTitleTypeShop'] = 'Products/Services';

#####################################################################################
##################### v1.6.9
#####################################################################################

$_lang['ProfileRegNumberPP'] = 'PE reg. number';
$_lang['ProfileRegNumberPPComment'] = 'Private Entrepreneur registration number';

#####################################################################################
##################### v1.7.0
#####################################################################################

$_lang['CalcSelect'] = 'Please specify what you want to calculate';
$_lang['CalcGotoOrder'] = 'Proceed to order.';
$_lang['TicketStatusWait'] = 'pending';
$_lang['TicketsStatusWait'] = 'pending';
$_lang['TicketsDepartment'] = 'Bo\'lim';

$_lang['TarifsTitle'] = 'Plans';
$_lang['TarifsCost'] = 'Price';
$_lang['TarifsCostSetup'] = 'One-time';

#####################################################################################
##################### v1.7.1
#####################################################################################

$_lang['tarifsCurrency'] = 'Currency';
$_lang['FeedDolzhnost'] = 'Position';
$_lang['FeedCompany'] = 'Company';
$_lang['FeedTestimonial'] = 'Testimonial';
$_lang['FeedTestimonialSuccess'] = 'Testimonial successfully added.';
$_lang['NewsTotalNews'] = 'Total news';
$_lang['NewsOnPage'] = 'news on page';
$_lang['TestimonialsTitle'] = 'Customer testimonials';
$_lang['TestimonialsDisabled'] = 'Testimonials disabled';
$_lang['TestimonialsTotalTestimonials'] = 'Total testimonials';
$_lang['TestimonialsOnPage'] = 'testimonials per page';
$_lang['TestimonialsDeleted'] = 'Testimonial successfully deleted.';
$_lang['TestimonialsAddMessage'] = 'Add testimonial';

#####################################################################################
##################### v1.7.2
#####################################################################################

$_lang['OrdersRestart'] = 'Restart';
$_lang['OrdersRestartAlert'] = 'Are you sure you want to restart?';
$_lang['OrdersReinstall'] = 'Reinstall';
$_lang['OrdersReinstallAlert'] = 'Are you sure you want to reinstall? All information will be lost!';
$_lang['OrdersRestartSuccess'] = 'Restart successfully launched.';
$_lang['OrdersRestartError'] = 'Failed to restart. Please wait until it is done by admin.';
$_lang['OrdersErrorCantRestart'] = 'You cannot perform a restart for this order.';
$_lang['OrdersReinstallSuccess'] = 'Reinstall successfully launched.';
$_lang['OrdersReinstallError'] = 'Failed to reinstall. Please wait until it is done by admin.';
$_lang['OrdersErrorCantReinstall'] = 'You cannot perform a reinstall for this order.';
$_lang['OrderUseDefaultNS'] = 'Use company DNS-servers';
$_lang['OrderFillOwnNS'] = 'Specify DNS-servers';
$_lang['checkDNSNoZoneError'] = 'Domain zone for the following domain not found:';
$_lang['checkDNSCantRunScriptError'] = 'Failed to launch script for DNS check.';
$_lang['checkDNSNoZoneAtServerError'] = 'Domain zone missing on one of the specified DNS-servers.';
$_lang['checkDNSNoScriptInZoneError'] = 'Domain zone settings is missing the script to run the DNS check.';
$_lang['OrderCert'] = 'Certificate';
$_lang['OrderCertOrder'] = 'Order certificate';
$_lang['WhoisCheckAll'] = 'check all';
$_lang['WhoisUnCheckAll'] = 'uncheck all';
$_lang['WhoisCheckFavorite'] = 'check popular';
$_lang['OrdersGotoAccount'] = 'Enter account';
$_lang['OrdersChangePassword'] = 'Change password';
$_lang['OrdersChangePasswordTitle'] = 'Change password';
$_lang['OrdersChangePasswordSuccess'] = 'Password successfully changed.';
$_lang['OrdersChangePasswordError'] = 'Failed to change password.';
$_lang['BillsGetFaktura'] = 'Get invoice';
$_lang['OrderSlotsCount'] = 'Number of slots';
$_lang['OrderForSlot'] = 'per slot';

#####################################################################################
##################### v1.7.3
#####################################################################################

$_lang['ProfilePhoneCountryCodeComment'] = 'International country code<BR>Example for Russia: +7<BR>Example for Ukraine: +380';
$_lang['ProfilePhoneCodeComment'] = 'City code<BR>Example for Moscow: 495<BR>Example for Kiev: 44';
$_lang['ProfilePhoneNumberComment'] = 'Phone number<BR>Example: 8102233';
$_lang['ProfileFaxNumberComment'] = 'Fax number<BR>Example: 8102233';
$_lang['OrderErrorNoSlots'] = 'Number of slots not specified.';
$_lang['OrderErrorMinSlots'] = 'Minimum number of slots cannot be less than';
$_lang['OrderErrorMaxSlots'] = 'Maximum number of slots cannot be greater than';
$_lang['ProfileMobile'] = 'Cell phone';
$_lang['ProfileMobileCodeComment'] = 'Operator code<BR>Example, for MTC, Russia: 916<BR>Example for Life, Ukraine: 93';
$_lang['SettingsSMS'] = 'SMS notification settings';
$_lang['SettingsSMSComment'] = 'Please select notifications you would like to get on your cell phone.';
$_lang['SettingsSMSBillRemind'] = 'unpaid invoices notifications';
$_lang['SettingsSMSOrderRemind'] = 'end of pre-paid period notifications (plans)';
$_lang['SettingsSMSOrderDomainRemind'] = 'end of pre-paid period notifications (domains)';
$_lang['SettingsSMSOrderShopRemind'] = 'end of pre-paid period notifications (products)';
$_lang['SettingsSMSTicketNew'] = 'new ticket notifications from admin';
$_lang['TicketsSendSMS'] = 'notify of new responses via SMS';
$_lang['TicketPrioritySMS0'] = 'low';
$_lang['TicketPrioritySMS1'] = 'middle';
$_lang['TicketPrioritySMS2'] = 'high';
$_lang['OrderErrorField'] = 'Error in field';

#####################################################################################
##################### v1.7.4
#####################################################################################

$_lang['DomainsControlDNS'] = 'Control DNS records';
$_lang['DomainsDNSRecordsFor'] = 'DNS-records for';
$_lang['DomainsErrorCantGetDNSRecords'] = 'Unable to get DNS-records.';
$_lang['DomainsDeleteDomainRecord'] = 'Delete DNS-record';
$_lang['DomainRecordDeleteAlert'] = 'Are you sure you want to delete DNS-record?';
$_lang['DomainsDNSRecordsUpdateSuccess'] = 'DNS-records successfully updated.';
$_lang['DomainsDNSRecordsCreateSuccess'] = 'DNS-record successfully added.';
$_lang['DomainsDNSRecordsDeleteSuccess'] = 'DNS-record successfully deleted.';
$_lang['DomainsErrorCantCreateZone'] = 'Failed to create DNS-zone for domain on server.';
$_lang['DomainsUtils'] = 'Extra options';
$_lang['DomainsMassNS'] = 'Mass change of DNS-servers';
$_lang['DomainsErrorMassNoDomains'] = 'Please specify at least one domain name.';
$_lang['DomainsErrorInactive'] = 'Domain inactive.';
$_lang['OrderSSHLogin'] = 'SSH login';
$_lang['OrderSSHPassword'] = 'SSH password';
$_lang['OrderErrorSSHLogin'] = 'SSH login missing.';
$_lang['OrderErrorSSHPassword'] = 'SSH password missing.';
$_lang['OrderErrorSSHLoginSymbols'] = 'Invalid characters in SSH login field. Only Latin characters and digits allowed.';
$_lang['OrderErrorSSHPasswordSymbols'] = 'Invalid characters in SSH password field. Only Latin characters, digits and hyphens are allowed.';
$_lang['OrderReferalLogin'] = 'Referrer login';
$_lang['OrderLisenseName'] = 'License name';
$_lang['OrderLisenseIP'] = 'License IP';
$_lang['OrderErrorNoLicenseName'] = 'License name missing.';
$_lang['OrderErrorNoLicenseIP'] = 'License IP missing.';
$_lang['ShopChangeLicenseName'] = 'Change license name';
$_lang['ShopChangeLicenseIP'] = 'Change license IP';
$_lang['ShopChangeLicense'] = 'License change';
$_lang['ShopChangeLicenseSuccess'] = 'License successfully changed.';
$_lang['ShopChangeLicenseError'] = 'Error while attempting to change license.';
$_lang['ShopChangeLicenseIPAlert'] = 'Warning! You are not allowed to change license IP more than once a month.';
$_lang['OrderErrorDomainFreeLimit'] = 'You\'ve exceeded your limit for registering free domains per day';

#####################################################################################
##################### v1.7.5
#####################################################################################

$_lang['ProfileFieldsForPPUADomain'] = 'To register domains .pp.ua, cell phone number is mandatory! Domain activation code will be sent to it.';
$_lang['DomainsChangeContact'] = 'Change contact info';
$_lang['DomainsChangeContactFor'] = 'Change contact info for';
$_lang['DomainsChangeContactSelectProfile'] = 'Specify profile used for updating contacts for domain name';
$_lang['DomainsWarningUkrnames'] = 'Please note that you won\'t be able to change domain owner info for Ukrainian domains. Information on domain owner (admin-c) for Ukrainian domains is changed at http://hostmaster.net.ua/';
$_lang['DomainsChangeContactSuccess'] = 'Contact info for domain name successfully updated.';
$_lang['DomainsChangeContactError'] = 'Failed to update contact info for domain name.';
$_lang['DomainsErrorRegistratorUnknown'] = 'Unknown registrar type';
$_lang['DomainsErrorProfileNotCheckedByAdmin'] = 'Profile not verified by admin.';
$_lang['DomainsErrorProfileNotFilled'] = 'Profile is missing some of the required info.';
$_lang['DomainsErrorRegistratorInactive'] = 'Registrar inactive.';
$_lang['DomainsChangeProfileTypeError'] = 'Profile type should not be different from the profile type your domain was registered to.';
$_lang['DomainsWarningUpdateRUSU'] = 'Please note that if domain is registered to a legal entity, name of the entity, TIN code and legal (business) address will not change. If domain was registered to a physical entity, first & last name, password and birth date will not change.';
$_lang['ProfileEunic'] = 'EUNIC';
$_lang['OrdersLogin'] = 'Login';
$_lang['OrdersPassword'] = 'Parol';

#####################################################################################
##################### v1.7.6
#####################################################################################

$_lang['OrderErrorSSHLoginExists'] = 'SSH login you specified is already taken.';
$_lang['ProfileDpnic'] = 'DPNIC';
$_lang['CatSiteImage'] = 'Image';
$_lang['CatSiteImageMaxSize'] = 'max size';
$_lang['CatSiteImageWrongType'] = 'only jpg, gif and png extensions allowed.';
$_lang['CatSiteImageCantMove'] = 'Error while uploading image: failed to move file.';
$_lang['CatSiteImageWrongSize'] = 'max image size:';
$_lang['FaqOglavlenie'] = 'Back to contents';

#####################################################################################
##################### v1.7.7
#####################################################################################

$_lang['FundsLoginOrId'] = 'Customer login or ID';
$_lang['FundErrorNoLoginOrId'] = 'Customer Login or ID missing.';
$_lang['FundErrorNoUser'] = 'Customer not found.';
$_lang['CatSiteErrorNoImage'] = 'You must upload an image.';
$_lang['CatSiteImageWrongTochnSize'] = 'acceptable image size:';
$_lang['payTaulinkKZDetails'] = 'Please pay any amount via Taulink terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['BillsSelectedBills'] = 'Selected invoices';
$_lang['BillsBillsAttach'] = 'Merge';
$_lang['BillsBillsUnAttach'] = 'This invoice contains other attached invoices. You can undo the merge by clicking this link. We do not recommend this if you paid the invoice, but its status shows as unpaid.';
$_lang['BillsBillsAttachTo'] = 'This invoice is attached to invoice №';
$_lang['BillsBillsIsMainAttach'] = 'This invoice contains other attached invoices';
$_lang['BillsBillByAttach'] = 'Merged invoice';
$_lang['OrdersChangeServer'] = 'change server';
$_lang['OrdersServer'] = 'server';
$_lang['BillsChangeServer'] = 'server change';
$_lang['ChangeServerTitle'] = 'Server change';
$_lang['ChangeServerChangeServerSuccess'] = 'Server successfully changed.';
$_lang['ChangeServerErrorChange'] = 'Failed to change server for order.';
$_lang['ChangeServer'] = 'Server';
$_lang['ChangeNewServer'] = 'New server';
$_lang['ChangeErrorNoNewServer'] = 'New server not selected.';
$_lang['ChangeErrorNoAccessServer'] = 'You won\'t be able to switch to this server.';
$_lang['ChangeServerDoplata'] = 'additional payment';
$_lang['ChangeServerDoplataWithout'] = 'without additional payment';
$_lang['ChangeServerBackMoney'] = 'refund';
$_lang['PayForServerChange'] = 'For server change';
$_lang['ChangeErrorLimit'] = 'We are sorry, you have reached your max on server changes.';
$_lang['ProfileApi'] = 'API settings';
$_lang['ProfileApiKey'] = 'API Key';
$_lang['ProfileErrorApiKey'] = 'For security reasons your API Key should contain at least 10 characters.';
$_lang['OrderPrivacy'] = 'Privacy Protection';
$_lang['OrderPrivacyOrder'] = 'Order Privacy protection in WHOIS';
$_lang['OrderrOnlyForPerson'] = 'only for physical entities and PE';
$_lang['DomainsChangePrivacy'] = 'Change Privacy Protection';
$_lang['DomainsPrivacyFor'] = 'Set up Privacy Protection for';
$_lang['DomainPrivacyEnable'] = 'enable';
$_lang['DomainPrivacyDisable'] = 'disable';
$_lang['DomainPrivacyProfileError'] = 'This function is unavailable if domain was registered to profile type Legal entity.';
$_lang['OrdersPrivacyChangeError'] = 'Failed to set up Privacy Protection. Please wait until it is done by admin.';
$_lang['DomainPrivacyChangeSuccess'] = 'Privacy Protection successfully set up.';
$_lang['DomainPrivacyChangeNoPrivacy'] = 'Please specify if Privacy Protection needs to be turned on or off.';
$_lang['OrderGeneratePassword'] = 'generate password';
$_lang['OrdersStatusTest'] = 'Trial period';
$_lang['OrdersStatusObrab'] = 'processing';
$_lang['OrderErrorOwnNS1'] = 'Missing IP for NS1 of the domain registered.';
$_lang['OrderErrorOwnNS2'] = 'Missing IP for NS2 of the domain registered.';
$_lang['OrderErrorOwnNS3'] = 'Missing IP for NS3 of the domain registered.';
$_lang['OrderErrorOwnNS4'] = 'Missing IP for NS4 of the domain registered.';
$_lang['OrderErrorOwnNSIP'] = 'You should specify IP address for DNS-server only if you want to use your own DNS-servers for the registered domain. For example, for reg.me, you want to use ns1.reg.me, ns2.reg.me and so on.';
$_lang['OrderErrorNoOwnNSForOptAndOne'] = 'Unable to use DNS-severs for one of the registered domains for bulk registration of domains with same DNS-servers.';
$_lang['OrderErrorOwnNSOpt'] = 'Missing IP for one of the DNS-servers of the domains registered.';
$_lang['OrderIP'] = 'IP';
$_lang['DomainsIP'] = 'IP';
$_lang['OrderDomainStatusErrorSymbols'] = 'domain can only contain a-z, 0-9, а-я and hyphens';
$_lang['OrderDomainStatusErrorSymbolsNoIDN'] = 'domain can only contain a-z, 0-9 and hyphens';
$_lang['OrderDomainStatusErrorSymbolsOnlyIDN'] = 'domain can only contain а-я, 0-9 and hyphens';
$_lang['OrderErrorDomainSymbols'] = 'Domain name can only contain a-z, 0-9, а-я and hyphens; name must not start or end with a hyphen.';
$_lang['OrderErrorDomainSymbolsNoIDN'] = 'Domain name can only contain a-z, 0-9 and hyphens; name must not start or end with a hyphen.';
$_lang['OrderErrorDomainSymbolsOnlyIDN'] = 'Domain name can only contain а-я, 0-9 and hyphens; name must not start or end with a hyphen.';
$_lang['OrderDomainTM'] = 'TM registration number (trademark)';
$_lang['OrderErrorNoLicense'] = 'TM registration number missing.';
$_lang['OrderCostsVariants'] = 'or specify a different pricing option';
$_lang['OrderErrorCostsVariant'] = 'You cannot use price from a different plan.';
$_lang['DomainTransferMin'] = 'transfer';
$_lang['DomainTransfer'] = 'Transfer domain to us';
$_lang['OrderDomainTransfer'] = 'transfer domain name to us';
$_lang['OrderErrorDomainNotRegistered'] = 'Domain name not registered.';
$_lang['OrderDomainTransferAuth'] = 'Transfer code (AUTH CODE)';
$_lang['OrderErrorDomainNoTransferSupport'] = 'Transfer for this domain zone not supported.';
$_lang['OrderErrorNoTransferAuth'] = 'Transfer code for domain name missing.';
$_lang['PartnerReferalsLevel1'] = 'Referrals';
$_lang['PartnerReferalsLevel2'] = 'Referrals (level 2)';
$_lang['PartnerStats'] = 'statistics';
$_lang['PartnerReferalId'] = 'referral ID';
$_lang['PartnerReferalDate'] = 'Date';
$_lang['PartnerReferalSumIn'] = 'Payment';
$_lang['PartnerReferalSumPartner'] = 'Partner Commission';
$_lang['PartnerErrorNoStats'] = 'Stats missing';
$_lang['PartnerReferalsLevel2Min'] = 'level 2';
$_lang['PartnerSendMoney'] = 'Transfer funds';
$_lang['PartnerSendUser'] = 'Customer login';
$_lang['PartnerSendMoneyButton'] = 'Transfer';
$_lang['PartnerErrorNoUserLogin'] = 'Please specify login of the customer to transfer the funds to.';
$_lang['PartnerErrorNoUserFound'] = 'Customer to transfer the funds to is missing.';
$_lang['PartnerMoneySend'] = 'Transfer partner funds';
$_lang['PartnerMoneySendSuccess'] = 'Partner funds successfully transferred.';
$_lang['PartnerErrorSendMoneyOff'] = 'We are sorry, partner funds transfer is currently disabled.';
$_lang['PartnerErrorNoSendItself'] = 'You cannot transfer funds to yourself.';
$_lang['PayWebMoneyRisks'] = 'Risk notification';
$_lang['PayWebMoneyAlert'] = 'Offered products and services are not commissioned by a person or enterprise operating system WebMoney Transfer. We are an independent company, providing services and making decisions about pricing and offers. Enterprises operating system WebMoney Transfer, do not receive commissions or other remuneration for their participation in the provision of services and shall have no liability for our activities.<BR><BR>Verification done by WebMoney Transfer, only confirms our contact information and identity. It performed at our request and did not mean that we in any way connected with the sales system of WebMoney operator.';
$_lang['DomainsDomainSearch'] = 'Find';
$_lang['PayQIWIPhone'] = 'Wallet ID (phone number)';
$_lang['ProfileEpnic'] = 'EPNIC';
$_lang['SettingsSMSBillNew'] = 'new invoice notifications from admin';
$_lang['PayLiqpayCard'] = 'from card';
$_lang['PayLiqpayPhone'] = 'via phone';
$_lang['PayLiqpayNalichnie'] = 'cash';
$_lang['SettingsSMSOrderSuspend'] = 'account suspended notifications';
$_lang['ShopDownloadFile'] = 'Download file';
$_lang['ErrorNoMoreActiveLink'] = 'This link is expired.';
$_lang['ErrorNoMoreDownloadCnt'] = 'You have reached limit the number of downloads for this link.';
$_lang['PayRussianCard'] = 'credit card of a Russian Bank';
$_lang['ErrorUserBanned'] = 'Account blocked. Contact administration.';
$_lang['OrderPurposeOfUse'] = 'Purpose of use';
$_lang['OrderErrorPurposeOfUse'] = 'Purpose of use not specified.';
$_lang['ShopDownloadLinkDays'] = 'Lifetime, days (left/total)';
$_lang['ShopDownloadLinkCount'] = 'Number of downloads (downloaded/total)';
$_lang['ShopDownloadLinkConfirm'] = 'Are you sure you want to download file?';
$_lang['DomainsPush'] = 'Push domain';
$_lang['DomainsPushDomain'] = 'Domain push';
$_lang['DomainsPushUserLogin'] = 'New owner login';
$_lang['ErrorPushCant'] = 'Domain name push is impossible.';
$_lang['Push'] = 'Push';
$_lang['DomainsPushSuccess'] = 'Domain push successfully completed.';
$_lang['payNetCardComment'] = 'To pay the invoice please enter your card number in the section below.<BR><BR><B>Warning!</B>If the card value is less than the invoice amount, the funds will be put to your internal account. If the card value is greater than the invoice amount, the difference will be credited to your internal account.';
$_lang['payNetCardNumber'] = 'Card number';
$_lang['payNetCardToBalanceSuccess'] = 'Card value less than invoice amount. Funds successfully credited to internal account.';
$_lang['payNetCardLeftToBalanceSuccess'] = 'Card value greater than invoice amount. Difference successfully credited to internal account.';
$_lang['TicketsRating'] = 'Rating';
$_lang['TicketsErrorNoParams'] = 'Incoming parameters missing.';
$_lang['PayMoneyuaSelect'] = 'Choose payment method';
$_lang['OrderPersonalInfo'] = 'Confidentiality agreement';
$_lang['OrderPersonalInfo2'] = 'confidentiality agreement';
$_lang['OrderPretenziyNeImeyu'] = 'without any reservations.';
$_lang['OrderErrorNoPersonalInfo'] = 'You have not confirmed that you have read the confidentiality agreement.';
$_lang['VerificationTitle'] = 'Verify registration';
$_lang['VerificationComment'] = 'We do not provide services to anonymous users. This is why we need to verify your phone. Verification is done automatically.';
$_lang['VerificationComment2'] = 'Please enter your cell phone number and press the "Get code" button.';
$_lang['VerificationGetCode'] = 'Get code';
$_lang['ErrorSendVerificationSMS'] = 'Error sending SMS. Please try again later.';
$_lang['VerificationComment3'] = 'To continue registration, please enter the code from the SMS you received.';
$_lang['VerificationCode'] = 'Code';
$_lang['VerificationComment4'] = 'If you have not received a code, please press the button below.';
$_lang['VerificationNewCode'] = 'Get new code';
$_lang['ErrorVerificationCode'] = 'Incorrect code entered.';
$_lang['SettinsChangeSuccess'] = 'Settings successfully changed.';
$_lang['VerificationPass'] = 'number verified';
$_lang['VerificationInfo'] = 'We do not provide services to anonymous users. You will have to verify your phone number after registration. Verification is done automatically.';
$_lang['SettingsErrorYouCanWorkWithoutSettings'] = 'Warning! You cannot work with billing until all required info in the settings section is filled.';
$_lang['SettingsErrorFields'] = 'Errors in these fields';
$_lang['OrderErrorMobileExists'] = 'This number is already in use by another customer.';
$_lang['PayOnpaySelect'] = 'Choose payment method';
$_lang['PartnerErrorNoMinActiveReferals'] = 'You don\'t have enough level 1 referrals.';
$_lang['ErrorAPIcode1'] = 'Error connecting to DB';
$_lang['ErrorAPIcode2'] = 'Error saving data to DB';
$_lang['ErrorAPIcode3'] = 'User login not specified';
$_lang['ErrorAPIcode4'] = 'User not found';
$_lang['ErrorAPIcode5'] = 'API access disabled';
$_lang['ErrorAPIcode6'] = 'Password or API key missing';
$_lang['ErrorAPIcode7'] = 'Incorrect password or API key specified';
$_lang['ErrorAPIcode8'] = 'Unknown command';
$_lang['ErrorAPIcode9'] = 'Using password and API key in one query is prohibited';
$_lang['ErrorAPIcode10'] = 'Profile not found';
$_lang['ErrorAPIcode11'] = 'Errors in profile fields';
$_lang['ErrorAPIcode12'] = 'No fields for editing the profile section specified';
$_lang['ErrorAPIcode13'] = 'Domain name not specified';
$_lang['ErrorAPIcode14'] = 'Domain zone not specified';
$_lang['ErrorAPIcode15'] = 'Domain zone not specified or zone inactive';
$_lang['ErrorAPIcode16'] = 'Domain length should be from/to characters';
$_lang['ErrorAPIcode17'] = 'Domain name can only contain a-z0-9а-я and hyphen; it should not start or end with a hyphen';
$_lang['ErrorAPIcode18'] = 'Domain name taken';
$_lang['ErrorAPIcode19'] = 'Domain name already ordered by another user of the billing system';
$_lang['ErrorAPIcode20'] = 'You\'ve exceeded your limit for registering free domain names per day';
$_lang['ErrorAPIcode21'] = 'Term of registration for this domain name not specified';
$_lang['ErrorAPIcode22'] = 'Valid term for registering domain name, yrs.';
$_lang['ErrorAPIcode23'] = 'Using default DNS-severs for this domain zone is disabled';
$_lang['ErrorAPIcode24'] = 'Primary DNS-server invalid or not specified';
$_lang['ErrorAPIcode25'] = 'Second DNS-server invalid or not specified';
$_lang['ErrorAPIcode26'] = 'Invalid third DNS-server';
$_lang['ErrorAPIcode27'] = 'Invalid fourth DNS-server';
$_lang['ErrorAPIcode28'] = 'API does not support own DNS-servers for this domain zone';
$_lang['ErrorAPIcode29'] = 'Error validating DNS-servers';
$_lang['ErrorAPIcode30'] = 'Your request has been received, however for technical reasons it will be processed manually';
$_lang['ErrorAPIcode31'] = 'Insufficient funds on your internal account';
$_lang['ErrorAPIcode32'] = 'No order for the domain name found';
$_lang['ErrorAPIcode33'] = 'Domain zone for order not found';
$_lang['ErrorAPIcode34'] = 'Term of renewal for this domain name not specified';
$_lang['ErrorAPIcode35'] = 'Valid term for renewing domain name, yrs.';
$_lang['ErrorAPIcode36'] = 'Operation impossible because there are unpaid invoices associated with this order';
$_lang['ErrorAPIcode37'] = 'Operation impossible because order is not processed';
$_lang['ErrorAPIcode38'] = 'Renewal is enabled X days before the expiration of your paid period';
$_lang['ErrorAPIcode39'] = 'Profile type should not be different from the profile type your domain was registered to';
$_lang['ErrorAPIcode40'] = 'Operation impossible because order is expired';
$_lang['ErrorAPIcode41'] = 'Operation not supported for this domain zone';
$_lang['ErrorAPIcode42'] = 'Country ISO code not specified';
$_lang['ErrorAPIcode43'] = 'List of regions for this country not specified';
$_lang['ErrorAPIcode44'] = 'Selecting registrar for this domain zone is impossible';
$_lang['ErrorAPIcode45'] = 'IP address for own NS1 is not specified';
$_lang['ErrorAPIcode46'] = 'The IP-address specified for NS1 is not an own DNS-sever for this domain';
$_lang['ErrorAPIcode47'] = 'IP address for own NS2 is not specified';
$_lang['ErrorAPIcode48'] = 'The IP-address specified for NS2 is not an own DNS-sever for this domain';
$_lang['ErrorAPIcode49'] = 'IP address for own NS3 is not specified';
$_lang['ErrorAPIcode50'] = 'The IP-address specified for NS3 is not an own DNS-sever for this domain';
$_lang['ErrorAPIcode51'] = 'IP address for own NS4 is not specified';
$_lang['ErrorAPIcode52'] = 'The IP-address specified for NS4 is not an own DNS-sever for this domain';
$_lang['ErrorAPIcode53'] = 'Error obtaining DNS-servers';
$_lang['DomainDeleteReasonExpired'] = 'registration expired and domain not renewed';
$_lang['DomainDeleteReasonRegistratorCancel'] = 'registration cancelled by registrar';
$_lang['DomainDeleteReasonTransferRequestApprove'] = 'transfer to another registrar completed';
$_lang['DomainDeleteReasonTransferReject'] = 'transfer not confirmed';
$_lang['ShopDeleteReasonExpired'] = 'term of order expired and product/service not renewed';
$_lang['OrdersOrderIPsCount'] = 'IP-addresses';
$_lang['payQiwiKZDetails'] = 'Please pay any amount via QIWI terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['BillsChangeSlots'] = 'changing number of slots';
$_lang['OrdersChangeSlots'] = 'Change number of slots';
$_lang['OrdersSlots'] = 'slots';
$_lang['PayForSlotsChange'] = 'To change number of slots';
$_lang['ChangeSlotsTitle'] = 'Change number of slots';
$_lang['ChangeSlotsChangeSuccess'] = 'Number of slots successfully changed.';
$_lang['ChangeSlotsErrorChange'] = 'Failed to change number of slots for order.';
$_lang['ChangeSlots'] = 'Number of slots';
$_lang['ChangeNewSlots'] = 'New number of slots';
$_lang['TicketsAttachFiles'] = 'Attach files';
$_lang['TicketsFileNumber'] = 'File #';
$_lang['TicketsFileAttachSuccess'] = 'successfully uploaded';
$_lang['TicketsFileAttachError'] = 'Upload error';
$_lang['TicketsFileAttachFileExists'] = 'file already exists';
$_lang['OrderErrorAddonsCntWrong'] = 'Maximum number of addons';
$_lang['FakturaNewServer'] = 'Change server for order ID';
$_lang['FakturaNewSlots'] = 'Change of number of slots for order ID';
$_lang['FakturaPrefixSrok'] = 'period';
$_lang['DomainDeleteReasonRegistratorCancel2'] = 'domain deleted from registry';
$_lang['OrderLocalContact'] = 'Local contact';
$_lang['OrderLocalContactHelp'] = 'Domain will be registered using registrar\'s contacts. Your personal information will not be submitted to WHOIS.';
$_lang['OrderLocalContactOrder'] = 'Order local contact';
$_lang['ErrorUpdContactWithLocalContact'] = 'Changing contact prohibited. Please contact support.';
$_lang['PayInterkassaSelect'] = 'Choose payment method';
$_lang['ButtonFillProfile'] = 'Fill profile';
$_lang['ProfileOgrnDate'] = 'Date of company code issue';
$_lang['ProfileOgrnDateComment'] = 'Date of company code issue.';
$_lang['ProfileRegData'] = 'Registration info';
$_lang['ProfileOkpo'] = 'OKPO';
$_lang['ProfilePassportIdnum'] = 'Identification number';
$_lang['ProfileSkype'] = 'Skype';
$_lang['payEasySoftDetails'] = 'Please pay any amount via EasyPay terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['BillingMenuId'] = 'Your ID';
$_lang['OrdersServerInfo'] = 'Server info';
$_lang['OrdersServerInfoServerName'] = 'Server name';
$_lang['OrdersServerInfoServerIp'] = 'Server IP';
$_lang['OrdersServerInfoServerAddonIps'] = 'Additional IP addresses';
$_lang['OrdersServerInfoSitesIp'] = 'Site IPs';
$_lang['OrdersServerInfoDNSNum'] = 'NS';
$_lang['FundsMinSummError'] = 'Invalid top-up amount.';
$_lang['ProfileGender'] = 'Gender';
$_lang['ProfileGenderMale'] = 'Male';
$_lang['ProfileGenderFemale'] = 'Female';
$_lang['OrderDopOrderParams'] = 'Additional order parameters';
$_lang['OrderErrorNeedAuthForSSLOrder'] = 'To order SSL certificates, you should first log into the billing system.';
$_lang['OrderErrorSSLNoCheckAdminContact'] = 'Administrative contact is not filled with all the required information.';
$_lang['OrderErrorSSLNoCheckTechContact'] = 'Technical contact is not filled with all the required information.';
$_lang['OrderErrorSSLNoCheckOrgContact'] = 'Organization contact is not filled with all the required information.';
$_lang['OrderSSLCSR'] = 'Request to sign certificate (CSR code)';
$_lang['OrderSSLCSRComment'] = 'Please make sure your code contains "BEGIN" and "END" tags.';
$_lang['OrderSSLAdminContact'] = 'Administrative contact + Callback';
$_lang['OrderSSLAdminContactComment'] = 'Administrative contact is primary contact for getting in touch in case any order-related questions arise. This contact will be used for calls that are made for all certificates with business or extended validation. For certificates with domain validation callbacks will not be made.';
$_lang['OrderSSLTechContact'] = 'Technical contact';
$_lang['OrderSSLTechContactComment'] = 'Technical contact person will receive certificate to install on a web-server and will receive notifications to renew certificate.';
$_lang['OrderSSLOrgContact'] = 'Company information';
$_lang['OrderSSLOrgContactComment'] = 'Your company information will be shown in your certificate. Please make sure this information matches your CSR info as well as the information on paperwork submitted for validation.';
$_lang['OrderSSLServersCount'] = 'Number of licensed servers';
$_lang['OrderSSLServersCountComment'] = 'How many servers would you like to protect?';
$_lang['OrderSSLServersCountUnlimited'] = 'Unlimited';
$_lang['OrderSSLAddonDomains'] = 'Protect additional domains';
$_lang['OrderSSLAddonDomainsComment'] = 'To protect extra domains please specify extra domains that will be added to your certificate. All domains should be registered to one and the same organization. Example:<BR><BR>- yourdomain.com<BR>- mail.yourdomain.com<BR>- any.yourdomain.com<BR>- yourdomain.local<BR>- yourotherdomain.ru';
$_lang['OrderSSLWebServer'] = 'Type of web server';
$_lang['OrderSSLWebServerComment'] = 'Please select a server platform from the list. Select "Other", if your server software is not on the list.';
$_lang['OrderSSLWebServerOther'] = 'Other';
$_lang['OrderSSLApproverEmail'] = 'Email address to confirm request (DCV)';
$_lang['OrderSSLApproverEmailComment'] = 'Please specify admin email address. This is required to confirm request for certificate. Before selecting an email address, please make sure it is active and working, otherwise you should not be able to receive a verification message. Only email addresses from the list can be used!';
$_lang['OrderSSLOrderType'] = 'Order type';
$_lang['OrderSSLOrderTypeComment'] = 'If you have a valid certificate of the same mark and same domain that is soon expiring, please select: "Renewal". We will add the remaining time of the existing certificate to your new certificate and will round up the time to the closest whole month.';
$_lang['OrderSSLOrderTypeNew'] = 'New';
$_lang['OrderSSLOrderTypeRenewal'] = 'Renewal';
$_lang['OrderSSLAgreement'] = 'User agreement';
$_lang['OrderSSLAgreementAgree'] = 'Accept the terms';
$_lang['payHutkiGroshDetails'] = 'Please pay any amount via Raschet terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['pay2clickDetails'] = 'Please pay any amount via 2click terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['ProfileSecurity'] = 'Security';
$_lang['ProfileSecurityAllowedIPs'] = 'Restriction by IP';
$_lang['ProfileSecurityAllowedIPsComment'] = '<B>Access restriction by IP.</B><BR>Every ip or ip range should start with a new line. IP range is specified using hyphens. If nothing is specified - there are no restrictions to access billing!<BR><BR><B>Example:</B><BR>192.15.3.2<BR>10.10.1.1<BR>192.168.0.1-192.168.0.10<BR><BR><B>Be careful!</B> If you specify IP addresses and do not specify your own IP address, you will not be able to access billing. Your IP:';
$_lang['ProfileSecurityAllowedApiIPs'] = 'Restriction by IP';
$_lang['ProfileSecurityAllowedApiIPsComment'] = '<B>Restriction to access API by IP.</B><BR>Every ip or ip range should start with a new line. IP range is specified using hyphens. If nothing is specified, there are no restrictions to access API!<BR><BR><B>Example:</B><BR>192.15.3.2<BR>10.10.1.1<BR>192.168.0.1-192.168.0.10';
$_lang['ErrorBadIP'] = 'You IP address is not on the authorized access list.';
$_lang['ErrorAPIcode54'] = 'Access denied. IP is not on the authorized access list';
$_lang['ErrorAPIcode55'] = 'Transfer for this domain zone not supported';
$_lang['ErrorAPIcode56'] = 'Domain name not registered';
$_lang['ErrorAPIcode57'] = 'API does not support own DNS-servers during transfer';
$_lang['ErrorAPIcode58'] = 'AUTH-CODE of domain name not specified.';
$_lang['OrderDomainSrok'] = 'Registration term, yrs';
$_lang['ZonesTransfer'] = 'transfer';
$_lang['ZonesTransferCost0'] = 'if you only transfer domain';
$_lang['ZonesTransfer2Cost0'] = 'during transfer with order of plan';
$_lang['ProfilePassportOib'] = 'Company or Personal ID (OIB)';
$_lang['ProfilePassportOibComment'] = '';
$_lang['regFields']['srvlocfor'] = 'Server location for';
$_lang['regFields']['srvlocStreet'] = 'Server location (address)';
$_lang['regFields']['srvlocCity'] = 'Server location (city)';
$_lang['regFields']['srvlocSp'] = 'Server location (region/state)';
$_lang['regFields']['domainDescription'] = 'Domain description';
$_lang['DomainsChangeSrvLocSuccess'] = 'Location successfully changed.';
$_lang['DomainsErrorChangeSrvLoc'] = 'Failed to change location.';
$_lang['DomainsChildNS'] = 'Manage child NS';
$_lang['DomainsChildNSFor'] = 'Manage child NS for domain';
$_lang['DomainsNS'] = 'NameServer';
$_lang['DomainsChildNSCreate'] = 'create';
$_lang['DomainsChildNSUpdate'] = 'change';
$_lang['DomainsChildNSDelete'] = 'delete';
$_lang['DomainsChildNSOldIP'] = 'Current IP';
$_lang['DomainsChildNSNewIP'] = 'New IP';
$_lang['ErrorDomainsChildNSNoNs'] = 'Child NS not specified.';
$_lang['ErrorDomainsChildNSNoNewIP'] = 'New IP not specified';
$_lang['ErrorDomainsChildNSNoOldIP'] = 'Current IP not specified';
$_lang['DomainsChildNSSuccess'] = 'Operation successfully completed.';
$_lang['OrderUseServerNS'] = 'Use DNS-servers from hosting account';
$_lang['BillingMenuCurrency'] = 'Currency rates';
$_lang['BillingMenuSpecialCosts'] = 'Special prices';
$_lang['SpecialCostsTitle'] = 'Your special prices';
$_lang['OrderErrorAddonsNoRequired'] = 'You should order an addon from the group';
$_lang['BillingMenuSMSSend'] = 'Send SMS';
$_lang['SMSSendTitle'] = 'Send SMS';
$_lang['SMSSendToNumbers'] = 'Number list (to)';
$_lang['SMSSendFrom'] = 'Sender (from)';
$_lang['SMSSendMessage'] = 'Message';
$_lang['SMSSendSymbols'] = 'symbols';
$_lang['SMSSendParts'] = 'parts';
$_lang['SMSSendTranslit'] = 'Convert to translit';
$_lang['ErrorSMSSendNoMobiles'] = 'Recipient number not specified.';
$_lang['ErrorSMSSendNoText'] = 'Please specify message text.';
$_lang['SMSSendLeftSMS'] = 'Remainder of sms';
$_lang['SMSSendConfirm'] = 'Confirm send';
$_lang['SMSSendNumber'] = 'number';
$_lang['SMSSendCost'] = 'cost';
$_lang['SMSSendPacketSMS'] = 'bundle SMS';
$_lang['SMSSendResult'] = 'Send result';
$_lang['SMSSendResultSmall'] = 'result';
$_lang['SMSSendResultSended'] = 'sent';
$_lang['SMSSendResultNoPacketForSMSOut'] = 'error changing remainder of bundle SMS';
$_lang['DomainsChangeProfileIdError'] = 'Using a different profile is prohibited. Use the profile associated with this domain.';
$_lang['ErrorAPIcode59'] = 'Profile ID should not be different from the profile ID your domain was registered to';
$_lang['OrdersStart'] = 'Start';
$_lang['OrdersStartAlert'] = 'Are you sure you want to start server?';
$_lang['OrdersStartSuccess'] = 'Server successfully started.';
$_lang['OrdersStartError'] = 'Failed to start server. Please wait until it is done by admin.';
$_lang['OrdersErrorCantStart'] = 'You cannot start server for this order.';
$_lang['OrdersStop'] = 'Stop';
$_lang['OrdersStopAlert'] = 'Are you sure you want to stop server?';
$_lang['OrdersStopSuccess'] = 'Server successfully stopped.';
$_lang['OrdersStopError'] = 'Failed to stop server. Please wait until it is done by admin.';
$_lang['OrdersErrorCantStop'] = 'You cannot stop server for this order.';
$_lang['OrdersStartIPMI'] = 'Turn on IPMI';
$_lang['OrdersStartIPMIAlert'] = 'Are you sure you want to start IPMI?';
$_lang['OrdersStartIPMISuccess'] = 'IPMI successfully started.';
$_lang['OrdersStartIPMIError'] = 'Failed to start IPMI. Please wait until it is done by admin.';
$_lang['OrdersErrorCantStartIPMI'] = 'You cannot start IPMI for this order.';
$_lang['OrdersStopIPMI'] = 'Turn off IPMI';
$_lang['OrdersStopIPMIAlert'] = 'Are you sure you want to stop IPMI?';
$_lang['OrdersStopIPMISuccess'] = 'IPMI successfully stopped.';
$_lang['OrdersStopIPMIError'] = 'Failed to stop IPMI. Please wait until it is done by admin.';
$_lang['OrdersErrorCantStopIPMI'] = 'You cannot stop IPMI for this order.';
$_lang['ShopSiteEditor'] = 'Site editor';
$_lang['ShopPublicSettings'] = 'Publishing settings';
$_lang['ShopPWBwwwUrl'] = 'Site WWW-address';
$_lang['ShopPWBftpServer'] = 'FTP server';
$_lang['ShopPWBftpLogin'] = 'FTP login';
$_lang['ShopPWBftpPassword'] = 'FTP password';
$_lang['ShopPWBftpFolder'] = 'FTP folder';
$_lang['ShopChangePublicSettingsSuccess'] = 'Publishing settings successfully changed.';
$_lang['BillingServerId'] = 'Server ID';
$_lang['OrdersChangeToken'] = 'Create new token';
$_lang['OrdersNewToken'] = 'New token';
$_lang['OrdersChangeTokenSuccess'] = 'New token successfully created.';
$_lang['payQiwiTermDetails'] = 'Please pay any amount via QIWI terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['OrderErrorDomainReserved'] = 'Domain name reserved.';
$_lang['OrderDomainStatusErrorReserved'] = 'domain reserved';
$_lang['ErrorAPIcode60'] = 'Error checking if domain name is available';
$_lang['OrderErrorDomainNeedUserReg'] = 'To order a domain name in the domain zone specified, you should first <a class=rootlink href=billing.php?do=order&type=partner>register</a> in the billing system.';
$_lang['OrderDomainStatusErrorOptForZoneNoSupport'] = 'bulk domain registrations not supported for this zone';
$_lang['OrderErrorCantCreateContact'] = 'Failed to create contact for registrar profile.';
$_lang['OrderConfirmCode'] = 'Confirmation code from SMS';
$_lang['OrderErrorNoConfirmCode'] = 'Confirmation code not specified';
$_lang['OrderErrorCantCheckContactConfirmCode'] = 'Failed to verify confirmation code with registrar.';
$_lang['OrderErrorBadContactConfirmCode'] = 'Incorrect confirmation code entered.';
$_lang['BillingMenuAllOrders'] = 'All orders';
$_lang['BillingMenuCurrentPage'] = 'You are';
$_lang['BillingMenuBilling'] = 'Billing';
$_lang['BillingMenuBonuses'] = 'Bonuses';
$_lang['BonusesTitle'] = 'Bonuses';
$_lang['BonusesErrorNoActivePartners'] = 'No available bonus partners.';
$_lang['BonusesSelectPartner'] = 'To get your promo code, please select a partner from the list';
$_lang['BonusesGetCode'] = 'Get promo code';
$_lang['BonusesErrorNoPartner'] = 'Partner not selected.';
$_lang['BonusesErrorNoCodeForUser'] = 'No available promo codes for this partner.';
$_lang['BonusesYourBonusCodeFor'] = 'Your promo code for';
$_lang['ProfileShowLastIPPopup'] = 'Show last IP';
$_lang['ProfileShowLastIPPopupComment'] = 'If this is enabled, after authorization you will see information about your last visit of the billing.';
$_lang['UserLastEnterInfo'] = 'Information about last visit';
$_lang['UserLastEnter'] = 'Your last visit was';
$_lang['UserLastEnterAt'] = 'at';
$_lang['UserLastEnterFromIP'] = 'from IP';
$_lang['BillsInPaymentCurrencyPayed'] = 'paid';
$_lang['BillsInPaymentCurrency'] = 'amount in currency of the payment system';
$_lang['OrderShopDeliveryAddressField'] = 'Shipping address';
$_lang['OrderShopUploadFileField'] = 'Attach file';
$_lang['ErrorNoShopDeliveryAddressField'] = 'Shipping address missing.';
$_lang['ErrorNoShopUploadFileField'] = 'File for upload not specified.';
$_lang['ErrorCantUploadShopUploadFile'] = 'Failed to upload file.';
$_lang['ErrorAccessDenied'] = 'Access denied.';
$_lang['DomainsPrivacyTitle'] = 'Control Privacy Protection';
$_lang['DomainsChildNSTitle'] = 'Control child NS';
$_lang['DomainsNSTitle'] = 'Control DNS-servers';
$_lang['DomainsDNSRecordsTitle'] = 'Control DNS records';
$_lang['DomainsChangeContactTitle'] = 'Change contact info';
$_lang['DomainsPushDomainTitle'] = 'Domain push';
$_lang['BillsGetFakturaAct'] = 'Get certificate of acceptance';
$_lang['OrdersAddonsTitle'] = 'Control addons';
$_lang['DomainsSelectedDomains'] = 'Selected domains';
$_lang['DomainsDomainsRenew'] = 'Renew';
$_lang['SMSSendSMS'] = 'sms';
$_lang['TicketsAttachedFiles'] = 'Attached files';
$_lang['DomainsApiDocTitle'] = 'Description of ROOTPANEL.NET API for domain registration system';
$_lang['TarifsApiDocTitle'] = 'Description of ROOTPANEL.NET API for hosting and server management system';
$_lang['OrderId'] = 'ID';
$_lang['OrderDeleteReasonExpired'] = 'order expired and order not renewed';
$_lang['ClientDeleteReasonExpired'] = 'user account expired';
$_lang['ErrorVerificationSMSCount'] = 'You\'ve exceeded your SMS sending limit.';
$_lang['DomainsErrorNoOperationSupportForRegistrator'] = 'Operation not supported for registrar';
$_lang['RenewErrorCantDeleteAddonBecauseCheckMinusParamError'] = 'You cannot cancel an addon';
$_lang['RenewErrorCantDeleteAddonBecauseCheckMinusParamError2'] = 'Current use of this feature exceeds its remainder after cancellation.';
$_lang['BillingMenuLoyalty'] = 'Your loyalty discount';
$_lang['OrderTitleTypeAddon'] = 'Addons';
$_lang['OrderAddonCancelLink'] = 'Cancel';
$_lang['OrderAddonCancelLinkConfirm'] = 'Are you sure you would like to cancel addons?';
$_lang['OrderErrorNoAddonForOrder'] = 'Addon is missing in order.';
$_lang['OrderErrorNoAddon'] = 'Addon not found.';
$_lang['OrderErrorNoAddonCancelAllowed'] = 'Canceling addons is not allowed.';
$_lang['OrderAddonCancelSuccess'] = 'Addons successfully cancelled.';
$_lang['BillsCancelingAddons'] = 'Addons deleted';
$_lang['BillsCancelAddons'] = 'Addons cancellation';
$_lang['FakturaAddonDelete'] = 'Addons cancellation for order ID';
$_lang['FakturaDomainPrivacy'] = 'Privacy Protection for domain name';
$_lang['PayBillAlreadyPayed'] = 'Invoice paid.';
$_lang['ShopItemsErrorNotFound'] = 'Product/Service not found.';
$_lang['ShopItemsSeeAllItems'] = 'To the list of products/services';
$_lang['ShopItemsCost'] = 'Price';
$_lang['ShopItemsDescription'] = 'Description';
$_lang['ShopItemsDetails'] = 'Details';
$_lang['tarifParamsValues']['extraquota'] = 'Disk, Mb';
$_lang['tarifParamsValues']['extradomains'] = 'Domains, pcs.';
$_lang['tarifParamsValues']['extrawwwdomains'] = 'WWW-domains, pcs.';
$_lang['tarifParamsValues']['extradatabases'] = 'Databases, pcs.';
$_lang['tarifParamsValues']['extraftpaccounts'] = 'FTP-accounts, pcs';
$_lang['tarifParamsValues']['extraemailaccounts'] = 'Email accounts, pcs.';
$_lang['tarifParamsValues']['extracpu'] = 'CPU, pcs.';
$_lang['tarifParamsValues']['extracpufreq'] = 'CPU, MHz';
$_lang['tarifParamsValues']['extraram'] = 'Memory, Mb';
$_lang['tarifParamsValues']['extraproc'] = 'Processes, pcs.';
$_lang['tarifParamsValuesComments']['extraquota'] = 'Extra disk space';
$_lang['tarifParamsValuesComments']['extradomains'] = 'Extra domain names';
$_lang['tarifParamsValuesComments']['extrawwwdomains'] = 'Extra WWW-domains';
$_lang['tarifParamsValuesComments']['extradatabases'] = 'Extra databases';
$_lang['tarifParamsValuesComments']['extraftpaccounts'] = 'Extra FTP-accounts';
$_lang['tarifParamsValuesComments']['extraemailaccounts'] = 'Extra email accounts';
$_lang['tarifParamsValuesComments']['extracpu'] = 'Extra CPUs';
$_lang['tarifParamsValuesComments']['extracpufreq'] = 'Extra CPU frequency';
$_lang['tarifParamsValuesComments']['extraram'] = 'Extra memory';
$_lang['tarifParamsValuesComments']['extraproc'] = 'Extra processes';
$_lang['ErrorAPIHcode1'] = 'Error connecting to DB';
$_lang['ErrorAPIHcode2'] = 'Error saving data to DB';
$_lang['ErrorAPIHcode3'] = 'User login not specified';
$_lang['ErrorAPIHcode4'] = 'User not found';
$_lang['ErrorAPIHcode5'] = 'API access disabled';
$_lang['ErrorAPIHcode6'] = 'Password or API key missing';
$_lang['ErrorAPIHcode7'] = 'Incorrect password or API key specified';
$_lang['ErrorAPIHcode8'] = 'Unknown command';
$_lang['ErrorAPIHcode9'] = 'Using password and API key in one query is prohibited';
$_lang['ErrorAPIHcode10'] = 'Plans missing';
$_lang['ErrorAPIHcode11'] = 'Plan identified not specified';
$_lang['ErrorAPIHcode12'] = 'Plan not found';
$_lang['ErrorAPIHcode13'] = 'Domain name not specified';
$_lang['ErrorAPIHcode14'] = 'The selected plan for this domain has already been ordered.';
$_lang['ErrorAPIHcode15'] = 'Renewal term not specified';
$_lang['ErrorAPIHcode16'] = 'Invalid order term specified';
$_lang['ErrorAPIHcode17'] = 'Invalid addon specified';
$_lang['ErrorAPIHcode18'] = 'Order ID not specified';
$_lang['ErrorAPIHcode19'] = 'Order not found';
$_lang['ErrorAPIHcode20'] = 'There are unpaid invoices associated with this order';
$_lang['ErrorAPIHcode21'] = 'Order already suspended';
$_lang['ErrorAPIHcode22'] = 'Order already launched';
$_lang['ErrorAPIHcode23'] = 'Order expired';
$_lang['ErrorAPIHcode24'] = 'Plan type specified incorrectly';
$_lang['ErrorAPIHcode25'] = 'Operation not supported for orders of this type';
$_lang['ErrorAPIHcode26'] = 'Orders missing';
$_lang['ErrorAPIHcode30'] = 'Your request has been received, however for technical reasons it will be processed manually';
$_lang['ErrorAPIHcode31'] = 'Insufficient funds on your internal account';
$_lang['ErrorAPIHcode54'] = 'Access denied. IP is not on the authorized access list';
$_lang['BillsErrorNoRenew'] = 'Unable to renew domains';
$_lang['PayErrorProfileInRegistrarStopList'] = 'Payment for the order is prohibited. Please contact support.';
$_lang['OrderParamsOfOrderOneWord'] = 'parameters';
$_lang['OrderSokraschenieDay'] = 'd.';
$_lang['BillingPanel'] = 'Billing Panel';
$_lang['BillingWelcome'] = 'Welcome';
$_lang['BillingMainMenuAbout'] = 'About us';
$_lang['BillingMainMenuNews'] = 'News';
$_lang['BillingMainMenuUslugi'] = 'Our services';
$_lang['BillingMainMenuZones'] = 'Domains';
$_lang['BillingMainMenuShopItems'] = 'Products';
$_lang['BillingMainMenuSites'] = 'Customers';
$_lang['BillingMainMenuTestimonials'] = 'Testimonials';
$_lang['BillingMainMenuFaq'] = 'FAQ';
$_lang['BillingMainMenuRegister'] = 'Registration';
$_lang['BillingMainMenuLogin'] = 'Login';
$_lang['BillingMainMenuFeedback'] = 'Contacts';
$_lang['DomainsDomainControl'] = 'Control domain';
$_lang['OrdersOrderControl'] = 'Control order';
$_lang['ShopOrderControl'] = 'Control order';
$_lang['FeedTitle2'] = 'Email us';
$_lang['BillingLoginTitle'] = 'Login your cabinet';
$_lang['TarifsNoDescription'] = 'Description missing';
$_lang['OrderDomainsOwner'] = 'Domain names owner';
$_lang['OrderPrivacyOrderIfPossible'] = 'Order privacy protection in WHOIS if domain zone supports it';
$_lang['FakturaDomainZone'] = 'Delegation of domain name in zone';
$_lang['payIboxDetails'] = 'Please pay any amount via iBox terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['FeedbackDisabled'] = 'Feedback disabled';
$_lang['DomainPrivacyCurrentStatusPayedAndEnabled'] = 'service active, privacy protection enabled';
$_lang['DomainPrivacyCurrentStatusPayedAndDisabled'] = 'service active, privacy protection disabled';
$_lang['DomainPrivacyCurrentStatusDisabled'] = 'service inactive';
$_lang['HistoryDate'] = 'Date/Time';
$_lang['HistoryOperation'] = 'Action';
$_lang['HistoryInfo'] = 'Information';
$_lang['HistoryTotalRecords'] = 'Total records';
$_lang['HistoryRecordsOnPage'] = 'records on page';
$_lang['HistoryTitle'] = 'Account login history';
$_lang['DomainsPushConfirmEmailSent'] = 'Confirmation of domain push required. An email with a detailed instruction has been sent to you.';
$_lang['DomainsPushErrorBadConfirmCode'] = 'Domain push impossible - confirmation code incorrect.';
$_lang['BillingMainMenuDomainShop'] = 'Domain shop';
$_lang['FakturaDomainSale'] = 'Publish in domain shop';
$_lang['DomainsSale'] = 'Domain on sale';
$_lang['DomainsSaleDomain'] = 'Domain sale';
$_lang['ErrorBadTemplate'] = 'Failed to get email template.';
$_lang['DomainShopTitle'] = 'Domain shop';
$_lang['DomainShopGroupPriority'] = 'Priority domains';
$_lang['DomainShopGroupNormal'] = 'Domains';
$_lang['DomainShopCurrency'] = 'Currency';
$_lang['DomainShopCost'] = 'Price';
$_lang['DomainShopBuyTitle'] = 'Domain purchase';
$_lang['DomainShopBuyDomainCost'] = 'Domain price';
$_lang['DomainShopBuyBuyerName'] = 'Your name';
$_lang['DomainShopBuyBuyerEmail'] = 'Your email';
$_lang['DomainShopBuyBuyerComment'] = 'Your comment';
$_lang['DomainShopBuySendRequest'] = 'Send inquiry to seller';
$_lang['DomainShopBuyRequestSendedSuccess'] = 'Inquiry to seller successfully sent. Please wait until seller contacts you.';
$_lang['DomainShopBuyErrorBuyerEmail'] = 'Buyer\'s email not specified.';
$_lang['DomainShopBuyErrorBuyerName'] = 'Buyer name missing.';
$_lang['DomainSalePublicate'] = 'Publish in domain shop';
$_lang['DomainSalePublicateFor'] = 'Publication in domain shop for';
$_lang['DomainSaleCost'] = 'price';
$_lang['DomainSalePublicateNewCost'] = 'new price';
$_lang['DomainSaleErrorCost'] = 'Domain price cannot be less than zero.';
$_lang['DomainSaleDeleteSuccess'] = 'Domain publishing successfully canceled.';
$_lang['DomainSaleUpdateSuccess'] = 'Publishing settings for domain successfully changed.';
$_lang['DomainSalePubSuccess'] = 'Domain publishing successfully completed.';
$_lang['DomainSaleCurrentStatusPublicated'] = 'domain published';
$_lang['DomainSaleCurrentStatusNoPublicated'] = 'domain not published';
$_lang['DomainSaleDelete'] = 'cancel';
$_lang['DomainSaleUpdate'] = 'change';
$_lang['DomainSalePub'] = 'publish';
$_lang['TicketsHaveNewTickets'] = 'You have new tickets or unread responses in old tickets.';
$_lang['Buy'] = 'Buy';
$_lang['Read'] = 'Read';
$_lang['Go'] = 'Go';
$_lang['Generate'] = 'Generate';
$_lang['payPortmanatAccount'] = 'via account';
$_lang['payPortmanatCode'] = 'with code';
$_lang['payPortmanatCodeComment'] = '<B>Warning!</B> In code value is less than invoice amount, funds will be credited to internal account If the card value is greater than the invoice amount, the difference will be credited to your internal account.';
$_lang['payBlockchainPleaseSend'] = 'Please send';
$_lang['payBlockchainPleaseSendToAddress'] = 'to address';
$_lang['ErrorNoMobileInSettings'] = 'Please specify your cell phone number in your settings.';
$_lang['OrdersOnlineCSRGenerator'] = 'generate CSR';
$_lang['UtilsCSRGeneratorTitle'] = 'Online CSR generator';
$_lang['UtilsCSRGeneratorWarning'] = 'Add *. before Common Name to generate CSR for Wildcard<BR>Example: https://*.domain.com';
$_lang['UtilsCSRGeneratorCommonName'] = 'Common Name';
$_lang['UtilsCSRGeneratorOrganization'] = 'Organization (in English)';
$_lang['UtilsCSRGeneratorDepartment'] = 'Department (e.g.: IT Dept)';
$_lang['UtilsCSRGeneratorCity'] = 'City (e.g.: New York)';
$_lang['UtilsCSRGeneratorState'] = 'State (e.g.: Alabama/None)';
$_lang['UtilsCSRGeneratorEmail'] = 'Email';
$_lang['UtilsCSRGeneratorCountry'] = 'Country';
$_lang['UtilsCSRGeneratorCsrCode'] = 'Your CSR for';
$_lang['UtilsCSRGeneratorCsrKey'] = 'Your Private Key';
$_lang['UtilsCSRGeneratorResultWarning'] = 'Please save this information in safe location!';
$_lang['UtilsCSRGeneratorErrorNoCommonName'] = 'Common Name not specified.';
$_lang['UtilsCSRGeneratorErrorNoOrganization'] = 'Organization not specified.';
$_lang['UtilsCSRGeneratorErrorNoDepartment'] = 'Department not specified.';
$_lang['UtilsCSRGeneratorErrorNoCity'] = 'City not specified.';
$_lang['UtilsCSRGeneratorErrorNoState'] = 'State not specified.';
$_lang['UtilsCSRGeneratorErrorNoEmail'] = 'Email not specified.';
$_lang['UtilsCSRGeneratorErrorNoCountry'] = 'Country not specified.';
$_lang['FQDN'] = 'FQDN';
$_lang['ErrorAPIcode61'] = 'TM registration number missing';
$_lang['BillsBillNumSmall'] = 'invoice №';
$_lang['BillsTarifUnknown'] = 'UNKNOWN';
$_lang['BillsRenewAddons'] = 'Renew addons';
$_lang['BillsPayFor'] = 'Pay for services';
$_lang['BillsPayStatus'] = 'Payment';
$_lang['BillsDeleteError'] = 'Error deleting invoice.';
$_lang['DomainsDeleteError'] = 'Error deleting domain.';
$_lang['OrdersOrder'] = 'Order';
$_lang['OrdersDeleteError'] = 'Error deleting order.';
$_lang['OrderPromoCodeSmall'] = 'promo code';
$_lang['ShopItemsDeleteSuccess'] = 'Order of product/service and all invoices associated with it, have been successfully deleted.';
$_lang['ShopItemsDeleteError'] = 'Error deleting order of product/service.';
$_lang['TicketsClosedByUser'] = 'Ticket closed by customer.';
$_lang['Delete'] = 'Delete';
$_lang['WarningAddFundsNeedAuth'] = 'To add funds to your account, please log into billing.';
$_lang['ErrorBalanceDisabled'] = 'Internal account disabled. Please contact support.';
$_lang['ErrorPaySystemNotFoundOrInactive'] = 'Payment system is not found or inactive. Please contact support.';
$_lang['ErrorCheckCode'] = 'Error checking code.';
$_lang['ErrorCodeUsed'] = 'Code has been used already.';
$_lang['ErrorBillCreate'] = 'Error creating invoice.';
$_lang['PayCoupon'] = 'Coupon';
$_lang['payFcSistemaDetails'] = 'Please pay any amount via FK System terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['OrdersStatusTestSuspended'] = 'Trial period (suspended)';
$_lang['OrderErrorEmailInBlackList'] = 'Registration for this email address or email domain is prohibited.';
$_lang['OrderErrorMobileInBlackList'] = 'Registration for given cell phone number or cell phone operator is prohibited.';
$_lang['OrderErrorCountryInBlackList'] = 'Registration of the specified region is prohibited.';
$_lang['SettingsNewRePassword'] = 'Confirm new password';
$_lang['SettingsDefaultLanguage'] = 'Default language';
$_lang['SettingsErrorEmailInBlackList'] = 'Use of this email address or email domain is prohibited.';
$_lang['SettingsErrorEmail2InBlackList'] = 'Use of the specified alternative email address or email domain is prohibited.';
$_lang['SettingsErrorMobileInBlackList'] = 'Use of the given cell phone number or cell phone operator is prohibited.';
$_lang['SettingsErrorCountryInBlackList'] = 'Use of the given region is prohibited.';
$_lang['SettingsErrorNewPasswordNoConfirm'] = 'New password not confirmed.';
$_lang['SettingsErrorNewPasswordLength'] = 'Minimum new password length is 6 characters.';
$_lang['SettingsErrorNewPasswordConfirm'] = 'Confirm password and password do not match.';
$_lang['SettingsErrorEmail2Exists'] = 'The given alternative email address is already in use by another user.';
$_lang['SettingsErrorBadJabber'] = 'Invalid Jabber ID specified.';
$_lang['SettingsErrorJabberExists'] = 'Jabber ID is already in use by another customer.';
$_lang['ProfileJabber'] = 'Jabber ID';
$_lang['ButtonFillSettings'] = 'Go to settings';
$_lang['SettingsLogin'] = 'Login to access billing';
$_lang['OrderErrorLoginRegularExp'] = 'Use of the given login is prohibited.';
$_lang['SettingsLoginNeedChange'] = 'Login (please create a new login to access billing)';
$_lang['payYandexPC'] = 'from Yandex.Money account';
$_lang['payYandexAC'] = 'from bank card';
$_lang['TicketsName'] = 'Your name';
$_lang['TicketsEmail'] = 'Your email';
$_lang['TicketsErrorNoName'] = 'Please specify your name.';
$_lang['FeedTitleForm'] = 'Feedback form';
$_lang['OrderShopErrorNetSrokovZakaza'] = 'Available terms of order missing. Choose a different product/service.';
$_lang['ChangeServerForOrderTitle'] = 'Change server for order';
$_lang['ChangeSlotsForOrderTitle'] = 'Change number of slots for order';
$_lang['ChangeTarifForOrderTitle'] = 'Change plan for order';
$_lang['DeleteAlert'] = 'Are you sure you want to delete?';
$_lang['payKassa24kzDetails'] = 'Please pay any amount via Kassa24 terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['ProfileMobileCountryCode'] = 'Cell phone (country code)';
$_lang['ProfileMobileOperatorCode'] = 'Cell phone (operator code)';
$_lang['DomainsMassRenew'] = 'Bulk renew';
$_lang['DomainsMassRenewBillCreated'] = 'Invoice for domain renewal created.';
$_lang['DomainsMassRenewNoRenew'] = 'Domain renewal is impossible.';
$_lang['DomainsMassRenewResult'] = 'Renewal result';
$_lang['DomainsMassRenewGotoBills'] = 'Pay the invoices';
$_lang['UnsubscribeTitle'] = 'Unsubscribe from newsletter';
$_lang['UnsubscribeSuccessFor'] = 'Unsubscribe successful';
$_lang['UnsubscribeErrorNoUser'] = 'User not found.';
$_lang['UnsubscribeErrorNoSubscribe'] = 'You are not subscribed to our newsletter.';
$_lang['payUniTermDetails'] = 'Please pay any amount via one of the terminals and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['HistoryIP'] = 'IP';
$_lang['ErrorSendEmail'] = 'Error sending email. Please try again later.';
$_lang['SettingsSendEmail'] = 'Send emails';
$_lang['SettingsSendEmailOrders'] = 'Information about invoices/orders';
$_lang['SettingsSendEmailTickets'] = 'Information about tickets';
$_lang['SettingsSendEmailOther'] = 'Other information (newsletters)';
$_lang['SettingsSendEmailAll'] = 'Main and alternative email';
$_lang['SettingsSendEmailEmail'] = 'Main email';
$_lang['SettingsSendEmailEmail2'] = 'Alternative email';
$_lang['SettingsSendEmailDisabled'] = 'Don\'t send';
$_lang['OrdersServerInfoPort'] = 'Port';
$_lang['OrdersConnectToServer'] = 'Connect to server';

$_lang['TicketsFileAttachFileBadName'] = 'invalid file name';
$_lang['BillingErrorCheckToken'] = 'Failed to validate token.';
$_lang['OrdersDogovorVLice'] = 'in person';
$_lang['OrdersDogovorBIK'] = 'BIN';
$_lang['OrdersDogovorMFO'] = 'MFO';
$_lang['OrdersDogovorRaschetSchet'] = 'Acct';
$_lang['OrdersDogovorPhone'] = 'Ph.';
$_lang['PayGotoBank'] = 'Go to bank website';
$_lang['PayGotoSite'] = 'Go to website';
$_lang['payMbankuzDetails'] = 'Please pay any amount via MBANK and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['payUpayuzDetails'] = 'Please pay any amount via UPAY and then pay the invoice via internal account.<BR><BR><B>Identifier to use in terminal:</b>';
$_lang['OrderErrorTarifNotFound'] = 'Plan not found.';
$_lang['OrderUseThirdPartyNS'] = 'Use service';
$_lang['ServicesErrorCantGetValue'] = 'Value missing for';
$_lang['ServicesErrorBadValue'] = 'Invalid value for';
$_lang['ServicesErrorCommandNoSupport'] = 'Service-action not supported';
$_lang['ServicesErrorCommandUnknown'] = 'Unknown service-action';
$_lang['DomainsDNSRecordsProxyEnable'] = 'enable http-proxy';
$_lang['PaySummToPay'] = 'Subtotal';
$_lang['BillPayedCredit'] = 'grace period on payment';
$_lang['PayCreditDaysAgree'] = 'Guarantee payment within';
$_lang['PayCreditDaysAgreeConfirm'] = 'Please confirm you will pay invoice within';
$_lang['PayBillPaySuccessCreditFor'] = 'Grace period on invoice successfully applied.  Please note, you should pay the invoice within';
$_lang['SettingsSMSBillCreditRemind'] = 'unpaid invoices with a grace period notifications';
$_lang['ErrorTechWorksEnabled'] = 'We are sorry, scheduled maintenance in progress. Please try refreshing the page later.';
$_lang['OrdersManageLicenseBindsErrorMaxBinds'] = 'Adding new binds is impossible because the license already contains maximum allowed number of binds.';
$_lang['OrdersErrorNoFilesNuFullSrcSupport'] = 'We are sorry, but download of full open code is temporarily disabled. If you need an archive, please contact customer support, having previously updated your license to the most current version.';
$_lang['OrdersBindCountDomain'] = 'more domains';
$_lang['OrdersBindCountIP'] = 'more ips';
$_lang['OrdersDownloadDist'] = 'Download billing v';
$_lang['OrdersDownloadDistForPHP'] = 'for php';
$_lang['OrdersDownloadLicenseFile'] = 'Download license file for v';
$_lang['OrdersUpdateDistVersion'] = 'Update billing to v';
$_lang['OrdersManageLicense'] = 'Manage license';
$_lang['OrdersManageLicenseBinds'] = 'Manage license binds';
$_lang['OrdersManageLicenseBindsActive'] = 'Active binds';
$_lang['OrdersManageLicenseBindsNew'] = 'Add bind';
$_lang['OrdersManageLicenseBindsDomain'] = 'Domain';
$_lang['OrdersManageLicenseBindsIP'] = 'IP-address';
$_lang['OrdersManageLicenseBindsErrorNo'] = 'Not specified';
$_lang['OrdersManageLicenseBindsErrorBad'] = 'Invalid';
$_lang['OrdersManageLicenseBindsErrorNoLeftBinds'] = 'License contains no paid binds.';
$_lang['OrdersManageLicenseBindsErrorNoDeleteMainBind'] = 'Deleting main bind is prohibited.';
$_lang['OrdersManageLicenseBindsUpdateAlert'] = 'Reducing the number of binds is equivalent to adding new ones (the number of available binds will be reduced by 1). Change?';
$_lang['OrdersManageLicenseBindsDeleteAlert'] = 'Are you sure you want to delete the bind?';
$_lang['OrdersDownloadErrorBindTo'] = 'Unable to download license file because license does not contact active binds.';
$_lang['OrderUseRegistrarNS'] = 'Use DNS-servers of registrar';
$_lang['DomainsErrorZoneNoDNSHostingSupportOrCreated'] = 'Creating DNS zone at registrar is either not active for domain zone or DNS zone is already created.';
$_lang['DomainsErrorZoneNoDNSHostingSupportOrNotCreated'] = 'Creating DNS zone at registrar is either not active for domain zone or DNS zone is yet to be created.';
$_lang['BillingMenuBelGIE'] = 'Registration BelGIE';
$_lang['BillingMenuBelGIEAnketa'] = 'Application';
$_lang['BillingMenuBelGIEDomains'] = 'My domains';
$_lang['payHutkiGroshDetails2'] = '<B>Invoice number to use in terminal:</B>';
$_lang['ErrorAPIHcode38'] = 'Renewal is enabled X days before the expiration of your paid period';
$_lang['ProfileFieldsForReqMobileDomain'] = 'To register the specified domain, cell phone number is mandatory!';
$_lang['ChangeTarifRequired'] = 'Your plan is out of date and is no longer supported. Please select a new plan.';
$_lang['OrderRenewRequired'] = 'The paid period for your order has already expired. Please renew your order.';
$_lang['OrderLicenseBindRequired'] = 'Your license does not have any active binds. Please execute a bind.';
$_lang['OrdersManageLicenseBindsWarning'] = 'Warning! Binding license to a domain does not imply correct work of billing on its subdomains.';
$_lang['RenewAdditionalCost'] = 'additional payment';
$_lang['OrdersServerInfoServer'] = 'Server';
$_lang['OrdersErrorBadToken'] = 'Incorrect token.';
$_lang['OrderErrorDomainNoWithoutTarif'] = 'Domain available only with tariff plans.';
$_lang['EmailVerificationPass'] = 'email confirmed';
$_lang['EmailVerificationSuccess'] = 'Registration successfully confirmed';
$_lang['EmailVerificationSent'] = 'Attention! We\'ve emailed you a link to confirm your registration. Please confirm your registration!';

#####################################################################################
##################### v2.1.8
#####################################################################################

$_lang['EmailVerificationInfo'] = 'A confirmation email will be sent to the email address specified at registration. Please provide a real email address!';
$_lang['EmailVerificationSentWarning'] = 'If you have not received a confirmation email, please contact customer support.';

$_lang['FeedTestimonialSuccessAfterCheck'] = 'Feedback has been successfully added and will be published after verification.';
$_lang['TestimonialsAddTestimonial'] = 'Add feedback';

$_lang['OrdersNewTokenTitle'] = 'Create new token';
$_lang['Create'] = 'Create';
$_lang['ErrorNoGroup'] = 'Group not specified.';
$_lang['OrdersGetGroupsError'] = 'Failed to get list of groups.';
$_lang['Group'] = 'Groups';
$_lang['OrderDiscount'] = 'Discount';
$_lang['OrderRecalc'] = 'Recalculate';
$_lang['OrderNacenka'] = 'Markup';
$_lang['OrderNacenkaSmall'] = 'markup';
$_lang['OrdersDeleteBans'] = 'Delete all bans';
$_lang['OrdersDeleteBansSuccess'] = 'All bans successfully deleted.';
$_lang['OrdersDeleteBansError'] = 'Unable to delete bans. Please wait for admin to do it.';
$_lang['OrdersDeletePassword'] = 'Delete password from server';
$_lang['OrdersDeletePasswordSuccess'] = 'Password successfully deleted.';
$_lang['OrdersDeletePasswordError'] = 'Unable to delete password. Please wait for admin to do it.';
$_lang['OrderLoyaltySmall'] = 'loyalty';

$_lang['ShopChangeLicenseKey'] = 'Get license key';
$_lang['ShopChangeLicenseKeyAlert'] = 'Warning! You cannot get a new license key more than once in a month.';
$_lang['OrderLisenseKey'] = 'License key';
$_lang['OrderLisenseGetNewKey'] = 'Get a new license key';

$_lang['FakturaNewNodes'] = 'Change number of nodes for product/service ID';
$_lang['OrdersNodes'] = 'nodes';
$_lang['BillsChangeNodes'] = 'change number of nodes';
$_lang['OrdersChangeNodes'] = 'Change number of nodes';
$_lang['PayForNodesChange'] = 'For changing number of nodes';
$_lang['OrderNodesCount'] = 'Number of nodes';
$_lang['OrderForNode'] = 'per node';
$_lang['OrderErrorNoNodes'] = 'Number of nodes missing.';
$_lang['OrderErrorMinNodes'] = 'Minimum number of nodes cannot be less than';
$_lang['OrderErrorMaxNodes'] = 'Maximum number of nodes cannot be greater than';
$_lang['ChangeNodesTitle'] = 'Changing number of nodes';
$_lang['ChangeNewNodes'] = 'New number of nodes';
$_lang['ChangeNodesChangeSuccess'] = 'Number of nodes successfully changed.';
$_lang['ChangeNodesErrorChange'] = 'Unable to change number of nodes.';
$_lang['ChangeNodesAlert'] = 'Warning! You cannot change number of nodes more than once a month.';

$_lang['SettingsTelegram'] = 'Telegram';
$_lang['SettingsTelegramButtonAdd'] = 'Telegramni ulash';
$_lang['SettingsTelegramAddInfo'] = 'Bizning {bot_name} botimizni aloqalaringiz ro\'yhatiga qo\'shing va /start tugmasini bosing. Ushbu kodni {bot_code} botga jo\'nating va Telegramni ulash tugmasini yana bir bor bosing yoki sahifani yangilang.';
$_lang['SettingsTelegramAdded'] = 'Telegram botimizga muvaffaqiyatli ulandingiz.';
$_lang['SettingsTelegramDeleted'] = 'Telegram akkauntingiz muvaffaqiyatli uzildi.';
$_lang['All'] = 'Barchasi';

$_lang['ServicesErrorServiceNotFound'] = 'Service not found';

#####################################################################################
##################### v2.1.9
#####################################################################################

$_lang['BillingMenuProfiles'] = 'Profiles';
$_lang['ProfilesTitle'] = 'Profiles';
$_lang['ProfilesControl'] = 'Control profile';
$_lang['ProfilesEditProfile'] = 'Edit profile data';
$_lang['ProfilesAdditional'] = 'Additional';

$_lang['TotalRecords'] = 'Total records';
$_lang['RecordsOnPage'] = 'records on page';
$_lang['Search'] = 'Search';

#####################################################################################
##################### v2.2.0
#####################################################################################

$_lang['StarrysUslugiSiteSupport'] = 'Services for site maintenance';
$_lang['StarrysUslugiDomain'] = 'Delegating a domain name';

$_lang['OrdersAccessInfo'] = 'Access data';
$_lang['OrdersAccessLogin'] = 'Login';
$_lang['OrdersAccessPassword'] = 'Password';

#####################################################################################
##################### v2.2.1
#####################################################################################

$_lang['OrderSSLCSRWarning'] = 'If you have not saved the Private Key for the specified CSR, be sure to generate a new CSR code!';

$_lang['OrderErrorAllowOnlyOneOrderByOneUser'] = 'Tariff plan can be ordered only once.';
$_lang['ErrorAPIHcode27'] = 'Tariff plan can be ordered only once';

$_lang['ProfilePersonalNumber'] = 'Personal ID';

$_lang['DomainsReqTransferAuth'] = 'Get transfer code';
$_lang['DomainsReqTransferAuthAlert'] = 'The transfer code will be sent to your email. Are you sure you want to receive a new transfer code?';
$_lang['DomainsUpdateAuthCodeSuccess'] = 'The new transfer code was successfully sent to your email.';
$_lang['DomainsUpdateAuthCodeSendSuccess'] = 'The request for changing the transfer code was successfully sent to the administration and will be executed in the near future.';

$_lang['ErrorWrongCaptcha2'] = 'Confirm that you are not a robot.';

$_lang['SettingsEdocsEmail'] = 'Email for electronic documents';
$_lang['ProfileErrorBadEdocsEmail'] = 'The email for electronic documents is incorrect.';

$_lang['regFields']['regPurpose'] = 'Purpose of registration';

$_lang['ButtonResendEmailCode'] = 'Resend';

#####################################################################################
##################### v2.2.2
#####################################################################################

$_lang['OrdersReset'] = 'Reset';
$_lang['OrdersResetAlert'] = 'Are you want to reset server? This forcefully stops it without giving the server operating system time to gracefully stop. This may lead to data loss!';
$_lang['OrdersResetSuccess'] = 'Reset successfully launched.';
$_lang['OrdersResetError'] = 'Failed to reset. Please wait until it is done by admin.';
$_lang['OrdersErrorCantReset'] = 'You cannot perform a reset for this order.';
$_lang['OrdersServerInfoServerIPv6'] = 'Server IPv6';
$_lang['SokraschenieTB'] = 'TB';
$_lang['TrafficOut'] = 'Traffic';
$_lang['OrdersVncTitle'] = "VNC console";
$_lang['OrdersVncLink'] = "VNC console";
$_lang['OrdersGotoVncError'] = "Failed to get data for the VNC connection.";

$_lang['PayPayer'] = 'Payer';

$_lang['ErrorAPIcode62'] = 'Not specified additional fields';

?>
