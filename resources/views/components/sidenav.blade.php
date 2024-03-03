<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse " data-simplebar>
  <div class="sidebar-inner px-2 pt-3">
    <ul class="nav flex-column pt-3 pt-md-2 px-2">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link  align-items-center">
          <span class="sidebar-icon me-2">
            <img src="{{asset("assets/logo.png")}}" height="40" width="40" alt="Volt Logo">
          </span>
          <span class="mt-2 ms-2 sidebar-text font-weight-bold">
            FIDELISOR
          </span>
        </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
        <a href="/dashboard" class="nav-link">
          <span class="sidebar-icon"> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon icon-xs me-2">
              <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
          </span></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'stores' ? 'active' : '' }}">
        <a href="/stores" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512"> 
              <path d="M602 118.6L537.1 15C531.3 5.7 521 0 510 0H106C95 0 84.7 5.7 78.9 15L14 118.6c-33.5 53.5-3.8 127.9 58.8 136.4 4.5 .6 9.1 .9 13.7 .9 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18.1 20.1 44.3 33.1 73.8 33.1 4.7 0 9.2-.3 13.7-.9 62.8-8.4 92.6-82.8 59-136.4zM529.5 288c-10 0-19.9-1.5-29.5-3.8V384H116v-99.8c-9.6 2.2-19.5 3.8-29.5 3.8-6 0-12.1-.4-18-1.2-5.6-.8-11.1-2.1-16.4-3.6V480c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32V283.2c-5.4 1.6-10.8 2.9-16.4 3.6-6.1 .8-12.1 1.2-18.2 1.2z"/>
            </svg>
          </span>
          <span class="sidebar-text">STORE</span>
        </a>
      </li>      
      <li class="nav-item {{ Request::segment(1) == 'rewards' && Request::segment(2) !== 'analytics' && Request::segment(2) !== 'customer' && Request::segment(2) !== 'validation' ? 'active' : '' }}">

        @if (Auth()->user()->stores->first() != null)
        <a href="{{route("rewards.index",Auth()->user()->stores->first()->id)}}" class="nav-link">      
          @else
        <a href="{{route("stores.index")}}" class="nav-link">      
                    
        @endif
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-xs me-2">
              <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
            </svg>
          </span>
          <span class="sidebar-text">REWARD</span>
        </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'gifts' && Request::segment(2) !== 'analytics' && Request::segment(2) !== 'customer' && Request::segment(2) !== 'validation' ? 'active' : '' }}">
        @if (Auth()->user()->stores->first() != null)
        <a href="{{route("gifts.index",Auth()->user()->stores->first()->id)}}" class="nav-link">      
          @else
        <a href="{{route("stores.index")}}" class="nav-link">      
                    
        @endif
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-xs me-2" viewBox="0 0 512 512">
              <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
            </svg>
          </span>
          <span class="sidebar-text">GIFT CARD</span>
        </a>
      </li>
      <li class="nav-item {{ Request::segment(1) == 'order' ? 'active' : '' }}">
        @if (Auth()->user()->stores->first() != null)
        <a href="{{route("order.index",Auth()->user()->stores->first()->id)}}" class="nav-link">      
          @else
        <a href="{{route("stores.index")}}" class="nav-link">      
                    
        @endif   
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="icon icon-xs me-2"  >
              <path d="M528.1 301.3l47.3-208C578.8 78.3 567.4 64 552 64H159.2l-9.2-44.8C147.8 8 137.9 0 126.5 0H24C10.7 0 0 10.7 0 24v16c0 13.3 10.7 24 24 24h69.9l70.2 343.4C147.3 417.1 136 435.2 136 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-15.7-6.4-29.8-16.8-40h209.6C430.4 426.2 424 440.3 424 456c0 30.9 25.1 56 56 56s56-25.1 56-56c0-22.2-12.9-41.3-31.6-50.4l5.5-24.3c3.4-15-8-29.3-23.4-29.3H218.1l-6.5-32h293.1c11.2 0 20.9-7.8 23.4-18.7z"/>
            </svg>
          </span>
          <span class="sidebar-text">ORDERS</span>
        </a>
      </li>
      <li class="nav-item">
        <span
          class="nav-link  {{Request::segment(2) !== 'analytics' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#analytics">
          <span>
            <span class="sidebar-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon icon-xs me-3">
                <path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/>
              </svg>
            </span>
            <span class="sidebar-text">ANALYTICS</span>
          </span>
        </span>
        <div class="multi-level collapse {{ Request::segment(2) == 'analytics'? 'show' : '' }}" role="list"
          id="analytics" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(2) == 'analytics' && Request::segment(1) == 'rewards'? 'active' : '' }}">
              @if (Auth()->user()->stores->first() != null)
              <a href="{{route("rewards.analytics",Auth()->user()->stores->first()->id)}}" class="nav-link">      
                @else
              <a href="{{route("stores.index")}}" class="nav-link">      
                          
              @endif
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-xs me-2">
                    <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Reward Analytics</span>
              </a>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'analytics' && Request::segment(1) == 'gifts'? 'active' : '' }}">
              @if (Auth()->user()->stores->first() != null)
              <a href="{{route("gifts.analytics",Auth()->user()->stores->first()->id)}}" class="nav-link">      
                @else
              <a href="{{route("stores.index")}}" class="nav-link">      
                          
              @endif
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-xs me-2" viewBox="0 0 512 512">
                    <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Gift Analytics</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <span
          class="nav-link {{Request::segment(2) !== 'customer' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#CUSTOMER">
          <span>
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-xs me-2" viewBox="0 0 640 512">
              <path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM609.3 512H471.4c5.4-9.4 8.6-20.3 8.6-32v-8c0-60.7-27.1-115.2-69.8-151.8c2.4-.1 4.7-.2 7.1-.2h61.4C567.8 320 640 392.2 640 481.3c0 17-13.8 30.7-30.7 30.7zM432 256c-31 0-59-12.6-79.3-32.9C372.4 196.5 384 163.6 384 128c0-26.8-6.6-52.1-18.3-74.3C384.3 40.1 407.2 32 432 32c61.9 0 112 50.1 112 112s-50.1 112-112 112z"/>
            </svg>
            </span>
            <span class="sidebar-text">CUSTOMER</span>
          </span>      
        </span>
        <div class="multi-level collapse {{ Request::segment(2) == 'customer'? 'show' : '' }}" role="list"
          id="CUSTOMER" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(2) == 'customer' && Request::segment(1) == 'rewards'? 'active' : '' }}"> 
                @if (Auth()->user()->stores->first() != null)
                    <a href="{{route("rewards.customer",Auth()->user()->stores->first()->id)}}" class="nav-link">      
                      @else
                    <a href="{{route("stores.index")}}" class="nav-link">      
                                
                    @endif
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-xs me-2">
                    <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Reward Customer</span>
              </a>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'customer' && Request::segment(1) == 'gifts'? 'active' : '' }}">
              @if (Auth()->user()->stores->first() != null)
              <a href="{{route("gifts.customer",Auth()->user()->stores->first()->id)}}" class="nav-link">      
                @else
              <a href="{{route("stores.index")}}" class="nav-link">      
                          
              @endif
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-xs me-2" viewBox="0 0 512 512">
                    <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Gift Card Customer</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <span
          class="nav-link {{Request::segment(2) !== 'validation' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
          data-bs-toggle="collapse" data-bs-target="#validation">
          <span>
          <span class="sidebar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon icon-xs me-2"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
            </svg>
            </span>
            <span class="sidebar-text">VALIDATION</span>
          </span>      
        </span>
        <div class="multi-level collapse {{ Request::segment(2) == 'validation'? 'show' : '' }}" role="list"
          id="validation" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item {{ Request::segment(2) == 'validation' && Request::segment(1) == 'rewards'? 'active' : '' }}"> 
                @if (Auth()->user()->stores->first() != null)
                    <a href="{{route("rewards.validation",Auth()->user()->stores->first()->id)}}" class="nav-link">      
                      @else
                    <a href="{{route("stores.index")}}" class="nav-link">      
                                
                    @endif
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512 " class="icon icon-xs me-2">
                    <path d="M97.1 362.6c-8.7-8.7-4.2-6.2-25.1-11.9-9.5-2.6-17.9-7.5-25.4-13.3L1.2 448.7c-4.4 10.8 3.8 22.5 15.4 22l52.7-2L105.6 507c8 8.4 22 5.8 26.4-5l52.1-127.6c-10.8 6-22.9 9.6-35.3 9.6-19.5 0-37.8-7.6-51.6-21.4zM382.8 448.7l-45.4-111.2c-7.6 5.9-15.9 10.8-25.4 13.3-21.1 5.6-16.5 3.2-25.1 11.9-13.8 13.8-32.1 21.4-51.6 21.4-12.4 0-24.5-3.6-35.3-9.6L252 502c4.4 10.8 18.4 13.4 26.4 5l36.3-38.3 52.7 2c11.6 .4 19.8-11.3 15.4-22zM263 340c15.3-15.6 17-14.2 38.8-20.1 13.9-3.8 24.8-14.8 28.5-29 7.5-28.4 5.5-25 26-45.8 10.2-10.4 14.1-25.4 10.4-39.6-7.5-28.4-7.5-24.4 0-52.8 3.7-14.1-.3-29.2-10.4-39.6-20.4-20.8-18.5-17.4-26-45.8-3.7-14.1-14.6-25.2-28.5-29-27.9-7.6-24.5-5.6-45-26.4-10.2-10.4-25-14.4-38.9-10.6-27.9 7.6-24 7.6-51.9 0-13.9-3.8-28.7 .3-38.9 10.6-20.4 20.8-17.1 18.8-44.9 26.4-13.9 3.8-24.8 14.8-28.5 29-7.5 28.4-5.5 25-26 45.8-10.2 10.4-14.2 25.4-10.4 39.6 7.5 28.4 7.5 24.4 0 52.8-3.7 14.1 .3 29.2 10.4 39.6 20.4 20.8 18.5 17.4 26 45.8 3.7 14.1 14.6 25.2 28.5 29C104.6 326 106.3 325 121 340c13.2 13.5 33.8 15.9 49.7 5.8a39.7 39.7 0 0 1 42.5 0c15.9 10.1 36.5 7.7 49.7-5.8zM97.7 176c0-53 42.2-96 94.3-96s94.3 43 94.3 96-42.2 96-94.3 96-94.3-43-94.3-96z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Reward Validation</span>
              </a>
            </li>
            <li class="nav-item {{ Request::segment(2) == 'validation' && Request::segment(1) == 'gifts'? 'active' : '' }}">
              @if (Auth()->user()->stores->first() != null)
              <a href="{{route("gifts.validation",Auth()->user()->stores->first()->id)}}" class="nav-link">      
                @else
              <a href="{{route("stores.index")}}" class="nav-link">      
                          
              @endif
                <span class="sidebar-icon">
                  <svg xmlns="http://www.w3.org/2000/svg"  class="icon icon-xs me-2" viewBox="0 0 512 512">
                    <path d="M190.5 68.8L225.3 128H224 152c-22.1 0-40-17.9-40-40s17.9-40 40-40h2.2c14.9 0 28.8 7.9 36.3 20.8zM64 88c0 14.4 3.5 28 9.6 40H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H480c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H438.4c6.1-12 9.6-25.6 9.6-40c0-48.6-39.4-88-88-88h-2.2c-31.9 0-61.5 16.9-77.7 44.4L256 85.5l-24.1-41C215.7 16.9 186.1 0 154.2 0H152C103.4 0 64 39.4 64 88zm336 0c0 22.1-17.9 40-40 40H288h-1.3l34.8-59.2C329.1 55.9 342.9 48 357.8 48H360c22.1 0 40 17.9 40 40zM32 288V464c0 26.5 21.5 48 48 48H224V288H32zM288 512H432c26.5 0 48-21.5 48-48V288H288V512z"/>
                  </svg>
                </span>
                <span class="sidebar-text">Gift Card Validation</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
    </ul>
  </div>
</nav>