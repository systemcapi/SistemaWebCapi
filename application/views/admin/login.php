<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">	
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<title><?=$title?></title>
<meta name="keywords" content=""/>
<meta name="description" content=""/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/template/style.css"/>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
$('#username').focus();	
$('#username').blur(function(){		 
	 var user = $(this).val();
	    
	  if(user==''){
	    	
	    $('#msg_username').html('El Usuario es requerido').css('color','red');
	    	
	    }else{
		
		$.post('login/valid_login_ajax', {username : user}, function(data){
            					
				 if(data!=1){
				 
	                    $('#msg_username').html('El Usuario es Incorrecto').css('color','red');
	                      }else {	                  
	                      $('#msg_username').html('El Usuario es correcto').css('color','green');	                      	
	                      	 
	                      }     				 
				 });             		                              	        	  	 
	    				
	/*	var info = { username: user }; 
		
            $.ajax({            	
            	url: 'login/valid_login_ajax',  
            	type: 'POST',          	
            	data: info,
            	success: function(msg){  // alert(msg);		
	                      if(msg!=1){
	                      	
	                      	$('#msg_username').html('El Usuario es Incorrecto').css('color','red');
	                      }else {	                  
	                      $('#msg_username').html('El Usuario es correcto').css('color','green');	                      	
	                      	 
	                      }     	         		
            	}
            	          	
            });	 */	 
			
	    } //fin del else

	  });	  
});	

$(document).ready(function(){
$('#password').blur(function(){		 
	 var user = $(this).val();
	    
	  if(user==''){
	    	
	    $('#msg_password').html('La Contraseña es requerida').css('color','red');
	    	
	    }else{
	    				
		   $('#msg_password').empty();
	    }

	});	  
});	
</script>
</head>
<body>
	<div id="container">
<div id="header">
	<h1><?=$title?></h1>
</div><!-- End Header -->
<div id="content">
	
<?php $attributes = array('id' => 'form_login'); 

    $username = array('name'=>'username', 'id'=>'username','class'=>'input','placeholder'=>'Usuario',
                      'value'=>set_value('username'), 'size'=> '35',);
    $password = array('name'=>'password', 'id'=>'password','class'=>'input','placeholder'=>'Contraseña',
                      'type'=>'password', 'size'=> '35',);

if(validation_errors()):	   
 ?> 
<div id="error"><?=validation_errors();?></div>
<?php endif ?>

<?=form_open('login', $attributes);?>	
<div class="padding"><?=form_label('Usuario');?></div>
<div id='msg_username' class="padding"></div> 
<div class="padding"><?=form_input($username);?></div>
<div class="padding"><?=form_label('Contraseña')?></div>
<div id='msg_password' class="padding"></div> 
<div class="padding"><?=form_input($password)?></div>

<?=form_submit(array('name' => 'submit','class'=>'submit',
                                               'value' => 'Acceder'))?>
<?=form_close();?>

</div><!-- End Content -->
<div id="footer">
	<p>Copyright &copy; 2014 SISTEMA WEB CAPI</p>
</div><!-- End Footer -->
</div><!-- End Container -->
</body>
</html>