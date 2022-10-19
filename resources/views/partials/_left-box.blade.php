<div class="p-12 md:mt-24 md:p-20">
	@foreach ( $identities as $identity)
		<x-identity :firstName="$identity->firstName" :lastName="$identity->lastName" :email="$identity->email" :address="$identity->address" :tel="$identity->tel" :about="$identity->about" :zip_code="$identity->zip_code" :city="$identity->city"/>
	
	@endforeach	
	
</div>
