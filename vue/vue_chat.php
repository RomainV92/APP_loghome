<!DOCTYPE HTML>
<html>
<head>
    <title>Chat</title>
    <link rel="stylesheet" href="/homeniscience/page/chat/style.css">
</head>
<body>
<div id="chatbox" class="chatbox">
    <div class="chat-label" onclick="pullMenu()">CHAT</div>
    <div class="chatlogs">
        <?php
        while ($data = $messages->fetch()) {
            if ($data['ID_utilisateur_envoi'] == $_SESSION['ID']) {
                echo '<div class="chat self">';
            } else {
                echo '<div class="chat friend">';
            }
            echo '<div class="user-photo"><img src="https://cdn1.iconfinder.com/data/icons/user-pictures/101/malecostume-512.png" alt=""></div>';
            echo '<p class="chat-message">' . $data["contenu"] . '</p>';
            echo '<div class="date"><p>'.$data["date"].'</p></div>';
            echo '</div>';
        }
        ?>
    </div>
    <form class="chat-form" method="post" action = "">
        <label for="contenu">
            <textarea name="contenu" id="contenu"></textarea>
        </label>
        <input type="submit" value="Send" name="submitForm">
    </form>
</div>
<script type="text/javascript">
    var current;
    var pullChat = 0;
    var pullMenu = function () {
        if (pullChat === 0) {
            current = document.getElementById('chatbox');
            current.style.bottom = '0px';
            pullChat = 1;
        } else {
            current = document.getElementById('chatbox');
            current.style.bottom = '-380px';
            pullChat = 0;
        }
    }
</script>
</body>
</html>