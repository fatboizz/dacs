
<?php 
    function checkuser($user,$pass){
        $conn=condb();
        $stmt = $conn->prepare("SELECT * FROM account WHERE user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchALL();
        if(count($kq)>0) return $kq[0]['role'];
        else return 0;
        

    }

    function getuserinfo($user,$pass){
        $conn=condb();
        $stmt = $conn->prepare("SELECT * FROM account WHERE user='".$user."' AND pass='".$pass."'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchALL();
        return $kq;
        

    }
    
?>
