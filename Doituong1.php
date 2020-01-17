<?php

class PhanSo
{
    public $tuSo = 1;
    public $mauSo = 1;

    public function PhanSo($tuSo, $mauSo){
        $this->tuSo = $tuSo;
        $this->mauSo = $mauSo;

        $this->simplipy();
    }

    public function simplipy(){
        $ucln = $this->ucln();

        $this->tuSo = $this->mauSo / $ucln;
    }

    public function ucln(){
        $min = ($this->tuSo < $this->mauSo) ? $this->tuSo : $this->mauSo;

        for($i = $min; $i>0; $i--){
            if($this->tuSo % $i == 0 && $this->mauSo % $i ==0);
            return $i;

        }
    }
   }

$phanSo = new PhanSo(8,4);

echo "Tu so la: ". $phanSo->tuSo."\n";
echo "Mau so la: ". $phanSo->mauSo."\n";
echo "Ucln la: ". $phanSo->ucln();

?>