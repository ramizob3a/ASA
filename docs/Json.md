
# Work with json

You can work with json for save data

<b> Start Work 🔘 </b>
<pre>$RamiJ = new ASA_JsonData();</pre>

<b> Set Chat ID for work user data</b>
<pre>$RamiJ->SetChatID();</pre>

<b> Set NameFile for save data </b>
<pre>$RamiJ->SetNameFile("users.json");</pre>

<b> Create File (need to set namefile with SetNameFile("NameFile.json") </b>
<pre>$RamiJ->Create();</pre>

<b> add User for save data </b>
<pre>$RamiJ->AddUser();</pre>

<b> Check Exists User </b>
<pre>$RamiJ->ExistsUser();</pre>

<b> Delete User (All data delete) </b>
<pre>$RamiJ->DeleteUser();</pre>

<b> Get all user data </b>
<pre>$RamiJ->GetUser();</pre>

<b> Get value of key </b>
<pre>$RamiJ->GetKey($keyname)</pre>

<b> Add key for set value </b>
<pre>$RamiJ->AddKey("coin");</pre>

<b> Put value in key </b>
<pre>$RamiJ->PutKey($key, $value);</pre>

<b> Delete key (all keys ChatID, delete) </b>
<pre>$RamiJ->DelKey($key);</pre>