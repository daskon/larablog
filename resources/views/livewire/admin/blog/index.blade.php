<div class="card">
    <div class="card-header bg-transparent pb-2">
        <h5 class="card-title">Manage Post</h5>
        <h6 class="card-subtitle text-muted"></h6>        
        <button class="btn btn-primary btn-sm" x-on:click="ShowModal('admin.blog.edit')">
            <i class="align-middle"
            data-feather="plus-square"></i> <span class="align-middle">{{__('action.add')}}</span></button>
    </div>
    <div style="padding: 5px">
        <input type="text"  class="form-control" placeholder="Click Here To Search Blog Post By Tag Name" wire:model="search" 
           style="float: right;
           padding: 6px;
           border: none;
           font-size: 17px; 
           width:30%"/>
    </div>
    <div class="card-body">
        <livewire:admin.blog.edit />
        <livewire:admin.blog.delete />
        <x-table.manager :columns="$columns" :data="$data" :actions="$actions" />

        <div class="row">
            <div class="col-12">
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>