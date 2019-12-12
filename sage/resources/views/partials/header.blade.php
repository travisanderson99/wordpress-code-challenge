<header class="header"> 
	<div class="header__primary">
		<div class="header__primary-inner navbar inner navbar-expand-md p-0">
      <a id="header-mobile-toggle" class="burger-menu-icon">
        <span class="burger-menu-icon__line"></span>
      </a>
			<div class="nav navbar-nav mr-auto">
				<div class="d-flex flex-row">
					<div class="header-logo">
						<a href="{{ home_url('/') }}">
							<img class="site-logo" alt="{{ get_bloginfo('name') }}" src="{{ App::site_logo() }}">
						</a>
          </div>
          <div class="header-side">
						<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 554.4 792'><path d='M-8.7-2.9c126.3,0.8,252.6,1.6,378.9,2.4c-75.4,167-151.3,333.8-226.2,501.1c-43.1, 96.3-84.4, 193.3-126.5, 290.1c-39.6, 7.9-25.7-22-25.7-38.5C-8.9, 500.4-8.7, 248.8-8.7-2.9z'/><path d='M17.4,790.6c42.1-96.7,83.5-193.8,126.5-290.1C218.8,333.3,294.7,166.5,370.2-0.5c51.4,0,102.8,0,162.3,0C411.6, 266.5, 293, 528.6, 174.4, 790.6C122.1, 790.6, 69.8, 790.6, 17.4, 790.6z' style='opacity: .8'/></svg>
					</div>
				</div>
			</div>
      <div class="navbar-nav ml-auto">
        <ul class="main-nav__list">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
          @endif
        </ul>
      </div>
		</div>
	</div>
</header>
