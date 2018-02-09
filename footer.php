<?php

namespace Rho;

/*
|------------------------------------------------------------------
| Footer Controller
|------------------------------------------------------------------
|
| Controller for outputting layout's closing markup. Template
| rendered here should include `wp_footer()` function call.
|
*/

use function Rho\template;

/**
 * Renders layout's footer.
 *
 * @uses resources/templates/layout/footer.tpl.php
 */
template('layout/footer');