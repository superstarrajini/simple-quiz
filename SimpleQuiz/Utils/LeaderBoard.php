<?php
namespace SimpleQuiz\Utils;

abstract class LeaderBoard {
    
    protected $_members = array();
    
    public function getMembers($number = false)
    {  
        if ($number)
        {
            arsort($this->_members,SORT_NUMERIC);
            return array_slice($this->_members, 0, $number, true);
        }
        
        return $this->_members;
    }
    
    public function hasMember($username)
    {
        if (array_key_exists($username,$this->_members) )
        {
           return true;
        }
        return false;
    }
    
    abstract protected function addMember($user,$score);
}
?>