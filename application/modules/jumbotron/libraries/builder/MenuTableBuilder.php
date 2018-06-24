<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/builder/MenuBuilder.php';


class MenuTableBuilder extends MenuBuilder{

    function __construct(){
        parent::__construct('jumbotron');
    }

    function get_data(){
        // páginas básicas: index e edit
        $base = parent::get_data();

        // páginas extras: funcionalidades adicionais do módulo
        $data = array(
            array(
                'label'  => 'Exemplo',
                'link'   => $this->areas.'/sample',
                'name'   => $this->prefix.'sample',
                'module' => $this->areas
            )
        );

        return array_merge($base, $data);
    }
}
