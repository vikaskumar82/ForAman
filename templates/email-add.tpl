<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>

<form method="post">
	<p align="center">Entry Title: <br/><input type="text" name="title" size="40" maxsize="100" /></p>
	<p align="center">Entry Text: <br/>
    <textarea name="content" id="editor"></textarea>
            <script>
            // CKEDITOR.replace('entry' );
            ClassicEditor
            .create( document.querySelector('#editor' ) )
            .catch( error => {
                console.error( error );
            } );
            </script>
    </p>
	<p align="center">Entry Category: <br/><input type="text" name="category" size="20" maxsize="20" /></p>
	<p align="center">Entry Author: <br/><input type="text" name="author" size="20" maxsize="20" /></p>
	<p align="center">Description: <br/><textarea name="description" cols="90" rows="5"></textarea></p>
	<p align="center">Keywords (separate by comma): <br/><input type="text" name="keywords" size="100" maxsize="200" /></p>
	<p align="center">
	<input type="submit" name="submit" value="Post This Content!" />
</form>