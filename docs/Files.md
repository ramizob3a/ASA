# Woring With Files

You can use class for work with files

<b> Start Work 🔘 </b>
<pre>$RamiF = new ASA_Files();</pre>

<b> if you need create file use this 👇 </b>
<pre>$RamiF->CreateFile($namefile,$value = null);</pre>

<b> Write in file (Deleted previous text) </b>
<pre>$RamiF->PutFile("Hello World 👌");</pre>

<b> Delete File </b>
<pre>$RamiF->UnFile($namefile);</pre>

<b> Read File </b>
<pre>$RamiF->ReadFile($namefile);</pre>

<b> Create Folder </b>
<pre>$RamiF->CreateFolder($name);</pre>

<b> Check Exists File </b>
<pre>$RamiF->FileExists($namefile);</pre>

<b> Check Exists Folder </b>
<pre>$RamiF->FolderExists($namefolder);</pre>