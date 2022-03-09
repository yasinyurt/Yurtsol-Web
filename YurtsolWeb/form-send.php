<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Yönlendiriliyorsunuz...</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='css/form1.css'>
    <script src='js/form.js'></script>
</head>
<body>
    <div class="content-wrap">
        <div class="container">
            <img src="images/main/logo.png" class="logo">
            <h1 class="title">YÖNLENDİRİLİYORSUNUZ</h1>
            <span id="countdown"></span><br>
            <?php
                    $form_name= $_POST["form-name"];
                    $form_adress=   $_POST["form-adress"];
                    $form_subject= $_POST["form-subject"];
                    $form_message=  $_POST["form-message"];

                if(isset($form_name) &&  isset($form_adress) && isset($form_subject) && isset($form_message)) {
                    if(empty($form_name) || empty($form_adress) || empty($form_subject) || empty($form_message)) {
                       echo "<span class='error'>"."Lütfen Boş Yer Bırakmayınız"."</span>";
                    } else {
                        $form_name= strip_tags($_POST["form-name"]);
                        $form_adress=   strip_tags($_POST["form-adress"]);
                        $form_subject=  strip_tags($_POST["form-subject"]);
                        $form_message=  strip_tags($_POST["form-message"]);
                        $content = "Ad: ".$form_name."   Mail Adresi: ".$form_adress."   Konu: ".$form_subject."   Mesaj: ".$form_message;
                       mail('yasinyurt22@hotmail.com', $form_subject, $content);
                       echo "<span class='comp'>"."Mesajınız Başarıyla Gönderildi.<br>Teşekkür Ederiz<br>"."</span>";
                       echo "<span class='comp'>"."Mesajınıza en kısa sürede dönüş yapacağız."."</span>";
                    }
                 } else {
                    echo 'Lütfen Formu Kullanın!';
                 }
            ?>
        </div>
    </div>
</body>
</html>