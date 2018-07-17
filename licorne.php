<form methode="get">
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
        var_dump($race);

        $humain = ($race == 'humain') ? '<img src="https://bestof.one/ressources/images/vignette/corps-humain.svg">' : false;
        $chat = ($race == 'chat') ? '<img src="https://bestof.one/ressources/images/vignette/corps-humain.svg">' : false;
        $licorne = ($race == 'licorne') ? '<img src="https://bestof.one/ressources/images/vignette/corps-humain.svg">' : false;

        echo($test);

    }



?>