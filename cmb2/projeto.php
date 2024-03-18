<?php 
add_action('cmb2_admin_init', 'cmb2_fields_projeto');

function cmb2_fields_projeto(){
    $cmb = new_cmb2_box([
        'id' => 'projeto_box',
        'title' => 'Projeto',
        'object_types' => ['projetos'],
    ]);

    $cmb->add_field([
        'name' => 'Capa Projeto',
        'id' => 'capa_projeto',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
        'preview_size' => 'thumbnail',
    ]);

    $cmb->add_field([
        'name' => 'Descrição do Projeto',
        'id' => 'projeto_descricao',
        'type' => 'textarea_small',
    ]);

    $cmb->add_field([
        'name' => 'Técnologias utilizadas no projeto',
        'id' => 'projeto_tecnologias',
        'type' => 'text',
    ]);

    $cmb->add_field([
        'name' => 'Live Link do Projeto',
        'id' => 'projeto_link',
        'type' => 'text',
    ]);


    $cmb->add_field([
        'name' => 'Link Repositório Github',
        'id' => 'projeto_github',
        'type' => 'text',
    ]);

}
?>