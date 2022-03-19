<?php
// fungsi kelulusan
    function kelulusan($_nilai){
                if ($_nilai > 55 ){
            return 'LULUS';
        } else {
            return ' TIDAK LULUS';
        }
    }
// fungsi grade
    function grade($_nilai){
      if ($_nilai >= 85 and $_nilai <= 100) {
        return "A";
    } elseif ($_nilai >= 70 and $_nilai <= 84){
        return  "B";
    } elseif ($_nilai >= 56 and $_nilai <= 69){
        return   "C";
    } elseif ($_nilai >= 36 and $_nilai <= 55){
        return  "D";
    } elseif ($_nilai >= 0 and $_nilai <=35){
       return  "E";
    } else {
       return  "I";
    }
    }

// fungsi predikat

    function predikat ($grade){
        switch ($grade) {
        case 'A':
            return "Sangat Memuaskan";
            break;
        case 'B':
            return "Memuaskan";
            break;
        case 'C':
            return "Cukup";
            break;
        case 'D':
            return "Kurang";
            break;
        case 'E':
            return "Sangat Kurang";
            break;
        case 'I':
            return "Tidak Ada";
            break;
        default:
            return "GRADE TIDAK TERDETEKSI";
            break;
          }
    }
?>
<br>