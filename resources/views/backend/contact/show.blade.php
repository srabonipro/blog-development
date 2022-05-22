<x-app-layout>

    <div class="content-wrapper">
        @if ($contact->subject)
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $contact->subject }}</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('contacts.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <tr>
                                        <th style="width: 150px">Sender Name</th>
                                        <td>{{ $contact->name }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 150px">Sender Email</th>
                                        <td>{{ $contact->email }}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 150px">Message</th>
                                        <td>{{ $contact->message }}</td>
                                    </tr>
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
