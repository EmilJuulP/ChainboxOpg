<?php
   

function KGrejChainboxDemo_widgets_init() {
    register_sidebar(array(
        'name'          => __( 'Payment', 'KGrejChainboxDemo' ),
		'id'            => 'payment_field',
		'description'   => __( 'Payment text field', 'KGrejChainboxDemo' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => ' <h5><i class="far fa-credit-card"></i> <strong>',
		'after_title'   => '</strong></h5>',
    ) );
}
add_action( 'widgets_init', 'KGrejChainboxDemo_widgets_init' );

