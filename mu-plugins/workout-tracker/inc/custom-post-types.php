<?php
namespace Workout_Tracker\CPT;

function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\circuit_cpt' );
	add_action( 'init', __NAMESPACE__ . '\\weights_cpt' );
}

function circuit_cpt() {
	register_extended_post_type(
		'circuit',
		[
			'supports' => [
				'title',
				'editor',
				'thumbnail',
			],
			'featured_image' => 'Body Photo',
		],
		[
			'singular' => 'Circuit Workout',
		]
	);
}

function weights_cpt() {
	register_extended_post_type(
		'weight',
		[
			'supports' => [
				'title',
				'editor',
				'thumbnail',
			],
			'featured_image' => 'Body Photo',
		],
		[
			'singular' => 'Weight Workout',
		]
	);
}
