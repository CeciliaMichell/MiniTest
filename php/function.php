<?php 
    $con = mysqli_connect('localhost', 'root', '', 'minitest');

    function read($query){
        global $con;
        $query = mysqli_query($con, $query);
        $datas = [];
        while($data = mysqli_fetch_assoc($query)){
            $datas[] = $data;
        }
        return $datas;
    }

    function jadwalPage(){
        $data = read("
            SELECT 
                *
            FROM 
                headerskripsi h 
                JOIN mahasiswa m ON m.mahasiswaID = h.mahasiswaID
                JOIN shift s ON s.shiftID = h.shiftID
                JOIN dataskripsi d ON d.dataID = h.dataID
                JOIN bimbingan b ON b.bimbinganID = d.bimbinganID
                JOIN dosen dsn ON dsn.dosenID = b.dosenID
            WHERE 
                m.EmailMahasiswa LIKE 'cecilia.michell@binus.ac.id'
            ");
        return $data[0];
    }

?>