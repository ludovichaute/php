<?php
    $form_test = isset($_GET['race']);
    

    if ($form_test) {
        $race = $_GET['race'];

        // echo($humain = ($race == 'humain') ? '<img src="https://bestof.one/ressources/images/vignette/corps-humain.svg">' : false);
        // echo($chat = ($race == 'chat') ? '<img src="https://i.ytimg.com/vi/py9Xt3wVAu0/maxresdefault.jpg">' : false);
        // echo($licorne = ($race == 'licorne') ? '<img src="https://cms-assets.tutsplus.com/uploads/users/108/posts/27336/image/how-to-draw-unicorn-4-4.png">' : false); 

        $humain = '<img src="https://bestof.one/ressources/images/vignette/corps-humain.svg">';
        $chat = '<img src="https://i.ytimg.com/vi/py9Xt3wVAu0/maxresdefault.jpg">';
        $licorne = '<img src="https://cms-assets.tutsplus.com/uploads/users/108/posts/27336/image/how-to-draw-unicorn-4-4.png">';

        $reponse = ($race == 'humain') ? $humain  : $reponse =($race == 'chat') ? $chat : $licorne  ;
        
        
    }

?>
<form methode="post">
    <label for="">Es-tu un humain, un chat ou une licorne ?</label>
    <select name="race">
        <option value="humain">Humain</option>
        <option value="chat">Chat</option>
        <option value="licorne">Licorne</option>
    </select>
    <button type="submit">Submit</button> 
    <div>
        <?php if ($form_test){
            echo $reponse;
        }
            
        ?>
    </div>
</form>
    
