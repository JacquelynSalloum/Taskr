<form id="registration_form" action="registration_form.php" method="post" onsubmit="return checkForm(this);">
      
      <div class="row">
        <div class="ten columns">
          <label for="exampleEmailInput">Title</label>
          <input class="u-full-width" type="text" placeholder="Title..." name="firstName" id="title">
        </div>
      </div>


      <div class="row">
        <div class="ten columns">
          <label>Category</label>
          <select input class="u-full-width">
            <option value="indoor">Indoor</option>
            <option value="outdoor">Outdoor</option>
            <option value="build-repair">Build/Repair</option>
            <option value="food-delivery">Food/Deliveries</option>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="ten columns">
          <label>Description</label>
            <textarea input class="u-full-width">
            </textarea>
        </div>
      </div>

      <input class="button-primary" type="submit" value="Post">

</form>