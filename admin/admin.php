<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <link rel="stylesheet" href="admin.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="sidebar">
    <div class="brand">
      <i class="fa-solid fa-school"></i>&nbsp;&nbsp;
      <h1>Administrator</h1>
    </div>
    <ul>
      <li><i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;<span>Dashboard</span></li>
      <li><i class="fa-solid fa-graduation-cap"></i>&nbsp;<span>Data Mahasiswa</span></li>
      <li><i class="fa-solid fa-list-ol"></i>&nbsp;<span>Program Studi</span></li>

    </ul>
  </div>
  <div class="container">
    <div class="header">
      <div class="nav">
        <div class="search">
          <input type="text" placeholder="Telusuri" />
          <button type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </button>
        </div>
        <div class="user">
          <a href="#" class="btn"><i class="fa-regular fa-bell"></i></a>
          <a href="#" class="btn"><i class="fa-regular fa-user"></i></a>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="cards">
        <div class="card">
          <div class="box">
            <h2>Data Mahasiswa</h2>
            <h1>3000</h1>
          </div>
          <div class="icon">
            <i class="fa-solid fa-graduation-cap"></i>
          </div>
        </div>
        <div class="cards">
          <div class="card">
            <div class="box">
              <h2>Verifikasi Dokumen</h2>
              <li><a href="" class="tbl-biru">Details</a></li>
            </div>
            <div class="icon">
              <i class="fa-solid fa-check-double"></i>
            </div>
          </div>
          <div class="cards">
            <div class="card">
              <div class="box">
                <h2>Program Studi</h2>
                <h1>3</h1>
              </div>
              <div class="icon">
                <i class="fa-solid fa-list-ol"></i>
              </div>
            </div>
            <div class="cards">
              <div class="card">
                <div class="box">
                  <h2>Biaya</h2>
                  <li><a href="" class="tbl-biru">Details</a></li>
                </div>
                <div class="icon">
                  <i class="fa-solid fa-sack-dollar"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>

</html>