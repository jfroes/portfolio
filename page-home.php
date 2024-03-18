<?php get_header();
//Template Name: Home
?>


<section class="intro container">
    <div class="intro-info">
        <h1>Oi 👋,<br> Meu nome é <br><span>José Froes <br></span>E eu construo coisas para web</h1>
    </div>
    <div class="intro-foto">
        <img src="<?php the_field('foto_perfil')?>" alt="José Paulo Froes">
    </div>
</section>

<section class="habilidades container" id="habilidades">
    <div class="habilidades-info">
        <h1>Minhas habilidades</h1>
        <p>Tecnologias que tenho trabalhado recentemente</p>
    </div>
    <div class="habilidades-icones">
        <?php 
        $tecnologias = get_field('tecnologias');
        if(isset($tecnologias)){foreach($tecnologias as $tecnologia){ ?>
        <div><img src="<?php echo $tecnologia['logo_tecnologia']; ?>" alt="<?php echo $tecnologia['alt_tecnologia']; ?>"></div>
        <?php } }?>
    </div>
</section>

<?php include(TEMPLATEPATH . "/inc/projetos.php"); ?>

<?php get_footer(); ?>