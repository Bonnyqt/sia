<?php
if ( ! function_exists('esc')) {
    function esc($string) {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
}