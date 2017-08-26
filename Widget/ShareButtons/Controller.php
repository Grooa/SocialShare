<?php

namespace Plugin\SocialShare\Widget\ShareButtons;

class Controller extends \Ip\WidgetController
{

	public function getTitle() {
		return "Share Buttons";
	}


	public function generateHtml($revisionId, $widgetId, $data, $skin) {

		$links = array();
		$page = ipContent()->getCurrentPage();
		$pageLink = !empty($page) ? $page->getLink() : '';

		if ($page) {
			$links = array(
				'Facebook' => 'http://www.facebook.com/sharer/sharer.php?u=' .
					urlencode($pageLink),
				'LinkedIn' => 'http://www.linkedin.com/shareArticle?' .
					http_build_query(array(
						'mini' => 'true',
						'url' => $pageLink,
						'title' => $page->getMetaTitle(),
						'summary' => $page->getDescription(),
						'source' => ipGetOptionLang('Config.websiteTitle')
					)),
                'Twitter' => 'https://twitter.com/intent/tweet'
			);
		}

		return parent::generateHtml(
			$revisionId,
			$widgetId,
			array('links' => $links, 'assets' => $this->widgetAssetsDir),
			$skin
		);
	}
}
