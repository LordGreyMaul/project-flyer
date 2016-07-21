@inject('countries' , 'App\Http\Utilities\country')

<div class="form-group">
  <label for="street">Street:</label>
  <input type="text" name="street" id="street" class="form-control" vaule="{{ old('street') }}">
</div>

<div class="form-group">
  <label for="city">City:</label>
  <input type="text" name="city" id="city" class="form-control" vaule="{{ old('street') }}">
</div>

<div class="form-group">
  <label for="postcode">Zip/Postcode:</label>
  <input type="text" name="postcode" id="postcode" class="form-control" vaule="{{ old('street') }}">
</div>

<div class="form-group">
  <label for="country">Country:</label>
  <select id="country" name="country" class="form-control">
    @foreach($countries::all() as $country)
    <option value="{{ $country }}">{{ $country }}</option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="state">State/County:</label>
  <input type="text" name="state" id="state" class="form-control" vaule="{{ old('street') }}">
</div>

<hr>

<div class="form-group">
  <label for="price">Sale Price:</label>
  <input type="text" name="price" id="price" class="form-control" vaule="{{ old('street') }}">
</div>

<div class="form-group">
  <label for="description">Home Description:</label>
  <textarea type="text" name="decription" id="dexcription" class="form-control" rows="10"></textarea>
</div>

<div class="form-group">
  <label for="photos">Photos:</label>
  <input type="file" name="photos" id="photos" class="form-control" vaule="{{ old('street') }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>