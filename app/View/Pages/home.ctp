
<?php
  $bg = array('b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg','b8.jpg','b9.jpg','b10.jpg','b11.jpg' ); // array of filenames
  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = $bg[$i]; // set variable equal to which random filename was chosen
?>




<style>
body { 
		background: url(/cakephp/img/<?php echo $selectedBg; ?>) no-repeat center center fixed ; 
    	width: 100%;
    	height: 100%;
    	position: fixed;
    	top: 0;
    	left: 0;
    	z-index: -5000;
	}
	
	#uno 
	{
		background:rgba(56,45,39,1);
		width:95%;
		float:left;
		height: 200px;
	}
	
	#dos 
	{
		background:rgba(56,45,39,1);
		width:95%;
		height: 200px;
		float:left;
	}
	
	#tres 
	{
		background:rgba(56,45,39,1);
		width:95%;
		height: 200px;
		float:left;
	}
	
	#content
	{
		width:100%;
		margin-left:auto;
		margin-right:auto;
		margin-top:28%;
		height:200px;
		padding: 0px !important;
		background: none; 
	    border-width: 0px; 
	}
	
	.ui-state-default
	{
		background:rgba(252,206,12,1) !important;
		border:0px;
		color: rgba (56,45,39,1) !important;
	}
	
	.ui-state-active
	{
		background:rgba(56,45,39,1) !important;
		border:0px;
		color: rgba (252,206,12,1) !important;
	}
	
	.ui-state-active a, .ui-state-active a:link
	{
		color: #FCCE0C !important;
	}
	
		
	#TabLogin
	{
		margin-left:30px;
		-webkit-border-radius: 25px 25px 0px 0px;
		-moz-border-radius: 25px 25px 0px 0px;
		border-radius: 25px 25px 0px 0px;
		padding: 0.3em 2.4em !important;
		
	}
	
	#TabJoin
	{
		-webkit-border-radius: 25px 25px 0px 0px;
		-moz-border-radius: 25px 25px 0px 0px;
		border-radius: 25px 25px 0px 0px;
		padding: 0.3em 2.4em !important;
		
	}
	
	#TabWeAre
	{
		-webkit-border-radius: 25px 25px 0px 0px;
		-moz-border-radius: 25px 25px 0px 0px;
		border-radius: 25px 25px 0px 0px;
		padding: 0.3em 2.4em !important;
		
	}
	
	#aContent
	{
		border:0px;
		background: rgba(0,0,0,0) !important;
	}
	
	input 
	{
	    transition:.1s linear;
	    -webkit-transition:.1s linear;
	    -moz-transition:.1s linear;
	}

	input:focus 
	{
	    outline: none;
	    box-shadow: 0px 0px 7px #fcce0c;
	    border-color: #fcce0c; 
	    content: " ";
	}
	
</style>
<script>
$(function() {
    $( "#content" ).tabs({
      event: "mouseover"
    });
  });

</script>

<ul id="aContent">
    <li id="TabLogin"><a href="#uno" >Login</a></li>
    <li id="TabJoin"><a href="#dos" >¡Únete!</a></li>
    <li id="TabWeAre"><a href="#tres" >Nosotros Somos</a></li>
  </ul>
  


<div id="uno" class="login users form">

	<?php echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User', array('action' => 'login')); ?>
	<fieldset>
		<?php echo $this->Form->input('username',array('id' => 'UserLogin', 
		'value' => 'ejemplo@aniddea.com', 'label' => false, 'onfocus' => 'this.value = ""'));
	        echo $this->Form->input('password',array('id' => 'passwordLogin',
	        'value' => 'password', 'label' => false, 'onfocus' => 'this.value = ""'));
	    ?>
	</fieldset>
	<?php echo $this->Form->end(__('Login')); ?>
	
</div>

<div id="dos" class="add users form">

	<?php echo $this->Form->create('User',array('action' => 'add')); ?>
	<fieldset>
		<?php
		echo $this->Form->input('username', array('id' => 'AddUser',
		'value' => 'ejemplo@aniddea.com', 'label' => false, 'onfocus' => 'this.value = ""'));
		
		echo $this->Form->input('password',array('id' => 'passwordLogin',
	    'value' => 'password', 'label' => false, 'onfocus' => 'this.value = ""'));
	?>
	</fieldset>
	<?php echo $this->Form->end(__('¡Únete!')); ?>
<!--  
	<?php //echo $this->Session->flash('auth'); ?>
		<?php echo $this->Form->create('User', array('action' => 'login')); ?>
		    <fieldset>
		        <?php echo $this->Form->input('username',array('id' => 'UserLogin','value' => 'ejemplo@aniddea.com', 'label' => false));
		        echo $this->Form->input('password',array('id' => 'passwordLogin','value' => 'password', 'label' => false));
		    ?>
		    </fieldset>
		<?php echo $this->Form->end(__('Login')); ?>
-->

</div>

<div id="tres">ejiow</div>
<?php
	
?>

