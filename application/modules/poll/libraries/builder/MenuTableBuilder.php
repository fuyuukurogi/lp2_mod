<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/MenuBuilder.php';

class MenuTableBuilder extends MenuBuilder{

    function __construct(){
        parent::__construct('poll');
    }

   function get_data(){
      return array(
        array(
            'label' => 'Vote',
            'link' => $this->area_mod,
            'name' => 'votar',
            'module' => $this->area_mod
        ),
        array(
            'label' => 'Preview',
            'link' => $this->area_mod.'/result',
            'name' => 'resultado',
            'module' => $this->area_mod
        )
      );
   }
}
