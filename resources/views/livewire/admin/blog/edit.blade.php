<div>
    <x-modal wire:model="show"  wire:is-form="1" wire:form-reset='1'>
        <x-slot name="footer">
            <button type="button" class="btn btn-secondary btn-sm" x-on:click="show = false">
                <i class="align-middle" data-feather="x-square"></i>
                <span class="align-middle">Close</span>
            </button>
            <button type="submit" class="btn btn-primary  btn-sm">
                <i class="align-middle" data-feather="save"></i>
                <span class="align-middle">Save</span>
            </button>
        </x-slot>
        <x-slot name="title">
        @if($IsNew)
            {{ __('form.post.title.add') }}
        @else
            {{ __('form.post.title.edit') }}
        @endif
        </x-slot>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input wire:model.defer="title" type="text" class="form-control" id="name" placeholder="{{__('form.post.field.name')}}">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="tag" class="form-label">Tag</label>            
            <input type="text" id="tag" wire:model.defer="tag" class="form-control" placeholder="Tags">
            @error('tag') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input wire:model.defer="email" type="email" class="form-control" id="email" placeholder="email">
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea wire:model.defer="body" class="form-control" id="body" placeholder="Content"></textarea>
            @error('body') <span class="error">{{ $message }}</span> @enderror
        </div>
    </x-modal>
</div>