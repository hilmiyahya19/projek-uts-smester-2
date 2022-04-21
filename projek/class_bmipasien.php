<?php

class bmipasien {
    public $nama;
    public $umur;
    public $jeniskelamin;
    public $berat;
    public $tinggi;

    public function __construct() {
        session_start();
        $_SESSION['result'] ?? $_SESSION['result'] = [];
    }

    public function hasilbmi() {
        $total = $this->statusbmi();
        if($total == 0) {
            $msg = 'Tidak Boleh Kosong!';
        } else if($total < 18.5){
            $msg = 'Kekurangan Berat Badan';
        } else if ($total >= 18.5 && $total <= 24.9){
            $msg = 'Normal (ideal)';
        } else if($total >= 25 && $total <= 29.9){
            $msg = 'Kelebihan Berat Badan';
        } else if($total >= 30){
            $msg = 'Kegemukan (obesitas)';
        } else {
            $msg = 'Tidak Boleh memakai null atau string!';
        } 
        $calculator = [$total, $msg];
        return $calculator;
    }

    public function statusbmi() {
        $val = [$this->tinggi, $this->berat, $this->umur];
        for($i = 0; $i < count($val); $i++){
            if(!preg_replace('/^[0-9]/','', $val[$i])){
                echo '<script> alert("Silahkan cek di Lihat Data BMI!");
                window.location.href = "index1.php";
                </script>';
            }
        }
        $tinggi = isset($this->tinggi) ? $this->tinggi/100 : 0;
        $total = isset($this->tinggi) ? substr($this->berat/($tinggi*$tinggi),0 , 5) : 0;
        return $total;
    }
}
$bmi = new bmipasien();
?>