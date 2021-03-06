<?php
	
namespace mCASH;

/**
 * StatusCode class.
 * 
 * @extends Resource
 */
class StatusCode extends Resource {
	
	/**
	 * endpointUrl
	 * 
	 * (default value: "status_code")
	 * 
	 * @var string
	 * @access protected
	 */
	protected $endpointUrl = "status_code";

    /**
     * retrieve function.
     * 
     * @access public
     * @static
     * @param mixed $id (default: null)
     * @param mixed $opts (default: null)
     * @return void
     */
    public static function retrieve($id = null, $opts = null){
        return self::_retrieve($id, $opts);
    } 
    
    /**
     * all function.
     * 
     * @access public
     * @static
     * @return void
     */
    public static function all(){
	    return self::_all();
    }   
	
}