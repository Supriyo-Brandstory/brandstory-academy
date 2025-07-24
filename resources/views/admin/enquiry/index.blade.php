@extends('admin.layout.main')
@section('title', 'Enquiries | ')
@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title">All Enquiries</h5>
                        @if (Session::has('msg'))
                            <p id="flash-message" class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Program</th>
                                    {{-- <th>Message</th> --}}
                                    <th>Page URL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $startIndex = ($enquiries->currentPage() - 1) * $enquiries->perPage() + 1; @endphp
                                @foreach ($enquiries as $enquiry)
                                    <tr>
                                        <td>{{ $startIndex++ }}</td>
                                        <td>{{ $enquiry->name }}</td>
                                        <td>{{ $enquiry->phone }}</td>
                                        <td>{{ $enquiry->email }}</td>
                                        <td>{{ $enquiry->program }}</td>
                                        {{-- <td>{{ Str::limit($enquiry->message, 50) }}</td> --}}
                                        <td><a href="{{ $enquiry->page_url }}" target="_blank">View Page</a></td>
                                        <td>
                                            <!-- View Button -->
                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                                data-bs-target="#enquiryModal{{ $enquiry->id }}">
                                                <i class="ri-eye-fill"></i>
                                            </button>

                                            <!-- Delete Form -->
                                            <form method="POST" action="{{ route('enquiries.destroy', $enquiry->id) }}"
                                                class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger show_confirm" title="Delete">
                                                    <i class="ri-delete-bin-2-fill"></i>
                                                </button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $enquiries->links() }}

                    </div>
                </div>

            </div>
        </div>
    </section>
    @foreach ($enquiries as $enquiry)
        <!-- Modal -->
        <div class="modal fade" id="enquiryModal{{ $enquiry->id }}" tabindex="-1"
            aria-labelledby="enquiryModalLabel{{ $enquiry->id }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="enquiryModalLabel{{ $enquiry->id }}">Enquiry Details - {{ $enquiry->name }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Name:</strong> {{ $enquiry->name }}</p>
                        <p><strong>Phone:</strong> {{ $enquiry->phone }}</p>
                        <p><strong>Email:</strong> {{ $enquiry->email }}</p>
                        <p><strong>Program:</strong> {{ $enquiry->program }}</p>
                        <p><strong>Message:</strong><br>{{ $enquiry->message }}</p>
                        <p><strong>Page URL:</strong> <a href="{{ $enquiry->page_url }}"
                                target="_blank">{{ $enquiry->page_url }}</a></p>
                        <p><strong>Submitted At:</strong> {{ $enquiry->created_at->format('d M Y, h:i A') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection