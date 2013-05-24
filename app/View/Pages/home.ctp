
<?php
  $bg = array('b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg','b8.jpg','b9.jpg','b10.jpg','b11.jpg' ); // array of filenames
  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = $bg[$i]; // set variable equal to which random filename was chosen
?>




<style>
body { 
		background: url(/cakephp/img/<?php echo $selectedBg; ?>) no-repeat center center fixed; 
    	width: 100%;
    	height: 100%;
    	position: fixed;
    	top: 0;
    	left: 0;
    	z-index: -5000;
	}
	
	#uno {
		background:rgba(200,213,22,0.2);
		width:90%;
		float:left;
	}
	
	
	#content
	{
		background-color: rgba(255,207,0,0.6);
		width:90%;
		margin-left:auto;
		margin-right:auto;
		margin-top:28%;
		height:200px;
	
	}
	
	#aUno
	{
	
		margin-right:10px;

	
	}
	
	.ui-state-active
	{
		background:rgba(200,213,22,0.2) !important;
		border:0px;
	}
	

	#aDos
	{

<<<<<<< HEAD
		-webkit-border-radius: 50px 50px 0px 0px;
		-moz-border-radius: 50px 50px 0px 0px;
		border-radius: 50px 50px 0px 0px;
=======

>>>>>>> carlos

	
	}
	#aTres
	{
	

<<<<<<< HEAD
		-webkit-border-radius: 50px 50px 0px 0px;
		-moz-border-radius: 50px 50px 0px 0px;
		border-radius: 50px 50px 0px 0px;
=======
>>>>>>> carlos
	

	
	}
	
	#aContent
	{
<<<<<<< HEAD
		-webkit-border-radius: 50px 50px 0px 0px;
		-moz-border-radius: 50px 50px 0px 0px;
		border-radius: 50px 50px 0px 0px;
		background: rgba(0,0,0,0) !important;
		border:0px;
=======

background: rgba(84,88,91,1) !important;
border:0px;
>>>>>>> carlos

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
    <li id="aUno"><a href="#uno" >Login</a></li>
    <li id="aDos"><a href="#dos" >Proin dolor</a></li>
    <li id="aTres"><a href="#tres" >Aenean lacinia</a></li>
  </ul>
<div id="uno" class="login users form">

	<?php //echo $this->Session->flash('auth'); ?>
	<?php echo $this->Form->create('User', array('action' => 'login')); ?>
	    <fieldset>
	        <?php echo $this->Form->input('username',array('value' => 'c@c.es','onfocus' => 'this.value = ""'));
	        echo $this->Form->input('password');
	    ?>
	    </fieldset>
	<?php echo $this->Form->end(__('Login')); ?>
</div>

<div id="dos">yeah</div>
<div id="tres">ejiow</div>
<?php
	
?>

