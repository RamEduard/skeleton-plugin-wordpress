<?php

namespace Shortcode;

/**
 * Shortcode Interface
 * 
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class ShortcodeBase
{
    
    /**
     * Do Shortcode with atts
     * 
     * @param array $atts
     * 
     * @return string
     */
    static function doShortcode($atts = null)
    {
        return 'doShortcode';
    }
    
    /**
     * Do Shortcode with content shortcode
     * 
     * @param array $atts
     * @param string $content
     * 
     * @return string
     */
    static function doShortcodeContent($atts = null, $content = null)
    {
        return 'doShortcodeContent';
    }
    
    /**
     * Do Shortcode switching the tag name
     * 
     * @param array $atts
     * @param string $content
     * @param string $tag
     * 
     * @return string
     */
    static function doShortcodeTag($atts = null, $content = null, $tag = null)
    {
        return 'doShortcodeTag';
    }
    
}
