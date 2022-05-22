<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Contact Messages</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Sender Name</th>
                                            <th>Sender Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ Str::limit($contact->subject, 40, ' ...') }}</td>
                                            <td>{{ Str::limit($contact->message, 70, ' ...') }}</td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-warning mr-2" title="Show"><i class="fas fa-eye"></i></a>
                                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">
                                                <p class="text-danger" style="text-align: center; margin: 10px 0;">Nothing found</p>
                                            </td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


</x-app-layout>
