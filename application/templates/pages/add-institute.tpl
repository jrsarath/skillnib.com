<html>
  <head>
    <title></title>
    {include file='components/head.tpl'}
    <meta name="description" content="SPARKER - Premium directory and listings template by Ansonika.">
  </head>
  <body>
    {include file='components/header.tpl' mega='true'}
    <div class="container py-4">
      <div class="row">
        <aside class="col-lg-3 sidenav-pills">
            <div class="box_style_cat">
              <ul class="cat_nav" role="tablist">
                <li><a href="#" class="active"><i class="icon_document_alt"></i>Add Institute</a></li>
                <li><a href="/account/add/college"><i class="icon_document_alt"></i>Add College</a></li>
                <li><a href="/account/add/tuition"><i class="icon_document_alt"></i>Add Tuition below XII</a></li>
                <li><a href="/account/add/job-consultancy"><i class="icon_document_alt"></i>Add Job Consultancy</a></li>
              </ul>
            </div>
            <!--/sticky -->
        </aside>
        <div class="col-lg-9">
          <form method="post">
        		<div class="box_general padding_bottom">
        			<div class="header_box version_2">
        				<h2>Basic info</h2>
        			</div>
        			<div class="row">
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Institute Name</label>
        						<input name='name' type="text" class="form-control" placeholder="Institute's name">
        					</div>
        				</div>
                <div class="col-md-6">
        					<div class="form-group">
        						<label>Year Established</label>
        						<input name='estd' type="text" maxlength="4" class="form-control" placeholder="Established In">
        					</div>
        				</div>
        				<div class="col-12">
        					<div class="form-group">
        						<label>Category</label>
        						<div class="w-100">
        						<select class="nice" name='category'>
        							<option value="Aptitude Courses">Aptitude Courses</option>
        							<option value="Software Development">Software Development</option>
        							<option value="Web Development">Web Development</option>
        							<option value="Embeded Systems">Embeded Systems</option>
                      <option value="Graphics, Vision, Games and Animation">Graphics, Vision, Games and Animation</option>
                      <option value="Hardware Design/Engineering">Hardware Design/Engineering</option>
                      <option value="Security">Security</option>
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
        			<div class="row mt-3">
        				<div class="col-md-12">
        					<div class="form-group">
        						<label>Description</label>
        						<textarea class="form-control" name='description' rows="6"></textarea>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
        			<div class="row">
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Phone Number</label>
        						<input name="phone" type="text" class="form-control">
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Email Address</label>
        						<input name="email" type="text" class="form-control">
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Website (Optional)</label>
        						<input name="website" type="text" class="form-control">
        					</div>
        				</div>
                <div class="col-md-6">
        					<div class="form-group">
        						<label>Whatsapp (Optional)</label>
        						<input name="whatsapp" type="text" class="form-control">
        					</div>
        				</div>
        			</div>
              <div class="row">
        				<div class="col-md-12">
        					<div class="form-group">
        						<label>Description about Services Provided</label>
        						<textarea class="form-control" name='services' rows="6"></textarea>
        					</div>
        				</div>
        			</div>
        		</div>
        		<!-- /box_general-->

        		<div class="box_general padding_bottom">
        			<div class="header_box version_2">
        				<h2>Location</h2>
        			</div>
        			<div class="row">
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Select City</label>
                    <div class="w-100">
                      <select class="nice" name='city'>
          							{$app->get_cities('select_list')}
          						</select>
                    </div>
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Address</label>
        						<input name='address' type="text" class="form-control" placeholder="ex. 250, Fifth Avenue...">
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
        			<div class="row">
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>State</label>
        						<input name='state' type="text" class="form-control">
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Zip Code</label>
        						<input name='pincode' type="text" class="form-control">
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
              <div class="row">
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Map Longitude</label>
        						<input name='longitude' type="text" class="form-control">
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Map Latitude</label>
        						<input name='latitude' type="text" class="form-control">
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
        		</div>
        		<!-- /box_general-->

        		<div class="box_general padding_bottom">
        			<div class="header_box version_2">
        				<h2>Opening</h2>
        			</div>
              <div class="row mb-3">
        				<div class="col-md-2">
        					<label class="fix_spacing">Monday</label>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
                      <select class="nice" name="monday-opening">
          							<option>Opening Time</option>
          							<option>Closed</option>
                        {for $option=1 to 12}
                            <option value="{$option} AM">{$option} AM</option>
                        {/for}
                        {for $option=1 to 12}
                            <option value="{$option} PM">{$option} PM</option>
                        {/for}
          						</select>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
        						<select class="nice" name="monday-closing">
        							<option>Closing Time</option>
        							<option>Closed</option>
                      {for $option=1 to 12}
                          <option value="{$option} AM">{$option} AM</option>
                      {/for}
                      {for $option=1 to 12}
                          <option value="{$option} PM">{$option} PM</option>
                      {/for}
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
              <div class="row mb-3">
        				<div class="col-md-2">
        					<label class="fix_spacing">Tuesday</label>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
                      <select class="nice" name="tuesday-opening">
          							<option>Opening Time</option>
          							<option>Closed</option>
                        {for $option=1 to 12}
                            <option value="{$option} AM">{$option} AM</option>
                        {/for}
                        {for $option=1 to 12}
                            <option value="{$option} PM">{$option} PM</option>
                        {/for}
          						</select>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
        						<select class="nice" name="tuesday-closing">
        							<option>Closing Time</option>
        							<option>Closed</option>
                      {for $option=1 to 12}
                          <option value="{$option} AM">{$option} AM</option>
                      {/for}
                      {for $option=1 to 12}
                          <option value="{$option} PM">{$option} PM</option>
                      {/for}
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
              <div class="row mb-3">
        				<div class="col-md-2">
        					<label class="fix_spacing">Wednesday</label>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
                      <select class="nice" name="wednesday-opening">
          							<option>Opening Time</option>
          							<option>Closed</option>
                        {for $option=1 to 12}
                            <option value="{$option} AM">{$option} AM</option>
                        {/for}
                        {for $option=1 to 12}
                            <option value="{$option} PM">{$option} PM</option>
                        {/for}
          						</select>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
        						<select class="nice" name="wednesday-closing">
        							<option>Closing Time</option>
        							<option>Closed</option>
                      {for $option=1 to 12}
                          <option value="{$option} AM">{$option} AM</option>
                      {/for}
                      {for $option=1 to 12}
                          <option value="{$option} PM">{$option} PM</option>
                      {/for}
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
              <div class="row mb-3">
        				<div class="col-md-2">
        					<label class="fix_spacing">Thursday</label>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
                      <select class="nice" name="thursday-opening">
          							<option>Opening Time</option>
          							<option>Closed</option>
                        {for $option=1 to 12}
                            <option value="{$option} AM">{$option} AM</option>
                        {/for}
                        {for $option=1 to 12}
                            <option value="{$option} PM">{$option} PM</option>
                        {/for}
          						</select>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
        						<select class="nice" name="thursday-closing">
        							<option>Closing Time</option>
        							<option>Closed</option>
                      {for $option=1 to 12}
                          <option value="{$option} AM">{$option} AM</option>
                      {/for}
                      {for $option=1 to 12}
                          <option value="{$option} PM">{$option} PM</option>
                      {/for}
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
              <div class="row mb-3">
        				<div class="col-md-2">
        					<label class="fix_spacing">Friday</label>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
                      <select class="nice" name="friday-opening">
          							<option>Opening Time</option>
          							<option>Closed</option>
                        {for $option=1 to 12}
                            <option value="{$option} AM">{$option} AM</option>
                        {/for}
                        {for $option=1 to 12}
                            <option value="{$option} PM">{$option} PM</option>
                        {/for}
          						</select>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
        						<select class="nice" name="friday-closing">
        							<option>Closing Time</option>
        							<option>Closed</option>
                      {for $option=1 to 12}
                          <option value="{$option} AM">{$option} AM</option>
                      {/for}
                      {for $option=1 to 12}
                          <option value="{$option} PM">{$option} PM</option>
                      {/for}
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
              <div class="row mb-3">
        				<div class="col-md-2">
        					<label class="fix_spacing">Saturday</label>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
                      <select class="nice" name="saturday-opening">
          							<option>Opening Time</option>
          							<option>Closed</option>
                        {for $option=1 to 12}
                            <option value="{$option} AM">{$option} AM</option>
                        {/for}
                        {for $option=1 to 12}
                            <option value="{$option} PM">{$option} PM</option>
                        {/for}
          						</select>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
        						<select class="nice" name="saturday-closing">
        							<option>Closing Time</option>
        							<option>Closed</option>
                      {for $option=1 to 12}
                          <option value="{$option} AM">{$option} AM</option>
                      {/for}
                      {for $option=1 to 12}
                          <option value="{$option} PM">{$option} PM</option>
                      {/for}
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
              <div class="row mb-3">
        				<div class="col-md-2">
        					<label class="fix_spacing">Sunday</label>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
                      <select class="nice" name="sunday-opening">
          							<option>Opening Time</option>
          							<option>Closed</option>
                        {for $option=1 to 12}
                            <option value="{$option} AM">{$option} AM</option>
                        {/for}
                        {for $option=1 to 12}
                            <option value="{$option} PM">{$option} PM</option>
                        {/for}
          						</select>
        						</div>
        					</div>
        				</div>
        				<div class="col-md-5">
        					<div class="form-group">
        						<div class="w-100">
        						<select class="nice" name="sunday-closing">
        							<option>Closing Time</option>
        							<option>Closed</option>
                      {for $option=1 to 12}
                          <option value="{$option} AM">{$option} AM</option>
                      {/for}
                      {for $option=1 to 12}
                          <option value="{$option} PM">{$option} PM</option>
                      {/for}
        						</select>
        						</div>
        					</div>
        				</div>
        			</div>
        			<!-- /row-->
        		</div>
        		<!-- /box_general-->

        		<div class="box_general padding_bottom">
        			<div class="header_box version_2">
        				<h2>Images</h2>
        			</div>
              <div class="row">
        				<div class="col-md-6">
        					<div class="form-group">
        						<label>Profile Picture/Logo</label>
                    <div id="dZUpload" class="dropzone" data-limit='1' data-for="institute" data-child="profile_image">
                        <div class="dz-default dz-message">
                          <span>Drop images here to upload</span>
                        </div>
                    </div>

                    <input type="hidden" name="profile_image"  />
        					</div>
        				</div>
                <div class="col-md-6">
        					<div class="form-group">
        						<label>Cover Picture</label>
                    <div id="dZUpload" class="dropzone" data-limit='1' data-for="institute" data-child="cover_image">
                        <div class="dz-default dz-message">
                          <span>Drop images here to upload</span>
                        </div>
                    </div>
                    <input type="hidden" name="cover_image" value="">
        					</div>
        				</div>
                <div class="col-md-12">
        					<div class="form-group">
        						<label>Institute Images</label>
                    <div id="dZUpload" class="dropzone" data-limit='5'  data-for="institute" data-child="featured_images">
                        <div class="dz-default dz-message">
                          <span>Drop images here to upload</span>
                        </div>
                    </div>
                    <input type="hidden" name="featured_images" value="null">
                  </div>
        				</div>
        			</div>
        			<!-- /row-->
        			<!-- /row-->
        		</div>
        		<!-- /box_general-->
            <div class="box_general padding_bottom">
        			<div class="header_box version_2">
        				<h2>SEO Optimization</h2>
        			</div>
              <div class="row">
                <div class="col-md-12">
        					<div class="form-group">
        						<label>Keywords (Optional)</label>
        						<textarea class="form-control" name='keywords' rows="6"></textarea>
        					</div>
        				</div>
              </div>
            </div>
        		<p><input type="submit" class="btn_1 medium" value="Save" name="submit" /></p>
        	  <!-- /.container-fluid-->
          </form>
        </div>
        <!-- /.container-wrapper-->
      </div>
    </div>
    {include file='components/footer.tpl'}
    {include file='components/javascripts.tpl'}
    <script src="/assets/js/add-listing.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        {ldelim}
          {if isset($review_callback)}
            {if $review_callback == 'success'}
              Swal.fire(
                'Success!',
                'A new Institute has been added',
                'success'
              )
            {elseif $review_callback == 'error'}
              Swal.fire(
                'Something went wrong!',
                'It&apos;s not you It&apos;s us.',
                'error'
              )
            {/if}
          {/if}
        {rdelim}
      });
    </script>
  </body>
</html>
