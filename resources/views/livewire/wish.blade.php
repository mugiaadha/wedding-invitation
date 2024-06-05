<div class="container wish py-5">
    <h2 class="text-center color-milo" style="font-family: 'BrandonText';">Doa & Ucapan</h2>
    <p class="text-center color-milo" style="font-family: 'BrandonText';">Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir, untuk memberikan do'a restu kepada kami.</p>
    <br>
    <div class="wish-wrapper mt-4">
        <form wire:submit.prevent="sendWish">
            @if(session()->has('thanks'))
                <div class="feedback text-center py-2 mb-3 bg-milo">
                    <i class="fa-solid fa-circle-check pe-2"></i>{{ session('thanks') }}
                </div>
            @endif
            <input type="hidden" wire:model="uniqueId" class="form-control shadow-none color-milo" style="border:1px solid #e4dccb; background-color:#fff;" id="name"  value="{{ $uniqueId }}" autocomplete="off" required>
            <div class="mb-3">
                <label for="name" class="form-label color-milo">Nama :</label>
                <input type="text" wire:model="name" class="form-control shadow-none color-milo" style="border:1px solid #e4dccb; background-color:#fff;" id="name"  value="{{ $name }}" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label color-milo">Doa dan Ucapan :</label>
                <textarea wire:model="message" class="form-control shadow-none color-milo" style="border:1px solid #e4dccb; background-color:#fff;" id="message" rows="4" value="{{ $message }}" placeholder="Berikan doa dan ucapan terbaik untuk kedua mempelai" required></textarea>
            </div>
            <div class="col-12 row p-0 m-0" align="center">
                <div class="col-4 p-0 m-0">
                    <button class="btn btn-success" wire:click.prevent="updateResponse('Hadir')" style="width:95%; font-size: 85%;">
                        @if ($response == 'Hadir')
                            <i class="fa-solid fa-check"></i>
                        @endif
                        Hadir
                    </button>
                </div>
                <div class="col-4 p-0 m-0">
                    <button class="btn btn-warning color-white" wire:click.prevent="updateResponse('Masih Ragu')" style="width:95%; font-size: 85%">
                        @if ($response == 'Masih Ragu')
                            <i class="fa-solid fa-check"></i>
                        @endif
                        Masih Ragu
                    </button>
                </div>
                <div class="col-4 p-0 m-0">
                    <button class="btn btn-danger" wire:click.prevent="updateResponse('Tidak Hadir')" style="width:95%; font-size: 85%">
                        @if ($response == 'Tidak Hadir')
                            <i class="fa-solid fa-check"></i>
                        @endif
                        Tidak Hadir
                    </button>
                </div>
            </div>  
            
            <div class="mt-4 text-center">
                <button class="btn-send color-milo">Send<i class="fa-solid fa-arrow-right ps-2"></i></button>
            </div>
        </form>
    </div>
</div>