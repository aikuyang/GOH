<?php

class customApi extends WP_REST_Controller {
	// register the routes
	public function registerRoutes(){
		$ver = '1';
		$namespace = 'twmap/v'.$ver;
		$base = 'api';
		register_rest_route( $namespace, '/' . $base, array(
			  array(
				'methods'             => WP_REST_Server::READABLE,
				'callback'            => array( $this, 'getMapItems' ),
				'permission_callback' => array( $this, 'getMapItemsPermissionsCheck' ),
				'args'                => array(

				),
			  ),
	  	));
	  	register_rest_route( $namespace, '/' . $base . '/(?P<id>[\d]+)', array(
	    	array(
	    		'methods'             => WP_REST_Server::READABLE,
	    		'callback'            => array( $this, 'getMapItem' ),
	    		'permission_callback' => array( $this, 'getMapItemPermissionsCheck' ),
	    		'args'                => array(
	    			'context' => array(
	            		'default' => 'view',
	          		),
	        	),
	    	),
	    )); 
		register_rest_route( $namespace, '/corptel', array(
			array(
				'methods'             => WP_REST_Server::READABLE,
				'callback'            => array( $this, 'corpTels' ),
				'permission_callback' => array( $this, 'corpTelsPermissionsCheck' ),
				'args'                => array(),
			),
		));
		register_rest_route( $namespace, '/volunteers', array(
			array(
				'methods'             => WP_REST_Server::READABLE,
				'callback'            => array( $this, 'volunteers' ),
				'permission_callback' => array( $this, 'volunteersPermissionsCheck' ),
				'args'                => array(),
			),
		));
		register_rest_route( $namespace, '/volunteer/(?P<id>[\d]+)', array(
			array(
				'methods'             => WP_REST_Server::READABLE,
				'callback'            => array( $this, 'volunteer' ),
				'permission_callback' => array( $this, 'volunteerPermissionsCheck' ),
				'args'                => array(),
			),
		));
	}

	public function volunteer( $request ) {
		$params = $request->get_params();
		$id = json_decode($params['id']);
		$title = get_the_title($id);
		$link = get_the_permalink($id);

		$vContact = get_field('vContact', $id); 
		$vTel = get_field('vTel', $id); 
		$vEmail = get_field('vEmail', $id); 
		$vService = get_field('vService', $id); 
		$vServiceTime = get_field('vServiceTime', $id); 


		$data = array(
			'title' => $title,
			'link' => $link, 
			'contact' => $vContact,
			'tel' => $vTel,
			'email' => $vEmail,
			'service'=> $vService,
			'serviceTime' => $vServiceTime
		);

 		 
    	if ( 1 == 1 ) {
     	 return new WP_REST_Response( $data, 200 );
    	} else {
      		return new WP_Error( 'code', __( 'message', 'text-domain' ) );
    	}
	}
	public function volunteers( $request ) { 
		
		$postIds = array('485', '352', '354', '556', '358', '360', '362', '364', '366', '368', '370', '372', '374', '376', '378', '380', '350');

		foreach ( $postIds as $pid ) {
			$title = get_the_title($pid);
			$link = get_the_permalink($pid);

			$vContact = get_field('vContact', $pid); 
			$vTel = get_field('vTel', $pid); 
			$vEmail = get_field('vEmail', $pid); 
			$vService = get_field('vService', $pid); 
			$vServiceTime = get_field('vServiceTime', $pid); 

 
			$data[] = array(
				'id' => $pid,
				'title' => $title,
				'link' => $link, 
				'contact' => $vContact,
				'tel' => $vTel,
				'email' => $vEmail,
				'service'=> $vService,
				'serviceTime' => $vServiceTime
			);
		}

		return new WP_REST_Response( $data, 200 );
	}
	
	public function corpTels( $request ) {
		$postIds = array('485', '352', '354', '556', '358', '360', '362', '364', '366', '368', '370', '372', '374', '376', '378', '380', '350');
		foreach ( $postIds as $pid ) {
			$title = get_the_title($pid);
			// 專講邀請
			$sFone_1 = get_field('servicePhone_1', $pid);
			// 參訪申請
			$sFone_2 = get_field('servicePhone_2', $pid);
			// 研究申請
			$sFone_3 = get_field('servicePhone_3', $pid);
			// 企業合作
			$sFone_4 = get_field('servicePhone_4', $pid);
			// 媒體合作
			$sFone_5 = get_field('servicePhone_5', $pid);
			
			$data[] = array(
				'title' => $title,
				'st_1' => $sFone_1,
				'st_2' => $sFone_2,
				'st_3' => $sFone_3,
				'st_4' => $sFone_4,
				'st_5' => $sFone_5,
			);
		}
		 
		return new WP_REST_Response( $data, 200 );
	}
	
	public function getMapItems( $request ) { 
		$postIds = array('485', '352', '354', '556', '358', '360', '362', '364', '366', '368', '370', '372', '374', '376', '378', '380', '350');

		foreach ( $postIds as $pid ) {
			$serviceBase = get_field('serviceLocation', $pid);
 
			$data[] = $serviceBase;
		}

		return new WP_REST_Response( $data, 200 );
	}

	public function getMapItem( $request ) {
		$params = $request->get_params();
		$id = json_decode($params['id']);
		$title = get_the_title($id);
		$link = get_the_permalink($id);
		$serviceBase = get_field('serviceLocation', $id);
		// 專講邀請
		$sFone_1 = get_field('servicePhone_1', $id);
		// 參訪申請
		$sFone_2 = get_field('servicePhone_2', $id);
		// 研究申請
		$sFone_3 = get_field('servicePhone_3', $id);
		// 企業合作
		$sFone_4 = get_field('servicePhone_4', $id);
		// 媒體合作
		$sFone_5 = get_field('servicePhone_5', $id);
		 
		$data = array(
			'title' => $title,
			'link' => $link,
			'base' => $serviceBase,
			'corpFone'=> array(
				'phone_1' => $sFone_1,
				'phone_2' => $sFone_2,
				'phone_3' => $sFone_3,
				'phone_4' => $sFone_4,
				'phone_5' => $sFone_5,
			)
		);

 		 
    	if ( 1 == 1 ) {
     	 return new WP_REST_Response( $data, 200 );
    	} else {
      		return new WP_Error( 'code', __( 'message', 'text-domain' ) );
    	}
	}

	public function volunteerPermissionsCheck( $request ) {
		return true;
	}
	public function volunteersPermissionsCheck( $request ) {
		return true;
	}
	public function corpTelsPermissionsCheck( $request ) {
		return true;
	}
	public function getMapItemsPermissionsCheck( $request ) {
    	return true;   
	}
	public function getMapItemPermissionsCheck( $request ) {
		return $this->getMapItemsPermissionsCheck( $request );
	}
 
}