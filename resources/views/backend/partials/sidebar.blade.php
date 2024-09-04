<div class="sidebar_main">
    <div class="sidebar_items">
        <div class="sidebar_logo">
            <a href="/"><img src="{{asset('backend/assets/img/side_logo.png')}}"></a>
        </div>
        <div class="side_bar_nav">
            <ul class="side_menu list-unstyled">
               @if(auth()->user()->hasRole('general_user') || auth()->user()->hasRole('admin') || auth()->user()->hasRole('content_creator'))
                <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('backend/assets/img/square.png') }}" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
              @endif
              
              @if(auth()->user()->hasRole('admin'))
                <li class="{{ Request::routeIs('subscription.create') ? 'active' : '' }}">
                    <a href="{{ route('subscription.lists') }}">
                        <img src="{{ asset('backend/assets/img/tag.png') }}" alt="">
                        <span>Pricing</span>
                    </a>
                </li>
                 @endif
                 @if(auth()->user()->hasRole('admin') || auth()->user()->hasRole('general_user') || auth()->user()->hasRole('content_creator'))
                <li class="{{ Request::routeIs('profile_update') ? 'active' : '' }}">
                    <a href="{{route('profile_update')}}">
                        <img src="{{ asset('backend/assets/img/house.png') }}" alt="">
                        <span>Profile Update</span>
                    </a>
                </li>
                
                  <li class="{{ Request::routeIs('user.prompts') ? 'active' : '' }}">
                    <a href="{{ route('user.prompts') }}">
                        <img src="{{ asset('backend/assets/img/tag.png') }}" alt="">
                        <span>Prompts</span>
                    </a>
                </li>
                 @endif
                 
                 
            

            </ul>
        </div>
    </div>
    <!--<div class="logout_btn">-->
    <!--    <a href="{{route('logout')}}" id="logoutLink"><i class="fa-solid fa-power-off"></i></a>-->
    <!--</div>-->
</div>
<script>
    document.getElementById('logoutLink').addEventListener('click', function(event) {
        event.preventDefault();
        fetch('{{ route('logout') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        }).then(response => {
            if (response.ok) {
                window.location.href = '/'; // Redirect to home page
            }
        }).catch(error => console.error('Logout failed:', error));
    });
</script>
