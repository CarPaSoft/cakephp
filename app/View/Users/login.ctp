
<script>
var fondos = new Array();
fondos[0] = "b1.jpg";
fondos[1] = "b2.jpg";
fondos[2] = "b3.jpg";
fondos[3] = "b4.jpg";
fondos[4] = "b5.jpg";
fondos[5] = "b6.jpg";
fondos[6] = "b7.jpg";
fondos[7] = "b8.jpg";
fondos[8] = "b9.jpg";
fondos[9] = "b10.jpg";



	setTimeout(function(){
		var fondo = Math.floor(Math.random() * (fondos.length - 1));
		$('body').css({
			background: "url(/cakephp/img/" + fondos[fondo] + ")",
			width: "100%",
    		height: "100%",
    		position: "fixed",
    		top: "0",
    		left: "0",
    		"z-index": "-5000",
    		height: "100%"
			}); 
		},8000);
	

</script>

<?php
  $bg = array('b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg' ); // array of filenames
  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = $bg[$i]; // set variable equal to which random filename was chosen
?>
<style>
	
	body { 
		background: url(/cakephp/img/<?php echo $selectedBg; ?>) no-repeat center center scroll; 
    	width: 100%;
    	height: 100%;
    	position: fixed;
    	top: 0;
    	left: 0;
    	z-index: -5000;
    	height: 100%;
	}
	
	#prueba
	{
		background-color: rgba(0,0,0,0.1);
		
	}
	
	#prueba.input
	{
		width:60%;
		
		
	}
	
	#content
	{
		background-color: rgba(0,0,0,0.1);
	}
	

</style>

	<div id="prueba" class="login users form">
	<?php //echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User'); ?>
	    <fieldset>
	        <legend><?php echo __('Please enter your e-mail and password'); ?></legend>
	        <?php echo $this->Form->input('username');
	        echo $this->Form->input('password');
	    ?>
	    </fieldset>
	<?php echo $this->Form->end(__('Login')); ?>
	</div>

