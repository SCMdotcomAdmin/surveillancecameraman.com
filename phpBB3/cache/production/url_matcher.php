<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // phpbb_cron_run
        if (0 === strpos($pathinfo, '/cron') && preg_match('#^/cron/(?P<cron_type>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_cron_run']), array (  '_controller' => 'cron.controller:handle',));
        }

        if (0 === strpos($pathinfo, '/feed')) {
            if (0 === strpos($pathinfo, '/feed/forum')) {
                // phpbb_feed_forums
                if ('/feed/forums' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:forums',  '_route' => 'phpbb_feed_forums',);
                }

                // phpbb_feed_forum
                if (preg_match('#^/feed/forum/(?P<forum_id>\\d+)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_forum']), array (  '_controller' => 'phpbb.feed.controller:forum',));
                }

            }

            // phpbb_feed_news
            if ('/feed/news' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:news',  '_route' => 'phpbb_feed_news',);
            }

            if (0 === strpos($pathinfo, '/feed/topics')) {
                // phpbb_feed_topics
                if ('/feed/topics' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics',  '_route' => 'phpbb_feed_topics',);
                }

                // phpbb_feed_topics_active
                if ('/feed/topics_active' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_active',  '_route' => 'phpbb_feed_topics_active',);
                }

                // phpbb_feed_topics_new
                if ('/feed/topics_new' === $pathinfo) {
                    return array (  '_controller' => 'phpbb.feed.controller:topics_new',  '_route' => 'phpbb_feed_topics_new',);
                }

            }

            // phpbb_feed_topic
            if (0 === strpos($pathinfo, '/feed/topic') && preg_match('#^/feed/topic/(?P<topic_id>\\d+)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_topic']), array (  '_controller' => 'phpbb.feed.controller:topic',));
            }

            // phpbb_feed_overall
            if (preg_match('#^/feed/(?P<mode>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_feed_overall']), array (  '_controller' => 'phpbb.feed.controller:overall',));
            }

            // phpbb_feed_index
            if ('/feed' === $pathinfo) {
                return array (  '_controller' => 'phpbb.feed.controller:overall',  '_route' => 'phpbb_feed_index',);
            }

        }

        // phpbb_help_bbcode_controller
        if ('/help/bbcode' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.bbcode:handle',  '_route' => 'phpbb_help_bbcode_controller',);
        }

        // phpbb_help_faq_controller
        if ('/help/faq' === $pathinfo) {
            return array (  '_controller' => 'phpbb.help.controller.faq:handle',  '_route' => 'phpbb_help_faq_controller',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // phpbb_report_pm_controller
            if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_report_pm_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'pm',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_phpbb_report_pm_controller;
                }

                return $ret;
            }
            not_phpbb_report_pm_controller:

            // phpbb_report_post_controller
            if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)/report$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_report_post_controller']), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'post',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_phpbb_report_post_controller;
                }

                return $ret;
            }
            not_phpbb_report_post_controller:

            // pcgf_ajaxregistrationcheck_controller
            if (0 === strpos($pathinfo, '/pcgf/ajaxregistrationcheck') && preg_match('#^/pcgf/ajaxregistrationcheck/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'pcgf_ajaxregistrationcheck_controller']), array (  '_controller' => 'pcgf.ajaxregistrationcheck.controller:check',));
            }

            // phpbb_ads_visual_demo
            if (0 === strpos($pathinfo, '/phpbbads_visual_demo') && preg_match('#^/phpbbads_visual_demo/(?P<action>enable|disable)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_ads_visual_demo']), array (  '_controller' => 'phpbb.ads.visual_demo.controller:handle',));
            }

        }

        // phpbb_ucp_reset_password_controller
        if ('/user/reset_password' === $pathinfo) {
            return array (  '_controller' => 'phpbb.ucp.controller.reset_password:reset',  '_route' => 'phpbb_ucp_reset_password_controller',);
        }

        // phpbb_ucp_forgot_password_controller
        if ('/user/forgot_password' === $pathinfo) {
            return array (  '_controller' => 'phpbb.ucp.controller.reset_password:request',  '_route' => 'phpbb_ucp_forgot_password_controller',);
        }

        if (0 === strpos($pathinfo, '/thankslist')) {
            // gfksx_thanksforposts_thankslist_controller_user
            if (preg_match('#^/thankslist/(?P<mode>\\w+)/(?P<author_id>\\d+)/(?P<give>true|false)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'gfksx_thanksforposts_thankslist_controller_user']), array (  '_controller' => 'gfksx.thanksforposts.controller.thankslist:main',  'top' => 0,  'start' => 0,  'sort_key' => 'a',  'sort_dir' => 'd',  'topic_id' => 0,  'return_chars' => 300,));
            }

            // gfksx_thanksforposts_thankslist_controller
            if ('/thankslist' === $pathinfo) {
                return array (  '_controller' => 'gfksx.thanksforposts.controller.thankslist:main',  'mode' => '',  'author_id' => 1,  'give' => '',  'top' => 0,  'start' => 0,  'sort_key' => 'a',  'sort_dir' => 'd',  'topic_id' => 0,  'return_chars' => 300,  '_route' => 'gfksx_thanksforposts_thankslist_controller',);
            }

        }

        // gfksx_thanksforposts_toplist_controller
        if ('/toplist' === $pathinfo) {
            return array (  '_controller' => 'gfksx.thanksforposts.controller.toplist:main',  'mode' => '',  'start' => 0,  'topic_id' => 0,  'return_chars' => 300,  '_route' => 'gfksx_thanksforposts_toplist_controller',);
        }

        // phpbb_ads_click
        if (0 === strpos($pathinfo, '/adsclick') && preg_match('#^/adsclick/(?P<data>\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_ads_click']), array (  '_controller' => 'phpbb.ads.increment.controller:handle',  'mode' => 'clicks',));
        }

        // phpbb_ads_view
        if (0 === strpos($pathinfo, '/adsview') && preg_match('#^/adsview/(?P<data>(\\d+-)*\\d+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'phpbb_ads_view']), array (  '_controller' => 'phpbb.ads.increment.controller:handle',  'mode' => 'views',));
        }

        // vse_abbc3_bbcode_wizard
        if (0 === strpos($pathinfo, '/wizard/bbcode') && preg_match('#^/wizard/bbcode/(?P<mode>\\w+)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'vse_abbc3_bbcode_wizard']), array (  '_controller' => 'vse.abbc3.wizard:bbcode_wizard',));
        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
