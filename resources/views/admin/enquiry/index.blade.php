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
                                    <th>Message</th>
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
                                        <td>{{ Str::limit($enquiry->message, 50) }}</td>
                                        <td><a href="{{ $enquiry->page_url }}" target="_blank">View Page</a></td>
                                        <td>
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
@endsection
