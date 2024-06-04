<div class="qr-output mt-4">
    <div
    @if($popup == true)
    class="modal show" id="popModal" tabindex="-1" aria-labelledby="popup" style="display: block;" aria-modal="true" role="dialog"
    @else
    class="modal" id="popModal" tabindex="-1" aria-labelledby="popup" aria-hidden="true"
    @endif
    >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h5 class="modal-title" id="popup">Guest Attendance</h5>
            </div>
            <div class="modal-body">
              <div class="mt-3 text-center">
                    <h6>Presence The Event</h6>
                    <p class="m-0">{{ $quotaGuest }} Seat</p>
                    <p>{{ $timeAttend }}</p>
                    <img width="150" src="{{ asset('img/check.gif') }}" alt="Check">
                    <h3 class="m-0">Welcome, <strong>{{ $nameGuest }}</strong></h3>
                    <p><br>With Love, <br>Erika & Mugia</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    @if($popup == true)
        <div class="modal-backdrop fade show color-primer"></div>
    @endif
</div>