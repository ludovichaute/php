<form methode="post">
    <label for="">Es-tu un humain, un chat ou une licorne ?</label>
    <select name="race">
        <option value="humain">Humain</option>
        <option value="chat">Chat</option>
        <option value="licorne">Licorne</option>
    </select>
    <button type="submit">Submit</button>    
</form>
    
<?php
    
    

    if (isset($_GET['race'])) {
        $race = $_GET['race'];
       

        echo($humain = ($race == 'humain') ? '<img src="https://bestof.one/ressources/images/vignette/corps-humain.svg">' : false);
        echo($chat = ($race == 'chat') ? '<img src="https://i.ytimg.com/vi/py9Xt3wVAu0/maxresdefault.jpg">' : false);
        echo($licorne = ($race == 'licorne') ? '<img src="https://cms-assets.tutsplus.com/uploads/users/108/posts/27336/image/how-to-draw-unicorn-4-4.png">' : false);

        

    }



?>