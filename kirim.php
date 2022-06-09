<?php
if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $masukan = $_POST['masukan'];
  $nowa = $_POST['nowa'];
  if(!empty($nama)&& !empty($email) && !empty($masukan)){
    header("location:https://api.whatsapp.com/send?phone=$nowa&text=Nama:%20$nama%20%0DEmail:%20$email%20%0DMasukan:$masukan");
  }
  else{
    
    echo" <script>
    alert ('Message failed to send! message dont empty!');
    </script>
    ";

  }
  }
  
?>