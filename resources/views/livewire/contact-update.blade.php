<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <form wire:submit.prevent="update">
        <input type="hidden" wire:model="contactId">
        <div class="form-group">
            <div class="form-row">
                <div class="col-5">
                    <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Name">
                    @error('name')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-5">
                    <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Number Phone">
                    @error('phone')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-2">
                    <button type="submit" name="submit" class="btn btn-dark btn-block ">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>
