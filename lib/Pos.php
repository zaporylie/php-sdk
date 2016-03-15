<?php
	
namespace mCASH;

/**
 * Pos class.
 * 
 * @extends Resource
 */
class Pos extends Resource {
	
	protected static $updateParams = array( 'name', 'type', 'location' );
	
	/**
	 * endpointUrl
	 * 
	 * (default value: "pos")
	 * 
	 * @var string
	 * @access protected
	 */
	protected $endpointUrl = "pos";

    /**
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return PaymentRequest
     */
    public static function create($params = null, $opts = null){
        return self::_create($params, $opts);
    }	    

    /**
     * retrieve function.
     * 
     * @access public
     * @static
     * @param mixed $id (default: null)
     * @param mixed $opts (default: null)
     * @return PaymentRequest
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
	
	/**
	 * update function.
	 * 
	 * @access public
	 * @return boolean
	 */
	public function save(){
		$result = $this->_save();
		return Utilities\Utilities::handleResponseCode( $result->_opts, $result->_values );		
	}
	
	/**
	 * delete function.
	 * 
	 * @access public
	 * @return boolean
	 */
	public function delete(){
		$result = $this->_delete();
	
		return Utilities\Utilities::handleResponseCode( $result->_opts, $result->_values );				
	}
	
}