<?php

namespace Rho\Structure;

/*
|-----------------------------------------------------------
| Theme Sidebars
|-----------------------------------------------------------
|
| This file is for registering your theme sidebars,
| Creates widgetized areas, which an administrator
| of the site can customize and assign widgets.
|
*/

use function Rho\config;

/**
 * Registers the widget areas.
 *
 * @return void
 */
function register_widget_areas()
{
    register_sidebar([
        'id' => 'sidebar',
        'name' => __('Sidebar', config('textdomain')),
        'description' => __('Website sidebar', config('textdomain')),
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
}
add_action('widgets_init', 'Rho\Structure\register_widget_areas');