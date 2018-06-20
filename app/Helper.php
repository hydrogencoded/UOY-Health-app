<?php
/**
 * Created by PhpStorm.
 * User: electrode
 * Date: 6/20/18
 * Time: 3:22 PM
 */

/**
 * Get month name using its number
 *
 * @param $month_number
 * @return false|string
 */
function get_month($month_number){
  return  date('F', mktime(0, 0, 0, $month_number, 10));
}

/**
 * Get total Number of visits using month number
 * @param $month_number
 * @return false|string
 */
function get_visits($month_number){
/**
 * check the
 */
return 1;
}