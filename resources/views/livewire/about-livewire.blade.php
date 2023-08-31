<form enctype="multipart/form-data">
    <div class="row col-12 mb-3">

        <div class="col-4">
            <div class="form-group">
                <label for="">Phone number 1</label>
                <input type="text" wire:model="phone_number1" name="phone_number1"
                       class="form-control" placeholder="Telefon raqam 1" value="{{ $about->phone_number1 }}">
                @error('phone_number1')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                <label for="">Phone number 2</label>
                <input type="text" wire:model="phone_number2" name="phone_number2"
                       value="{{ $about->phone_number2 }}" class="form-control" placeholder="Telefon raqam 2">
                @error('phone_number2')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">WhatsApp</label>
                <input type="text" wire:model="whats_app" name="whats_app" value="{{ $about->whats_app }}"
                       class="form-control" placeholder="Write WhatsApp number">
                @error('whats_app')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row col-12 mb-3">
        <div class="col-12">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" wire:model="email" class="form-control" value="{{ $about->email }}"
                       placeholder="Email">
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row col-12 mb-3">
        <div class="col-4">
            <div class="form-group">
                <label for="">Instagram</label>
                <input type="text" name="instagram" wire:model="instagram" class="form-control"
                       value="{{ $about->instagram }}" placeholder="Instagram linki">
                @error('instagram')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                <label for="">Telegram</label>
                <input type="text" name="telegram" wire:model="telegram" class="form-control"
                       value="{{ $about->telegram }}" placeholder="Telegram linki">
                @error('telegram')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-4">
            <div class="form-group">
                <label for="">Facebook</label>
                <input type="text" name="facebook" wire:model="facebook" class="form-control"
                       value="{{ $about->facebook }}" placeholder="Facebook linki">
                @error('facebook')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>


    <div class="row col-12 mb-3">
        <div class="col-4">
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" wire:model="description" class="form-control" id="" cols="30"
                          rows="10">{{ $about->description }}</textarea>
                @error('description')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="col-4">
            <label for="">LOGO</label>
            <div class="form-group">
                {{-- <img src="" alt=""> --}}
                <img width="300px" src="{{ asset("laravel/public/storage/$about->image") }}">
            </div>
        </div>
        <div class="col-4">
            <div class="form-group">
                <label for="">Image</label>
                {{-- <img src="" alt=""> --}}
                <input type="file" name="image" wire:model="image" class="form-control">
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <button type="button" class="btn btn-info" wire:click="editabout">Update</button>
    </div>
</form>
