<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('asset_url()'))
{
function asset_url()
{
  return str_replace("index.php/","",base_url()).'assets/';
}
}
