@extends('layouts.main')

@section('content')
<style>
    body {
        background-color: #F0F4F8;
        color: #2C3E50;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .text-primary { color: #5D8AA8; }
    .text-accent  { color: #E2725B; }
    .text-highlight { color: #88B04B; }
    .text-main    { color: #2C3E50; }

    .btn {
        padding: 10px 18px;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
    }

    .btn-success {
        background-color: #88B04B;
    }
    .btn-success:hover {
        background-color: #6F903D;
    }

    .btn-danger {
        background-color: #E2725B;
    }
    .btn-danger:hover {
        background-color: #C95E4A;
    }

    .card {
        background-color: #FFFFFF;
        border-radius: 8px;
        padding: 24px;
        margin-bottom: 20px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .booking-card {
        margin-bottom: 15px;
    }

    .customer-name {
    }

    .search-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .search-input {
        width: 300px;
        padding: 10px;
    }

    .booking-list {
    }

    .action-buttons {
        display: flex;
        gap: 10px;
    }

    .status-text {
        font-weight: bold;
    }

    .confirmed-status {
        color: #88B04B;
    }

    .fade-out {
        transition: opacity 0.5s;
        opacity: 0;
    }

    .confirmed-border {
        border-left: 5px solid #88B04B;
    }

    .booking-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<div class="container-fluid">
    <div class="search-container">
        <h2 class="text-primary">Booking Management</h2>

        <input type="text"
               id="searchInput"
               class="form-control search-input"
               placeholder="Search by customer name..."
               onkeyup="filterBookings()">
    </div>

    <div id="booking-list" class="booking-list">
        @forelse ($pendingBookings as $booking)
            <div class="card booking-card" id="booking-card-{{ $booking->id }}">
                <div class="booking-info">

                    <div>
                        <h3 class="text-main" style="margin: 0;">{{ $booking->service->name }}</h3>
                        <p style="margin: 5px 0;"><strong>Customer:</strong> <span class="customer-name">{{ $booking->user->name }}</span></p>
                        <p style="margin: 5px 0;"><strong>Date:</strong> {{ $booking->date_time->format('d M Y, h:i A') }}</p>
                        <p style="margin: 5px 0;"><strong>Status:</strong> <span id="status-text-{{ $booking->id }}" class="text-primary status-text">PENDING</span></p>
                    </div>

                    <div id="action-buttons-{{ $booking->id }}" class="action-buttons">
                        <button class="btn btn-success" onclick="updateStatus({{ $booking->id }}, 'approve', this)">
                            Approve
                        </button>
                        <button class="btn btn-danger" onclick="updateStatus({{ $booking->id }}, 'reject', this)">
                            Reject
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <div class="card">
                <p class="text-main" style="text-align: center;">No pending bookings found.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection

@push('scripts')
<script>
    function filterBookings() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const cards = document.getElementsByClassName('booking-card');

        for (let i = 0; i < cards.length; i++) {
            let nameSpan = cards[i].getElementsByClassName('customer-name')[0];
            let txtValue = nameSpan.textContent || nameSpan.innerText;

            if (txtValue.toLowerCase().indexOf(filter) > -1) {
                cards[i].style.display = "";
            } else {
                cards[i].style.display = "none";
            }
        }
    }

    async function updateStatus(bookingId, action, btnElement) {
        const originalText = btnElement.innerText;
        btnElement.innerText = "Processing...";
        btnElement.disabled = true;

        const url = `/admin/bookings/${bookingId}/${action}`;
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                },
                body: JSON.stringify({})
            });

            if (response.ok) {
                const statusSpan = document.getElementById(`status-text-${bookingId}`);
                const buttonDiv = document.getElementById(`action-buttons-${bookingId}`);
                const cardDiv = document.getElementById(`booking-card-${bookingId}`);

                if (action === 'approve') {
                    statusSpan.innerText = "CONFIRMED";
                    statusSpan.classList.add('confirmed-status');
                    buttonDiv.remove();
                    cardDiv.classList.add('confirmed-border');
                } else {
                    cardDiv.classList.add('fade-out');
                    setTimeout(() => cardDiv.remove(), 500);
                }
            } else {
                alert('Error updating status.');
                btnElement.innerText = originalText;
                btnElement.disabled = false;
            }
        } catch (error) {
            console.error('Error:', error);
            btnElement.innerText = originalText;
            btnElement.disabled = false;
        }
    }
</script>
@endpush
