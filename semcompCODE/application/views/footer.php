</div><!-- contentInt -->
</div> <!-- content -->
<div id="footer">

	<div id="footerInt">
		
		<div id="leftFooter">
			
			<div id="redesFooter">
				<a href="#"><div id="fb_footer"></div></a>
				<a href="#"><div id="twitter_footer"></div></a>
			</div>

			<a href="http://infojr.com.br" target="_blank" id="develop"><img src="<?php echo base_url();?>images/marca_infojr.png"/></a>

			<div id="mapa">
				<a href="#">Home |</a>
				<a href="#"> Semcomp 2012 |</a>
				<a href="#"> Palestrantes |</a>
				<a href="#"> Programação |</a>
				<a href="#"> Notícias |</a>
				<a href="#"> Contato |</a>
				<a href="#"> Inscreva-se</a>
			</div>

		</div>
		<div id="likebox">
			<a href="http://facebook.com/semanacomp" target="_blank"><img src="<?php echo base_url();?>/images/curta.png" style="margin-left: 3px;"></a>
			<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fsemanacomp&amp;width=292&amp;height=210&amp;colorscheme=dark&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;appId=175631075880332" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:210px;" allowTransparency="true"></iframe>
		</div>
	</div>
</div>

</div> <!-- all -->

<!--
	<div id="bio1">
		<h1>Fábio Akita</h1>
		<p>Akita é desenvolvedor e disseminador de conhecimento na comunidade
			Rails BR, um dos desenvolvedores/empreendedores mais famosos da
			área de computação do Brasil</p>
	</div>

	<div id="bio2">
		<h1>Paulo Cunha</h1>
		<p>Paulo Cunha é o atual presidente da Sociedade Brasileira de Computação</p>
	</div>

	<div id="bio3">
		<h1>Sérgio Cavalcante</h1>
		<p>Sérgio Cavalcante é o CEO do C.E.S.A.R (Centro de Estudos e Sistemas Avançados do Recife)</p>
		<p>Trabalha há mais de 20 anos com sistemas distribuídos</p>
	</div>

	<div id="bio4">
		<h1>Alexandre Gomes</h1>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X e no MIT (Massachusets)</p>
	</div>

	<div id="bio5">
		<h1>Antônio Terceiro</h1>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X e no MIT (Massachusets)</p>
	</div>
	<div id="bio6">
		<h1>Roberto Pinho</h1>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X </p>
		<p>● Desenvolvedor no Centro X e no MIT (Massachusets)</p>
	</div>

-->
<script>
    $.getJSON("<?php echo base_url();?>/js/carousel.php", function (data) {
        $(document).ready(function () {
            $("#basic_slideshow").agile_carousel({
                carousel_data: data,
                carousel_outer_height: 275,
                carousel_height: 275,
                slide_height: 275,
                carousel_outer_width: 886,
                slide_width: 886,
                transition_type: "slide",
                timer: 4000,
                continuous_scrolling: true,
                control_set_1: "numbered_buttons",
                no_control_set: "hover_previous_button,hover_next_button"
            });
        });
    });
</script>
<script type='text/javascript'>
     jQuery(function($){
        $("#tweet").tweet({
          avatar_size: 32,
          count: 5,
          username: "infojrufba",
          template: "{text} » {retweet_action}"
        });
      }).bind("loaded", function(){
        $(this).find("a.tweet_action").click(function(ev) {
          window.open(this.href, "Retweet",
                      'menubar=0,resizable=0,width=550,height=420,top=200,left=400');
          ev.preventDefault();
        });
      });
    	
</script>
</body>
</html>