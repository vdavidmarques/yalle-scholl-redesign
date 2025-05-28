@csrf

<div class="mb-4">
    <label class="block font-semibold mb-1" for="title">Título</label>
    <input type="text" name="title" id="title" value="{{ old('title', $slide->title ?? '') }}" class="w-full border rounded px-3 py-2" required>
    @error('title')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1" for="description">Descrição</label>
    <textarea name="description" id="description" class="w-full border rounded px-3 py-2">{{ old('description', $slide->description ?? '') }}</textarea>
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1" for="button_text">Texto do Botão</label>
    <input type="text" name="button_text" id="button_text" value="{{ old('button_text', $slide->button_text ?? '') }}" class="w-full border rounded px-3 py-2">
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1" for="button_link">Link do Botão</label>
    <input type="text" name="button_link" id="button_link" value="{{ old('button_link', $slide->button_link ?? '') }}" class="w-full border rounded px-3 py-2">
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1" for="order">Ordem</label>
    <input type="number" name="order" id="order" value="{{ old('order', $slide->order ?? 0) }}" class="w-full border rounded px-3 py-2">
</div>

<div class="mb-4">
    <label class="block font-semibold mb-1" for="image">Imagem</label>
    <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2">
    @if (!empty($slide->image))
        <img src="{{ asset('storage/' . $slide->image) }}" alt="Imagem atual" class="mt-2 max-w-xs rounded">
    @endif
    @error('image')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
