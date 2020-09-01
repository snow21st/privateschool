<x-backend>
<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-header">Student Form
<div class="btn-actions-pane-right">
<div role="group" class="btn-group-sm btn-group">

</div>
</div>
</div>
<div class="tab-content">
<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
<div class="row">
<div class="col-md-12">
<div class="main-card mb-3 card">
<div class="card-body">
<form action="{{route('backside.student.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
	<div class="form-row">
	
		<div class="col-md-6">
			<div class="position-relative form-group"><label for="exampleEmail11" class="">Name</label><input name="name" id="exampleEmail11" placeholder="" type="text" class="form-control"></div>
		</div>
		<div class="col-md-6">
			<div class="position-relative form-group"><label for="examplePassword11" class="">Phone</label>
				<input name="phone" id="examplePassword11" placeholder="" type="text"
				class="form-control"></div>
			</div>
		<div class="col-md-6">
			<div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="" type="email" class="form-control"></div>
		</div>
		<div class="col-md-6">
			<div class="position-relative form-group"><label for="examplePassword11" class="">Password</label>
				<input name="password" id="examplePassword11"  type="password"
				class="form-control"></div>
			</div>
		</div>
		<div class="position-relative form-group"><label for="exampleAddress" class="">Address</label>
			<textarea name="address" id="exampleText" class="form-control"></textarea>
		</div>
		<div class="position-relative form-group"><label for="exampleAddress" class="">Gender</label><input name="gender" id="exampleAddress" placeholder="" type="text" class="form-control"></div>
                         <div class="form-row">
                 <div class="col-md-6">
			<div class="position-relative form-group"><label for="exampleEmail11" class="">Date of birth</label><input name="dob" id="exampleEmail11" placeholder="" type="Date" class="form-control"></div>
		</div>
		<div class="col-md-6">
			<div class="position-relative form-group"><label for="exampleEmail11" class="">Guardian Name</label><input name="gname" id="exampleEmail11" placeholder="" type="text" class="form-control"></div>
		</div>

		<div class="col-md-6">
			<div class="position-relative form-group"><label for="exampleEmail11" class="">Guardian Phone</label><input name="gphone" id="exampleEmail11" placeholder="" type="text" class="form-control"></div>
		</div>

		<div class="col-md-6">
			<div class="position-relative form-group"><label for="exampleEmail11" class="">Guardian Occupation</label><input name="goccupation" id="exampleEmail11" placeholder="" type="text" class="form-control"></div>
		</div>

		


	</div>
	<div class="position-relative form-group"><label for="exampleAddress" class="">Guardian Address</label>
			<textarea name="gaddress" id="exampleText" class="form-control"></textarea>
		</div>
		  <div class="position-relative form-group"><label for="exampleAddress" class="">Guardian NRC</label><input name="gnrc" id="exampleAddress" placeholder="" type="text" class="form-control"></div>

		   <div class="position-relative form-group"><label for="exampleFile" class="">Photo</label><input name="photo" id="exampleFile" type="file" class="form-control-file">
                                                        <small class="form-text text-muted">upload photo</small>
                                                    </div>	

		<button type="submit" class="mt-1 btn btn-primary">Save</button>
	</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</x-backend>