<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration Form in HTML CSS</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="css/styleadd.css" />
</head>

<body>
  <section class="container">
    <img src="images/logoteks.png" alt="">
    <header>Pendaftaran Kartu<br>
      Member Assalam Hypermarket
    </header>
    <form action="#" class="form">
      <div class="input-box">
        <label>Nama Member</label>
        <input type="text" placeholder="Nama Member" required />
      </div>

      <div class="input-box">
        <label>Kewarganegaraan</label>
        <div class="column">
          <div class="select-box">
            <select>
              <option hidden>Kewarganegaraan</option>
              <option>WNI</option>
              <option>WNA</option>
            </select>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="input-box">
          <label>Tempat</label>
          <input type="text" placeholder="Tempat lahir" required />
        </div>
        <div class="input-box">
          <label>Tanggal Lahir</label>
          <input type="date" placeholder="tanggal lahir" required />
        </div>
      </div>
      <div class="gender-box">
        <h3>Jenis Kelamin</h3>
        <div class="gender-option">
          <div class="gender">
            <div class="column">
              <div class="select-box">
                <select>
                  <option hidden>Jenis Kelamin</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="gender-box">
          <h3>Agama</h3>
          <div class="gender-option">
            <div class="gender">
              <div class="column">
                <div class="select-box">
                  <select>
                    <option hidden>Agama</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Konghucu</option>
                    <option>Budha</option>
                    <option>Katolik</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="input-box">
            <label>Alamat</label>
            <input type="text" placeholder="alamat" required />
          </div>
          <div class="input-box address">
            <div class="column">
              <div class="input-box">
                <label>Kota</label>
                <input type="text" placeholder="kota" required />
              </div>
              <div class="input-box">
                <label>Kecamatan</label>
                <input type="text" placeholder="kecamatan" required />
              </div>
            </div>
            <div class="input-box address">
              <div class="column">
                <div class="input-box">
                  <label>Kelurahan</label>
                  <input type="text" placeholder="kelurahan" required />
                </div>
                <div class="input-box">
                  <label>RT/RW</label>
                  <input type="number" placeholder="RT/RW" required />
                </div>
              </div>
              <div class="input-box address">
                <div class="column">
                  <div class="input-box">
                    <label>Post Code</label>
                    <input type="text" placeholder="post code" required />
                  </div>
                  <div class="input-box">
                    <label>HP</label>
                    <input type="text" placeholder="nomor handphone" required />
                  </div>
                </div>
                <div class="input-box address">
                  <div class="column">
                    <div class="input-box">
                      <label>Status</label>
                      <div class="select-box">
                        <select>
                          <option hidden>Status</option>
                          <option>Single</option>
                          <option>Menikah</option>
                        </select>
                      </div>
                    </div>
                    <div class="input-box">
                      <label>Telp.</label>
                      <input type="text" placeholder="nomor telepon" required />
                    </div>
                  </div>
                  <div class="column">
                    <div class="input-box">
                      <label>Jml. Tanggungan</label>
                      <input type="number" placeholder="jumlah tanggungan" required />
                    </div>
                    <div class="input-box">
                      <label>Pendptn. per Bulan</label>
                      <input type="number" placeholder="pendapatan per bulan" required />
                    </div>
                  </div>
                  <div class="column">
                    <div class="input-box">
                      <label>Pengusaha Kena Pajak</label>
                      <input type="text" placeholder="pengusaha kena pajak" required />
                    </div>
                    <div class="input-box">
                      <label>NPWP</label>
                      <input type="text" placeholder="NPWP" required />
                    </div>
                  </div>

                  <button>Submit</button>
    </form>
  </section>
</body>

</html>