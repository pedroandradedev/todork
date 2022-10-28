<div class="input-area">
  <input
   id="{{$name}}"
   name="{{$name}}"
   type="checkbox"
   {{empty($checked) ? '' : 'checked'}}
  />
  <label for="{{$name}}">{{$label ?? ''}}</label>
</div>