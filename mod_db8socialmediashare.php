<?php

/**
 * @package	mod_db8socialmediashare
 * @author	Peter Martin, www.db8.nl
 * @copyright	Copyright (C) 2015 Peter Martin. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */
defined('_JEXEC') or die;

$url		= JURI::current();
$document	= JFactory::getDocument();
$title		= str_replace('&', 'and', $document->getTitle("title"));

$loadCSS	= $params->get('LoadCSS');

$socialmedia = array(
    array(
        "medium" => "twitter",
        "order" => $params->get('twitter'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_TWITTER'), $params->get('twitterlinktext'),
        "htmlclass" => $params->get('htmlclasstwitter','twitterlink'),
        "href" => "http://twitter.com/home?status=" . $title . " " . $url
    ),
    array(
        "medium" => "facebook",
        "order" => $params->get('facebook'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_FACEBOOK'),
        "htmlclass" => $params->get('htmlclassfacebook','facebooklink'),
        "href" => "http://facebook.com/sharer.php?u=" . $url . "&amp;t=" . $title
    ),
    array(
        "medium" => "linkedin",
        "order" => $params->get('linkedin'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_LINKEDIN'),
        "htmlclass" => $params->get('htmlclasslinkedin','linkedinlink'),
        "href" => "http://www.linkedin.com/shareArticle?mini=true&url=" . $url . "&title=" . $title . "&ro=false"
    ),
    array(
        "medium" => "google-plus",
        "order" => $params->get('googleplus'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_GOOGLEPLUS'),
        "htmlclass" => $params->get('htmlclassgoogleplus','googlepluslink'),
        "href" => "https://plus.google.com/share?url=" . $url
    ),
    array(
        "medium" => "pinterest",
        "order" => $params->get('pinterest'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_PINTEREST'),
        "htmlclass" => $params->get('htmlclasspinterest','pinterestlink'),
        "href" => "http://pinterest.com/pin/create/button/?url=" . $url . "&amp;media=" . $params->get('logo-url-pinterest') . "&amp;description=" . $title
    ),
    array(
        "medium" => "envelope",
        "order" => $params->get('email'),
        "mouseover" => JText::_('MOD_DB8SOCIALMEDIASHARE_EMAIL'),
        "htmlclass" => $params->get('htmlclassemail','emaillink'),
        "href" => "mailto:?subject=" . $title . "&body=" . $url
    )
);

require JModuleHelper::getLayoutPath('mod_db8socialmediashare', $params->get('layout', 'default'));