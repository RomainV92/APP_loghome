<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Change password</title>
    <link rel="stylesheet" href="../vue/changement_mdp.css"/>
</head>
<body>


<div id="edit">
    <form action="changementMDP.php" method="post" onsubmit="return verifMdp()">
        <p>Ancien mot de passe</p>
        <input  name="ancienPass" type="password" placeholder="Entrez votre ancien mdp" minlength=8 maxlength=24 required>
        <label for="mdp">Nouveau mot de passe</label>
        <input id="mdp" name="nouveauPass" type="password" placeholder="Entrez votre nouveau mdp" minlength=8 maxlength=24 required>
        <label for="mdp2">Confirmez le nouveau mot de passe</label>
        <input id="mdp2" name="nouveauPass2" type="password" placeholder="Confirmez votre nouveau mdp" minlength=8 maxlength=24 required>
        <input class="submit" type="submit">
        <?php echo '<div id="error" class="error" style="color:red">'.$message.'</div>' ?>
    </form>
</div>


<script type="text/javascript">

    function verifMdp() {

        var anUpperCase = /[A-Z]/;
        var aLowerCase = /[a-z]/;
        var aNumber = /[0-9]/;
        var numUpper = 0;
        var numLower = 0;
        var numNums = 0;

        var pass = document.getElementById("mdp").value;
        var pass2 = document.getElementById("mdp2").value;
        var message = document.getElementById("error");

        if (pass !== pass2) {
            message.innerHTML = "<p>Les mots de passe ne correspondent pas.</p>"
            return false;
        } else {
            if (pass.length < 8) {
                message.innerHTML = "<p>Le mot de passe n'est pas assez long.</p>";
                return false;
            }
            for (var i = 0; i < pass.length; i++) {
                if (anUpperCase.test(pass[i]))
                    numUpper++;
                else if (aLowerCase.test(pass[i]))
                    numLower++;
                else if (aNumber.test(pass[i]))
                    numNums++;
            }
            if (numUpper < 1 || numLower < 1 || numNums < 1 ) {
                message.innerHTML = "<p>Le mot de passe doit contenir une minuscule, une majuscule et un chiffre.</p>";
                return false;
            } else {
                return true;
            }
        }
    }

</script>


</body>
</html>


