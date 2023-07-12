<!--implement php value into View-->
<h1><?= $this->params['foo']?></h1>

<h1><?= $this->foo ?></h1>
<h1><?= $foo ?></h1>

<form action="/upload" method="post" enctype="multipart/form-data">
    <input type="file" name="receipt">
    <!--<input type="file" name="receipt[]">-->
    <button type="submit">Upload</button>
</form>