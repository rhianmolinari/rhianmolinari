<?php
/**
 * @package WordPress
 * @subpackage Rhian_Molinari
 * @since Rhian Molinari 1.0
 */
get_header(); ?>

<section class="featured">
	<div class="container">
		<div class="row">
			<?php query_posts(array(
				'post_type' => 'slide',
				'post_status' => 'publish',
				'posts_per_page' => '1',
				'orderby'=>'date',
				'order'=>'DESC')
			); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php $projeto = rwmb_meta( 'rw_slide_project' ); ?>
			<div class="flexslider flex-loading span8">
				<ul class="slides">
					<?php $pluploads = rwmb_meta( 'rw_project_plupload', 'type=plupload_image', $projeto );
						if ( !empty($pluploads) ) :
							foreach ( $pluploads as $plupload ) {
							echo "<li><img src='".$plupload['full_url']."' alt='".$plupload['title']."'></li>";
						}
					?>
					<?php endif; ?>
				</ul>
			</div>
			<div class="span4">
				<hgroup>
					<h1><?php echo get_the_title($projeto); ?></h1>
					<?php if(has_excerpt($projeto)): ?>
						<h3><?php echo get_post($projeto)->post_excerpt; ?></h3>
					<?php endif; ?>
				</hgroup>
				<button onclick="location.href='<?php echo get_permalink($projeto); ?>'">Ler Mais</button>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<section class="maincontent">
	<div class="container">
		<hgroup>
			<h2>Projetos</h2>
			<h3>Veja meus &uacute;ltimos projetos realizados.</h3>
		</hgroup>
		<ul class="row project">
			<?php query_posts(array(
				'post_type' => 'projeto',
				'post_status' => 'publish',
				'posts_per_page' => '-1',
				'orderby'=>'date',
				'order'=>'DESC')
			); if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php if ( '' != get_the_post_thumbnail() ) {
					echo '<li class="span3"><a href="'. get_permalink() .'">';
					the_post_thumbnail( 'project' );
					echo '<div class="project_info"><h4>'. get_the_title() .'</h4><span>+</span></div></a></li>';
				} ?>
			<?php endwhile; ?>
		</ul>
		<hr>
		<hgroup>
			<h2>O processo</h2>
			<h3>Est&aacute; &eacute; uma estrutura gen&eacute;rica de desenvolvimento web e mobile.</h3>
		</hgroup>
		<ul class="row process">
			<li class="span3">
				<h4>Estrat&eacute;gia</h4>
				<p>&Eacute; aqui que tudo come&ccedil;a, a fase de compreens&atilde;o do projeto.</p>
				<ul class="trace">
					<li>Objetivo do projeto</li>
					<li>Necessidades e desejos dos usu&aacute;rios</li>
					<li>Pesquisa e an&aacute;lise de concorrente</li>
					<li>Tecnologias</li>
				</ul>
			</li>
			<li class="span3">
				<h4>Escopo</h4>
				<p>Agora &eacute; hora de fazer a conceitua&ccedil;&atilde;o do projeto, filtrar os dados levantados e gerar os escopos.</p>
				<ul class="trace">
					<li>Funcionalidades</li>
					<li>Arquitetura de informa&ccedil;&atilde;o</li>
					<li>Wireframes</li>
					<li>Estrutura de navega&ccedil;&atilde;o</li>
				</ul>
			</li>
			<li class="span3">
				<h4>Design</h4>
				<p>A fase de contru&ccedil;&atilde;o inicia-se nesta etapa, aqui come&ccedil;a a abordar dos aspectos da apar&ecirc;ncia e est&iacute;mulos sensoriais.</p>
				<ul class="trace">
					<li>User experience (UX)</li>
					<li>User interface (UI)</li>
				</ul>
			</li>
			<li class="span3">
				<h4>Desenvolvimento</h4>
				<p>Neste momento iniciamos a programa&ccedil;&atilde;o, valida&ccedil;&atilde;o e testes.</p>
				<ul class="trace">
					<li>Programa&ccedil;&atilde;o front-end</li>
					<li>Programa&ccedil;&atilde;o back-end</li>
					<li>Otimiza&ccedil;&atilde;o (SEO)</li>
				</ul>
			</li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>