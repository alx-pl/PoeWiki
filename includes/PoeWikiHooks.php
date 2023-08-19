<?php
/**
 * SkinTemplate class for the PoeWiki skin
 *
 * @ingroup Skins
 */
class PoeWikiHooks {
	// Add a link to the page "Test Page" with the text "Test", allowing modification by wiki administrators
// test-desc and test-page are i18n messages with the text of the link and the name of the page, respectively
	public static function onSkinAddFooterLinks( Skin $skin, string $key, array &$footerlinks  ) {
    		if ( $key === 'places' ) {
			$footerlinks['pageend'] = $skin->msg( 'pageend')->text();
			$footerlinks['jumpup'] = Html::element( 'a',
          			[
                			'href' => '',
		                	'rel' => 'noreferrer noopener' // not required, but recommended for security reasons
            			],
        			$skin->msg( 'jumpuptext' )->text()
			);
    		}
	}
}
