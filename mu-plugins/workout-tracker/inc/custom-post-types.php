<?php
namespace Workout_Tracker\CPT;

function bootstrap() {
	add_action( 'init', __NAMESPACE__ . '\\circuit_cpt' );
	add_action( 'init', __NAMESPACE__ . '\\workout_cpt' );
}

function circuit_cpt() {
	register_extended_post_type( 'circuit' );
}

function workout_cpt() {
	register_extended_post_type( 'workout' );
}
