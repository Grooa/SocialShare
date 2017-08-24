<?php

namespace Plugin\SocialShare;

class Slot
{
    public static function SocialShare_tiny($params)
    {
        $links = array();
        $page = ipContent()->getCurrentPage();

        if ($page) {
            $links = array(
                'Facebook' => 'http://www.facebook.com/sharer/sharer.php?u=' .
                    urlencode($page->getLink()),
                'LinkedIn' => 'http://www.linkedin.com/shareArticle?' .
                    http_build_query(array(
                        'mini' => 'true',
                        'url' => $page->getLink(),
                        'title' => $page->getMetaTitle(),
                        'summary' => $page->getDescription(),
                        'source' => ipGetOptionLang('Config.websiteTitle')
                    ))
            );
        }

        $params['links'] = $links;

        return ipView('Widget/ShareButtons/skin/thin.php', $params)->render();
    }

}