<x-base>
     @if(request()->route() == null)
     {{$slot}}
    @elseif(in_array(request()->route()->getName(), ['dashboard','userprofile','stores.index','stores.create','stores.edit',"rewards.index","rewards.create",
    'rewards.edit','gifts.index','gifts.create','gifts.edit','gifts.variations.index','gifts.variations.create'
    ,'gifts.variations.edit','rewards.analytics','gifts.analytics','rewards.customer','gifts.customer','order.index','rewards.validation','gifts.validation']))

    {{-- Nav --}}
    @include('components.nav')
    {{-- SideNav --}}
    @include('components.sidenav')
    <main class="content">
        {{-- TopBar --}}
        @include('components.topbar')
        @if (session()->has("success"))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <span class="fas fa-bullhorn me-1"></span>
            {{session("success")}}
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session()->has("fail"))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="fas fa-bullhorn me-1"></span>
            {{session("fail")}}
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        
        {{ $slot }}
        {{-- Footer --}}
        @include('components.footer')
    </main>

    @elseif(in_array(request()->route()->getName(), ['register', '', 'showlogin',
    'forgot-password','reset-password','stores.visit','gifts.launch.index','gifts.launch.show','gifts.launch.resultat','clients.register','clients.index']))
     @if (session()->has("fail"))
     <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
         <span class="fas fa-bullhorn me-1"></span>
         {{session("fail")}}
         <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>
     @endif
    {{ $slot }}
    {{-- Footer --}}
    @include('components.footer2')

    @endif
</x-base>