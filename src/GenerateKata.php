<?php
namespace Xitoid\Nezuko\GenerateKata;

class GenerateKata
{
    private $listKarakter;
    
    public function __construct()
    {
        $this -> listKarakter = range('a', 'z');
    }
    
    public function tambahList($list)
    {
        if(!is_array($list))
        {
            return false;
        }
        
        $this -> listKarakter = array_merge(
            $this -> listKarakter,
            $list
            );
        return true;
    }
    
    public function lihatList()
    {
        return $this -> listKarakter;
    }
    
    public function jumlahList()
    {
        return count(self::lihatList());
    }
    
    public function lihatKata($array)
    {
        $kata = "";
        
        for($i = 0; $i < count($array); $i++)
        {
            $kata .= self::lihatKarakter($array[$i]);
        }
        
        return $kata;
    }
    
    public function tambahResetItem($array)
    {
        return array_fill(0, (count($array) + 1), 1);
    }
    
    private function lihatKarakter($pos)
    {
        $list   = self::lihatList();
        $posisi = $pos - 1;
        
        if($posisi < count($list))
        {
            return $list[$posisi];
        } else {
            return "";
        }
    }
}
