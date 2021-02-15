<form method="PUT" action="{{ route('changepic.update') }}">
  <div class="form-group">
    <label for="id_pic_product" style="font-weight:bolder">PIC Product</label>
    <br>
    <div class="@error('id_pic_product') is-invalid @enderror">
      <select id="id_pic_pm" class="js-states form-control @error ('id_pic_product') is-invalid @enderror" data-placeholder="Pilih PIC Product" style="width:100%" name="id_pic_product">
        <option value="" hidden>PIC Product</option>
        @foreach($listproduct as $lpr)
          @if (old('id_pic_pm') == $lpm->id)
            <option value="{{ $lpr->id }}" selected>{{ $lpr->nama_user }}</option>
          @else 
            <option value="{{ $lpr->id }}">{{ $lpr->nama_user }}</option>
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
        @foreach($listam as $lam)
          @if (old('id_pic_am') == $lam->id)
            <option value="{{ $lam->id }}" selected>{{ $lam->nama_user }}</option>
          @else 
            <option value="{{ $lam->id }}">{{ $lam->nama_user }}</option>
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
        @foreach($listpm as $lpm)
          @if (old('id_pic_pm') == $lpm->id)
            <option value="{{ $lpm->id }}" selected>{{ $lpm->nama_user }}</option>
          @else 
            <option value="{{ $lpm->id }}">{{ $lpm->nama_user }}</option>
          @endif
        @endforeach
      </select>
       @error('id_pic_pm')
        <div class="invalid-feedback flash" style="margin-top: 2px">
          {{ $message }}</div>
      @enderror
    </div>
  </div>
</form>