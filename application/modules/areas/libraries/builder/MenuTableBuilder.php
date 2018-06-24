<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/MenuBuilder.php';


class MenuTableBuilder extends MenuBuilder{

    function __construct(){
        parent::__construct('area_mod');
    }

    function get_data(){
        // páginas básicas: index e edit
        $base = parent::get_data();

        // páginas extras: funcionalidades adicionais do módulo
        $data = array(
            array(
                'label'  => 'especialidade',
                'link'   => $this->area_mod.'/especialidade',
                'name'   => $this->prefix.'especialidade',
                'module' => $this->area_mod
            ),
            array(
                'label'  =>'page2',
                'link'   => $this->area_mod.'/atuacao',
                'name'   => $this->prefix.'atuacao',
                'module' => $this->area_mod
            )
        );

        return array_merge($base, $data);
    }
}
