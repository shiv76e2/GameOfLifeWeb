<!DOCTYPE html>
<html lang="jp">

<head>
  <title>form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header><h2>人生ゲーム（V0.5）</h2></header>
    <main>
<form action="jgame.php" method="post">
    <div class="form-group">
    <label for="text">NAME:</label>
    <input type="text" id="inputName" name="inputName">
    </div>
    <p>
    <div class="form-gender">
    <input type="radio" name="gender" id="gender_male" value="male">
	<label for="gender_male">男性</label>
	<input type="radio" name="gender" id="gender_female" value="female">
	<label for="gender_female">女性</label>
    <div>
    </p>
  <button type="submit" class="btn btn-default">START</button>
</form>
    </main>
    <footer>Team EnjoyLife</footer>
</body>

</html>