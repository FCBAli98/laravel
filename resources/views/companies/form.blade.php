    <div class="mb-3">
    <label for="name" class="form-label">Tashkilot Nomi</label>
	<input type="text" class="form-control" id="name" name="name" value="{{old('name') ?? $company->name}}">
	</div>
    <div class="mb-3">
    <label for="address" class="form-label">Tashkilot Manzili</label>
	<input type="text" class="form-control" id="address" name="address" value="{{old('address') ?? $company->address}}">
	</div>	
	<div class="mb-3">
	<label class="form-check-label" for="phone">Tashkilot Tel Raqami</label>
	<input type="text" class="form-control" id="phone" name="phone" value="{{old('phone') ?? $company->phone}}">
	</div>
    <button type="submit" class="btn btn-primary">Submit</button>