<?php
// Apabila user belum login
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo "<h1>Untuk mengakses halaman, Anda harus login dulu.</h1><p><a href=\"index.php\">LOGIN</a></p>";  
}
// Apabila user sudah login dengan benar, maka terbentuklah session

else{
  include "config/koneksi.php";
  include "config/library.php";

  // Home (Beranda)
  if ($_GET['halamane']=='beranda'){               
    if ($_SESSION['level']=='1' OR $_SESSION['level']=='1' OR $_SESSION['level']=='1'){
      include "halaman/hal_beranda/beranda.php";
    }  
  }

  // User
  elseif ($_GET['halamane']=='user'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_user/user.php";
    }
  }
    elseif ($_GET['halamane']=='po_detail'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_purchasing/po_detail.php";
    }
  }
   elseif ($_GET['halamane']=='debug'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_debug/debug.php";
    }
  }
  // Upload Data Petani
  elseif ($_GET['halamane']=='petani'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_petani/petani.php";
    }
  }
    // crop
  elseif ($_GET['halamane']=='crop'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_crop/crop.php";
    }
  }
      // crop
  elseif ($_GET['halamane']=='input_po'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_purchasing/input_po.php";
    }
  }
     // crop
  elseif ($_GET['halamane']=='transaksi'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_transaksi/transaksi.php";
    }
  }
   elseif ($_GET['halamane']=='prod_kode'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_prod_kode/prod_kode.php";
    }
  }
  // Purchase Order
  elseif ($_GET['halamane']=='po'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_purchasing/po.php";
    }
  }

// Divisi
  elseif ($_GET['halamane']=='divisi'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_divisi/divisi.php";
    }
  }
  
  
  // Vendor
  elseif ($_GET['halamane']=='vendor'){
    if ($_SESSION['level']=='1'){
      include "halaman/hal_vendor/vendor.php";
    }
  }
  



  // Apabila halaman tidak ditemukan
  else{
    echo "<p>halaman tidak ada.</p>";
  }
}
?>
