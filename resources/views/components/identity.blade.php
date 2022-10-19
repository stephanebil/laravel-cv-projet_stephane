@props(['firstName', 'lastName', 'email','address','tel','about','zip_code','city']);
<div class="">
		<img
				alt="dog profile image"
				class="mx-auto h-52 w-52 rounded-full md:h-72 md:w-72"
				src="img/dog.avif"
		>
		<div class="pt-16 pb-6 text-2xl font-black md:text-5xl">
				<p class="leading-snug">{{ $firstName }}</p>
				<p class="uppercase">{{ $lastName }}</p>
		</div>
		<p class="text-4xl">Web Developper</p>
		<!-- About -->
		<div class="pb-4 pt-7">
				<p class="pt-4 text-lg">{{ $about }}
						
				</p>
		</div>
		<!-- info -->
		<div class="mb-8s mt-12 border-l-4 py-2 pl-6 text-lg leading-loose text-gray-600">
				<p>{{ $tel }}</p>
				<p>{{ $email }}</p>
				<div class="font-bold italic">
						<p>{{ $address }}</p>
						<p>{{ $zip_code }} {{ $city }}</p>
				</div>
		</div>
</div>
