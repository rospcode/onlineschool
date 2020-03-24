<?php 
include 'core/init.php';

if(Input::exists()){
	if(Token::check(Input::get('token'))){
		$val = new Validation();
	$validate = $val->check($_POST,array(
     'username' => array(
           'required' => true 
     	),
     'password' => array(
            'required' => true 
     	)
		));

	if($val->passed()){
		$user = new User();
		//$remember = (Input::get('remember') === 'on') ? true : false;
		$login = $user->login(Input::get('username'), Input::get('password'));

		if($login){
			Redirect::to('index.php');
		} else{
			echo "logggin in failed";
		}
	}
	else {
		foreach ($val->errors() as $error) {
		echo $error, '<br>';
		}
	}

	}
}

?>

<form action="" method="post">
	<div class="field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" autocomplete="off">
	</div>
	<div class="field">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" autocomplete="off">
	</div>
	

	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>"> 
	<input type="submit" value="log in"> 
</form>

