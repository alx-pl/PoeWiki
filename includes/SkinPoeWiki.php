<?php
/**
 * SkinTemplate class for the PoeWiki skin
 *
 * @ingroup Skins
 */
class SkinPoeWiki extends SkinTemplate {
	public $skinname = 'poewiki',
		$stylename = 'PoeWiki',
		$template = 'PoeWikiTemplate';

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		$out->addMeta( 'viewport',
			'width=device-width, initial-scale=1.0, ' .
			'user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0'
		);

		$out->addModuleStyles( [
			'skins.poewiki'
		] );
		$out->addModules( [
			'skins.poewiki.js'
		] );
	}

	/**
	 * @param OutputPage $out
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}

//	public static function onArticleEditUpdatesDeleteFromRecentchanges( Wikipage &$wikiPage ) { 
//		return false;
//	}
}
