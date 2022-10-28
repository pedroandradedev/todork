<div class="input-area">
  <label for="{{$name}}">{{$label ?? ''}}</label>
  <input
    id="{{$name}}"
    name="{{$name}}"
    type="{{empty($type) ? 'text' : $type}}"
    placeholder="{{$placeholder ?? ''}}"
    {{empty($required) ? '' : 'required'}}
    value="{{$value ?? ''}}"
  />
</div>