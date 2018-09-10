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

    function __construct(string $host, string $username, string $password, string $database = null)
    {
        if(is_null($database)){
            $this->obj = new mysqli($host, $username, $password);
        } else {
            $this->obj = new mysqli($host, $username, $password, $database);
        }
    }

    function changeDB(string $database)
    {
        $this->obj->select_db($database);
    }

    function refValues(string $arr)
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

    function data_seek($offset = 0){
        return $this->result->data_seek($offset);
    }

    function fetch_all(){
        return $this->result->fetch_all();
    }


    function fetch_array(){
        return $this->result->fetch_array;
    }

    function fetch_assoc(){
        return $this->result->fetch_assoc;
    }

    function fetch_field_direct($field){
        return $this->result->fetch_field_direct($field);
    }

    function fetch_field(){
        return $this->result->fetch_field();
    }
}