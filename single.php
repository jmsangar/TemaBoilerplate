<<?php get_header( );?>
<body>
	
<h1>Entrada o Artículo:</h1>
<?php the_post(); ?>
<?php the_content(); ?>

<script src="<?php bloginfo(template_url); ?>/js/jquery-1.8.3-min.js"></script>


</body>
</html>