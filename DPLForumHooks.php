<?php

class DPLForumHooks {
	/**
	 * Register the <forum> tag with the parser.
	 *
	 * @param Parser $parser
	 */
	public static function onParserFirstCallInit( &$parser ) {
		$parser->setHook( 'forum', [ __CLASS__, 'parseForum' ] );
		$parser->setFunctionHook( 'forumlink', [ new DPLForum(), 'link' ] );
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
	 */
	public static function onCanonicalNamespaces( &$list ) {
		$list[NS_FORUM] = 'Forum';
		$list[NS_FORUM_TALK] = 'Forum_talk';
	}
}
