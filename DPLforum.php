<?php
/**
 * @author Ross McClure http://www.mediawiki.org/wiki/User:Algorithm
 *
 * DynamicPageList written by: n:en:User:IlyaHaykinson n:en:User:Amgine
 * http://en.wikinews.org/wiki/User:Amgine
 * http://en.wikinews.org/wiki/User:IlyaHaykinson
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and is not a valid access point" );
	die( 1 );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'DPLforum',
	'author' => 'Ross McClure',
	'version' => '3.5.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:DPLforum',
	'descriptionmsg' => 'dplforum-desc',
);

// Define the namespace constants
define( 'NS_FORUM', 110 );
define( 'NS_FORUM_TALK', 111 );

// Hooked functions
$wgHooks['ParserFirstCallInit'][] = 'wfDPLinit';
$wgHooks['CanonicalNamespaces'][] = 'wfDPLforumCanonicalNamespaces';

// Set up i18n and autoload the main class
$dir = dirname( __FILE__ ) . '/';
$wgMessagesDirs['DPLforum'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['DPLforum'] = $dir . 'DPLforum.i18n.php';
$wgExtensionMessagesFiles['DPLforumMagic'] = $dir . 'DPLforum.i18n.magic.php';
$wgExtensionMessagesFiles['DPLforumNamespaces'] = $dir . 'DPLforum.namespaces.php';
$wgAutoloadClasses['DPLForum'] = $dir . 'DPLforum_body.php';

/**
 * @param Parser $parser
 * @return bool
 */
function wfDPLinit( &$parser ) {
	$parser->setHook( 'forum', 'parseForum' );
	$parser->setFunctionHook( 'forumlink', array( new DPLForum(), 'link' ) );
	return true;
}

function parseForum( $input, $argv, $parser ) {
	$f = new DPLForum();
	return $f->parse( $input, $parser );
}

/**
 * Register the canonical names for our namespace and its talkspace.
 *
 * @param array $list array of namespace numbers with corresponding
 *                     canonical names
 * @return bool true
 */
function wfDPLforumCanonicalNamespaces( &$list ) {
	$list[NS_FORUM] = 'Forum';
	$list[NS_FORUM_TALK] = 'Forum_talk';
	return true;
}
