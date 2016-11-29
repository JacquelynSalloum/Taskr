<form enctype="multipart/form-data" id="update_image" action="confirm-image.php" method="post">
      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Upload Image</label>
          <input type="file" name="fileName" /><br />
          <input type="hidden" name="MAX_FILE_SIZE" value="10000" />
        </div>
      </div>
      <input class="button-primary" type="submit" value="Change image">
</form>