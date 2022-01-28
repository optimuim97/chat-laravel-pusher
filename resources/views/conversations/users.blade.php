@foreach ($users as $user)
<a href="{{ route('conversations.show', $user->id) }}">
    <div class="p-3 d-flex align-items-center border-bottom osahan-post-header overflow-hidden">
        <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                src="{{ asset('asset/images/user/s1.png') }}" alt=""></div>
        <div class="font-weight-bold mr-1 overflow-hidden">
            <div class="text-truncate">
                {{ $user->name}}
                @if (isset($unread[$user->id]))

                    <span class='badge badge-pill badge-danger'>({{ $unread[$user->id] }})</span>

                @endif
            </div>
            <div class="small text-truncate overflow-hidden text-black-50"><i
                    class="mdi mdi-check text-primary"></i> Pellentesque semper ex diam,
                at tristique ipsum varius sed. Pellentesque non metus ullamcorper</div>
        </div>
        <span class="ml-auto mb-auto">
            <div class="text-right text-muted pt-1 small">00:21PM</div>
        </span>
    </div>
   </a>
@endforeach
