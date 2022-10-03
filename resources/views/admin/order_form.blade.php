<x-master>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">

					<div class="row">
						<h3 class="title1">Product Form :</h3>
						<div class="form-three widget-shadow">
							<form action="{{ route('admin.product.store') }}" method="POST">
								@csrf
								<div class="form-group">
								  <label for="product_title">Title</label>
								  <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter Product Title....">
								</div>
								
								<select class="form-select form-select-lg mb-3 form-control" aria-label="Default select example" name="category">
									<option selected disabled>Select Category</option>
									<option value="Kids">Kids</option>
									<option value="Men">Men</option>
									<option value="Women">Women</option>
								</select>
								
								

								<div class="form-check">
								  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="is_active">
								  <label class="form-check-label" for="exampleCheck1">Is Active ?</label>
								</div>
								<div class="form-group">
									<label for="description">Description</label>
									<textarea class="form-control" name="description" id="description" cols="30" rows="4"></textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						</div>
					</div>

				</div>
			</div>
		</div>
</x-master>