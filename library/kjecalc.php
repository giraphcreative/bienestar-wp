<?php


function kjecalc_shortcode( $atts ) {
    $att = shortcode_atts(array(
        'type' => 'auto'
    ), $atts);

    $themepath = get_bloginfo('template_url');

    if ( $att['type'] == 'investcompare' ) {

    	return '<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJE.css">
<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.css">
<div id="KJEAllContent"></div>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJE.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/InvestCompare2.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/InvestCompare2Params.js"></script>';

    } else if ( $att['type'] == 'investment' ) {

    	return '<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJE.css">
<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.css">
<div id="KJEAllContent"></div>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJE.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/InvestmentVariables.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/InvestmentVariablesParams.js"></script>';

    } else if ( $att['type'] == 'retirement' ) {

    	return '<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJE.css">
<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.css">
<div id="KJEAllContent"></div>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJE.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/RetireShort.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/RetireShortParams.js"></script>';

    } else if ( $att['type'] == 'pension' ) {

    	return '<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJE.css">
<link type="text/css" rel="StyleSheet" href="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.css">
<div id="KJEAllContent"></div>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJE.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/KJESiteSpecific.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/PensionvsLumpSum.js"></script>
<script type="text/javascript" src="' . $themepath . '/js/lib/kjecalc/PensionvsLumpSumParams.js"></script>';

    }
}
add_shortcode('kjecalc', 'kjecalc_shortcode');


