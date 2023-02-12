<?php 

session_start();

	include("connection.php");
	include("functions.php");

    if(isset($_SESSION['logon']) && $_SESSION['logon'] != "") {
        $logon=$_SESSION['logon'];
            if($logon==0){
            //header("Location: signup.php");
            echo $_SESSION['logon'];
            exit();
           }
    }

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			
            echo '<script>alert("Wrong Username/Password!")</script>';
            

		}else
		{
			echo '<script>alert("Wrong Username/Password!")</script>';
            

		}
        
          
	}

?>


<!DOCTYPE html>

<html lang="en">
  <link rel="icon" type="image/x-icon" href="https://my-actual-web.phonesallowed.repl.co/assets/favicon.ico" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>


</head>
<body>

    <div class="alert-box">
        <p class="alert"></p>
    </div>

    <form method="post" class="form">
        <h1 class="heading">Login</h1>

        <input id="text" type="text" name="user_name" placeholder="username" class="email" required>

        <input id="text" type="password" name="password" placeholder="password" class="password" required>
  
        <input class="submit-btn" id="button" type="submit" value="Login">
      
       <a href="signup.php" class="link">Need An Account? Sign up</a><br>
   </form>

<input id="toggle" type="checkbox"></input>


<style type="text/css">
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

*:focus{
    outline: none;
}

body{
    position: relative;
    width: 100%;
    min-height: 100vh;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #000;
    background-size: cover;
    background-position: center;
    font-family: 'roboto', sans-serif;
}

.form{
    width: 400px;
    height: auto;
    color: #ffff;
    font-family: 'roboto', sans-serif;
}

.heading{
    opacity: 0;
    text-transform: capitalize;
    text-align: center;
    font-size: 80px;
    font-weight: 300;
    margin-bottom: 50px;
}

input,
.submit-btn{
    opacity: 0;
    width: 80%;
    height: 35px;
    display: block;
    margin: 20px auto;
    border-radius: 5px;
    background: rgba(255, 255, 255, 0.3);
    border: none;
    color: #ffff;
    padding: 15px;
    transition: .5s;
    text-transform: capitalize;
}

input::placeholder{
    color: #ffff;
}

input:focus,
.submit-btn:hover{
    background: #f8982b;
    color: #ffff;
}

input:focus::placeholder{
    color: #ffff;
}

.submit-btn{
    width: auto;
    padding: 0 20px;
    cursor: pointer;
    margin: 50px auto 0;
    opacity: 0;
}

.link{
    opacity: 0;
    text-align: center;
    text-transform: capitalize;
    color: rgba(255, 255, 255, 0.5);
    display: block;
    margin: 30px auto;
}

.link:hover{
    color:rgba(181, 181, 181, 0.5);
}

.alert-box{
    position: absolute;
    top: -100%;
    left: 50%;
    transform: translateX(-50%);
    min-width: 150px;
    max-width: 90%;
    width: auto;
    height: auto;
    padding: 10px;
    text-transform: capitalize;
    background: rgb(255, 119, 119);
    border-top: 10px solid rgb(255, 37, 37);
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    color: #ffff;
    font-family: 'roboto', sans-serif;
    text-align: center;
    transition: 1s;
}
 body {
        background-image: url('https://recursivetreasuredbrace9812387123698196736791361973167893.phonesallowed.repl.co/41750_1_miscellaneous_digital_art_simple_dark_shapes.jpg');
        color: #FFFFFF;
        font-family: 'Bebas';
        text-align: center;
        max-width: 100%;
        overflow-x: hidden;
        padding: 0;
        margin: 0;
    }

    h1 {
        text-align: center;
        letter-spacing: 1px;
        word-spacing: 0.15em;
        font-size: 3em;
        line-height: 1.2;
        transform: translateY(52%);
    }


    #toggle {
        display: none;
    }

    /**
      Hamburger
    **/
    .hamburger {
        position: absolute;
        top: 5em;
        right: 5%;
        margin-left: -2em;
        margin-top: -45px;
        width: 2em;
        height: 45px;
        z-index: 5;
    }

        .hamburger div {
            position: relative;
            width: 3em;
            height: 7px;
            border-radius: 3px;
      /**ham color **/
            background-color: #f8982b;
            margin-top: 8px;
            transition: all 0.3s ease-in-out;
        }

    /**
    Nav Styles
    **/
    .nav {
        position: fixed;
        width: 100%;
        height: 100%;
      /**Ham background color when it opens**/
        background-color: #000000;
        top: -100%;
        left: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
        transform: scale(0);
    }

    .nav-wrapper {
        position: relative;
        overflow: hidden;
        overflow-y: auto;
        height: 100%;
    }

    nav {
        text-align: left;
        margin-left: 25%;
    }
/**Text color when ham opens**/
        nav a {
            position: relative;
            text-decoration: none;
            color: #FFFFFF;
            font-size: 2em;
            display: inline-block;
            margin-top: 1.25em;
            transition: color 0.2s ease-in-out;
            letter-spacing: 1px;
        }

            nav a:before {
                content: '';
                height: 0;
                position: absolute;
                width: 0.25em;
                background-color: white;
                left: -0.5em;
                transition: all 0.2s ease-in-out;
            }

            nav a:hover {
                color: #f8982b;
            }

                nav a:hover:before {
                    height: 100%;
                }

    /**

      
    ham Animations
    **/
    #toggle:checked + .hamburger .top-bun {
        transform: rotate(-45deg);
        margin-top: 25px;
    }

    #toggle:checked + .hamburger .bottom-bun {
        opacity: 0;
        transform: rotate(45deg);
    }

    #toggle:checked + .hamburger .meat {
        transform: rotate(45deg);
        margin-top: -7px;
    }

    #toggle:checked + .hamburger + .nav {
        top: 0;
        transform: scale(1);
    }
</style>
<script type="text/javascript">
    // form loading animation

const form = [...document.querySelector('.form').children];

form.forEach((item, i) => {
    setTimeout(() => {
        item.style.opacity = 1;
    }, i*100);
})

window.onload = () => {
    if(sessionStorage.name){
        location.href = '/';
    }
}

// form validation

const name = document.querySelector('.name') || null;
const email = document.querySelector('.email');
const password = document.querySelector('.password');
const submitBtn = document.querySelector('.submit-btn');

if(name == null){ // means login page is open
    submitBtn.addEventListener('click', () => {
        fetch('/login-user',{
            method: 'post',
            headers: new Headers({'Content-Type': 'application/json'}),
            body: JSON.stringify({
                email: email.value,
                password: password.value
            })
        })
        .then(res => res.json())
        .then(data => {
            validateData(data);
        })
    })
} else{ // means register page is open

    submitBtn.addEventListener('click', () => {
        fetch('/register-user', {
            method: 'post',
            headers: new Headers({'Content-Type': 'application/json'}),
            body: JSON.stringify({
                name: name.value,
                email: email.value,
                password: password.value
            })
        })
        .then(res => res.json())
        .then(data => {
            validateData(data);
        })
    })

}

const validateData = (data) => {
    if(!data.name){
        alertBox(data);
    } else{
        sessionStorage.name = data.name;
        sessionStorage.email = data.email;
        location.href = '/';
    }
}

const alertBox = (data) => {
    const alertContainer = document.querySelector('.alert-box');
    const alertMsg = document.querySelector('.alert');
    alertMsg.innerHTML = data;

    alertContainer.style.top = `5%`;
    setTimeout(() => {
        alertContainer.style.top = null;
    }, 5000);
}
</script>
    
</body>
</html>