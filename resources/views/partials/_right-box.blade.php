{{-- <div class="border-b-4 border-gray-300 pt-12"></div>
<div class="p-12 md:py-20 md:px-32">
		<x-xperience.xperience />
		<div class="pt-16">
				<x-formation.formation />
		</div>
		<div class="pt-16">
				<x-skill.skill />
		</div>
</div>
<div class="border-t-4 border-gray-300 pb-12"></div> --}}


<div class="border-b-4 border-gray-300 pt-12"></div>
<div class="p-12 md:py-20 md:px-32">
		<x-title title="Experience" />
			<div class="pt-8">
				@foreach ( $experiences as $experience )
					<x-xperience.xperience-item :name="$experience->name" :year="$experience->year" :location="$experience->location"/>
				@endforeach
			</div>
		<div class="pt-16">
			<x-title title="Formation" />
				<div class="pt-8">
					@foreach ( $formations as $formation )
						<x-formation.formation-item :name="$formation->name" :year="$formation->year" :location="$formation->location" />
					@endforeach
				</div>
		</div>
		<div class="pt-16">
			<x-title title="Skill" />
				<div class="pt-8">
					@foreach ( $skills as $skill )
						<x-skill.skill-item :name="$skill->name"/>
					@endforeach
				</div>
		</div>
</div>
<div class="border-t-4 border-gray-300 pb-12"></div>