<div class="form-group">
  <label for="id_pic_product" style="font-weight:bolder">PIC Product</label>
  <br>
  <div class="@error('id_pic_product') is-invalid @enderror">
    <select id="id_pic_pm" class="js-states form-control @error ('id_pic_product') is-invalid @enderror" data-placeholder="Pilih PIC PM" style="width:100%" name="id_pic_product">
      <option value="" hidden>PIC PM</option>
      @foreach($users as $usr1)
        @if (old('id_pic_pm') == $usr1->id)
          <option value="{{ $usr1->id }}" selected>{{ $usr1->nama_user }}</option>
        @else 
          <option value="{{ $usr1->id }}">{{ $usr1->nama_user }}</option>
        @endif
      @endforeach
    </select>
     @error('id_pic_pm')
      <div class="invalid-feedback flash" style="margin-top: 2px">
        {{ $message }}</div>
    @enderror
  </div>
</div>
<div class="form-group">
  <label for="id_pic_am" style="font-weight:bolder">PIC AM</label>
  <br>
  <div class="@error('id_pic_am') is-invalid @enderror">
    <select id="id_pic_am" class="js-states form-control @error ('id_pic_am') is-invalid @enderror" data-placeholder="Pilih PIC AM" style="width:100%" name="id_pic_am">
      <option value="" hidden>PIC AM</option>
      @foreach($users as $usr1)
        @if (old('id_pic_am') == $usr1->id)
          <option value="{{ $usr1->id }}" selected>{{ $usr1->nama_user }}</option>
        @else 
          <option value="{{ $usr1->id }}">{{ $usr1->nama_user }}</option>
        @endif
      @endforeach
    </select>
     @error('id_pic_am')
      <div class="invalid-feedback flash" style="margin-top: 2px">
        {{ $message }}</div>
    @enderror
  </div>
</div>
<div class="form-group">
  <label for="id_pic_pm" style="font-weight:bolder">PIC PM</label>
  <br>
  <div class="@error('id_pic_pm') is-invalid @enderror">
    <select id="id_pic_pm" class="js-states form-control @error ('id_pic_pm') is-invalid @enderror" data-placeholder="Pilih PIC PM" style="width:100%" name="id_pic_pm">
      <option value="" hidden>PIC PM</option>
      @foreach($users as $usr1)
        @if (old('id_pic_pm') == $usr1->id)
          <option value="{{ $usr1->id }}" selected>{{ $usr1->nama_user }}</option>
        @else 
          <option value="{{ $usr1->id }}">{{ $usr1->nama_user }}</option>
        @endif
      @endforeach
    </select>
     @error('id_pic_pm')
      <div class="invalid-feedback flash" style="margin-top: 2px">
        {{ $message }}</div>
    @enderror
  </div>
</div>