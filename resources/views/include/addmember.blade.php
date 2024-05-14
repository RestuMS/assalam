<!DOCTYPE html>
<html lang="en">
<style>
    ul {
        display: block;
        list-style-type: disc;
        padding-left: 70px;
        padding-bottom: 2.5rem;
    }
</style>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undian</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="about">

        <div class="row">
            <div class="box-containerr">
                <div class="box">
                    <img src="{{ asset('images/kartumember.png') }}" alt="">
                    <h2>APA ITU KARTU MEMBER PAS?</h2>
                    <p>Kartu Member PAS atau Kartu Member Pelanggan Assalaam Hypermarket, adalah kartu member khusus
                        untuk
                        pelanggan
                        Assalaam Hypermarket yang bisa digunakan untuk berbelanja dengan beberapa benefit yang bisa
                        didapatkan.</p>
                    <h2>KEUNTUNGAN BAGI CUSTOMER DENGAN KARTU MEMBER PAS</h2>
                    <p>Customer apabila berbelanja menggunakan Kartu PAS akan mendapatkan keuntungan atau benefit
                        seperti :
                        <br>
                        <strong>1. Reward Point :</strong><br>
                    <ul>
                        <li>Setiap customer yang berbelanja menggunakan Kartu PAS minimal Rp. 10.000,- akan
                            mendapatkan 1 point,dan berlaku kelipatan.</li>
                        <li>Setiap point yang sudah terkumpul dapat ditukarkan dengan hadiah menarik seperti voucher
                            belanja dan berbagai hadiah lainnya.</li>
                    </ul>
                    <h2>CARA MENDAPATKAN KARTU MEMBER PAS?</h2>
                    <p style="text-align: center">Pelanggan Klik Saja Tombol Daftar Dibawah ini dan isi data dengan
                        benar</p>
                    <a href="{{ route('regismember') }}" class="btn">DAFTAR</a>
                </div>


            </div>
        </div>

    </section>


    <script src="js/script.js"></script>

</body>

</html>
