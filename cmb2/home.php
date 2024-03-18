<?php 
add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home(){
    $cmb = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Home',
        'object_types' => ['page'],
        'show_on' => [ 
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb->add_field([
        'name' => 'Foto de Perfil',
        'id' => 'foto_perfil',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
        'preview_size' => 'thumbnail',

    ]);

    $tecnologias = $cmb->add_field([
        'name' => 'Técnologias',
        'id' => 'tecnologias',
        'type' =>'group',
        'repeatable' => true,
        'options' => [
            'group_title' => 'Técnologia {#}',
            'add_button' => 'Adicionar',
            'remove_button' => 'Remover',
            'sortable' => true,
        ],

    ]);
    
    $cmb->add_group_field($tecnologias, [
        'name' => 'Logo Técnologia',
        'id' => 'logo_tecnologia',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
        'preview_size' => 'thumbnail',
    ]);

    $cmb->add_group_field($tecnologias, [
        'name' => 'Alt',
        'id' => 'alt_tecnologia',
        'type' => 'text',
    ]);
}
?>