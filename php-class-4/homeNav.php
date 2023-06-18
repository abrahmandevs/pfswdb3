<!-- Section-of-homeNav  -->
<nav x-data="{<?php echo(isset($errors) && $modal== 'error' ? 'open: true' : 'open: false')??'' ?>}" class="bg-gray-800">
		
		<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
		  <div class="flex items-center justify-between h-16">
				 <!-- Mobile menu button-->
				<button type="button" class="z-20 sm:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="open = !open">
					<span class="sr-only">Open main menu</span>
					<svg x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
					</svg>
					<svg class="hidden h-6 w-6" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			
			<div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start z-20">
			  <div class="flex-shrink-0 flex items-center">
				<img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
				<img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
			  </div>
			  <div class="hidden sm:block sm:ml-6 group">
				<div class="flex space-x-4">
					<a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
					<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
					<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Services</a>
					<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
				</div>
			  </div>
			</div>
			
			<?php
				$url=  basename(dirname($_SERVER['PHP_SELF']));
				if(isset($_SESSION['user'])){
					if($url == 'dashboard'){
			?>
				<div x-data="{ dropdown: false }" x-init="init()" @keydown.escape.stop="dropdown = false; focusButton()" @click.away="dropdown = false" class="ml-3 relative z-50">
						<button type="button" class="px-3 bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" x-ref="button" @click=" dropdown =! dropdown" @keyup.space.prevent="dropdown =! dropdown" @keydown.enter.prevent="dropdown =! dropdown" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="dropdown.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">Profile
							
						</button>

					<div x-show="dropdown" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="dropdown = false" @keydown.enter.prevent="dropdown = false; focusButton()" @keyup.space.prevent="dropdown = false; focusButton()" style="display: none;">
						<a href="#" class="block px-4 py-2 text-sm text-gray-700" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100': activeIndex === 0 }" role="menuitem" tabindex="-1" id="user-menu-item-0" @mouseenter="activeIndex = 0" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Your Profile</a>
						<a href="#" class="block px-4 py-2 text-sm text-gray-700" :class="{ 'bg-gray-100': activeIndex === 1 }" role="menuitem" tabindex="-1" id="user-menu-item-1" @mouseenter="activeIndex = 1" @mouseleave="activeIndex = -1" @click="dropdown = false; focusButton()">Settings</a>
						<form >
							<button name="user_log_out" class="block px-4 py-2 text-sm text-gray-700">Sign out</button>
						</form>
					</div>

				</div>
				
				<?php }else{ ?>
						<a href="dashboard/index.php" class="z-20 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Go To Dashboard</a>
				<?php } }else{ ?>

				<button type="button" class="z-20 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium" @click="open = true">Log in</button>
			
			<?php } ?>  
			
		  </div>
		</div>

		<div x-description="Mobile menu, show/hide based on menu state." class="sm:hidden" id="mobile-menu" x-show="open">
		  <div class="px-2 pt-2 pb-3 space-y-1">

			  <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" x-state:on="Current" x-state:off="Default" aria-current="page" x-state-description="Current: &quot;bg-gray-900 text-white&quot;, Default: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Dashboard</a>

			  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Team</a>

			  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Projects</a>

			  <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium" x-state-description="undefined: &quot;bg-gray-900 text-white&quot;, undefined: &quot;text-gray-300 hover:bg-gray-700 hover:text-white&quot;">Calendar</a>

		  </div>
		</div>
	
	
	<div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
		x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
		x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
		class="fixed inset-0 bg-gray-400 bg-opacity-75 z-0"></div>
		
	<div class="fixed inset-0 overflow-y-auto z-0">
		<div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

			<div x-show="open" x-transition:enter="ease-out duration-300"
				x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200"
				x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
				x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				x-description="Modal panel, show/hide based on modal state."
				class="z-10 relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
				@click.away="open = false">
				<div class="bg-gray-50 px-4 py-3 flex items-center justify-between">
					<h1>Log In</h1>
					<button type="button"
						class="inline-flex w-full justify-center rounded-md bg-red-600 py-1.5 px-2 text-xs font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto"
						@click="open = false">X</button>
				</div>
				<div class="bg-gray-200 p-2 sm:p-4">
					
					<form method="post" class="">
						<div class="mb-3">
							<input type="email" name="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="User Email" value="<?php echo($old['email']?? '') ?>"/>
							<div class="text-sm text-rose-500 font-bold"><?php echo($errors['email']?? '')?></div>
						</div>
						<div class="mb-3">
							<input type="password" name="password" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="User Password"/>
							<div class="text-sm text-rose-500 font-bold"><?php echo($errors['password']?? '')?></div>
						</div>
						<div class="">
							<button type="submit" name="user_log_in" class="w-full px-5 py-1 uppercase rounded-md text-white bg-green-500 hover:bg-green-600  transition-all duration-700">Log IN</button>
						</div>
					</form>
				</div> 
			</div>

		</div>
	</div>
	
	
	
	
  </nav>
 