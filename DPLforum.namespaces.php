<?php
/**
 * Translations of the Forum namespace.
 *
 * @file
 */

$namespaceNames = [];

$namespaceAliases = [];

// For wikis where the DPLforum extension is not installed.
if ( !defined( 'NS_FORUM' ) ) {
	define( 'NS_FORUM', 110 );
}

if ( !defined( 'NS_FORUM_TALK' ) ) {
	define( 'NS_FORUM_TALK', 111 );
}

/** English */
$namespaceNames['en'] = [
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Forum_talk',
];

/** Spanish (español) */
$namespaceNames['es'] = [
	NS_FORUM => 'Foro',
	NS_FORUM_TALK => 'Foro_Discusión',
];

/** Persian (فارسی) */
$namespaceNames['fa'] = [
	NS_FORUM => 'فوروم',
	NS_FORUM_TALK => 'بحث_فوروم',
];

/** Finnish (Suomi) */
$namespaceNames['fi'] = [
	NS_FORUM => 'Foorumi',
	NS_FORUM_TALK => 'Keskustelu_foorumista',
];

/** Japanese (日本語) */
$namespaceNames['ja'] = [
	NS_FORUM => 'フォーラム',
	NS_FORUM_TALK => 'フォーラム・トーク',
];

/** Korean (한국어) */
$namespaceNames['ko'] = [
	NS_FORUM => '포럼',
	NS_FORUM_TALK => '포럼토론',
];

/** Norwegian (norsk) */
$namespaceNames['no'] = [
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Forumdiskusjon',
];

/** Polish (polski) */
$namespaceNames['pl'] = [
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Dyskusja_forum',
];

/** Russian (русский) */
$namespaceNames['ru'] = [
	NS_FORUM => 'Форум',
	NS_FORUM_TALK => 'Обсуждение_форума',
];

/** Serbian Cyrillic (српски (ћирилица)) */
$namespaceNames['sr-ec'] = [
	NS_FORUM => 'Форум',
	NS_FORUM_TALK => 'Разговор_о_форуму',
];

/** Serbian Latin (srpski (latinica)) */
$namespaceNames['sr-el'] = [
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Razgovor_o_forumu',
];

/** Vietnamese (Tiếng Việt) */
$namespaceNames['vi'] = [
	NS_FORUM => 'Diễn_đàn',
	NS_FORUM_TALK => 'Thảo_luận_Diễn_đàn',
];

/** Chinese (中文) */
$namespaceNames['zh'] = [
	NS_FORUM => 'Forum',
	NS_FORUM_TALK => 'Forum_talk',
];

/** Simplified Chinese (中文（简体）) */
$namespaceNames['zh-hans'] = [
	NS_FORUM => '论坛',
	NS_FORUM_TALK => '论坛讨论',
];

$namespaceAliases['zh-hans'] = [
	'论坛' => NS_FORUM,
	'论坛讨论' => NS_FORUM_TALK,
];

/** Traditional Chinese (中文（繁體）) */
$namespaceNames['zh-hant'] = [
	NS_FORUM => '論壇',
	NS_FORUM_TALK => '論壇討論',
];

$namespaceAliases['zh-hant'] = [
	'論壇' => NS_FORUM,
	'論壇討論' => NS_FORUM_TALK,
];
