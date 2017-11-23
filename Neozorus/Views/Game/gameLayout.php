<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Game</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./assets/css/GameLayout.css">
    <script type="application/javascript">
            var tour = '<?=$tour?>';
            var pv = ['<?=$pv[0]?>', '<?=$pv[1]?>'];
            var mana = ['<?=$mana[0]?>', '<?=$mana[1]?>'];
            var main = JSON.parse('<?=$jMain?>');
            var plateau = JSON.parse('<?=$jPlateau?>');
            var defausse = JSON.parse('<?=$jDefausse?>');
            var visable = ['<?=$visable[0]?>', '<?=$visable[1]?>'];
            var heros = ['<?=$heros[0]?>', '<?=$heros[1]?>'];
            var jeton = '<?=$jeton?>';
            var currentPlayer = '<?=$currentPlayer?>';
            var eog = '<?=$eog?>';
            var att = '<?=$att?>';
            var cible = '<?=$cible?>';
            var abilite = '<?=$abilite?>';
            var error = '<?=$error?>';
            var message = '<?=$message?>';
            console.log('affichage layout');
     </script>

</head>
<body>
    <img id="plateau" src="./assets/img/plateau/plateau.png">
    <div id="contenu">
        <?= $gameView ?>
    </div>
     <script src="<?= JS_PATH . DS . 'gamePlay.js' ?>"></script>
</body>
</html>