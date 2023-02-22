 <?php
 $html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q=Bhagg%20bhosdina&tl=en-IN');
 $player="<audio autoplay controls='controls'><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
 
echo $player;
?>