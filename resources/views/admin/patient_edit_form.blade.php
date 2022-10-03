<x-master>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					{{-- @dd($product->category = 'Men'); --}}
					<div class="row">
						<h3 class="title1">Product Form :</h3>
						<div class="form-three widget-shadow">
							<form action="{{ route('admin.product.update',$product->id) }}" method="POST">
								@csrf
								@method('patch')
								<div class="form-group">
								  <label for="product_title">Title</label>
								  <input type="text" class="form-control" id="product_title" name="product_title" placeholder="Enter Product Title...." value="{{ $product->title }}">
								</div>
								{{ $product->category }}
								<select class="form-select form-select-lg mb-3 form-control" aria-label="Default select example" name="category">
									
									
									<option value='kids' @if($product->category =='kids') selected @endif> Kids</option>
									<option value='Men' @if($product->category =='Men') selected @endif>Men</option>
									<option value='Women' @if($product->category == 'Women') selected @endif>Women</option>
									
								</select>
								
								

								<div class="form-check">
								  <input type="checkbox" class="form-check-input" id="exampleCheck1" name="is_active" {{ $product->is_active== '1'? 'checked':'' }} >
								  
								  <label class="form-check-label" for="exampleCheck1">Is Active ?</label>
								</div>
								<div class="form-group">
									<label for="description">Description</label>
									<textarea class="form-control" name="description" id="description" cols="30" rows="4">{{ $product->description }}</textarea>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							  </form>
						</div>
					</div>

				</div>
			</div>
		</div>
</x-master>