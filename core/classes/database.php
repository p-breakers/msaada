<?php
/**
 * Created by PhpStorm.
 * User: ITOT
 * Date: 10/09/2018
 * Time: 21:37 PM
 */

class database
{
    private $object;
    private $result;
    public $current_field = "";
    public $lengths = "";
    public $num_rows = "";

    /**
     * database constructor.
     * @param string $host
     * @param string $username
     * @param string $password
     * @param string|null $database
     */
    function __construct(string $host, string $username, string $password, string $database = null)
    {
        if(is_null($database)){
            $this->obj = new mysqli($host, $username, $password);
        } else {
            $this->obj = new mysqli($host, $username, $password, $database);
        }
    }

    /**
     * @param string $database
     */
    function changeDB(string $database)
    {
        $this->obj->select_db($database);
    }


    /**
     * @param array $arr
     * @return array
     */
    function refValues(array $arr)
    {
        if(strnatcmp(phpversion(), "5.3") >= 0){
            $refs = array();
            foreach ($arr as $key => $value) {
                $refs[$key] = &$arr[$key];
            }
            return $refs;
        }
        return $arr;
    }

    /**
     * @param string $query
     * @param array|null $args
     * @return bool|mysqli_result
     */
    function query(string $query, array $args = null)
    {
        if(is_null($args)){
            $this->result = $this->obj->query($query);
            $this->current_field = $this->result->current_field;
            $this->lengths = $this->result->lengths;
            $this->num_rows = $this->result->num_rows;
            return $this->result;
        }else{
            if(!is_array($args)){
                $argsBkp = $args;
                $args = array($argsBkp);

            }
            if($stmt = $this->obj->prepare($query)){
                $datatypes = "";
                foreach ($args as $value) {
                    if (is_int($value)) {
                        $datatypes .= "i";
                    }elseif (is_double($value)) {
                        $datatypes .= "d";
                    }elseif (is_string($value)) {
                        $datatypes .= "s";
                    }else {
                        $datatypes .= "b";
                    }
                }
                array_unshift($args, $datatypes);
                if(call_user_func_array(array($stmt, "bind_param"),$this->refValues($args))){
                    $stmt->execute();
                    $this->result = $stmt->get_result();
                    if ($this->result){
                        $this->current_field = $this->result->current_field;
                        $this->lengths = $this->result->lengths;
                        $this->num_rows = $this->result->num_rows;
                    } else {
                        $this->current_field = "";
                        $this->lengths = 0;
                        $this->num_rows;
                    }
                    $this->error = $stmt->error;
                    return $this->result;
                } else {
                    $this->current_field = "";
                    $this->lengths = 0;
                    $this->num_rows;
                    return false;
                }
            } else {
                $this->current_field = "";
                $this->lengths = 0;
                $this->num_rows;
                return false;
            }
        }
    }

    /**
     * @param int $offset
     * @return mixed
     */
    function data_seek(int $offset = 0)
    {
        return $this->result->data_seek($offset);
    }

    /**
     * @return mixed
     */
    function fetch_all()
    {
        return $this->result->fetch_all();
    }


    /**
     * @return mixed
     */
    function fetch_array()
    {
        return $this->result->fetch_array;
    }

    /**
     * @return mixed
     */
    function fetch_assoc()
    {
        return $this->result->fetch_assoc;
    }

    /**
     * @param string $field
     * @return mixed
     */
    function fetch_field_direct(string $field)
    {
        return $this->result->fetch_field_direct($field);
    }

    /**
     * @return mixed
     */
    function fetch_field()
    {
        return $this->result->fetch_field();
    }

    /**
     * @return mixed
     */
    function fetch_fields()
    {
        return $this->result->fetch_fields();
    }

    function field_seek($field)
    {
        return $this->result->field_seek($field);
    }

    function insert_id()
    {
        return $this->result->insert_id();
    }

    function fetch_object($class_name = "stdClass", $params = null)
    {
        if(is_null($params)){
            return $this->result->fetch_object($class_name);
        } else {
            return $this->result->fetch_object($class_name, $params);
        }
    }

    function fetch_all_kv(){
        $out = array();
        while($row = $this->result->fetch_assoc()){
            $out[] = $row;
        }
        return $out;
    }

    function fetch_row(){
        return $this->result->fetch_row;
    }

    function __destruct(){
        $this->obj->close();
    }
}