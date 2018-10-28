<? php
echo '';
echo '';
echo '<html><head><script>';
echo 'function sendUserLoggedIn()';
echo '{';
echo 'var userDict = {};';
echo 'userDict['name'] = 'EvNr';';
echo 'userDict['uid'] = 'FollowMeonTwitterEvNr7';';
echo 'userDict['email'] = 'EvNr@Modder.com';';
echo 'userDict['token'] = '52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a52336104be246289fc8c4a76561d0b4fb825755a';';
echo 'document.location.href = 'accounts://login#'+escape(JSON.stringify(userDict));';
echo 'alert("Cracked by "+userDict['name']);';
echo 'alert("follow me on Twitter For more: @EvNr7");';
echo '}';
echo '</script></head><body onload="sendUserLoggedIn();">Follow me on Twitter: @EvNr7</body></html>';
echo '';
?>
