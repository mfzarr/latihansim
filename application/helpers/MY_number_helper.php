<?php defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('format_number'))
{
    /**
     * Format number with decimal and thousand separators.
     *
     * @param   float    $number      The number to format
     * @param   int      $decimals    Number of decimal places
     * @param   string   $decimal_sep Decimal separator
     * @param   string   $thousands_sep Thousands separator
     * @return  string   Formatted number
     */
    function format_number($number, $decimals = 0, $decimal_sep = '.', $thousands_sep = ',')
    {
        return number_format($number, $decimals, $decimal_sep, $thousands_sep);
    }
}
