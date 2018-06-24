<?php
include_once  'TableBuilder.php';

abstract class MenuBuilder extends TableBuilder{
    protected $areas;
    protected $prefix;

    public function __construct($areas){
        parent::__construct('menu');
        $this->area_mod = $areas;
        $this->prefix = 'mod_'.$areas.'_';
    }

    function get_fields(){
        return $fields = array(
            'label' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
                'unique' => true
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
                'unique' => true
            ),
            'link' => array(
                'type' => 'VARCHAR',
                'constraint' => 50
            ),
            'icon' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ),
            'context' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => 1
            ),
            'parent' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'default' => 'root'
            ),
            'menu_order' => array(
                'type' => 'INT',
                'constraint' => 4,
                'default' => 0
            ),
            'disabled' => array(
                'type' => 'INT',
                'constraint' => 4,
                'default' => 0
            ),
            'module' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true
            )
        );
    }

    // páginas básicas: index e edit
    function get_data(){
        return array(
            array(
                'label'  => 'Início',
                'link'   => $this->areas,
                'name'   => $this->prefix.'index',
                'module' => $this->areas
            ),
            array(
                'label'  => 'Editar',
                'link'   => $this->areas.'/edit',
                'name'   => $this->prefix.'edit',
                'module' => $this->areas
            ),
            array(
                'label'  => 'Como Usar',
                'link'   => $this->areas.'/run/usage',
                'name'   => $this->prefix.'usage',
                'module' => $this->areas
            )
        );
    }

}