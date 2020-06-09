<div>
    {{-- The best athlete wants his opponent at his best. --}}
    {{-- create table contact --}}
    <div class="row">
        <div class="col-12">
            {{-- @if (session('message'))
                <div class="alert alert-info">{{session('message')}}</div>
            @endif --}}

            @if ($updateStatus == true)
                <livewire:contact-update>
                @else
                    <livewire:contact-create>
            @endif
        </div>
    </div>

    {{-- tampilan table contact --}}
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{$contacts ->perPage()*($contacts->currentPage()-1)+$count}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->phone}}</td>
                            <td>
                                {{-- getContact() akan masuk ke controller contactIndex --}}
                                <button wire:click="getContact({{$contact->id}})" class="btn btn-warning">Edit</button>
                                <button wire:click="destroy({{$contact->id}})" class="btn btn-danger">Drop</button>
                                <a href="{{route('show.contact', $contact->name)}}" class="btn btn-primary">Detail</a>
                            </td>
                            
                        </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
            {{$contacts->links()}}
        </div>
    </div>
</div>
