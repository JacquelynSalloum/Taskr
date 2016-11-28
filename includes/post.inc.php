<form id="task_form" action="task_form.php" method="post" onsubmit="return checkForm(this);">
      
      <div class="row">
        <div class="ten columns">
          <label for="exampleEmailInput">Title</label>
          <input class="u-full-width" type="text" placeholder="Title..." name="title" id="title">
        </div>
      </div>


      <div class="row">
        <div class="ten columns">
          <label>Category</label>
          <select input class="u-full-width" name="category" id = "category">
            <option value="indoor">Indoor</option>
            <option value="outdoor">Outdoor</option>
            <option value="build">Build/Repair</option>
            <option value="deliver">Food/Deliveries</option>
          </select>
        </div>
      </div>

    <div class="row">
        <div class="ten columns">
          <label>Price</label>
          <input class="u-full-width" type="text" placeholder="Enter price..." name="price" id="price">
        </div>
      </div>
    
    <div class="row">
        <div class="ten columns">
          <label>Location (Postal code)</label>
          <input class="u-full-width" type="text" placeholder="e.g. 'B3J1E9'" name="postalcode" id="postalcode">
        </div>
      </div>
    
      <div class="row">
        <div class="ten columns">
          <label>Description</label>
            <textarea input class="u-full-width" placeholder="Describe your task here..." name="description" id="description"></textarea>
        </div>
      </div>

      <input class="button-primary" type="submit" value="Post">

</form>

<!--The following validator was taken from http://www.the-art-of-web.com/javascript/validate-password/ and modified for task posting.-->
<script type="text/javascript">
  function checkForm(form)
  {
    if(form.title.value == "") {
      alert("Error: Needs a title!");
      form.title.focus();
      return false;
    }
    if(form.description.value == "") {
      alert("Error: Describe your task!");
      form.description.focus();
      return false;
    }
    if(form.price.value != "") {
        re = /^\d+(\.\d{2})?$/;
        if(!re.test(form.price.value)) {
            alert("Error: Please enter a valid number for your price.");
            form.price.focus();
        return false;
      }
    } else {
      alert("Error: Please enter a price!");
      form.price.focus();
      return false;
    }
    if(form.postalcode.value != "") {
      re = /^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/;
      if(!re.test(form.postalcode.value)) {
        alert("Error: Postal code must be in this format: 'B3J1E9'");
        form.postalcode.focus();
        return false;
      }
    } else {
      alert("Error: Please enter your location for the task!");
      form.postalcode.focus();
      return false;
    }
    return true;
  }
</script>
