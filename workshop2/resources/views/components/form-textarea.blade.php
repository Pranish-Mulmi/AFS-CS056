@props([
'name',
'label',
'value' => '',
'rows' => 4,
])

<div class="form-group">
    <label for="{{ $name }}" class="form-label">
        {{ $label }}
    </label>

```
<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    rows="{{ $rows }}"
    class="form-control"
>{{ old($name, $value) }}</textarea>

@error($name)
    <p class="field-error">{{ $message }}</p>
@enderror
```

</div>