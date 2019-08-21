<?php
    session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Поиск фильмов</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>
		<div class="container">
			<div class="row">
			    <div class="col-md-12 siteHeader">
			        <div class="row">
    			        <div class="col-md-8 text-right siteHeader__block1">
    					    <h1>BestFilms</h1>
    					</div>
    					
    					<?php
    					    if(empty($_SESSION['user_login'])) {
    					?>
    					
            					<div class="col-md-1"></div>
            					
            					<div class="col-md-3">
                    				<div class="siteHeader__block2">
                    				    <ul>
                    				        <li>
                    				            <a href="#" data-toggle="modal" data-target="#loginModal">Вход</a>
                    				        </li>
                    					            
                    				        <li>
                    				            <a href="#" data-toggle="modal" data-target="#registrationModal">Регистрация</a>
                    				        </li>
                    				    </ul>
                    					        
                    				    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="loginModalLabel">Вход</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                            
                                                    <div class="modal-body">
                                                        <form method="post" action="login.php">
                                                            <label for="loginForm">Логин</label>
                                                            <input type="text" class="form-control" id="loginForm" name="login" placeholder="Введите логин" required>
                                                                    
                                                            <label for="passwordForm">Пароль</label>
                                                            <input type="password" class="form-control" id="passwordForm" name="password" placeholder="Введите пароль" required>
                                                                    
                                                            <button type="submit" class="btn btn-primary form__button">Войти</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                                
                                        <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="registrationModalLabel">Регистрация</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                            
                                                    <div class="modal-body">
                                                        <form method="post" action="registration.php">
                                                            <label for="fullNameForm">Имя и фамилия</label>
                                                            <input type="text" class="form-control" id="fullNameForm" name="fullName" placeholder="Введите имя и фамилию" required>
                                                                    
                                                            <label for="loginForm">Логин</label>
                                                            <input type="text" class="form-control" id="loginForm" name="login" placeholder="Введите логин" required>
                                                                    
                                                            <label for="emailForm">Email</label>
                                                            <input type="email" class="form-control" id="emailForm" name="email" placeholder="Введите адрес электронной почты" required>
                                                                    
                                                            <label for="passwordForm">Пароль</label>
                                                            <input type="password" class="form-control" id="passwordForm" name="password" placeholder="Введите пароль" required>
                                                                    
                                                            <button type="submit" class="btn btn-primary form__button">Зарегистрироваться</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    				</div>
            					</div>
            			<?php
    					    }
    					    else {
    					?>
    					       <div class="col-md-4 siteHeader__block2">
    					           <ul>
    					              <li>
    					                 <small class="greeting">Здравствуйте, <?php echo $_SESSION['user_login']; ?></small>   
    					              </li>
    					                    
    					              <li>
    					                 <a href="logout.php" style="font-size: 14px;">Выйти</a>
    					              </li>
    					          </ul>
    					      </div>
    				  <?php
    					   }
    			      ?>
    				</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row menuStyle">
				<div class="col-md-2"></div>
				
				<div class="col-md-8">
					<nav class="navbar navbar-expand-lg navbar-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="mainMenu">
							<ul class="navbar-nav ml-auto mr-auto">
								<li class="nav-item">
									<a class="nav-link" href="./">Главная</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">Афиша</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href=".?page=search">Поиск фильмов</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">Новости</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">О нас</a>
								</li>
								
								<li class="nav-item">
									<a class="nav-link" href="#">Контакты</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
		
		<div class="container filmList">
			<div class="row">
				&nbsp;
			</div>
			
			<div class="row">
				<div class="col-md-12 text-center">
					<h1>Поиск фильмов</h1>
				</div>
			</div>
			
			<div class="row">
				&nbsp;
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<form method="post" action="index.php">
						<label for="searchTitle">Введите название фильма:</label>
						<input type="text" class="form-control" name="film_title" placeholder="Название фильма" id="searchTitle">
						
						<label for="searchActor">Или имя и фамилию актера:</label>
						<input type="text" class="form-control" name="film_actor" placeholder="Имя и фамилия актера" id="searchActor">
						
						<label for="searchCompany">Также у нас можно найти фильм по компании производителя:</label>
						<input type="text" class="form-control" name="film_company" placeholder="Компания производителя" id="searchCompany">
						
						<label for="searchYear">Или по году выпуска:</label>
						<input type="text" class="form-control" name="film_year" placeholder="Год выпуска" id="searchYear">

						<label for="searchGenre">И, наконец, можно искать фильмы по интересующим вас жанрам:</label>
						<select id="searchGenre" class="form-control" name="film_genre">
							<option value="---" selected>---</option>
							<option value="Триллер">Триллер</option>
							<option value="Фантастика">Фантастика</option>
							<option value="Драма">Драма</option>
							<option value="Ужасы">Ужасы</option>
							<option value="Комедия">Комедия</option>
						</select>
					
						<button type="submit" class="btn btn-primary form__button">Поиск</button>
					</form>
				</div>
			</div>
			
			<div class="row">
				&nbsp;
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>