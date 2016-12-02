<?php

class DPLForumHooks {
	/**
	 * Register the <forum> tag with the parser.
	 *
	 * @param Parser $parser
	 * @return bool
	 */
	public static function onParserFirstCallInit( &$parser ) {
		$parser->setHook( 'forum', array( __CLASS__, 'parseForum' ) );
		$parser->setFunctionHook( 'forumlink', array( new DPLForum(), 'link' ) );
		return true;
	}

	/**
	 * Callback for onParserFirstCallInit() above.
	 */
	public static function parseForum( $input, $argv, $parser ) {
		$f = new DPLForum();
		return $f->parse( $input, $parser );
	}

	/**
	 * Register the canonical names for our namespace and its talkspace.
	 *
	 * @param array $list Array of namespace numbers with corresponding
	 *                     canonical names
	 * @return bool true
	 */
	public static function onCanonicalNamespaces( &$list ) {
		$list[NS_FORUM] = 'Forum';
		$list[NS_FORUM_TALK] = 'Forum_talk';
		return true;
	}

}