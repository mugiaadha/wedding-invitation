<div class="container invite py-5">
    <h3><i class="fa-solid fa-envelope-open-text pe-2 "></i>Invite</h3>
    <p>{{ $total_invite }} Invitation</p>
    <livewire:invite-create></livewire:invite-create>
    @if(session()->has('invited'))
        <div class="invited text-center py-2 mb-3">
            <i class="fa-solid fa-circle-check pe-2"></i>{{ session('invited') }}
        </div>
    @endif
    @if(session()->has('deleted'))
        <div class="deleted text-center py-2 mb-3">
            <i class="fa-solid fa-circle-check pe-2"></i>{{ session('deleted') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-default">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Quota</th>
            <th scope="col">Unique ID</th>
            <th scope="col">Response</th>
            <th scope="col">Presence</th>
            <th scope="col">Time Attend</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
            <tbody wire:poll.10s>
                @if($invites->count())
                @foreach ($invites as $invite)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td data-bs-toggle="modal" data-bs-target="#linkModal{{ $invite->id }}">{{ $invite->name }}</td>
                        <td data-bs-toggle="modal" data-bs-target="#linkModal{{ $invite->id }}">{{ $invite->quota }} Seat</td>
                        <td data-bs-toggle="modal" data-bs-target="#linkModal{{ $invite->id }}">{{ $invite->uniqid }}</td>
                        <td data-bs-toggle="modal" data-bs-target="#linkModal{{ $invite->id }}">{{ $invite->response }}</td>
                        <td data-bs-toggle="modal" data-bs-target="#linkModal{{ $invite->id }}">
                            @if($invite->presence == 'true')
                                <span>Hadir</span>
                            @endif
                            @if($invite->presence == 'false')
                                <span>Belum Hadir</span>
                            @endif
                        </td>
                        <td data-bs-toggle="modal" data-bs-target="#linkModal{{ $invite->id }}">
                            {{ $invite->time }}
                        </td>
                        <td class="d-flex">
                            <button class="btn btn-default" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $invite->id }}"><i class="fa-solid fa-trash-can text-danger"></i></button>
                            <div class="modal fade" id="deleteModal{{ $invite->id }}" tabindex="-1" aria-labelledby="modalDelete" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header justify-content-center">
                                      <h5 class="modal-title" id="modalDelete">Delete Invitation</h5>
                                    </div>
                                    <div class="modal-body">
                                        <strong>Are you sure to delete ?</strong>
                                        <div class="mt-3">
                                            <p>Name : {{ $invite->name }}</p>
                                            <p>Quota : {{ $invite->quota }}</p>
                                            <p>Unique ID : {{ $invite->uniqid }}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                                      <a wire:click="deleteInvite({{ $invite->id }})" href="#" class="btn btn-danger shadow-none" data-bs-dismiss="modal">Delete</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <a href="/invitation/{{ $invite->uniqid }}" target="_blank" class="btn btn-default shadow-none"><i class="fa-solid fa-paperclip text-primary"></i></a>
                            <a href="/send-template/{{ $invite->uniqid }}" target="_blank" class="btn btn-default shadow-none"><i class="fa-solid fa-paper-plane text-primary"></i></a>
                        </td>
                    </tr>

                    <div class="modal fade" id="linkModal{{ $invite->id }}" tabindex="-1" aria-labelledby="modalLink" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header justify-content-center">
                                <h5 class="modal-title" id="modalLink">Link Invitation</h5>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <p>Name : {{ $invite->name }}</p>
                                    <p>Quota : {{ $invite->quota }}</p>
                                    <p>Unique ID : {{ $invite->uniqid }}</p>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control shadow-none" id="share"
                                    value="{{ route('invite', ['invite'=>$invite->uniqid]) }}" aria-describedby="copy-link">
                                    <button class="btn btn-outline-secondary shadow-none" data-clipboard-target="#share" type="button" id="copy-link">Copy</button>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else
                <tr>
                    <td class="text-center" colspan="8"><strong><i class="fa-brands fa-bilibili pe-2"></i>Empty</strong></td>
                </tr>
                @endif
         </tbody>
    </table>
</div>