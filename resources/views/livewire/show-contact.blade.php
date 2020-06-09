<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="row">
        <div class="col-8 offset-2">
            <ul class="list-group">
              <li class="list-group-item">{{ $contact->name }}</li>
              <li class="list-group-item">{{ $contact->phone }}</li>
              <li class="list-group-item">{{ $contact->created_at }}</li>
            </ul>
            <a href="{{ route('home') }}" class="btn btn-primary mt-4">Kembali</a>
        </div>
    </div>
</div>
