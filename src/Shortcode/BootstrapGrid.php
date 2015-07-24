<?php

namespace Shortcode;

/**
 * Grid Shortcode for html grid
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
class BootstrapGrid extends ShortcodeBase
{

    /**
     * {@inheritDoc}
     */
    static function doShortcodeContent($atts = null, $content = null)
    {
        $atts = shortcode_atts(array(
            'class' => 'row col-lg-12',
            'id'    => '',
        ), $atts);        

        // Return div grid
        $content = '<div class="' . $atts['class'] . '" id="'. $atts['id'] . '">' . $content . '</div>';
        return do_shortcode( $content );
    }

}
