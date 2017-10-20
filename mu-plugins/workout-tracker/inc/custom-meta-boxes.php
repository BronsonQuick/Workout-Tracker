<?php
namespace Workout_Tracker\CMB;

function bootstrap() {
	add_action( 'cmb2_admin_init', __NAMESPACE__ . '\\weight_meta_boxes' );
}

function weight_meta_boxes() {
	$cmb = new_cmb2_box( [
		'id'            => 'workout_details',
		'title'         => __( 'Workout Details', 'workout-tracker' ),
		'object_types'  => [ 'weight', 'circuit' ],
		'show_names'    => true,
	] );

	$group_field_id = $cmb->add_field( [
		'id'          => 'exercise_workout',
		'type'        => 'group',
		'description' => __( 'Record the details of the weights session', 'workout-tracker' ),
		'options'     => [
			'group_title'   => __( 'Exercise {#}',          'workout-tracker' ),
			'add_button'    => __( 'Add Another Exercise',  'workout-tracker' ),
			'remove_button' => __( 'Remove Exercise',       'workout-tracker' ),
			'sortable'      => true,
		],
	] );

	$cmb->add_group_field( $group_field_id, [
		'name' => 'Exercise Name',
		'id'   => 'exercise_name',
		'type' => 'text',
	] );

	$cmb->add_group_field( $group_field_id, [
		'name'        => 'Exercise Video',
		'id'          => 'exercise_video',
		'type'        => 'text_url',
		'description' => __( 'A link to a YouTube video that demonstrates the exercise.', 'workout-tracker' ),
	] );

	$cmb->add_group_field( $group_field_id, [
		'name' => 'Number of reps',
		'id'   => 'exercise_reps',
		'type' => 'text_small',
		'description' => __( 'The number of reps you completed.', 'workout-tracker' ),
	] );

	$cmb->add_group_field( $group_field_id, [
		'name' => 'Weight',
		'id'   => 'exercise_weight',
		'type' => 'text_small',
		'description' => __( 'How many kilograms did you lift?', 'workout-tracker' ),
	] );

	$cmb->add_group_field( $group_field_id, [
		'name' => 'Intensity',
		'id'   => 'exercise_intensity',
		'type' => 'text_small',
		'description' => __( 'Rate how intense it felt from 1 - 10.', 'workout-tracker' ),
	] );

}
