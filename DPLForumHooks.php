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
}
