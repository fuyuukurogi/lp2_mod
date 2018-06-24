<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Areas extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('AreasModel', 'model');
        $this->menu_itens = $this->model->get_menu_itens();
    }

    /**
     * Página inicial do módulo; exibe sua funcionalidade principal. Além desta, um
     * módulo pode ter outras páginas, de acordo com sua finalidade. O importante é
     * lembrar que um módulo deve estar focado em fazer, bem feito e de forma flexível,
     * apenas uma tarefa.
     */
    public function index(){
        $html = '<h1><center><strong>Sejam Bem vindos!</strong></center></h1><br /><br />
        <p>Módulo criado para a avaliação final de Linguagem de Programação II proposto pelo Professor Prado.</p>';
        $this->show($html);
    }

    /**
     * Página de configuração do conteúdo exibido nas páginas de funcionalidades do módulo
     */
    public function edit(){
        $html = 'module pages content editor';
        $this->show($html);
    }


}