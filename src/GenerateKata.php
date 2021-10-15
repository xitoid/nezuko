<?php
namespace Nezuko;

class GenerateKata
{
    private $listKarakter;
    private $arrayKarakter;
    
    public function __construct()
    {
        $this -> listKarakter  = range('a', 'z');
        $this -> arrayKarakter = array(1);
    }
    
    public function tambahArray($array)
    {
        if(!is_array($array))
        {
            return false;
        }
        $this -> arrayKarakter = array_merge(
            $this -> arrayKarakter,
            $array
            );
        return true;
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
    
    public function tambahItemAkhir()
    {
        $itemTerakhir = count($this -> arrayKarakter)-1;
        $this -> arrayKarakter[$itemTerakhir]++;
        
        $panjangList = $this -> jumlahList();
        for($i = count($this -> arrayKarakter) - 1; $i > -1; $i-- )
        {
            if($this -> arrayKarakter[$i] > $panjangList)
            {
                if(array_key_exists($i - 1, $this -> arrayKarakter))
                {
                    $this -> arrayKarakter[$i - 1]++;
                    $this -> arrayKarakter[$i] = 1;
                } else {
                    $this -> arrayKarakter = $this -> tambahResetItem($this -> arrayKarakter);
                    //$tambahMatrik = true;
                }
            }
        }
    }
    
    public function tambahResetItem($array)
    {
        return array_fill(0, (count($array) + 1), 1);
    }
    
    public function jumlahList()
    {
        return count($this-> lihatList());
    }
    
    public function lihatList()
    {
        return $this -> listKarakter;
    }
    
    public function lihatKata()
    {
        $array = $this -> arrayKarakter;
        $kata = "";
        
        for($i = 0; $i < count($array); $i++)
        {
            $kata .= $this -> lihatKarakter($array[$i]);
        }
        
        return $kata;
    }
    
    private function lihatKarakter($pos)
    {
        $list   = $this -> lihatList();
        $posisi = $pos - 1;
        
        if($posisi < count($list))
        {
            return $list[$posisi];
        } else {
            return "";
        }
    }
}