<!DOCTYPE html>
<html lang="jp">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-sclable=0">
    <title>Life Game</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header><h2>人生ゲーム（V0.5）</h2></header>
    <main>
        <div class="main-container">
            <div class="temp-box">                
                <div class="container info">
                  <h3>マス先情報</h3>
                  <div class="mapInfoSix">
                    <strong>  6 :</strong><span id="Six">...</span>
                  </div>
                  <div class="mapInfoFive">
                    <strong>  5 :</strong><span id="Five">...</span>
                  </div>
                  <div class="mapInfoFour">
                    <strong>  4 :</strong><span id="Four">...</span>
                  </div>
                  <div class="mapInfoThree">
                    <strong>  3 :</strong><span id="Three">...</span>
                  </div>
                  <div class="mapInfoTwo">
                    <strong>  2 :</strong><span id="Two">...</span>
                  </div>
                  <div class="mapInfoOne">
                    <strong>  1 :</strong><span id="One">...</span>
                  </div>
                </div>
            </div>
            <div class="temp-box">
                <h3>キャラクター情報</h3>
                <div class = character>
                <div class="photo">
                  <span id="photo">...</span>
                </div>
                <div class="name">
                  名前 :<span id="name">
                    <?php print(htmlspecialchars($_POST['inputName'],ENT_QUOTES));?>
                  </span>
                </div>
                <div class="money">
                  所持金 :<span id="money">...</span>
                </div>
                <div class="job">
                  職業 :<span id="job">...</span>
                </div>
                <div class="marry">
                  結婚有無 :<span id="marry">...</span>
                </div>
                <div class="children">
                  子供 :<span id="children">...</span>
                </div>
                </div>
            </div>
            <div class="temp-box">
                <div class="currentMap">
                    <p>現在<span　id="curentMapInfo">MapNo.</span></p>
                </div>
            </div>
            <div class="temp-box">
                <div class="container dice">
                    <button id="btn dice">サイコロ <span class="dice">
                  <img id = "diceA" src="../img/dice1.png">
                    </span></button>
                  </div>
                  
                  <script>
                  document.getElementById('btn dice').addEventListener('click', dice);
                  function dice(){
                    let n= Math.random() * 6;
                    n = Math.ceil(n);
                    document.getElementById('diceA').setAttribute('src', '../img/dice' + n + '.png');
                  }
                  </script>
            </div>
        </div>
    </main>
    <footer>Team EnjoyLife</footer>
</body>
</html>